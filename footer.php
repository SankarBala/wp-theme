<div class="footer">

    <div class="col-md-12 col-sm-12 editorial_2">
        <p style="text-align: center;">
        <?php
                if (is_active_sidebar('footer_1')) {
                    dynamic_sidebar('footer_1');
                }
                ?>
</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">


            <div class="row">
                <div class="col-md-4 col-xs-4 col-sm-4 ">
                    <div class="footer-menu footer-border">
                        <ul>
                            <div class="menu-footer-menu-one-container">
                                <ul id="menu-footer-menu-one" class="menu">
                                <?php
                if (is_active_sidebar('footer_2')) {
                    dynamic_sidebar('footer_2');
                }
                ?>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4">
                    <div class="footer-menu footer-border">
                        <ul>
                            <div class="menu-footer-menu-two-container">
                                <ul id="menu-footer-menu-two" class="menu">
                                <?php
                if (is_active_sidebar('footer_3')) {
                    dynamic_sidebar('footer_3');
                }
                ?>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-4">
                    <div class="footer-menu footer-border">
                        <ul>
                            <div class="menu-footer-menu-three-container">
                                <ul id="menu-footer-menu-three" class="menu">
                                <?php
                if (is_active_sidebar('footer_4')) {
                    dynamic_sidebar('footer_4');
                }
                ?>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">

            <div class="text-center text-white">
                <h3>সম্পাদক</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 hidden-sm  footer-logo">
                    <a href="">
                        <img src="" alt="" width="100%"></a>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="btm-social">
                        <ul>
                        <?php
                if (is_active_sidebar('footer_5')) {
                    dynamic_sidebar('footer_5');
                }
                ?>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<div class="developer text-center">
    <div class="row">
        <div class="col-md-6">&copy; All right reserved by sakalerpata.com </div>
        <div class="col-md-6">Developed by Sankar Bala <br/><i class="fa fa-phone-square"></i> 01531827045</div>
    </div>

</div>


<div class="scrollToTop"><i class="fa fa-arrow-circle-up"></i></div>

</div>

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    let images = document.querySelectorAll(".lazyload");
    lazyload(images);


    $("#tab1").click(function () {
        $("#tab2").removeClass("active");
        $("#tab1").addClass("active");
    });

    $("#tab2").click(function () {
        $("#tab1").removeClass("active");
        $("#tab2").addClass("active");
    });


    $(".scrollToTop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });

</script>
</body>

</html>