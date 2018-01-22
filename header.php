<?php 
 global $corporate;
?>
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Corporate 1</title>

<?php wp_head(); ?>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                    <a class="navbar-brand" href="#">
                        <span class="logo">
                            
                            <img src="<?php echo $corporate['logo']['url']; ?>"  style="width: 60px; height: 40px;" alt="">
                        </span>
                      </a>

            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                 <!-- <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
					
                </ul>  -->

                <?php  wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbar',
                    'menu_class' => 'nav navbar-nav '

                )); ?>

				<!-- Search -->
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="jumbotron feature" style="background-color:<?php echo $corporate['header_bgc'];?>; color:<?php echo $corporate['header_text_c'];?> ;">
        <div class="container">
            <h1><span class="glyphicon glyphicon-equalizer"></span> <?php echo $corporate['header_text'];?></h1>
            <p><?php echo $corporate['header_sub'];?></p>
            <p><a class="btn btn-default" href="#"><?php echo $corporate['buttont'];?></a></p>
        </div>
    </div>
