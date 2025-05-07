SELECT customer_name, product_description, order_date
FROM customer
         JOIN "order" USING(customer_id)
         JOIN order_line USING(order_id)
         JOIN product USING(product_id)
WHERE product_description = 'Coffee Table';