<div class="jumbotron feature">
		<div class="container">
			<h1><span class="glyphicon glyphicon-equalizer"></span> Dramatically Engage</h1>
			<p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
			<p><a class="btn btn-default" href="#">Engage Now</a></p>
		</div>
	</div>

    <!-- Content -->
    <div class="container">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Superior Collaboration
                    <small>Visualize Quality</small>
                </h1>
                <p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p>
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