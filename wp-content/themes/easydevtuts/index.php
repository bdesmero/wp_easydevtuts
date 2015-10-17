<?php get_header(); ?>

	<!-- main home content -->
	<div id="main-content" class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="hero-unit well">
			        <h1>Easy WordPress Development</h1>
			        <p>This template was developed for a tutorial series about WordPress development. You can find the series on <a href="http://www.youtube.com/easydevtuts" target="_blank">YouTube</a></p>
			        <p><a href="http://www.easydevtuts.com" target="_blank" class="btn btn-inverse btn-large">Learn more »</a></p>
		      	</div>
		    </div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<ul class="nav nav-pills">
				  <li class="active"><a href="#tab-one" data-toggle="tab">Tutorials</a></li>
				  <li ><a href="#tab-two" data-toggle="tab">Blog</a></li>
				  <li ><a href="#tab-three" data-toggle="tab">Categories</a></li>
				</ul>
				<div id="home-tab-container" class="tab-content well">
				  <div class="tab-pane fade active in" id="tab-one">
				  	<h3>List of Tutorials</h3>
				    <ol>
				    	<li><a href="#">Tutorials Post</a></li>
				    	<li><a href="#">Tutorials Post</a></li>
				    	<li><a href="#">Tutorials Post</a></li>
				    	<li><a href="#">Tutorials Post</a></li>
				    	<li><a href="#">Tutorials Post</a></li>
				    </ol>
				  </div>
				  <div class="tab-pane fade" id="tab-two">
				  	<h3>List of Blog Postings</h3>
				    <ol>
				    	<li><a href="#">Recent Post</a></li>
				    	<li><a href="#">Recent Post</a></li>
				    	<li><a href="#">Recent Post</a></li>
				    	<li><a href="#">Recent Post</a></li>
				    	<li><a href="#">Recent Post</a></li>
				    </ol>
				  </div>
				  <div class="tab-pane fade" id="tab-three">
				  	<h3>List of Categories</h3>
				    <ol>
				    	<li><a href="#">Recent Post</a></li>
				    	<li><a href="#">Recent Post</a></li>
				    	<li><a href="#">Recent Post</a></li>
				    	<li><a href="#">Recent Post</a></li>
				    	<li><a href="#">Recent Post</a></li>
				    </ol>
				  </div>
				</div>
			</div>

			<div class="col-md-8">
				<div id="slider" class="carousel slide hidden-phone">
					<div class="carousel-inner">
						<div class="item active">
							<img src="http://placehold.it/800x400&text=easy" alt="#">
							<div class="carousel-caption  hidden-phone">
								<h4>First Slide Title</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="item">
							<img src="http://placehold.it/800x400&text=dev" alt="#">
							<div class="carousel-caption hidden-phone">
								<h4>Second Slide Title</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="item">
							<img src="http://placehold.it/800x400&text=tuts" alt="#">
							<div class="carousel-caption hidden-phone">
								<h4>Third Slide Title</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
					</div>
					<ol class="carousel-indicators">
						<li data-target="#slider" data-slide-to="0" class="active"></li>
						<li data-target="#slider" data-slide-to="1" ></li>
						<li data-target="#slider" data-slide-to="2" ></li>
					</ol>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul class="thumbnails">
					<li class="col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/300x200">
							<div class="caption">
								<h3><a href="#">Post Title</a></h3>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a href="#" class="btn btn-mini">read more</a></p>
							</div>
						</div>
					</li>
					<li class="col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/300x200">
								<div class="caption">
								<h3><a href="#">Post Title</a></h3>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a href="#" class="btn btn-mini">read more</a></p>
							</div>
						</div>
					</li>
					<li class="col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/300x200">
							<div class="caption">
								<h3><a href="#">Post Title</a></h3>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a href="#" class="btn btn-mini">read more</a></p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end of main home content -->

  <?php get_footer(); ?>
