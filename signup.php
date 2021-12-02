<?php
session_start();
include "./includes/header.php";
if(isset($_POST["loginbtn"])){
    // login process
    $_SESSION["email"] = trim(strtolower($_POST["email"]));
    $password = md5($_POST["password"]);
    include './includes/db.php';
    $checkQuery = "SELECT * FROM customers WHERE email = '{$_SESSION["email"]}' AND password = '$password'";
    $loginResult = $con -> query($checkQuery);
    if($loginResult -> num_rows > 0){
        $user = $loginResult -> fetch_assoc();
        $_SESSION["firstname"] = $user["firstname"];
        $_SESSION["lastname"] = $user["lastname"];
        $_SESSION["userid"] = $user["userid"];
        header('Location: ./profile.php');
    }else {
        $_SESSION["loginError"] = "The email or password is wrong!";
    }
    $con -> close();
}
if(isset($_POST["signupbtn"])){
    $_SESSION["firstname"] = trim(strtolower($_POST["fname"]));
    $_SESSION["lastname"] = trim(strtolower($_POST["lname"]));
    $_SESSION["email"] = trim(strtolower($_POST["email"]));
    $password = md5($_POST["password"]);
    include "./includes/db.php";
    $selectQuery = "SELECT email FROM customers WHERE email = '{$_SESSION["email"]}'";
    $result = $con -> query($selectQuery);
    if($result -> num_rows > 0){
        $_SESSION["signUpError"] = "This email already registered";
    }
    else{
        $insertQuery = "INSERT INTO customers(userid, firstname, lastname, email, password) VALUES (null, '{$_SESSION["firstname"]}', '{$_SESSION["lastname"]}', '{$_SESSION["email"]}', '$password')";
        if($con -> query($insertQuery)){
            $_SESSION["userid"] = mysqli_insert_id($con);
            $con -> close();
            header('Location: ./profile.php');
            die();
        }
    }
    $con -> close();
}

?>
<main id="signupmain">
    <div id="formdiv">
    <h3 style="color:red; text-align: center; margin-top:1em;">
        <?php 
            if(isset($_SESSION["profileError"])){
                echo $_SESSION["profileError"]; 
                session_unset();
            }
            if(isset($_SESSION["signUpError"])){
                echo $_SESSION["signUpError"];
                session_unset();
            }
            if(isset($_SESSION["loginError"])){
                echo $_SESSION["loginError"];
                session_unset();
            }
        ?>
        </h3>
        <form id="signupform" action="./signup.php" method="post">
            <label>First Name</label>
            <br>
            <input name="fname" type="text" placeholder="Enter First Name">
            <br>
            <label>Last Name</label>
            <br>
            <input name="lname" type="text" placeholder="Enter Last Name">
            <br>
            <label>Email</label>
            <br>
            <input name="email" type="email" placeholder="Enter Email">
            <br>
            <label>Password</label>
            <br>
            <input name="password" type="password" placeholder="Enter Password">
            <br>
            <input type="submit" name="signupbtn" value="Submit" class="btn btn-info">
            <br><br>
            <p>Already have an account?<br><a id="loginbtn" href="#formdiv">Log in!</a></p>
        </form>
        <form id="loginform" action="./signup.php" method="post">
            <label>Email</label>
            <br>
            <input name="email" type="email" placeholder="Enter Email">
            <br>
            <label>Password</label>
            <br>
            <input name="password" type="password" placeholder="Enter Password">
            <br>
            <input type="submit" name="loginbtn" value="Submit" class="btn btn-primary">
            <br><br>
            <p>Don't have an account?<br><a id="signupbtn" href="#formdiv">Sign up!</a></p>
        </form>
    </div>
</main>
<?php include "./includes/footer.php" ?>