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
@media only screen and (min-width: 325px) {

    html,
    body {

        height: 100%;
        display: flex;

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
        transform: translate(-60px);
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

    input[type=submit] {
        color: black;
        font-size: medium;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border: none;
        background-color: white;
    }

    .input-button {
        box-shadow: 25px 20px 65px #86857E;


    }

    .overflow-scroll {
        overflow-y: hidden;
        position: relative;
        flex: 1 0 auto;
    }


}

@media only screen and (max-width: 2000px) and (min-width: 425px) {

    html,
    body {

        height: 100%;
        width: 100%;
        overflow-x: hidden;
    }

    .head {
        transform: translateX(100px)
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
        transform: translate(80px, 100px);
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
        transform: translate(140px);
        box-shadow: 20px 10px 90px black;

    }

    input[type=submit] {
        color: black;
        font-size: medium;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border: none;
        background-color: white;
    }

    .input-button {
        box-shadow: 25px 20px 65px #86857E;


    }

    .overflow-scroll {
        overflow-y: hidden;
        position: relative;

    }
}

a {
    color: black;
    text-decoration: none;
}
</style>

<!-- contents container -->
<div class="overflow-scroll">
    <div class="head">
        <?php
        //components

        require_once "components/header.php";
        ?>
    </div>
    <?php


    // TODO: Validate input function
    function validate_input($input)
    { // Validate user input for better security
        $input = trim($input); //ltrim, rtrim
        $input = htmlspecialchars($input);
        return $input;
    }

    $firstname = $lastname = $email = $password = "";
    $emailMSG = $nameMSG = $passwordMSG = "";

    // checks input formats
    if (isset($_REQUEST['submit'])) {
        $firstname = validate_input($_REQUEST['firstname']);
        $lastname = validate_input($_REQUEST['lastname']);
        $email = validate_input($_REQUEST['email']);
        $password = validate_input($_REQUEST['password']);

        if (empty($firstname)) $nameMSG = "name is required";
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
        <div class="center">

            <div class="center-form">

                <div class="user-icon center input-button">
                    <i class=" icons fa-solid fa-user"></i>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


                    <div style="padding-top: 35px;">

                        <div class="input-field center input-button">
                            <div>
                                <span class="input-name">FirstName</span>
                                <input style="border-radius:60px;" type="text" name="firstname"
                                    value="<?php echo $firstname; ?>" placeholder="FirstName">

                            </div><?php loginHandler($nameMSG); ?>
                        </div>
                    </div>
                    <div style="padding-top: 35px;">
                        <div class="input-field center input-button">
                            <div>
                                <span class="input-name">LastName</span>
                                <input style="border-radius:60px;" type="text" name="lastname"
                                    value="<?php echo $lastname; ?>" placeholder="LastName">
                            </div>
                        </div>
                    </div>
                    <div style="padding-top: 35px;">
                        <div class="input-field center input-button">
                            <div>
                                <span class="input-name">Email</span>
                                <input style="border-radius:60px;" type="text" name="email"
                                    value="<?php echo $email; ?>" placeholder="Email">

                            </div><?php loginHandler($emailMSG); ?>
                        </div>
                    </div>
                    <div style="padding-top: 35px; padding-bottom: 20px;">
                        <div class="input-field center input-button">
                            <div>
                                <span class="input-name">Password</span>
                                <input style="border-radius:60px;" type="password" name="password"
                                    value="<?php echo $password; ?>" placeholder="Password">

                            </div><?php loginHandler($passwordMSG); ?>
                        </div>
                    </div>


                    If you already have an account, click
                    <a href="loginPage.php" style="font-weight: bold;">here</a>
                    <div style="padding-top: 35px;">
                        <div class="input-field center input-button">
                            <div class="submit-button"><input type="submit" name="submit" value="CREATE ACCOUNT">
                            </div>

                        </div>
                    </div>



                </form>





            </div>

        </div>
        <?php
        require_once 'PrivateCode/My-DB-Functions.php';
        $conn = My_Connect_DB();

        if (isset($_POST['submit'])) {
            if (
                !empty($firstname) and !empty($lastname) and !empty($email) and !empty($password)
                and $nameMSG != 'name is required' and $emailMSG != 'email is required' and $passwordMSG != 'password is required'
                and $emailMSG != 'Invalid email format'
            ) {

                createUser($conn, 0);
            }
        }
        function createUser($conn, $id)
        {
            // customerID,lastName,firstName,email,pword
            $sql = "SELECT * FROM Customers WHERE email='" . $_REQUEST['email'] . "';";
            // $result = mysqli_query($conn, $sql);
            $result = My_SQL_EXE($conn, $sql);
            $row = mysqli_fetch_row($result);


            if ($row[3] !== $_REQUEST['email']) {
                $sql = "INSERT INTO Customers (customerID, lastName, firstName, email, pword)
                    VALUES ('" . $id . "','" . $_REQUEST['lastname'] .
                    "','" . $_REQUEST['firstname'] . "','" . $_REQUEST['email'] . "','" . hash('sha512', hash('sha512', $_REQUEST['password'])) . "');";
                My_SQL_EXE($conn, $sql);
                echo "<script>window.top.location='homepage.php?firstName=" . $_REQUEST['firstname'] . "&email=" . $_REQUEST['email'] . "'</script>";
            } else getUser();
        }
        function getUser()
        {
            echo "<div style='color:red; padding-top:20px;' class='center'>" . $_REQUEST['email'] . " already exists. Try again!</div>";
        }

        function loginHandler($message)
        {
            echo "<div style='color:red;'>* " . $message . " 
            </div>";
        }
        ?>

    </body>

</div>


</html>