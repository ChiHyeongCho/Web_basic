<?php

    $conn = mysqli_connect("172.17.0.2", 'root', '1111');
    mysqli_select_db($conn, "cho_web");
    $sql = "INSERT INTO topic (title, description, author, created) VALUES ('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."', now())";
    $result = mysqli_query($conn, $sql);
    header('Location:./index.php');
?>