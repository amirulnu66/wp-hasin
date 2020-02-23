<?php get_header(); ?>
<body <?php body_class();?>>
<?php get_template_part('hero');?>
    <div class="col-md-12">
        <?php
        wp_nav_menu(array(
            "theme_location"=>"topmenu",
            "menu_id"=>"topmenucontaniar",
            "menu_class"=>"list-inline text-center"
        ))

        ?>
    </div>
<div class="posts">
    <?php 
        while(have_posts()):

        the_post();
    ?>
    <div class="post" <?php post_class();?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></h2></a>
                </div>


            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(); ?></strong><br/>
                        <?php echo get_the_date(); ?>
                    </>
                    <?php echo get_the_tag_list( "<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>" ); ?>
                </div>
                <div class="col-md-8">
                    <p>

                        <?php

                        if(has_post_thumbnail()){
                            $thumbnails = get_the_post_thumbnail_url(null, 'large');
                            printf('<a href="%s" data-featherlight="image">', $thumbnails );
                            the_post_thumbnail('large', array('class'=>'img-fluid'));
                            echo '</a>';
                        }
                        ?>

                    </p>
                    <p>
                        <?php
                            if(is_single()){
                                the_content();
                            }else{
                                the_excerpt();
                            }
                        ?>
                    </p>

                </div>
            </div>

        </div>
    </div>

<?php
    endwhile;
?>

    <div class="container post-pagination">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <?php
                    the_posts_pagination(array(
                    'screen-reader-text' =>''

                    ));
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>