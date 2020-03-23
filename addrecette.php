<?php 
require("head.php"); 


?>

    <div class="form-container">
        <h1>Nouvelle Recette</h1>
        <form action="functions/newRecette.php" method="post">
            <input type="text" placeholder="title" name="title">
            <input type="text" placeholder="ingredients" name="ingredients">
            <input type="text" placeholder="steps" name="steps">
            <input type="text" placeholder="image_url" name="image_url">
            <input type="submit" value="register">
        </form>
        </div>
        <div>
        <?php
         if (isset($_GET["message"])){
            echo $_GET["message"];
        }
        ?>
        </div>