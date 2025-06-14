DROP DATABASE IF EXISTS pizzeria;
CREATE DATABASE pizzeria;
USE pizzeria;

-- Tabel: User
IF NOT EXISTS (SELECT * FROM sys.tables WHERE name = 'User')
BEGIN
    CREATE TABLE [User] (
        username NVARCHAR(255) PRIMARY KEY,
        password NVARCHAR(255) NOT NULL,
        first_name NVARCHAR(255) NOT NULL,
        last_name NVARCHAR(255) NOT NULL,
        address NVARCHAR(255),
        role NVARCHAR(50)
    );
END

-- Tabel: ProductType
IF NOT EXISTS (SELECT * FROM sys.tables WHERE name = 'ProductType')
BEGIN
    CREATE TABLE ProductType (
        name NVARCHAR(255) PRIMARY KEY
    );
END

-- Tabel: Product
IF NOT EXISTS (SELECT * FROM sys.tables WHERE name = 'Product')
BEGIN
    CREATE TABLE Product (
        name NVARCHAR(255) PRIMARY KEY,
        price DECIMAL(10,2) NOT NULL,
        type_id NVARCHAR(255) NOT NULL,
        FOREIGN KEY (type_id) REFERENCES ProductType(name)
    );
END

-- Tabel: Ingredient
IF NOT EXISTS (SELECT * FROM sys.tables WHERE name = 'Ingredient')
BEGIN
    CREATE TABLE Ingredient (
        name NVARCHAR(255) PRIMARY KEY
    );
END

-- Tabel: Product_Ingredient
IF NOT EXISTS (SELECT * FROM sys.tables WHERE name = 'Product_Ingredient')
BEGIN
    CREATE TABLE Product_Ingredient (
        product_name NVARCHAR(255) NOT NULL,
        ingredient_name NVARCHAR(255) NOT NULL,
        PRIMARY KEY (product_name, ingredient_name),
        FOREIGN KEY (product_name) REFERENCES Product(name),
        FOREIGN KEY (ingredient_name) REFERENCES Ingredient(name)
    );
END

-- Tabel: Pizza_Order
IF NOT EXISTS (SELECT * FROM sys.tables WHERE name = 'Pizza_Order')
BEGIN
    CREATE TABLE Pizza_Order (
        order_id INT IDENTITY(1,1) PRIMARY KEY,
        client_username NVARCHAR(255) NOT NULL,
        client_name NVARCHAR(255) NOT NULL,
        personnel_username NVARCHAR(255),
        datetime DATETIME NOT NULL,
        status INT NOT NULL,
        address NVARCHAR(255),
        FOREIGN KEY (client_username) REFERENCES [User](username),
        FOREIGN KEY (personnel_username) REFERENCES [User](username)
    );
END

-- Tabel: Pizza_Order_Product
IF NOT EXISTS (SELECT * FROM sys.tables WHERE name = 'Pizza_Order_Product')
BEGIN
    CREATE TABLE Pizza_Order_Product (
        order_id INT NOT NULL,
        product_name NVARCHAR(255) NOT NULL,
        quantity INT NOT NULL,
        PRIMARY KEY (order_id, product_name),
        FOREIGN KEY (order_id) REFERENCES Pizza_Order(order_id),
        FOREIGN KEY (product_name) REFERENCES Product(name)
    );
END