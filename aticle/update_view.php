<?php
        $connect = mysqli_connect("localhost","root","","dbfood_cambodia");
        mysqli_set_charset($connect,'utf8');
        $count_view = $_POST['count1'];
        $id = $_POST['id1'];
        $upate_view = "UPDATE tbl_view_food SET viewer = ".$count_view." WHERE id_view = '".$id."' ";
        $result_update_view = $connect->query($upate_view);
        if(!$result_update_view == TRUE){
                echo "Fail";
        }    
?>