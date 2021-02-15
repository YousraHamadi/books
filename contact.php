<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Library</title>
    <style>
        
#button {
    /* width: 150px;
    height: 55px; */
    background-color: #6001ff;
    color: white;
    border: none;
    font-weight: bolder;
   padding:15px 25px;
    position:absolute;
    
}
.frm{

    /* background-color: red; */
    width:300px;
    position:relative;
    margin-left: 330px;
}

.title {
    margin-top: 4%;
     margin-right: 700px; 
    color: #6001ff;
    font-weight: bold;
    left:50px;
    font-weight:bold;
    font-family:arial;
}
.INPUT {
    width: 600px;
    height: 50px;
  
    background-color: rgba(206, 206, 206, 0.472);
    border: none;
}
#INPUT {
    width: 600px;
    height: 200px;
   
    background-color: rgba(206, 206, 206, 0.472);
    border: none;
}
.main-content {
     /* will cover the 100% of viewport */
     min-height: 80vh;
 overflow: hidden;
 display: block;
 position: relative;
 padding-bottom: 100px;
 margin-top:20px;
  /* height of your footer */
}

    </style>
</head>

<body>
    <?php include('head.php') ?>
    <h4 class="title">CONTACT US :</h4><br><br>
    <div class="main-content">
    
    <div class="frm">
    <form action="phpmailer/index.php" method="post">
    <label for="name" id="label">Name</label><br>
    <input type="text" placeholder="" id="name" name="name" class="INPUT"><br><br>
    <label for="name" id="label">Email</label><br>
    <input type="email" placeholder="" id="name" name="email" class="INPUT"><br><br>
    <label for="name1" id="label">Message</label><br>
    <textarea id="INPUT" name="message" ></textarea><br><br>

    <button id="button">SEND</button>

     </form>
     </div>
     </div>


    <?php include('footer.php') ?>

</body>

</html>