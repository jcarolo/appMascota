<?php
    include ('../db.php');

    if(isset($_GET['usuarios'])){
        $cc = $_GET['cc'];
        $query = "SELECT * FROM usuarios WHERE cc = $cc";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['descripcion'];
        }

    }
?>