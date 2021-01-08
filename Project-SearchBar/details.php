<?php
include('db.php');
if(isset($_GET['id']) && $_GET['id']>0 && isset($_GET['t']) && $_GET['t']!=''){
    $id=mysqli_real_escape_string($con,$_GET['id']);
    $t=mysqli_real_escape_string($con,$_GET['t']);
    if($t=="news"){
        $sql="select id, title, details from news where id='$id'";
    }elseif($t=="page"){
        $sql="select id, content as title, details from page where id='$id'";
    }else{
        header('location:index.php');
        die();
    }

    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        echo "<h2>".$row['title']."</h2>";
        echo "<p>".$row['details']."</p>";
        echo "<a href='index.php'>Back</a>";
    }else{
        header('location:index.php');
        die();
    }
}
?>