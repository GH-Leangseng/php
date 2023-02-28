<?php
        $connect = mysqli_connect("localhost","root","","dbfood_cambodia");
        $id = $_POST['id'];
        $delete_cate = "DELETE FROM tbl_view_food WHERE id_view = $id ";
        $result_delete_cate  = $connect->query($delete_cate);
        if(!$result_delete_cate == True) {
                echo "Fail" .mysqli_error($connect);
        }
?>