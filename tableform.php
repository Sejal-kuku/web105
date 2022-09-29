<html>
    <head>
        <title>this is table form database inserted
        </title>
    </head>
    <link rel="stylesheet" href="conf.css">
    <body>
     <h1>student data records</h1>
    <center>  
      <form action="tab.php" method="get">
        <?php
        $conn=mysqli_connect('localhost','root','','tabledata');
        $sql = "select *from tabdata";
        $qry = mysqli_query($conn,$sql);
        if(mysqli_num_rows($qry)>0){
        ?>
       <table border="1">
        <th>userid</th>
        <th>student name</th>
        <th>student age</th>
        <th>student roll</th>
        <th>action</th>
        <?php
        
        while($row=mysqli_fetch_assoc($qry)){
        ?>
        <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['aged'];?></td>
        <td><?php echo $row['rolll'];?></td>

        <td><a href="add.php">add</a>
        <a href="delete.php ?id=<?php echo $row['id'];?>">delete</a>
        <a href="update.php ?id=<?php echo $row['id'];?>">edit</a>
        
    </td>
    </tr>    
    <?php
        }
    ?>
   </table> 
   <?php
        }
   ?>
   </form>
   </center>

    </body>
</html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
</body>
</html>