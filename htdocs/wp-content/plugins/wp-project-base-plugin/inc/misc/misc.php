<?php

/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */

function mbdmaster324_login_redirect( $redirect_to, $request, $user ) {
  //is there a user to check?
  if ( isset( $user->roles ) && is_array( $user->roles ) ) {
    //check for admins
    if ( in_array( 'administrator', $user->roles ) ) {
      // redirect them to the default place
      return $redirect_to;
    } else {
      return home_url();
    }
  } else {
    return $redirect_to;
  }
}
add_filter( 'login_redirect', 'mbdmaster324_login_redirect', 10, 3 ); 


function mbdmaster324_wsl_use_squircles_icons( $provider_id, $provider_name, $authenticate_url )
{
    ?>
        <a 
           rel           = "nofollow"
           href          = "<?php echo $authenticate_url; ?>"
           data-provider = "<?php echo $provider_id ?>"
           class         = "wp-social-login-provider wp-social-login-provider-<?php echo strtolower( $provider_id ); ?>" 
         >
            <span class="fa-stack fa-3x">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-<?php echo strtolower( $provider_id ); ?> fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    <?php
}
  
add_filter( 'wsl_render_auth_widget_alter_provider_icon_markup', 'mbdmaster324_wsl_use_squircles_icons', 10, 3 );

function mbdmaster324_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'mbdmaster324_archive_title' );

function custom_query_vars( $query ) {
  
  if ( !is_admin() && $query->is_main_query() ) {
    
    if ( is_tax( 'resource' ) ) {
      $query->set( 'posts_per_page', '-1' );
      $query->set( 'orderby', 'menu_order' );
      $query->set( 'order', 'ASC' );
    }

    if ( is_tax( 'section' ) ) {
      $query->set( 'posts_per_page', '-1' );
      $query->set( 'orderby', 'menu_order' );
      $query->set( 'order', 'ASC' );
    }
    
    if ( get_post_type() == 'content_cpt' ) {
      $query->set( 'posts_per_page', '-1' );
      $query->set( 'orderby', 'menu_order' );
      $query->set( 'order', 'ASC' );
    }

  }
  return $query;
}
add_action( 'pre_get_posts', 'custom_query_vars' );