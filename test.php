<?php
$user_id=$_GET['uname'];
$rid=$_GET['rid'];
    include "db.php";
    $sql2=" update register set status='".$rid."' where id='".$user_id."'";
    $result2 = $conn->query($sql2);

    redirect("notification.php?uname=".$user_id);

    function redirect($url) {
        header('Location: '.$url);
        die();
    }
?>
