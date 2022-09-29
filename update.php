<html>
    <head>
        <title>add student data</title>
    </head>
    <link rel="stylesheet" href="conf.css">
    <body>
    <h1>update  information records</h1>
         <div class="box">
        <?php
         $del=$_GET['id'];
        $conn=mysqli_connect('localhost','root','','tabledata');
        $sql = "select *from tabdata where id=$del";
        $qry = mysqli_query($conn,$sql) or die('connection sucessfully');
        if(mysqli_num_rows($qry)>0){
            while($row=mysqli_fetch_assoc($qry)){
        ?>
        <form action="edit.php" method="get">
         
         
        <label for="">enter your name</label><br><br>
        <input type="text" name="fname" value="<?php echo $row['fname'];?>" placeholder="enter your name"><br><br>
        <label for="">enter your  age</label><br><br>
        <input type="number" name="aged" value="<?php echo $row['aged'];?>" placeholder="enter your age"><br><br>
        <label for="">enter your roll number</label><br><br>
        <input type="number" name="rolll" value="<?php echo $row['rolll'];?>" placeholder="enter your roll number"><br><br>
         <input type="submit" class="btn" value="update"> <a href="tableform.php">back</a>
         </form>
      <?php
        }
      }
        ?>
         </div>
 
    </body>
    </html>