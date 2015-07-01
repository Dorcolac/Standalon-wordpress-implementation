<?php
/**
 * The template for displaying all single posts.
 *
 * @package Standalone
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
   
    <section class="maincontent-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="maincotnent shadow-z-1">
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse">
                                    <?php wp_nav_menu(array(
                                        'theme_location'  => 'primary',
                                        'menu_class'      => 'nav navbar-nav',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                        )); ?>
                                    </div>    
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="article-list">
                                        <div class="entry-title text-center">
                                            <p><?php the_category(" ");?></p>
                                            <h2><?php echo get_the_title(); ?></h2>
                                        </div>
                                        
                                        <?php
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                        $thumb_url = $thumb_url_array[0];
                                        ?>
                                        
                                        <div class="article-featured-content shadow-z-2">
                                            <?php if(get_field('video')){
                                                ?>
                                                
                                                <?php if (get_field('source')=="YouTube"):
                                                ?>
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="http://youtube.com/embed/<?php echo get_field('video') ?>" width="500" height="281"></iframe>
                                                </div>
                                                
                                            <?php else:
                                            
                                            ?>
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="https://player.vimeo.com/video/<?php echo get_field('video') ?>?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                            
                                        <?php endif;
                                    } else { ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('post-thumbnail', array(
                                            "class" => "img-responsive"
                                            )); ?>
                                        </a>
                                        <?php } ?>
                                    </div>
                                    
                                    
                                    
                                    <div class="entry-content">
                                        <?php echo get_the_content(); ?>
                                    </div>
                                    
                                    <div class="entry-bottom">
                                        <p><span class="post-tags"> <?php echo get_the_tag_list('<strong><i class="fa fa-tags"></i> Tags: </strong>',', ','</span>'); ?> <span class="post-share"><i class="fa fa-share-alt"></i> Share with friends</span></p>
                                    </div>
                                    
                                    
                                    
                                    <div class="post-author-meta">
                                        <div class="author-photo">
                                            <?php echo get_avatar(get_the_author_meta( 'ID' )); ?>
                                        </div>
                                        
                                        <div class="author-right-info">
                                            <h2><?php echo get_the_author(); ?></h2>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                            <p><a href="http://wpexpand.com">http://wpexpand.com</a></p>
                                        </div>
                                    </div>

                                    <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                    ?>
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                
                
            <?php endwhile; // End of the loop. ?>
            
            
            <?php get_footer(); ?>