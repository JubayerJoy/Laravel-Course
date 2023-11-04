-- Retrieve product name, quantity, and total amount for each order item
SELECT Products.name AS product_name, Order_Items.quantity, (Order_Items.quantity * Order_Items.unit_price) AS total_amount
FROM Order_Items
JOIN Products ON Order_Items.product_id = Products.product_id
ORDER BY Order_Items.order_id ASC;
