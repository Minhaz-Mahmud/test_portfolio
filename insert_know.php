<?php
include('dbknow.php');

if(isset($_POST['add'])){
    $icon = $_POST['icon'];
    $head = $_POST['head'];
    $des = $_POST['des'];

    if(empty($icon)){
        echo "You must fill the icon";
    } else {
        $query = "INSERT INTO `know` (`icon`, `head`, `des`) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);

        mysqli_stmt_bind_param($stmt, "sss", $icon, $head, $des);

        if(mysqli_stmt_execute($stmt)){
            echo "Your data has been added successfully";
        } else {
            echo "Query Failed: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}
?>
