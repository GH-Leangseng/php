<?php
        $connect = mysqli_connect("localhost","root","","dbfood_cambodia");
        $delete = $_POST['id'];
        $sql_delete = "DELETE FROM tbl_banner_home WHERE id = $delete";
        $result_delete = $connect -> query($sql_delete);
        if(!$result_delete == TRUE) {
                echo "fail !";
        }

?>