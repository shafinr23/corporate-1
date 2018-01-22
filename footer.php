<footer>
		<div class="footer-blurb">
			<div class="container">
				<div class="row">
					<?php
					 $slidermy = NEW WP_Query(array(
						'post_type'			 => array('foot'),
						'posts_per_page'	=> 3,
						));
				while($slidermy->have_posts()):$slidermy->the_post(); ?>

					<div class="col-sm-4 footer-blurb-item">
						<h3><span class="glyphicon glyphicon-fire"></span> <?php the_title();?></h3>
						<p><?php the_content(); ?></p>

						<?php 
						$button = get_post_meta(get_the_ID(),'button_name',true);
						if ($button==true) {?>
							<p><a class="btn btn-default" href="#"><?php echo $button ?></a></p>
						
						<?php
					}?>
						
					</div>


				<?php
				endwhile;

					?>

					

					

				</div>
				<!-- /.row -->	
			</div>
        </div>
        
        <div class="small-print">
        	<div class="container">
        		 <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p> 

        		<?php  wp_nav_menu(array(
        			'theme_location' => 'foot',
        			'container' => 'div',
                    'container_class' => 'small-print',
        		)); ?>



        		<p>Copyright &copy; Example.com 2015 </p>
        	</div>
        </div>
	</footer>

	
   
	<?php wp_footer(); ?>
</body>

</html>
