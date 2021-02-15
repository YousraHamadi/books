<?php
include('database.php');
include('head.php');
$id = 'id';
$sql = "SELECT * FROM livres WHERE id=$id";
// $run=$conn->query($sql);
$query_run=mysqli_query($conn,$sql);


 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Read</title>
    <style>
        *{
            text-decoration:none;
        }
        body {
            padding: 0px;
            margin: 0px;
        }
        table,tr,th,td{
            border: 1px solid lightgrey;
            border-collapse: collapse;

        }
        th{
            height: 30px;
        }
        td{
            height: 30px;
            text-align: center;

        }
        table{
            width: 90%;
            
        }
        thead{
            background-color: lightgrey;
        }
        #tableDiv{
            width: 100%;
           
            height: 600px;

        }
        #hautDePage{
            margin: auto;
            width: 80%;
            display: flex;
            
            
        }
        .buttonAdd{
            display: flex;
            vertical-align: middle;
            width: 50%;
            width: 40%;
            align-items: center;
            justify-content: flex-end;
        }
        #heading{
            display: flex;
            width: 50%;
            margin-top:10px;
        }
        #heading p{
            color:#6001FF;
            font-size:16px;
            font-weight:bold;
            font-family:arial;
        }
        #buttonAdd{
            width: 100px;
             height: 30px;
             background-color: #6001FF;
             color: white;
             border: none;
        }
      
    </style>
</head>

<body>
    <div id="hautDePage">
        <div id="heading">
            <p>LIST OF BOOKS</p>
        </div>
        <div class="buttonAdd">
           <a href="create.php"><button id="buttonAdd" style="">Add</button></a>

        </div>

    </div>
    <div id="tableDiv">
        <table style="margin: auto;">
            <thead>
                <tr>
                    <th style="width: 20%;">Titre</th>
                    <th  style="width: 15%;">Auteur</th>
                    <th style="width: 15%;">images</th>
                    <th style="width: 10%;">Prix</th>
                    <th style="width: 10%;">Quantite</th>
                    <th>date dachat </th>
                    <th> date de publication</th>
                    <th style="width: 15%;"> Actions</th>
                </tr>

            </thead>
            <tbody> 

                <?php
                if(mysqli_num_rows($query_run)>0){
                   
                    while($row=mysqli_fetch_assoc($query_run))
                    {
                        ?>
                 <tr>
                        <td><?php echo $row["titre"]; ?></td>
                        <td><?php echo $row["auteur"]; ?></td>
                        <td> <img src="images/<?php echo $row["images"]; ?>" width="100" height="90"  alt=""> </td>
                        <td><?php echo $row["prix"]; ?></td>
                        <td><?php echo $row["quantite"]; ?></td>
                        <td><?php echo $row["date_achat"]; ?></td>
                        <td><?php echo $row["date_de_publication"]; ?></td>
                        <td align="center">
                            <button type="button" name="dlt" value=".<?php echo $row['id']; ?>." 
                            class="btn btn-danger" style="color:white;  ">
                            <a href="delete.php?id=<?php echo $row['id']; ?>&titre=<?php echo $row['titre']; ?>"  style="text-decoration:none; color:white;">DELETE</a></button>
                            <!-- UPDATE -->
                            <a href="update.php?id=<?php echo $row['id']; ?>"
                            class="btn btn-warning" style="color:white;">UPDATE</a>
                        </td>
                    </tr>
                    <?php
                    }
                } 
                ?>
         

            </tbody>
        </table>
    </div>
    
              <?php  include('footer.php') ;?>
</body>

</html>