<?php
/**
* The default header file
*/
?>

<!DOCTYPE html>
<html>
  <head>
    <title>easydevtuts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>
  </head>
  <body>
	<div id="wrap">
		<!-- header: main-nav -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
						  <h1><a href="#">easydevtuts</a> <small>web development tutorials</small></h1>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="navbar">
          <div class="navbar-inner">
            <?php
              wp_nav_menu(array(
                'menu'            => 'main-nav',
                'container_class' => 'container',
                'menu_class'      => 'nav'
              ));
            ?>
          </div>
        </div>
		<!-- end of header -->
