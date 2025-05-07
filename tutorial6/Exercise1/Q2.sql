SELECT COUNT(customer_name)
FROM customer
JOIN "order" ON customer.customer_id = "order".customer_id
JOIN order_line ON "order".order_id = order_line.order_id
JOIN product ON order_line.product_id = product.product_id
WHERE product.product_id = '9';