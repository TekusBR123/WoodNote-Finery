  <?php session_start(); ?>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <style>
.product-container {
    width: 100%;
    height: 100%;
    background-color: lightgray;
    border-radius: 40px;
    box-shadow: 5px 5px 28px black;

}

.product-manager {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 30px;
}


.price-container {
    background-color: lightgray;
    width: 100%;
    height: 30px;
    border-radius: 50px;
    box-shadow: 5px 5px 28px black;
}

.price-manager {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 30px;
}

.pricing {
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    transform: translateY(5px);
}
  </style>

  <body>



      <?php
        require_once "PrivateCode/My-DB-Functions.php";
        require_once "components/header.php";
        require_once "components/navigation.php";
        require_once "components/slideshow.php";

        ?>




      <div style="overflow-x: auto;" class="scroller">
          <?php
            $conn = My_Connect_DB();
            productImg($conn, 53);
            My_Disconnect_DB($conn);
            ?>
      </div>
      <div style="overflow-x: auto;" class="scroller">
          <?php
            $conn = My_Connect_DB();
            productImg($conn, 56);
            My_Disconnect_DB($conn);
            ?>
      </div>




      <?php

        function productImg($conn, $id)
        {



            $sql = "SELECT * FROM Products WHERE productID <='" . $id . "';";
            $result = My_SQL_EXE($conn, $sql);
            $row = mysqli_fetch_row($result);
            echo "<table border=0>";
            echo "<tr>";
            while ($row = mysqli_fetch_row($result)) {
                echo "<td class='product-manager'>
                <div class='product-container'>
                <a href='productCart.php?productImg=" . $row[6] . "&productPrice=" . $row[2] ."&productID=".$row[0]."'> 
                <img src='" . $row[6] . "' width=250 height=250>
                </div> 
                </a>
                <div class=price-manager>
                <div class='price-container'><div class=pricing>$" . $row[2] . "
                <i class=' cart icons fa-solid fa-cart-shopping header-icons fa-user-color' style='color: black;'></i>
                </div></div></div>
                </td>";
            }


            echo "</tr>";
            echo "</table>";
        }

        require_once "components/footer.php";
        ?>


  </body>

  </html>