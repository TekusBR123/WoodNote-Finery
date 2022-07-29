<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    min-height: 100vh;
    max-width: 400vh;
    margin: 0 auto;
    /* background: linear-gradient(180deg, #767171 0%, rgba(67, 66, 66, 0) 100%); */
}

.center-content {
    display: flex;
    align-items: center;
    justify-content: center;

}

.product-bg {

    background-color: gray;
    border-style: hidden;
    border-radius: 40px;
    box-shadow: 5px 10px 30px black;
    overflow: hidden;

}
</style>

<body>
    <?php
    require_once "components/header.php";
    require_once "components/navigation.php";
    require_once "components/slideshow.php";
    ?>

    <table>
        <tr>
            <th style=" color:aliceblue; transform: translate(35px,90px);">
                CLOTHING
            </th>

            <th style=" color:aliceblue; transform: translate(20px, 100px); ">
                COMING SOON<br />
                <span style="opacity: 0.5;">COMING SOON</span>
            </th>
        </tr>
        <tr>
            <td class="product-bg">
                <img src="assets/men_gray_center.png"
                    style="transform: scale(1.2); filter:brightness(0.7); position:relative; " height="180" width="180">
            </td>

            <td class="product-bg">
                <img src="" style="transform: scale(1.2); filter:brightness(0.7); " height="180" width="180">
            </td>
        </tr>

    </table>


    <table class="center-content">
        <tr style="position:relative; z-index: 1;">

            <th style=" color:aliceblue; transform: translate(20px, 100px); ">
                COMING SOON<br />
                <span style="opacity: 0.5;">COMING SOON</span>
            </th>
        </tr>

        <tr>
            <td class="product-bg">
                <img src="" style=" transform: scale(1.2); filter:brightness(0.7)" height="180" width="350">
            </td>
        </tr>
    </table>


    <?php
    require_once "components/footer.php";

    ?>

</body>

</html>