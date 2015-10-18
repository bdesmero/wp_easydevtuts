<?php

/**
* Load CSS and Javascript
*/

function load_styles_and_scripts() {

  // load styles
  wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');

  // load scripts
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
  wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js');

}
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/**
* Bootstrap comment template
*/
function comments_feed_template_callback($comment, $args, $depth) {
  $GLOBAL['comment'] = $comment;

  ?>

    <div class="media">
      <a href="<?php echo get_comment_author_url(); ?>" class="pull-left">
        <?php echo get_avatar($comment); ?>
      </a>

      <div class="media-body">
        <h5 class="media-heading">
          <a href="<?php echo get_comment_author_url(); ?>">
            <?php echo get_comment_author(); ?>
          </a>
          <small>
            <?php comment_date(); ?> at <?php comment_time(); ?>
          </small>
        </h5>

        <?php comment_text(); ?>

        <?php
          comment_reply_link( array_merge($args, array(
            'reply_text' => __('<strong>reply</strong> <i class="icon-share-alt"></i>'),
            'depth' => $depth,
            'max-depth' => $args['max_depth']
          )));
        ?>
      </div>
    </div>

  <?php
}

/**
* Register main nav
*/

register_nav_menus(array(
	'main-nav' => 'Main navigation'
));

/**
* Register sidebar
*/

register_sidebar(array(
  'name'          => 'main-sidebar',
  'id'            => 'sidebar-1',
  'description'   => 'This is the main sidebar',
  'before_widget' => '<div class="span4">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>'
));

/**
* Add thumbnail feature
*/

add_theme_support('post-thumbnails');

/**
* Filter for adding class to avatar thumbnail
*/

add_filter('get_avatar', 'add_avatar_class');

function add_avatar_class($class) {
  $class = str_replace("class='avatar", "class='img-circle", $class);
  return $class;
}

/**
* Add bootstrap btn style to reply link
*/

add_filter('comment_reply_link', 'add_reply_link_class');

function add_reply_link_class($class) {
  $class = str_replace("class='comment-reply-link", "class='btn btn-default btn-xs pull-right", $class);
  return $class;
}

?>
