<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        col-lg-6 col-md-8{
            overflow:hidden;
        }
      .card-img-top{
          border: 6px solid black;
          height: 290px;
          width: 200px;
        justify-content: space-around;
      }
      #title{
          color:#6001FF;
          font-family: Arial, Helvetica, sans-serif;
          font-weight:bold;
          font-size:10px;
      }
      .card{
          color:#6001FF;
          font-family:arial;
          text-align:center;
      }
      .stylspan{
       display: flex;
       align-items: flex-start;
      font-weight: bold ;
       color:#6001ff;
      
      }
      
          .col-lg-6 col-md-4{
            margin-bottom: 40px;
            display:flex;
            align-items: flex-end;
          }
  </style>
</head>
<body>
      <?php include('head.php'); 
            include('database.php');
            $search=isset($_POST["recherche"]) ? $_POST["recherche"]:'';
           
                $sql="SELECT * FROM livres WHERE titre LIKE '%$search%'";
                $req=mysqli_query($conn,$sql) or die (mysqli_error());
                while($row=mysqli_fetch_assoc($req)){ ?>

          <h5 class="titre" style="font-size: 25px; margin:40px;  padding:15px;color:#6001FF "> <?php echo $row['titre']; ?></h5>
           <div class="row">
                <div class="col-lg-6 col-md-8" style="margin-top: 25px; margin-left:30px; margin-bottom:20px">
                  <div class="card">
                      <div class="card-body lineheight" style="background: #f3f3f3; border-radius: 10px; vertical-align:start;">
                        <h5><span class="stylspan">NAME : </span><?php echo $row['titre']; ?></h5>
                        <h5><span class="stylspan">AUTHOR : </span><?php echo $row['auteur']; ?></h5>
                        <h5><span class="stylspan">PRIX : </span><?php echo $row['prix']; ?></h5>
                        <h5><span class="stylspan">QUANTITE AU STOCK : </span><?php echo $row['quantite']; ?></h5>
                        <h5><span class="stylspan">DATE DE PUBLICATION : </span><?php echo $row['date_de_publication']; ?></h5>
                  </div>
                </div>
                </div>
            <div class="col-lg-6 col-md-4" style=" width: 100px; display:inline; right:100px; margin-top:5px;"> 
                   <center><img src="images/<?php echo $row["images"]; ?>" width="270" height="375"  alt="" style=" background:red; border: 4px solid black;" ></center>
                   </div>
                   
             <?php 
             } 
             ?>
              
          
             
</body>
</html>