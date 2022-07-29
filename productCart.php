<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<?php
require_once "Private-Code/My-DB-Functions.php";
//$conn = My_Connect_DB();
require_once "components/header.php";
require_once "components/navigation.php";
//require_once "Private Code/My-DB-Functions.php";
?>

<style>
a {
    color: white;
    text-decoration: none;
    font-size: small;
}

.list {
    color: black;
}

.grand-parent {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
    box-shadow: 1px 5px 8px 10px rgba(0, 0, 0, 0.25);
    border-radius: 12px;
}

.add-to-cart {
    width: 100%;
    height: 30px;
    box-shadow: 1px 5px 8px 2px rgba(0, 0, 0, 0.25);
    background: #3A3737;
    color: white;
    border-radius: 20px;


}

.data-radius {
    border-radius: 20px;
    padding: 10px;
}
</style>

<body>
    <?php
    //store and pull the information below from a database
    /*
    TODO: Build basic layout and add items from
    database
    
    1. click add to cart based on id
    2. if id matches, send item to cart
    and save it for limited time in database
    
    */

    ?>

    <table border="0">
        <tr class="add-to-cart">
            <td class="data-radius">
                $24.99
                <i class=" cart icons fa-solid fa-cart-shopping header-icons fa-user-color" style="color:white;"></i>
            </td>

        </tr>

    </table>

    <table border="0" class="header-position">

        <tr class="grand-parent">
            <td>
                <img src="assets/women_white_sleeve.png" alt="" height="320" width="320" style="border-radius:100px;">
            </td>
        </tr>
    </table>







    <ul>
        <li class="list">

        </li>
    </ul>


    <?php
    require_once "components/footer.php"





    ?>



</body>

</html>