 <!--offer section start-->
 <?php
 if(get_theme_mod('simpleshop_homepage_display_offer',true)):
 ?>
 <section class="space-3 space-adjust">
        <div class="container ">
            <div class="row no-gutters text-center">
                <div class="col-md-4">
                    <div class="offer-box border p-5">
                        <i class="bi bi-delivery-van"></i>
                        <h5 class="font-weight-bold mt-3 mb-0"><?php echo get_theme_mod('simpleshop_homepage_offer1')?></h5>
                        <p class="mb-0"><?php echo get_theme_mod('simpleshop_homepage_offer1_description')?></p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="offer-box border p-5 border-adjust">
                        <i class="bi bi-delivery-van"></i>
                        <h5 class="font-weight-bold mt-3 mb-0"><?php echo get_theme_mod('simpleshop_homepage_offer2')?></h5>
                        <p class="mb-0"><?php echo get_theme_mod('simpleshop_homepage_offer2_description')?></p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="offer-box border p-5">
                        <i class="bi bi-delivery-van"></i>
                        <h5 class="font-weight-bold mt-3 mb-0"><?php echo get_theme_mod('simpleshop_homepage_offer3')?></h5>
                        <p class="mb-0"><?php echo get_theme_mod('simpleshop_homepage_offer3_description')?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    endif;
    ?>
    <!--offer section end-->