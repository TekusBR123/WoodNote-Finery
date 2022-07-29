<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.margin {
    display: flex;
    align-items: left;
    justify-content: left;
}

.caption {
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: white;
}

.border {
    overflow: hidden;
}

.padding {

    transform: scale(1.6);
}

.bg {
    background: #585757;
    box-shadow: 10px 10px 90px black;
}

.underline {
    position: absolute;
    background-color: white;
    width: 90px;
    height: 2px;
    transform: translate(250px, 115px);
}
</style>
<script>
var i = 0;
var images = [];
var time = 10000;


images[0] = "assets/men_black_sleeve.png";
images[1] = "assets/men_hoodie.png";
images[2] = "assets/women_sweat_shirt.png";
images[3] = "assets/women_white_sleeve.png";



function changeImage() {
    document.slide.src = images[i];

    if (i < images.length - 1) {
        i++;

    } else {
        i = 1;
    }

    setTimeout("changeImage()", time);
}




window.onload = changeImage;
</script>

<body>
    <div class="bg">
        <div class="underline">

        </div>
        <div class="margin">
            <div class="border">
                <div class="padding">
                    <img name=slide alt="hoodie" width="200">
                </div>
            </div>
            <div name=caption class="caption">
                <?php
                $uri = $_SERVER['REQUEST_URI'];
                if ($uri == '/productPage.php') {
                    echo "<div style='transform:translateX(25px);'>MEN</div>";
                } else echo "FEATURED";


                ?>


            </div>
        </div>
    </div>





</body>

</html>