SELECT customer_name, customer_state
FROM customer
WHERE customer_state IN('Alaska', 'Illinois', 'Utah')
ORDER BY customer_state;