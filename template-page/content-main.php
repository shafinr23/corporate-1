<?php

 global $corporate;
?>
    <!-- Content -->
    <div class="container">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12"  >
                <h1 class="page-header"><?php echo $corporate['blogsf'];?>
                    <small><?php echo $corporate['blogsfs'];?></small>
                </h1>
                <p><?php echo $corporate['blogsfc'];?></p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->



        <?php
                $postQ = NEW WP_Query(array(

                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ));
        ?>
        <div class="row">
                 <?php
                if($postQ->have_posts()):
                while($postQ->have_posts()):$postQ->the_post();
                ?>
                 <article class="col-md-4 article-intro">
                <a href="#">
                    <img class="img-responsive img-rounded" style="width: 300px; height: 300px;" src="<?php the_post_thumbnail_url(); ?>" alt="">
                </a>
                <h3>
                    <a href=""><?php the_title(); ?></a>
                </h3>
                <p> 
                    <?php the_content(); ?>
                        
                </p>
                </article>
                
                <?php
                //echo '<h1>'.get_the_title().'</h1></br>';
               // echo '<p>'.the_content().'</p></br>';
                endwhile;
                 wp_reset_postdata();
                else:
                 echo 'nothing found';
                endif;
                ?>
                
            
            </div>
                <!-- /.row -->
        

    </div>
    <!-- /.container -->