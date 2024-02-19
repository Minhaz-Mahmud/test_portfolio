<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$userProfile=$_SESSION['user_name'];
if($userProfile==true){

}

else{
    header('location:login.php');
}

?>


<h1>ADD FOR KNOW ME SECTION</h1>
<form action="insert_know.php" method="post">
                <div class="know_me">

                   <div class="form-group">
                      <label for="icon">Icon</label>
                      <input type="text" name="icon" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="head">Header</label>
                      <input type="text" name="head" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="des">Description</label>
                      <input type="text" name="des" class="form-control">
                    </div>
                    </div>
                    <input type="submit" class="btn" name="add" value="ADD">
             </form>




    <a href="logout.php"> <input type="submit" name="" value="LOGOUT" style="background: orange; color:white; height:35px; width: 100px; margin-top:20px;
    font-size:18px; border:0; border-radius: 5px; cursor:pointer; "></a>
</body>
</html>