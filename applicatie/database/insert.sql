-- Voeg het producttype toe
INSERT INTO ProductType (name) VALUES ('Pizza');

-- Voeg de pizza’s toe als producten
INSERT INTO Product (name, price, type_id) VALUES
('Pizza Margaritha', 9.99, 'Pizza'),
('Pizza Salami', 9.99, 'Pizza'),
('Pizza Pollo', 9.99, 'Pizza'),
('Pizza Quattro Formaggi', 9.99, 'Pizza'),
('Pizza BBQ & Chicken', 9.99, 'Pizza'),
('Pizza Shoarma', 9.99, 'Pizza');

INSERT INTO Ingredient (name) VALUES
('Tomatensaus'),
('Mozzarella'),
('Basilicum'),
('Salami'),
('Kipfilet'),
('Paprika'),
('Ui'),
('Gorgonzola'),
('Parmezaanse kaas'),
('Cheddar'),
('BBQ saus'),
('Shoarma'),
('Knoflooksaus');

-- Pizza Margaritha
INSERT INTO Product_Ingredient (product_name, ingredient_name) VALUES
('Pizza Margaritha', 'Tomatensaus'),
('Pizza Margaritha', 'Mozzarella'),
('Pizza Margaritha', 'Basilicum');

-- Pizza Salami
INSERT INTO Product_Ingredient (product_name, ingredient_name) VALUES
('Pizza Salami', 'Tomatensaus'),
('Pizza Salami', 'Mozzarella'),
('Pizza Salami', 'Salami');

-- Pizza Pollo
INSERT INTO Product_Ingredient (product_name, ingredient_name) VALUES
('Pizza Pollo', 'Tomatensaus'),
('Pizza Pollo', 'Mozzarella'),
('Pizza Pollo', 'Kipfilet'),
('Pizza Pollo', 'Paprika'),
('Pizza Pollo', 'Ui');

-- Pizza Quattro Formaggi
INSERT INTO Product_Ingredient (product_name, ingredient_name) VALUES
('Pizza Quattro Formaggi', 'Tomatensaus'),
('Pizza Quattro Formaggi', 'Mozzarella'),
('Pizza Quattro Formaggi', 'Gorgonzola'),
('Pizza Quattro Formaggi', 'Parmezaanse kaas'),
('Pizza Quattro Formaggi', 'Cheddar');

-- Pizza BBQ & Chicken
INSERT INTO Product_Ingredient (product_name, ingredient_name) VALUES
('Pizza BBQ & Chicken', 'BBQ saus'),
('Pizza BBQ & Chicken', 'Mozzarella'),
('Pizza BBQ & Chicken', 'Kipfilet'),
('Pizza BBQ & Chicken', 'Ui'),
('Pizza BBQ & Chicken', 'Paprika');

-- Pizza Shoarma
INSERT INTO Product_Ingredient (product_name, ingredient_name) VALUES
('Pizza Shoarma', 'Tomatensaus'),
('Pizza Shoarma', 'Mozzarella'),
('Pizza Shoarma', 'Shoarma'),
('Pizza Shoarma', 'Ui'),
('Pizza Shoarma', 'Paprika'),
('Pizza Shoarma', 'Knoflooksaus');