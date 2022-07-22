<?php



// use a table for products
?>

<style>
.product-bg {
    height: 250px;
    background-color: gray;
    border-style: hidden;
    border-radius: 40px;
    box-shadow: 10px 1px 20px black;
    overflow: hidden;
}

.product-price {
    height: 50px;
    background-color: gray;
    border-style: hidden;
    border-radius: 40px;
    box-shadow: 10px 1px 20px black;

}

.price-format {
    color: white;
    font-size: 15px;
    padding: 10px;
}

.cart {
    color: white;
}

a {
    color: white;
}
</style>
<?php 
require_once "components/header.php";
require_once "components/navigation.php";
require_once "components/slideshow.php";


?>

<table border="0">
    <tr>

        <!-- product1 -->
        <td class="product-bg">

            <img src="assets/men_black_sleeve.png" style="transform: scale(1.2); border-radius:100px;" height="180"
                width="180">
        </td>
        <!-- product2 -->

        <td class="product-bg">
            <img src="assets/men_hoodie.png" style="transform: scale(1.2); border-radius:100px;" height="180"
                width="180">
        </td>

    </tr>

    <tr>
        <!-- product1 -->
        <td class="product-price">
            <span class="price-format">
                <a href="productCart.php">ADD TO CART</a>
                <i class=" cart icons fa-solid fa-cart-shopping header-icons fa-user-color" style="color:white;"></i>
            </span>

        </td>
        <!-- product2 -->

        <td class="product-price">
            <span class="price-format">
                <a href="productCart.php">ADD TO CART</a>
                <i class=" fa-solid fa-cart-shopping header-icons fa-user-color"
                    style="color:white; padding-left:15px;"></i>
            </span>
        </td>


    </tr>





    <?php 
    require_once "components/footer.php";
    
    ?>


</table>