<?php
require_once "./My-DB-Functions.php";
$conn = My_Connect_DB();

//multidimensional array for products

//item id, name, price, size, ratings, description, img
// id will be auto generated

$id = 0;
$products =  array(
        array($id, "men_gray_sweatshirt", "24.99", "M", "ratings", "description", "assets/men_gray_center.png"),
        array($id, "men_red_hoodie", "24.99", "M", "ratings", "description", "assets/men_hoodie.png"),
        array($id, "men_black_sweatshirt", "24.99", "M", "ratings", "description", "assets/men_black_center.png"),
        array($id, "men_black_hoodie", "24.99", "M", "ratings", "description", "assets/men_black_sleeve.png"),
        array($id, "women_gray_sweatshirt", "24.99", "M", "ratings", "description", "assets/women_sweat_shirt.png"),
        array($id, "women_white_hoodie", "24.99", "M", "ratings", "description", "assets/women_white_sleeve.png")

);


// Products TABLE
// $sql = "SHOW tables like 'Products';"; // display all the tables in the database
// $result = My_SQL_EXE($conn, $sql);
// if(mysqli_num_rows($result) == 0){ // this maeans the table does not exist
// $sql = "CREATE TABLE Products (
//         productID INT NOT NULL AUTO_INCREMENT,
//         productName varchar(255) NOT NULL,
//         productPrice varchar(255),
//         productSize varchar(255),
//         productRatings varchar(255),
//         productDescription varchar(255),
//         productImg varchar(255),
//         PRIMARY KEY (productID)

//                               );";
// My_SQL_EXE($conn, $sql);
// }




// Store Product Info

$sql = "INSERT INTO Products 
        VALUES('" . $products[0][0] . "','" . $products[0][1] . "', '" . $products[0][2] . "', '" . $products[0][3] . "',
        '" . $products[0][4] . "', '" . $products[0][5] . "', '" . $products[0][6] . "');";

My_SQL_EXE($conn, $sql);


$sql = "INSERT INTO Products 
        VALUES('" . $products[1][0] . "','" . $products[1][1] . "', '" . $products[1][2] . "', '" . $products[1][3] . "',
        '" . $products[1][4] . "', '" . $products[1][5] . "', '" . $products[1][6] . "');";
My_SQL_EXE($conn, $sql);

$sql = "INSERT INTO Products 
                VALUES('" . $products[2][0] . "','" . $products[2][1] . "', '" . $products[2][2] . "', '" . $products[2][3] . "',
                '" . $products[2][4] . "', '" . $products[2][5] . "', '" . $products[2][6] . "');";
My_SQL_EXE($conn, $sql);


$sql = "INSERT INTO Products 
                VALUES('" . $products[3][0] . "','" . $products[3][1] . "', '" . $products[3][2] . "', '" . $products[3][3] . "',
                '" . $products[3][4] . "', '" . $products[3][5] . "', '" . $products[3][6] . "');";
My_SQL_EXE($conn, $sql);

$sql = "INSERT INTO Products 
                VALUES('" . $products[4][0] . "','" . $products[4][1] . "', '" . $products[4][2] . "', '" . $products[4][3] . "',
                '" . $products[4][4] . "', '" . $products[4][5] . "', '" . $products[4][6] . "');";
My_SQL_EXE($conn, $sql);

$sql = "INSERT INTO Products 
                VALUES('" . $products[5][0] . "','" . $products[5][1] . "', '" . $products[5][2] . "', '" . $products[5][3] . "',
                '" . $products[5][4] . "', '" . $products[5][5] . "', '" . $products[5][6] . "');";
My_SQL_EXE($conn, $sql);


// $sql = "UPDATE Customers
// SET productDescription = ''
// WHERE productID = 50;";




// Customer TABLE
// $sql = "SHOW tables like 'Customers';"; // display all the tables in the database
// $result = My_SQL_EXE($conn, $sql);
// if(mysqli_num_rows($result) == 0){ // this means the table does not exist
// $sql = "CREATE TABLE Customers (
//         customerID INT NOT NULL AUTO_INCREMENT,
//         lastName varchar(255) NOT NULL,
//         firstName varchar(255) NOT NULL,
//         email varchar(255) NOT NULL,
//         pword varchar(255) NOT NULL,
//         PRIMARY KEY (customerID)

//                                 );";
// My_SQL_EXE($conn, $sql); // run
// }



// Store Customer Info
// $sql = "INSERT INTO Customers 
//         (customerID, lastName, firstName, email, pword)
//         VALUES
//         (

//          );";
// My_SQL_EXE($conn, $sql); // run


// $sql = "SELECT * FROM Products;";
// Run_Select_Show_Result($conn, $sql);


My_Disconnect_DB($conn);





/*                        DB-NOTES
TODO: Make a table for Customers and one for 
Products. Make another one for emaillist 



*/