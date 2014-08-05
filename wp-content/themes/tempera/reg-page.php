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
  $test = $_POST['test'];
  
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
    $user_id = wp_create_user( $sanitized_user_login, $_POST['user_pass'], $user_email, $test );
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
						
                        <?php 
                        if (!is_user_logged_in()) { ?>
<<div id="focus">
		<ul>
			<li><a href="#" target="_blank"><img src="wp-content/themes/tempera/images/slider/tempera-slide1.jpg" alt="" /></a></li>
			<li><a href="#" target="_blank"><img src="wp-content/themes/tempera/images/slider/tempera-slide2.jpg" alt="" /></a></li>
			<li><a href="#" target="_blank"><img src="wp-content/themes/tempera/images/slider/tempera-slide3.jpg" alt="" /></a></li>
			<li><a href="#" target="_blank"><img src="wp-content/themes/tempera/images/slider/tempera-slide4.jpg" alt="" /></a></li>
		</ul>
</div>
<div class="main">            
<div id="frontpage" >
<div id="pp-afterslider" style="height:2020px;">
<div style="padding-left:10%;padding-top:5%;">
<div class="lianxi1">
	<img src="images/picture32.png">
        <form id="reg" method="post" action="regSuccess" name="form1">
             
          <div class="b7">
                <div class="b5" align="left"><img src="images/picture131.png"><input type="text" size="30" name="user"  style="margin-left:60px;"/><span id="tishi1" style="font-size:12px;"></span></div>
                <div class="b5" align="left"><img src="images/picture115.png"><input type="text" size="30" name="email"  style="margin-left:38px;" /><span id="tishi2" style="font-size:12px;"></span></div>
                <div class="b5" align="left"><img src="images/picture113.png"><input type="password" size="30" name="pass"  style="margin-left:47px;" /><span id="tishi3" style="font-size:12px;"></span></div>
                <div class="b5" align="left"><img src="images/picture110.png"><input type="password" size="30" name="pass2"  style="margin-left:47px;" /><span id="tishi4" style="font-size:12px;"></span></div>
                <div style="height:20px;"></div>
 
           </div>
           <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
           <div style="height:10px;"></div>
          <div class="b7">
            <div class="b5" align="left"><img src="images/picture127.png"><select name="club" style="margin-left:45px;"><option value="shanghai">上海</option></select></div>
          </div>
          <div style="height:10px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture126.png"><br />
          <input type="radio" value="1" name="hangye" checked="checked"><font color="#666666">独立代理</font><br />
          <input type="radio" value="2" name="hangye"><font color="#666666">进口商、分销商</font><br />
          <input type="radio" value="3" name="hangye"><font color="#666666">超市</font><br />
          <input type="radio" value="4" name="hangye"><font color="#666666">餐饮行业</font><br />
          <input type="radio" value="5" name="hangye"><font color="#666666">媒体</font><br />
          <input type="radio" value="6" name="hangye"><font color="#666666">爱好者</font><br />
          <input type="hidden" name="hangye2" />
          <input type="radio"  name="hangye" value="7" ><font color="#666666">其它&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="text" id="other1" size="40" readonly="readonly" name="other1" onchange="sendContent('other1')"><br />
          </div>
          <div style="height:10px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture130.png" /><input type="text" name="companyChineseName" size="32"/><span id="tishi5" style="font-size:12px;"></span><br />
          <div style="height:5px;"></div>
          <img src="images/picture117.png" /><input type="text" name="companyEnglishName" size="32"/><span id="tishi6" style="font-size:12px;"></span><br />
          <div style="height:10px;"></div>
          <img src="images/picture111.png"><br />
          <input type="radio" value="1" name="scale" checked="checked" /><font color="#666666">1-20人</font><div style="width:120px;display:inline-block;">&nbsp;</div><input type="radio" value="4" name="scale" /><font color="#666666">100-250人</font><br />
          <input type="radio" value="2" name="scale" /><font color="#666666">20-50人</font><div style="width:113px;display:inline-block;">&nbsp;</div><input type="radio" value="5" name="scale" /><font color="#666666">250-400人</font><br />
          <input type="radio" value="3" name="scale" /><font color="#666666">50-100人</font><div style="width:105px;display:inline-block;">&nbsp;</div><input type="radio" value="6" name="scale" /><font color="#666666">400人以上</font><br />
          <div style="height:15px;"></div>
          <img src="images/picture125.png" /><div style="width:45px;display:inline-block;">&nbsp;</div><input type="text" name="companyHomepage" size="32"/><br />
          </div>
          <div style="height:15px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture129.png"><br />
          <input type="text" size="52" name="chineseName"><span id="tishi7" style="font-size:12px;"></span>
          <div style="height:15px;"></div>
          <img src="images/picture116.png"><br />
          <img src="images/picture114.png"><div style="width:5px;display:inline-block;">&nbsp;</div><input type="text" size="18" name="firstName"><div style="width:30px;display:inline-block;">&nbsp;</div> <img src="images/picture112.png"><div style="width:5px;display:inline-block;">&nbsp;</div><input type="text" size="18" name="secondName"><span id="tishi8" style="font-size:12px;"></span><br/>
          <div style="height:15px;"></div>
          <img src="images/picture128.png"><br />
          <input type="radio" value="1" name="job" checked="checked"><font color="#666666">首席执行官/主席</font><div style="width:120px;display:inline-block;">&nbsp;</div><input type="radio" value="2" name="job"><font color="#666666">市场经理</font><br />
          <input type="radio" value="3" name="job"><font color="#666666">总经理</font><div style="width:180px;display:inline-block;">&nbsp;</div><input type="radio" value="4" name="job"><font color="#666666">销售</font><br />
          <input type="radio" value="5" name="job"><font color="#666666">品牌经理</font><div style="width:165px;display:inline-block;">&nbsp;</div><input type="radio" value="6" name="job"><font color="#666666">采购</font><br />
          <input type="radio" value="7" name="job"><font color="#666666">产品经理</font><div style="width:165px;display:inline-block;">&nbsp;</div><input type="radio" value="8" name="job"><font color="#666666">编辑</font><br />
          <input type="radio" value="9" name="job"><font color="#666666">销售经理</font><div style="width:165px;display:inline-block;">&nbsp;</div><input type="radio" value="10" name="job"><font color="#666666">记者</font><br />
          <input type="hidden" name="job2">
          <input type="radio"  name="job" value="11"><font color="#666666">其它&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="text" id="other2" size="36" readonly="readonly" onchange="sendContent('other2')"><br />
          <div style="height:15px;"></div>
          <img src="images/picture124.png" /><div style="width:45px;display:inline-block;">&nbsp;</div><input type="text" name="phone" size="35" /><span id="tishi9" style="font-size:12px;"></span><br />
          <div style="height:15px;"></div>
          <img src="images/picture123.png" /><div style="width:62px;display:inline-block;">&nbsp;</div><input type="text" name="tax" size="35"/><br />
          <div style="height:15px;"></div>
          <img src="images/picture122.png" /><div style="width:15px;display:inline-block;">&nbsp;</div><input type="text" name="mobilephone" size="35"/><span id="tishi10" style="font-size:12px;"></span><br />
          </div>
          <div style="height:15px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture121.png"><br />
         <textarea name="addressChinese" cols="50" value="" ></textarea><span id="tishi11" style="font-size:12px;"></span>
         <div style="height:15px;"></div>
         <img src="images/picture120.png"><br />
         <textarea name="addressEnglish" cols="50" value="" ></textarea><span id="tishi12" style="font-size:12px;"></span>
          <div style="height:15px;"></div>
          <img src="images/picture119.png"><br />
          <input type="text" size="50" name="code"><span id="tishi13" style="font-size:12px;"></span>
          </div>
          <div style="height:15px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture118.png"><br />
          <input type="checkbox" value="1" name="interesting">
            <font color="#666666">葡萄酒及烈酒</font>
          <div style="width:120px;display:inline-block;">&nbsp;</div><input type="checkbox" value="2" name="interesting">
          <font color="#666666">谷物制品</font><br />
          <input type="checkbox" value="3" name="interesting">
          <font color="#666666">乳制品</font>
          <div style="width:162px;display:inline-block;">&nbsp;</div><input type="checkbox" value="4" name="interesting">
          <font color="#666666">糖果</font><br />
          <input type="checkbox" value="5" name="interesting">
          <font color="#666666">水产</font>
          <div style="width:176px;display:inline-block;">&nbsp;</div><input type="checkbox" value="6" name="interesting">
          <font color="#666666">饮料</font><br />
          <input type="checkbox" value="7" name="interesting">
          <font color="#666666">蔬菜</font>
          <div style="width:177px;display:inline-block;">&nbsp;</div><input type="checkbox" value="8" name="interesting">
          <font color="#666666">香料、油、调味品等</font><br />
          <input type="checkbox" value="9" name="interesting">
          <font color="#666666">肉制品</font>
          <div style="width:163px;display:inline-block;">&nbsp;</div><input type="checkbox" value="10" name="interesting">
          <font color="#666666">方便及半成品</font><br />
          <div style="height:15px;"></div>
          </div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <input type="checkbox" onclick="changeState();" name="checkDone" /><img src="images/picture53.png"><br />
           <div style="height:15px;"></div>
           <input type="hidden" name="canSubmit" value="success" />
          <img src="images/picture55.png" onclick="checkRegAndPost();" id="done" />
          </div>
        </form>
    </div>
    
    
 <div class="buchong1"><img src="images/picture34.png"></div>
</div>
 
</div>
</div> <!-- #pp-afterslider -->

</div> <!-- #frontpage -->
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
