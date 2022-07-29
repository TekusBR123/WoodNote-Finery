<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9794419662.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<style>
html,
body {
    overflow-x: hidden;
    background-image: linear-gradient(grey, #DCC9B9, #D2BEB0)
}

input[type=submit],
[type=text] {
    color: black;
    border-style: hidden;
    font-size: medium;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border: none;
    background-color: white;
    border-radius: 40px;
}

input {
    border-style: hidden;
    background-color: #eee;
}

::placeholder {
    padding: 4px;
    opacity: 0.4;
}

.center {
    display: flex;
    justify-content: center;
    align-items: center;
}


.image-shadow {
    text-shadow: 20px 10px 90px black;
    border-radius: 10px;
}

.icons {
    padding-right: 20px;
    padding-left: 20px;
    filter: grayscale(40%);
}

.fa-user-color {
    color: black;
}

/* Hide scrollbar for Chrome, Safari and Opera */
.scroller::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.scroller {
    -ms-overflow-style: none;
    /* IE and Edge */
    scrollbar-width: none;
    /* Firefox */
}
</style>

<body>

    <span class="center">

        <img class="icons" src="assets/insta.png" width="25">
        <img class="icons" src="assets/tiktok.png" width="25">
        <a href="homepage.php"> <img class="image-shadow" src="assets/woodnote_logo.png" alt="finery" width="180"></a>
        <a href="index.php"><i class="icons fa-solid fa-user fa-user-color"></i></a>
        <a href=""><i class="icons fa-solid fa-cart-shopping header-icons fa-user-color"></i></a>


    </span>
</body>

</html>