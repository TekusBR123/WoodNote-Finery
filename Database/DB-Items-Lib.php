<?php
require_once "Private-Code/My-DB-Functions.php";
$conn = My_Connect_DB();

//multidimensional array for products

//item id, name, price, size, ratings, description, img
// id will be auto generated

$id = 0;
$products =  array(
        array($id, "hoodie", "24.99", "M", "ratings", "description", "assets/men_hoodie.png")
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
        '" . $products[0][4] . "', '" . $products[0][5] . "','".$products[0][6]."');";
My_SQL_EXE($conn, $sql); // run



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
Show_Me($conn, $id);

My_Disconnect_DB($conn);


function Show_me($conn, $id){
        $sql = "SELECT * FROM Products WHERE productID= '".$id."';";
        $result = My_SQL_EXE($conn, $sql);
        if($row = mysqli_fetch_row($result)){
          echo "ID: ".$row[0]."<br/>";
         
        }
     }


/*                        DB-NOTES
TODO: Make a table for Customers and one for 
Products. Make another one for emaillist 



*/