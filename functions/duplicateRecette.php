<?php
require("database.php");
require("../head.php");
try{
        $req = $db->prepare("INSERT INTO recettes SELECT * FROM recettes (author, title, ingredients, steps, image_url) Values (:author, :title, :ingredients, :steps, :image_url)" );
        $req->bindParam(":author",$_SESSION["pseudo"]);
        $req->bindParam(":title",$_POST["title"]);
        $req->bindParam(":ingredients", $_POST["ingredients"]);
        $req->bindParam(":steps",$_POST["steps"]);
        $req->bindParam(":image_url", $_POST["image_url"]);
        $req->execute();
        header("Location: ../recettes.php");
        echo "Records inserted successfully.";
} catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }