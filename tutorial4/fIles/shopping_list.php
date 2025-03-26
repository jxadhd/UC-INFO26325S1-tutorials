<?php
require_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping List</title>
</head>
<body>
<h1>Actions</h1>

<h3>New item</h3>
<p>Submit items to be added to the shopping list</p>
<form method='post' action='shopping_list.php' enctype='multipart/form-data'>
    <label for="input-name">Name:</label>
    <input id="input-name" type='text' name='name' size='10' />

    <label for="input-price">Price: $</label>
    <input id="input-price" type='number' name='price' size='5' value='1' step='any' />

    <label for="input-quantity">Quantity:</label>
    <input id="input-quantity" type='number' name='quantity' value="1" size='5' step='any' />

    <input type='submit' value='Add' />
</form>
<br>
<h3>Remove item</h3>
<form method="post" action="shopping_list.php" enctype="multipart/form-data">
    <input type='hidden' name='delete' value='yes'>
    <label for="input-name">Name:</label>
    <input type="text" name="name" value="" size='10' />
    <input type="submit" value="Remove" />
</form>
<br>
<h3>Remove all</h3>
<form method="post" action="shopping_list.php" enctype="multipart/form-data">
    <input type="hidden" name="clear" value="1" />

    <input type="submit" value="Clear All" />
</form>

<br>

<h1>Shopping List</h1>
<?php
if (isset($_POST['name']) &&
    isset($_POST['price']) &&
    isset($_POST['quantity']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $item = new Item($name, $price, $quantity);
    insertItem($item);
}

if(isset($_POST['delete']))
{
    deleteItem($_POST['name']);
}

if(isset($_POST['clear']))
{
    clearShoppingList();
}

function createItem($item)
{
    if (trim($item['name']) !== '' && $item['name'] !== NULL)
    {
        return new Item($item['name'], $item['price'], $item['quantity']);
    }
    return NULL;
}

function calculateTotal($array)
{
    $total = 0;
    foreach ($array as $item)
    {
        $total += $item->calculateCost();
    }

    return $total;
}

$shopping_list = getAllItems();
?>

<?php foreach ($shopping_list as $item): ?>
    <pre>
<?= $item->display(); ?>
    </pre>
    <form method="post" action="shopping_list.php" enctype="multipart/form-data">
        <input type='hidden' name='delete' value='yes'>
        <input type="hidden" name="name" value="<?= $item->getName() ?>" />
    </form>
<?php endforeach; ?>
<br />
<pre>
Total: <?= sprintf("$%-10.2f", calculateTotal($shopping_list)) ?>
    </pre>
</body>
</html>
