<?php
/**
 * Template Name: 前台注册
 * 作者：露兜
 * 博客：http://www.ludou.org/
 *  
 *  2013年02月02日 ：
 *  首个版本
 */
 
if( !empty($_POST['ludou_reg']) ) {
  $error = '';
  $sanitized_user_login = sanitize_user( $_POST['user_login'] );
  $user_email = apply_filters( 'user_registration_email', $_POST['user_email'] );

  // Check the username
  if ( $sanitized_user_login == '' ) {
    $error .= '<strong>错误</strong>：请输入用户名。<br />';
  } elseif ( ! validate_username( $sanitized_user_login ) ) {
    $error .= '<strong>错误</strong>：此用户名包含无效字符，请输入有效的用户名<br />。';
    $sanitized_user_login = '';
  } elseif ( username_exists( $sanitized_user_login ) ) {
    $error .= '<strong>错误</strong>：该用户名已被注册，请再选择一个。<br />';
  }

  // Check the e-mail address
  if ( $user_email == '' ) {
    $error .= '<strong>错误</strong>：请填写电子邮件地址。<br />';
  } elseif ( ! is_email( $user_email ) ) {
    $error .= '<strong>错误</strong>：电子邮件地址不正确。！<br />';
    $user_email = '';
  } elseif ( email_exists( $user_email ) ) {
    $error .= '<strong>错误</strong>：该电子邮件地址已经被注册，请换一个。<br />';
  }
   
  // Check the password
  if(strlen($_POST['user_pass']) < 6)
    $error .= '<strong>错误</strong>：密码长度至少6位!<br />';
  elseif($_POST['user_pass'] != $_POST['user_pass2'])
    $error .= '<strong>错误</strong>：两次输入的密码必须一致!<br />';
     
    if($error == '') {
    $user_id = wp_create_user( $sanitized_user_login, $_POST['user_pass'], $user_email );
    //$user_id = wp_create_user_custom( $sanitized_user_login, $_POST['user_pass'], $user_email );
    if ( ! $user_id ) {
      $error .= sprintf( '<strong>错误</strong>：无法完成您的注册请求... 请联系<a href=\"mailto:%s\">管理员</a>！<br />', get_option( 'admin_email' ) );
    }
    else if (!is_user_logged_in()) {
      // 注册成功后跳转到站内其他页面，URL自行修改
	wp_safe_redirect( 'http://localhost/agriculture_fr' );
    }
  }
}
get_header();
if ($tempera_frontpage=="Enable" && is_front_page()): get_template_part( 'frontpage' );
else :
?>
		<section id="container" class="<?php echo tempera_get_layout_class(); ?>">

			<div id="content" role="main">
			<?php //cryout_before_content_hook(); ?>
           
			
		   <?php if ( have_posts()  ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<div class="entry-content">
						<?php the_content(); ?>
                        <?php if(!empty($error)) {
                        echo '<p class="ludou-error">'.$error.'</p>';
                         }
                        if (!is_user_logged_in()) { ?>
<form name="registerform" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" class="ludou-reg">
    <p>
      <label for="user_login">用户名<br />
        <input type="text" name="user_login" id="user_login" class="input" value="<?php if(!empty($sanitized_user_login)) echo $sanitized_user_login; ?>" size="20" />
      </label>
    </p>

    <p>
      <label for="user_email">电子邮件<br />
        <input type="text" name="user_email" id="user_email" class="input" value="<?php if(!empty($user_email)) echo $user_email; ?>" size="25" />
      </label>
    </p>
   
    <p>
      <label for="user_pwd1">密码(至少6位)<br />
        <input id="user_pwd1" class="input" type="password" tabindex="21" size="25" value="" name="user_pass" />
      </label>
    </p>
   
    <p>
      <label for="user_pwd2">重复密码<br />
        <input id="user_pwd2" class="input" type="password" tabindex="21" size="25" value="" name="user_pass2" />
      </label>
    </p>
   
    <p class="submit">
      <input type="hidden" name="ludou_reg" value="ok" />
      <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="注册" />
    </p>
</form>
<?php } else {
 echo '<p class="ludou-error">您已注册成功，并已登录！</p>';
} ?>
		<div style="clear:both;"></div>
						<?php //wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'tempera' ), 'after' => '</div>' ) ); ?>
						<?php //edit_post_link( __( 'Edit', 'tempera' ), '<span class="edit-link"><i class="icon-edit"></i> ', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php  //comments_template( '', true );
				endwhile; ?>
            
			<?php cryout_after_content_hook(); ?>
			</div><!-- #content -->
			<?php tempera_get_sidebar(); ?>
		</section><!-- #container -->


<?php
endif;
get_footer();
?>
