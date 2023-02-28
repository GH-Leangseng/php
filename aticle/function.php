<?php
        $connect = mysqli_connect("localhost","root","","dbfood_cambodia");
        mysqli_set_charset($connect,'utf8');
       
        function select_banner_home() {
                global $connect;
                $select_bn_home = "SELECT * FROM tbl_banner_home  WHERE type = 'Home' ORDER BY id DESC LIMIT 6";
                $result_bn_home = $connect->query($select_bn_home);
                while($row = mysqli_fetch_assoc($result_bn_home)){
                        echo '<div class="swiper-slide">
                                        <img class="image_banner"  src="../image/'.$row['file_name'].'" alt="">
                              </div>';
                }
                 
        }

        //contact sellect
        function Select_contact() {
                global $connect;
                $sql_contact = "SELECT * FROM tbl_banner_home WHERE type = 'Contact'  ORDER BY id DESC LIMIT 1";
                $result = $connect->query($sql_contact);
                $row = mysqli_fetch_assoc($result);
                echo '<img src="../image/'.$row['file_name'].'" alt="">';       
        }

        function Select_service() {
                global $connect;
                $sql_contact = "SELECT * FROM tbl_banner_home WHERE type = 'Service'  ORDER BY id DESC LIMIT 1";
                $result = $connect->query($sql_contact);
                $row = mysqli_fetch_assoc($result);
                echo '<img src="../image/'.$row['file_name'].'" alt="">';       
        }



        

       


         function get_row() {
                $id = $_GET['id'];
                global $connect;
                $get_cmm = "SELECT * FROM tbl_comment WHERE type_Id = $id ";
                $result_get_cmm = $connect -> query($get_cmm);
                return mysqli_num_rows($result_get_cmm);    
         }


         
        // report
       function insert_report() {
                global $connect;
                if(isset($_POST['submit'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
                        $problem  = $_POST['problem'];
                        $comment = $_POST['comment'];
                       $insert  = 'INSERT INTO tbl_report VALUES (null,"'.$problem.'","'.$username.'","'.$password.'","'.$email.'","'.$comment.'")';
                       $result_insert = $connect->query($insert);
                       if(!$result_insert == TRUE){
                                echo "Fail ! " .mysqli_error($connect);
                       }

                }
       }
       insert_report();

       // Select view_food display front
        function display_view($type,$num) {
                global $connect;
                $select_view = "SELECT * FROM tbl_view_food WHERE type = '".$type."' ORDER BY id_view DESC LIMIT $num";
                $result_view = $connect -> query($select_view);
                while( $row = mysqli_fetch_assoc( $result_view ) ) {
                        echo '<div class="col-sm-3">
                                        <a href="view_food.php ? id='.$row['id_view'].'">
                                                <div class="box_food">
                                                        <div class="image_food">
                                                                <img src="../image/'.$row['image_food'].'" alt="">
                                                                <div class="black"></div>
                                                                <div class="eye"><i class="fas fa-eye"></i></div>
                                                                
                                                        </div>
                                                        <div class="text">
                                                                <input type="hidden" name="" id="id" value="'.$row['id_view'].'">
                                                                <h5 class="header_title">
                                                                 '.$row['title'].'
                                                                </h5>
                                                                <p>1. គ្រឿងផ្សំុ</p> 
                                                                <p>2. របៀបធ្វើ <span> '.$row['viewer'].'view<i class="fas fa-eye"></i></span></p>  
                                                        </div>
                                                        
                                                        
                                                </div>
                                        </a>
                                </div>';
                }
                
        }
        // display_view();
        function display_look($type,$num) {
                $id = $_GET['id'];
                global $connect;
                $select_view = "SELECT * FROM tbl_view_food WHERE type = '".$type."' AND id_view NOT IN($id) ORDER BY id_view DESC LIMIT $num";
                $result_view = $connect -> query($select_view);
                while( $row = mysqli_fetch_assoc( $result_view ) ) {
                        echo '<a href="view_food.php ? id='.$row['id_view'].'">
                                <div class="box_view">
                                        <div class="box_image">
                                                <img src="../image/'.$row['image_food'].'" alt="">
                                        </div>
                                        <div class="box_text">
                                                <h5>'.$row['title'].'</h5>
                                                <span>'.$row['viewer'].'views <i class="fas fa-eye"></i> </span>
                                        </div>
                                </div>
                </a>';              
                }
                
        }
        function slide_picture(){
                global $connect;
                $id = $_GET['id'];
                $read_slide_picture = "SELECT * FROM tbl_view_food WHERE type IN('ម្ហូបចៀន','ម្ហូបពិសេស','ម្ហូបឆា','ម្ហូបស្លរ') AND id_view NOT IN($id) ORDER BY id_view DESC LIMIT 16";
                $result_read_slide_picture = $connect->query($read_slide_picture);
                while($row = mysqli_fetch_assoc($result_read_slide_picture)) {
                        echo ' 
                                <div class="swiper-slide">
                                        
                                                <div class="box_view_slide">
                                                        <a href="view_food.php ? id='.$row['id_view'].'">
                                                                <div class="box_image">
                                                                        <img  src="../image/'.$row['image_food'].'" alt="">
                                                                </div>
                                                                <div class="box_text">
                                                                        <h4>'.$row['title'].'</h4>
                                                                </div>
                                                        </a>
                                                </div>
                                        
                                </div>
                        ';
                }
                
        }
        

       


        
?>