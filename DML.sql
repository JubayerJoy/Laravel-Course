-- Inserting sample data into Customers table
INSERT INTO Customers (customer_id, name, email, location) VALUES (1, 'Alice', 'alice@example.com', 'New York');
INSERT INTO Customers (customer_id, name, email, location) VALUES (2, 'Bob', 'bob@example.com', 'Los Angeles');
-- ... Add more entries for other customers

-- Inserting sample data into Orders table
INSERT INTO Orders (order_id, customer_id, order_date, total_amount) VALUES (1, 1, '2023-01-01', 100.00);
INSERT INTO Orders (order_id, customer_id, order_date, total_amount) VALUES (2, 2, '2023-01-02', 150.50);
-- ... Add more entries for other orders

-- Inserting sample data into Products table
INSERT INTO Products (product_id, name, description, price, category_id) VALUES (1, 'Product A', 'Description A', 50.00, 1);
INSERT INTO Products (product_id, name, description, price, category_id) VALUES (2, 'Product B', 'Description B', 70.00, 2);
-- ... Add more entries for other products

-- Inserting sample data into Categories table
INSERT INTO Categories (category_id, name) VALUES (1, 'Category A');
INSERT INTO Categories (category_id, name) VALUES (2, 'Category B');
-- ... Add more entries for other categories

-- Inserting sample data into Order_Items table
INSERT INTO Order_Items (order_item_id, order_id, product_id, quantity, unit_price) VALUES (1, 1, 1, 2, 50.00);
INSERT INTO Order_Items (order_item_id, order_id, product_id, quantity, unit_price) VALUES (2, 2, 2, 3, 70.00);
-- ... Add more entries for other order items
