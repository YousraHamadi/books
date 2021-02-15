<?php include ('head.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styletest.css">
    <title>Document</title>
    <style>
.arriere-ecran{
    background-image: url('images/bib.jpg');
    position: relative;
    opacity: 0.8; */
    /* height: calc(100% - 100px); */
    height: 100%;
    width: 100%;
    background-size: cover;
    filter: blur(5px);
}
.arriere{
    background:rgba(0, 0, 0, 0.555);
    /* height: calc(100% - 100px); */
    height: 100%;
    width: 100%;
    position: absolute;
    background-color: black;
}
/* style des inputs */
.wrapForm{
    color:white;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    margin-top: 15px;
    padding: 15px;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
   
    
}
.wrapForm h1{
    font-weight: bold;
    font-size: 70px;
    margin-bottom: 20px;
    margin-left:30px;
}
 .wrapForm input[type=text]{
 width: 400px;
 padding: 6px 5px;
 margin: 20px auto;
 background: #cfcfcf;
 font-size: 15px;
 text-align: center;
  display:block; 
    position:absolute;
    left:5px;

}
   
.wrapForm input[type=submit]{
    display:block;
    position:absolute;
    left:160px;
    background:#6001FF;
    border:none;
    padding:10px 15px;
    font-weight:bold;
    color:white;
    margin-top:50px;
    
}

</style>
</head>
<body> 

        <!-- background body -->
        <div class="arriere">
            <div class="arriere-ecran">
            </div>  
        </div>
        <!-- body -->
        <section id="entourer">
            <div class="container">
              <div class="col-sm-15 text-center" style="height: 25em;">
                    <div class="wrapForm">
                      <h1>READ<br> MORE<br> BOOKS</h1>
                      <form action="displaybooks.php" method="GET">
                        <input type="text" name="recherche" placeholder="FIND YOUR BOOK HERE"><br>
                        <input type="submit" class="btn" name=submit  value="SEARCH" > 
    
                      </form>
                    </div>
                  <div class="clearfix"></div>
                </div>
            </div>
          </section>
        
</body>

</html>