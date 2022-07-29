<?php 
require_once "My-DB-Functions.php";
//multidimensional array for products

//item id, name, price, size, ratings, description, img
// id will be auto generated
$products =  array(
          array
          ("
          hoodie,
           24.99,
           M, 
           description, 
           assets/men_hoodie.png"
           )
           
          
          
        );

        

// Products TABLE
// $conn = My_Connect_DB();
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
$sql = "INSERT INTO Products VALUES(productID,'".$products[0][0]."', '".$products[0][1]."', '".$products[0][2]."',
        '".$products[0][3]."', '".$products[0][4]."');";
My_SQL_EXE($conn, $sql); // run



// Customer TABLE
$conn = My_Connect_DB();
$sql = "SHOW tables like 'Customers';"; // display all the tables in the database
$result = My_SQL_EXE($conn, $sql);
if(mysqli_num_rows($result) == 0){ // this means the table does not exist
$sql = "CREATE TABLE Customers (
        customerID INT NOT NULL AUTO_INCREMENT,
        lastName varchar(255) NOT NULL,
        firstName varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        pword varchar(255) NOT NULL,
        PRIMARY KEY (customerID)
    
                                );";
My_SQL_EXE($conn, $sql);

}



// Store Customer Info
$sql = "INSERT INTO Customers 
        (customerID, lastName, firstName, email, pword)
        VALUES
        (
            
         );";
My_SQL_EXE($conn, $sql); // run




My_Disconnect_DB($conn);



/*                        DB-NOTES
TODO: Make a table for Customers and one for 
Products. Make another one for emaillist 



*/

?>