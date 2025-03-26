<?php
require_once 'login.php';
require_once 'Item.php';

/**
 * Create connection to the database
 *
 * @return PDO (PHP Data Objects) provides access to the database
 */
function openConnection()
{
    require 'login.php';

    try {
        $pdo = new PDO(
            CONNECTION_STRING,
            CONNECTION_USER,
            CONNECTION_PASSWORD,
            CONNECTION_OPTIONS
        );
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    return $pdo;
}

/**
 * Queries the database for all shopping list items.
 *
 * For each result returned from the query create a new Item and add to an array of Items.
 * Order the results returned by name.
 *
 * @return array list of Items
 */
function getAllItems()
{
    // connect to the database
    $pdo = openConnection();

	$items = array();

	////////
	// !!! In Ampps, please confirm that PHP is set to version 7.1 or higher.
    //     Otherwise this can give exceptions with connecting to the SQL database.
    //     This can be set by clicking the squares icon left of the globe, the "Change PHP Version".
    ///////

	$pdo = openConnection(); // Connect to DB
    $query = "SELECT * from shopping_list
                ORDER BY name";
    $result = $pdo->query($query);
    $pdo = null;

    while ($row = $result -> fetch()){
        $name = htmlspecialchars($row['name']);
        $price = htmlspecialchars($row['price']);
        $quantity = htmlspecialchars($row['quantity']);
        $item = new Item($name, $price, $quantity);
        array_push($items, $item);
    }

	return $items;
}

/**
 * Inserts an item into the shopping_list table.
 *
 * @param Item $item The item that will be added
 */
function insertItem($item)
{
    try{
        // Inserts $item to tbl shopping_list
        $pdo = openConnection();
        $itemname = $pdo->quote($item->getName());
        $itemprice = $pdo->quote($item->getPrice());
        $quantity = $pdo->quote($item->getQuantity());


        $query = "INSERT INTO shopping_list VALUES ( :id, :name, :price, :quantity)";
        $stmt = $pdo->prepare($query);

        $stmt->bindValue(':name', $itemname);
        $stmt->bindValue(':price', $itemprice);
        $stmt->bindValue(':quantity', $quantity);

        $stmt->execute();

        getAllItems();
    } catch (PDOException $e) {
        echo "error: " . $e->getMessage();
    } finally {
        $pdo = null;
    }
}

/**
 * Delete all items with a give item name.
 *
 * @param string $item_name The name of the item(s) to remove.
 */
function deleteItem($item_name)
{
    // Delete an item from the DB
    try {
        if (isset($item_name)) {
            $pdo = openConnection();
            $item = $pdo->quote($item_name);


            $query = "DELETE FROM shopping_list WHERE $item = :name";
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':name', $item_name);
            $stmt->execute();

            echo "Item(s) with name '$item_name' have been deleted";
        } else {
            echo "No items deleted.";
        }

    } catch (PDOException $e) {
        echo "error: " . $e->getMessage();
    } finally {
        $pdo = null;
    }
}

/**
 * Clears all items in the shopping_list table.
 */
function clearShoppingList()
{
    try {
        $pdo = openConnection();
        $query = "DELETE FROM shopping_list";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        getAllItems();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

/**
 * Echos an mysql error.
 *
 * @param string $errorMessage The error message passed.
 */
function fatalError($errorMessage)
{
    echo "<p><strong>Something went wrong: $errorMessage</strong></p>";
}
?>
