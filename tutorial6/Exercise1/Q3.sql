SELECT customer.customer_name
FROM customer
JOIN "order" ON customer.customer_id = "order".customer_id
JOIN order_line ON "order".order_id = order_line.order_id
JOIN product ON order_line.product_id = product.product_id
WHERE order_line.product_id = '1'
ORDER BY customer_name;