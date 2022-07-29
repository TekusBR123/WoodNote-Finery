<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WoodNote | Access</title>
</head>
<!----Styles----->
<style>
@media only screen and (max-width: 425px) {

    html,
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .button {
        height: 30px;
        color: aliceblue;
        background-color: darkcyan;
    }

    .red {
        color: red;
    }



    .center-form {
        transform: translate(0px, 100px);
    }

    .footer {
        width: 100px;
        height: 100;
        background-color: burlywood;
    }

    .input-field {
        background-color: whitesmoke;
        height: 40px;
        border-radius: 40px;
    }

    .input-name {
        color: black;
        font-size: medium;
        padding: 15px;
    }

    .user-icon {

        width: 50px;
        height: 50px;
        background-color: beige;
        border-radius: 100px;
        transform: translate(180px);
        box-shadow: 20px 10px 90px black;

    }





    /* input[type=submit] {
        color: black;
        font-size: medium;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border: none;
        background-color: white;
    } */

    .input-button {
        box-shadow: 25px 20px 65px #86857E;


    }

    .overflow-scroll {
        overflow-y: scroll;
        position: relative;
        flex: 1 0 auto;
    }
}
</style>

<!-- contents container -->
<div class="overflow-scroll">
    <?php
//components
require_once "components/header.php";

// TODO: Validate input function
function validate_input($input)
{  // Validate user input for better security
    $input = trim($input); //ltrim, rtrim
    $input = htmlspecialchars($input);
    return $input;
}

$firstname = $lastname = $email = $password = "";
$emailMSG = $nameMSG = $passwordMSG = "";

// checks input formats 
if (isset($_REQUEST['submit'])) {
    $firstname = validate_input($_REQUEST['firstname']);
    $lastname =  validate_input($_REQUEST['lastname']);
    $email =  validate_input($_REQUEST['email']);
    $password =  validate_input($_REQUEST['password']);

    if (empty($firstname) or empty($lastname)) $nameMSG = "name is required";
    if (empty($password)) $passwordMSG = "password is required";
    if (empty($email)) $emailMSG = "email is required";

    else {
        // PHP email format filter to check for valid email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailMSG = "Invalid email format";
        }
    }
}




?>

    <body>

        <div class="center-form">

            <div class="user-icon center input-button">
                <i class=" icons fa-solid fa-user"></i>
            </div>
            <!-- Company Logo -->
            <!-- <img src="assets/woodnote_logo.png" height="270px"> -->
            <div class="center">



                <div class="center">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                        <div style="padding-top: 35px;">

                            <div class="input-field center input-button">
                                <div>
                                    <span class="input-name">FirstName</span>
                                    <input style="border-radius:60px;" type="text" name="firstname"
                                        value="<?php echo $firstname; ?>" placeholder="FirstName">*
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 35px;">
                            <div class="input-field center input-button">
                                <div>
                                    <span class="input-name">LastName</span>
                                    <input style="border-radius:60px;" type="text" name="lastname"
                                        value="<?php echo $firstname; ?>" placeholder="LastName">*
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 35px;">
                            <div class="input-field center input-button">
                                <div>
                                    <span class="input-name">Email</span>
                                    <input style="border-radius:60px;" type="text" name="email"
                                        value="<?php echo $firstname; ?>" placeholder="Email">*
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 35px; padding-bottom: 20px">
                            <div class="input-field center input-button">
                                <div>
                                    <span class="input-name">Password</span>
                                    <input style="border-radius:60px;" type="password" name="password"
                                        value="<?php echo $firstname; ?>" placeholder="Password">*
                                </div>
                            </div>
                        </div>


                        If you already have an account, click
                        <a style="font-weight: bold;">here</a>
                        <div style="padding-top: 35px;">
                            <div class="input-field center input-button">
                                <div class="submit-button"><input type="submit" name="submit" value="CREATE ACCOUNT">
                                </div>

                            </div>
                        </div>



                    </form>
                </div>


            </div>

        </div>


    </body>

</div>


</html>