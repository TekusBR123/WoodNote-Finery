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
    body {
        background-color: beige;
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
}
</style>
<?php
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
        <!-- Company Logo -->
        <img src="assets/woodnote_logo.png" height="270px">
        <div class="center">


            <div class="center">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    FirstName:<input type="text" name="firstname" value="<?php echo $firstname; ?>">*
                    <?php echo $nameMSG; ?><br /><br />
                    LastName:<input type="text" name="lastname" value="<?php echo $lastname; ?>">*
                    <?php echo $nameMSG;
                    $_SESSION['lastname'] = $lastname; ?><br /><br />
                    Email:<input type="text" name="email" value="<?php echo $email; ?>">*
                    <?php echo $emailMSG;  ?><br /><br />
                    Password:<input type="password" name="password" value="<?php echo $password; ?>">*
                    <?php echo $passwordMSG;  ?><br /><br />
                    <input type="submit" name="submit" value="submit" class="button">

                </form>
            </div>
            <?php
            require_once "My-DB-Functions.php";
            if (isset($_REQUEST['submit'])) {
                // insert statement for user info

                /*if (!empty($firstname) and !empty($lastname) and !empty($email) and !empty($password)) {
                    header("location: homepage.php");
                }*/

                if ($_REQUEST['email'] !== $personInfo[2]) {
                    //passwrd
                    $mysql = "INSERT firstname, lastname, email, passwrd INTO
                               VALUES('" . $firstname . ", '" . $lastname . "', " . $email . ", " . $password . "');";
                    //TODO: Run
                }

            }

            






            ?>
        </div>

        <footer>

        </footer>

</body>

</html>