<?php 
session_start();
if(isset($_POST["addorder"])){
    $menuimage = "media/angusburger.jpg";
    $menuname = "Perfectly Served Angus";
    $menudescription = "An Angus burger is a hamburger made using beef from Angus cattle. The name Angus burger is used by several fast-food hamburger chains for one or more premium burgers; however, it does not belong to any single company.";

     include "./includes/db.php";
     $checkMenu = "SELECT * FROM menupick WHERE menuname = '$menuname'";
     $menuResult = $con -> query($checkMenu);
     if($menuResult -> num_rows > 0){
         echo "Already added";
     }
     else{
         $insertMenu = "INSERT INTO menupick(orderid, menuimage, menuname, menudescription) 
         VALUES (null, '$menuimage', '$menuname', '$menudescription')";
         if($con -> query($insertMenu)){
             header('Location: ./menu.php');
             die();
         } else{ echo $con -> error;}
     }
     
};
if(isset($_POST["addorder2"])){
    $menuimage2 = "https://cdn.pixabay.com/photo/2018/09/14/11/12/food-3676796_960_720.jpg";
    $menuname2 = "Sirloin Steaks";
    $menudescription2 = "Served with french fries, mash potato or chips. Choice is all up to you. Choose what type of steak you prefer more: rare, medium or well-done and enjoy the best steak in your life";

     include "./includes/db.php";
     $checkMenu2 = "SELECT * FROM menupick WHERE menuname = '$menuname2'";
     $menuResult2 = $con -> query($checkMenu2);
     if($menuResult2 -> num_rows > 0){
         echo "Already added";
     }
     else{
         $insertMenu2 = "INSERT INTO menupick(orderid, menuimage, menuname, menudescription)
         VALUES (null, '$menuimage2', '$menuname2', '$menudescription2')";
         if($con -> query($insertMenu2)){
             header('Location: ./menu.php');
             die();
         } else{ echo $con -> error;}
     }
     
};
if(isset($_POST["addorder3"])){
    $menuimage3 = "https://cdn.pixabay.com/photo/2018/05/03/05/19/skewer-3370443_960_720.jpg";
    $menuname3 = "Caucasian Kebab";
    $menudescription3 = "
    Kebab is a cooked meat dish, with its origins in Middle Eastern cuisines. Many variants are popular around the world. ... The traditional meat for kebabs is most often mutton or lamb, but regional recipes may include beef, goat, chicken, fish, or more rarely due to religious prohibitions, pork.";

     include "./includes/db.php";
     $checkMenu3 = "SELECT * FROM menupick WHERE menuname = '$menuname3'";
     $menuResult3 = $con -> query($checkMenu3);
     if($menuResult3 -> num_rows > 0){
         echo "Already added";
     }
     else{
         $insertMenu3 = "INSERT INTO menupick(orderid, menuimage, menuname, menudescription)
         VALUES (null, '$menuimage3', '$menuname3', '$menudescription3')";
         if($con -> query($insertMenu3)){
             header('Location: ./menu.php');
             die();
         } else{ echo $con -> error;}
     }
     
};
if(isset($_POST["addorder4"])){
    $menuimage4 = "https://cdn.pixabay.com/photo/2017/01/22/19/20/pizza-2000615_960_720.jpg";
    $menuname4 = "Unusual pizza";
    $menudescription4 = "
    Make your own own trust our restaurant with pizza choize. Unusual pizza is a surprize food for you because of ingridients. Surprize yourself with this meal if you want something special!";

     include "./includes/db.php";
     $checkMenu4 = "SELECT * FROM menupick WHERE menuname = '$menuname4'";
     $menuResult4 = $con -> query($checkMenu4);
     if($menuResult4 -> num_rows > 0){
         echo "Already added";
     }
     else{
         $insertMenu4 = "INSERT INTO menupick(orderid, menuimage, menuname, menudescription)
         VALUES (null, '$menuimage4', '$menuname4', '$menudescription4')";
         if($con -> query($insertMenu4)){
             header('Location: ./menu.php');
             die();
         } else{ echo $con -> error;}
     }
     
};
if(isset($_POST["addorder5"])){
    $menuimage5 = "https://cdn.pixabay.com/photo/2019/03/24/14/25/croissants-4077817_960_720.jpg";
    $menuname5 = "French cruasaunt";
    $menudescription5 = "
    Sweet cruasants are the best what you can treat yourself for desert after great dinner or lunch. Don't miss it!";

     include "./includes/db.php";
     $checkMenu5 = "SELECT * FROM menupick WHERE menuname = '$menuname5'";
     $menuResult5 = $con -> query($checkMenu5);
     if($menuResult5 -> num_rows > 0){
         echo "Already added";
     }
     else{
         $insertMenu5 = "INSERT INTO menupick(orderid, menuimage, menuname, menudescription)
         VALUES (null, '$menuimage5', '$menuname5', '$menudescription5')";
         if($con -> query($insertMenu5)){
             header('Location: ./menu.php');
             die();
         } else{ echo $con -> error;}
     }
     
}
include "./includes/header.php" 
?>
<main id="menumain">
    <form id="menusection" method="post" action="./menu.php">
        <div id="menuleftdiv">
            <div id="imgdiv">
                <img src="media/angusburger.jpg" width="100%">
            </div>
            <div>
                <h2>Perfectly Served Angus</h2>
                <br>
                <p>An Angus burger is a hamburger made using beef from Angus cattle. The name Angus burger is used by several fast-food hamburger chains for one or more "premium" burgers; however, it does not belong to any single company.</p>
                <button class="btn btn-info" type="submit" name="addorder">Add to order</button>
            </div>
        </div>
        <div id="menurightdiv">
            <h2 name="ingridients">Ingridients:</h2>
            <br>
            <h5>
                <ol>
                    <li name="ingridient1">Bun</li>
                    <li name="ingridient2">Beef/Chicken Angus</li>
                    <li name="ingridient3">Cheese</li>
                    <li name="ingridient4">Tomatoes</li>
                    <li name="ingridient5">Lettes</li>
                    <li name="ingridient6">Ketchup</li>
                    <li name="ingridient7">Musturd</li>
                    <li name="ingridient8">Relish</li>
                </ol>
            </h5>
        </div>
    </form>
    <form id="menusection" method="post" action="./menu.php">
        <div id="menuleftdiv">
            <div>
                <img src="https://cdn.pixabay.com/photo/2018/09/14/11/12/food-3676796_960_720.jpg" width="100%">
            </div>
            <div>
                <h2>Sirloin Steaks</h2>
                <br>
                <p>
                    Served with french fries, mash potato or chips. Choice is all up to you. Choose what type of steak you prefer more: rare, medium or well-done and enjoy the best steak in your life
                </p>
                <button class="btn btn-info" type="submit" name="addorder2">Add to order</button>
            </div>
        </div>
        <div id="menurightdiv">
            <h2>Ingridients:</h2>
            <br>
            <h5>
                <ol>
                    <li>Beef</li>
                    <li>Tomatoes</li>
                    <li>Onions</li>
                    <li>Spices</li>
                    <li>Pickles</li>
                </ol>
            </h5>
        </div>
    </form>
    <form id="menusection" method="post" action="./menu.php">
        <div id="menuleftdiv">
            <div>
                <img src="https://cdn.pixabay.com/photo/2018/05/03/05/19/skewer-3370443_960_720.jpg" width="100%">
            </div>
            <div>
                <h2>Caucasian Kebab</h2>
                <p>
                Kebab is a cooked meat dish, with its origins in Middle Eastern cuisines. Many variants are popular around the world. ... The traditional meat for kebabs is most often mutton or lamb, but regional recipes may include beef, goat, chicken, fish, or more rarely due to religious prohibitions, pork.
                </p>
                <button class="btn btn-info" type="submit" name="addorder3">Add to order</button>
            </div>
        </div>
        <div id="menurightdiv">
            <h2>Ingridients:</h2>
            <br>
            <h5>
                <ol>
                    <li>Beef/Chicken</li>
                    <li>Tomatoes</li>
                    <li>Onions</li>
                    <li>Spices</li>
                </ol>
            </h5>
        </div>
    </form>
    <form id="menusection" method="post" action="./menu.php">
        <div id="menuleftdiv">
            <div>
                <img src="https://cdn.pixabay.com/photo/2017/01/22/19/20/pizza-2000615_960_720.jpg" width="100%">
            </div>
            <div>
                <h2>Unusual pizza</h2>
                <br>
                <p>
                    Make your own own trust our restaurant with pizza choize. Unusual pizza is a surprize food for you because of ingridients. Surprize yourself with this meal if you want something special!
                </p>
                <button class="btn btn-info" type="submit" name="addorder4">Add to order</button>
            </div>
        </div>
        <div id="menurightdiv">
            <h2>Ingridients:</h2>
            <br>
            <h4>Unexpected ingridients</h4>
        </div>
    </form>
    <form id="menusection" method="post" action="./menu.php">
        <div id="menuleftdiv">
            <div>
                <img src="https://cdn.pixabay.com/photo/2019/03/24/14/25/croissants-4077817_960_720.jpg" width="100%">
            </div>
            <div>
                <h2>French cruasaunt</h2>
                <br>
                <p>
                    Sweet cruasants are the best what you can treat yourself for desert after great dinner or lunch. Don't miss it!
                </p>
                <button class="btn btn-info" type="submit" name="addorder5">Add to order</button>
            </div>
        </div>
        <div id="menurightdiv">
            <h2>Ingridients:</h2>
            <h5>
                <ol>
                    <li>Plaint croisatnt</li>
                    <li>Sugar</li>
                    <li>Sweet vanilla creme</li>
                    <li>Strawbery</li>
                </ol>
            </h5>
        </div>
    </form>
</main>
<?php include "./includes/footer.php" ?>