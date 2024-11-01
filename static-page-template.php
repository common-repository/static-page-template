<?php
/*
Plugin Name: Static Page Template
Description: If a page has a custom field named staticpagetemplate, only the page content(html) is sent to browser.
Author: Amit Kumar Karmakar
Version: 0.0.1
*/

add_filter( 'template_include', 'static_page_template' );
 
function need_switch()
{
  if ( is_single() or is_page() )
  {
    global $post;
    return get_post_meta( $post->ID, 'staticpagetemplate', true );
  }
  return '';
}


function static_page_template( $original_template ) {
  if (need_switch() != '') {
    return dirname(__FILE__) . '/page.php';
  } else {
    return $original_template;
  }
}

?>
