<?php
session_start();
if(!isset($_SESSION["email"])){
    $_SESSION["profileError"] = "You need to sign up or log in first!";
    header('Location: ./signup.php');
    die();
}
include './includes/db.php';
include "./includes/header.php"
?>
<main>
    <div style="background-color: lightblue; padding: 2em;">
        <h3>Welcome to Eats&Rest <?php echo ucfirst($_SESSION["firstname"]) . " " . ucfirst($_SESSION["lastname"]); ?></h3>
        <h3 style="padding-left: 5vh; width: 100%;">Your email is: <?php echo $_SESSION["email"]; ?></h3>
        <a class="btn btn-danger" href="./logout.php" style="margin-top: 1em;">Log out</a>
    </div>
    <div style="width:100%; text-align:center;">
        <h3>Orders:</h3>
    </div>
    <div>
        <?php
            if(isset($_POST["addorder"])){
                echo $menuimage;
            }
            if(isset($_POST["addorder"])){
                echo $menuname;
            }
            if(isset($_POST["addorder"])){
                echo $menudescription;
            }
        ?>
    </div>
</main>
<?php include "./includes/footer.php" ?>