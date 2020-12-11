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



<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
    <input type="hidden" name="action" value="theme-setup"/>
    <div class="container-fluid">
        <div class="col-12">

            <h2 class=" text-info m-3">Theme setup</h2>
            <hr class="bg-info"/>

            <div class="content">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#layout">Difine Layout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#social">Social link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#word">Words</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div id="layout" class="tab-pane active"><br/>
                        <div class="row">
                            <div class="col-md-6">
                                <?php for ($i = 1; $i < 15; $i++) {
                                    ?>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><?php echo "Section $i" ?></span>
                                        </div>
                                        <select class="form-control" name="<?php echo 'section_' . $i; ?>">
                                            <option value="null">Hide the section</option>
                                            <option value="0">Select category</option>
                                            <?php
                                            $categories = get_categories();
                                            foreach ($categories as $category) {
                                                if ($category->term_id == get_option('section_' . $i)) {
                                                    echo "<option value='$category->term_id' selected>$category->name </option>";
                                                } else {
                                                    echo "<option value='$category->term_id'>$category->name </option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <?php
                                    echo "</div><div class='col-md-6'>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div id="social" class=" tab-pane fade"><br/>
                        <div class="col-md-6">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Facebook page</span>
                                </div>
                                <input type="text" class="form-control" name="fb_link"
                                       value="<?php echo get_option('fb_link'); ?>"/>
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Twitter profile</span>
                                </div>
                                <input type="text" class="form-control" name="tw_link"
                                       value="<?php echo get_option('tw_link'); ?>"/>
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Instagram profile</span>
                                </div>
                                <input type="text" class="form-control" name="ig_link"
                                       value="<?php echo get_option('ig_link'); ?>"/>
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Youtube channel</span>
                                </div>
                                <input type="text" class="form-control" name="yt_link"
                                       value="<?php echo get_option('yt_link'); ?>"/>
                            </div>
                        </div>
                    </div>

                    <div id="word" class=" tab-pane fade"><br/>

                        <div class="col-md-6">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Headlines</span>
                                </div>
                                <input type="text" class="form-control" name="headline_string"
                                       value="<?php echo get_option('headline_string'); ?>"/>
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Latest</span>
                                </div>
                                <input type="text" class="form-control" name="latest_string"
                                       value="<?php echo get_option('latest_string'); ?>"/>
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Popular</span>
                                </div>
                                <input type="text" class="form-control" name="popular_string"
                                       value="<?php echo get_option('popular_string'); ?>"/>
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Read more</span>
                                </div>
                                <input type="text" class="form-control" name="read_more"
                                       value="<?php echo get_option('read_more'); ?>"/>
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">More news</span>
                                </div>
                                <input type="text" class="form-control" name="more_news"
                                       value="<?php echo get_option('more_news'); ?>"/>
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Search</span>
                                </div>
                                <input type="text" class="form-control" name="not_found"
                                       value="<?php echo get_option('not_found'); ?>"/>
                            </div> <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Not found</span>
                                </div>
                                <input type="text" class="form-control" name="may_be_like"
                                       value="<?php echo get_option('may_be_like'); ?>"/>
                            </div> <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">May be like</span>
                                </div>
                                <input type="text" class="form-control" name="search_string"
                                       value="<?php echo get_option('search_string'); ?>"/>
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Serial list</span>
                                </div>
                                <input type="text" class="form-control" name="serial_string"
                                       value="<?php echo get_option('serial_string'); ?>"/>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-6">
                <span class="float-right">
                <?php submit_button(); ?>
                </span>
            </div>

        </div>
    </div>
</form>

<style>
    .input-group-prepend {
        width: 140px;
    }

    .input-group-text {
        width: 135px;
    }

    .content {
        /*height: 500px;*/
    }
</style>