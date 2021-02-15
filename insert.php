<?php
include('database.php');
$titre = addslashes($_POST['titre']);
$auteur = addslashes($_POST['auteur']);
$filename = $_FILES["images"]["name"]; 
$tempname = $_FILES["images"]["tmp_name"];     
$folder = "images/".$filename; 
$prix = $_POST['prix'];
$quantite = $_POST['quantite'];
$date_achat = $_POST['date_achat'];
$date_de_publication = $_POST['date_de_publication'];

try {
    $sql = "INSERT INTO livres (titre, auteur, images, prix, quantite, date_achat, date_de_publication)
    VALUES ('".$titre."','".$auteur."','".$filename."','".$prix."','".$quantite."','".$date_achat."','" .$date_de_publication."')";
    mysqli_query($conn,$sql);
        echo ' <div style="padding: 20px ; background-color : lightgreen ; text-align : center ; ">a record added sucessfully <br>
        <a href="read.php"><button style"display : inline-block; padding : 10px ; outline :none ; border :none ;">OK</button></a></div>
        ';
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
    }
     catch (\Throwable $th) {
    echo $th;
    }
 
  
?>