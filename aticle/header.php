<?php include("function.php");?>
<?php include("navbar.php");?>


                <!-- banner image -->
                <div class="banner_image">
                        <!-- <img src="../image/background_slide.jpg" alt=""> -->
                        <!-- Swiper -->
                                <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                                <?php 
                                                     select_banner_home();   
                                                ?>
                                                
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                </div>
                </div>
                