<?php

wp_register_style('fontawesome.min', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
wp_enqueue_style('fontawesome.min');

wp_register_style('bootstrap.min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
wp_enqueue_style('bootstrap.min');

wp_register_script('popper.min', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
wp_enqueue_script('popper.min');

wp_register_script('jquery.min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
wp_enqueue_script('jquery.min');


wp_register_script('bootstrap.min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
wp_enqueue_script('bootstrap.min');




?>
<div class="container-fluid">
    <div class="col-12">

        <h2 class=" text-info m-3">Theme setup page</h2>
        <hr class="bg-info"/>

        <div class="content">

        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#layout">Layout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#social">Social</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#custom">Custom</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <div id="layout" class="tab-pane active"><br/>
                <h3>HOME</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>

            <div id="social" class=" tab-pane fade"><br/>
                <div class="col-md-6">
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Facebook page</span>
                        </div>
                        <input type="text" class="form-control" name="fb_link" value="<?php echo get_option('fb_link');?>"/>
                    </div>
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Twitter profile</span>
                        </div>
                        <input type="text" class="form-control" name="tw_link" value="<?php echo get_option('tw_link');?>"/>
                   </div>
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Instagram profile</span>
                        </div>
                        <input type="text" class="form-control" name="ig_link" value="<?php echo get_option('ig_link');?>"/>
                   </div>
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Youtube channel</span>
                        </div>
                        <input type="text" class="form-control" name="yt_link" value="<?php echo get_option('yt_link');?>"/>
                  </div>
                </div>
            </div>

            <div id="custom" class=" tab-pane fade"><br/>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam.</p>
            </div>

        </div>

        </div>

        <div class="col-md-6">

            <input class="btn btn-success float-right" type="button" value="Save"/>
        </div>

    </div>
</div>


<style>
.input-group-prepend {
    width: 140px;
}
.input-group-text {
    width: 135px;
}
.content {
    height: 500px;
}
</style>