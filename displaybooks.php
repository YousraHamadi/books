<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>title</title>
    <style>
      .TITLE {
    margin-left: 140px;
    color: #6001ff;
    font-weight: bold;
}
      .card {
    margin-top: 120px;
    
}
.main-container {
    min-height: 80vh;
    /* will cover the 100% of viewport */
    overflow: hidden;
    position: relative;
    padding-bottom: 100px;
    
    /* height of your footer */

}
.container {
    border: 1px;
    padding-top: 40px;
    overflow: hidden;
 }
.card-body {
    padding: 0;
    justify-content: center;
    font-weight: bolder;
}
</style>
</head>

<body>

<?php include('head.php');
 ?>
   
       
  <div class="main-container">
      <div class="container">
        
      <h4 class="TITLE" style="position: absolute;">OUR BOOKS :</h4>
      <div class="card-deck">
            <?php
                include('database.php') ;
                $sql="select * from livres order by id ";
                $req= mysqli_query($conn,$sql) ;
                while($row = mysqli_fetch_assoc($req)){
                ?> 
              <div class="col-sm-4" >
                  <div class="card" style="height:400px; border: 4px solid black; width:260px;">
                    <img class="card-img-top" style="height: 392px" src="images/<?php  echo $row['images'] ?>" alt="Card image cap" style="width:auto">
                    </div>
                    <div class="card-body" style="color: #6001ff; font-size: 1.5em;margin-top:10px;justify-content: center; "><b><?php echo $row['titre']; ?></b></div>
                        
                  </div>
            
              
            <?php
              }
            ?>
            
      </div>
    </div>
    </div>
</body>

</html>