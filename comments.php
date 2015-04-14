<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentythirteen' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>


	<?php 
// $args = array(
// 	'fields' => apply_filters(
// 		'comment_form_default_fields', array(





// 			// 'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="Your Name (No Keywords)" name="author" type="text" value="' .
// 			// 	esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
// 			// 	'<label for="author">' . __( 'Your Name' ) . '</label> ' .
// 			// 	( $req ? '<span class="required">*</span>' : '' )  .
// 			// 	'</p>'
// 'author' =>
//     '<div class="field_text"><label for="name" class="label_title">' . __( 'Name', 'domainreference' ) . '</label> ' .
//     ( $req ? '<span class="required">*</span>' : '' ) .
//     '<input type="text" name="name" id="name"  class="inputtext input_middle required no-radius" value="' . esc_attr( $commenter['comment_author'] ) .
//     '" size="30"' . $aria_req . ' /></div>'




// 				,
// 			'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="your-real-email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
// 				'" size="30"' . $aria_req . ' />'  .
// 				'<label for="email">' . __( 'Your Email' ) . '</label> ' .
// 				( $req ? '<span class="required">*</span>' : '' ) 
// 				 .
// 				'</p>',
// 			'url'    => '<p class="comment-form-url">' .
// 			 '<input id="url" name="url" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
// 			'<label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
// 	           '</p>'
// 		)
// 	),
// 	'comment_field' => '<p class="comment-form-comment">' .
// 		'<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .
// 		'<textarea id="comment" name="comment" placeholder="Express your thoughts, idea or write a feedback by clicking here & start an awesome comment" cols="45" rows="8" aria-required="true"></textarea>' .
// 		'</p>',
//     'comment_notes_after' => '',
//     'title_reply' => '<div class="crunchify-text"> <h5>Please Post Your Comments & Reviews</h5></div>'
// );


 ?>


 <!--form define-->

 <?php 

// $commenter = wp_get_current_commenter();
// $req = get_option( 'require_name_email' );
// $aria_req = ( $req ? " aria-required='true'" : '' );

// $fields =  array(

//   'author' =>
//     '<div class="field_text"><label for="name" class="label_title">' . __( 'Name', 'domainreference' ) . '</label> ' .
//     ( $req ? '<span class="required">*</span>' : '' ) .
//     '<input type="text" name="name" id="name" class="inputtext input_middle required no-radius" value="' . esc_attr( $commenter['comment_author'] ) .
//     '" size="30"' . $aria_req . ' /></div>',

//   'email' =>
//     '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
//     ( $req ? '<span class="required">*</span>' : '' ) .
//     '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
//     '" size="30"' . $aria_req . ' /></p>',

//   'url' =>
//     '<p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
//     '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
//     '" size="30" /></p>',
// );
// apply_filters( 'comment_form_default_fields', $fields )
 ?>



<?php 

// $commenter = wp_get_current_commenter();
// $req = get_option( 'require_name_email' );
// $aria_req = ( $req ? " aria-required='true'" : '' );
// $args = array(
//   'id_form'           => 'commentform',
//   'id_submit'         => 'submit',
//   'class_submit'      => 'submit',
//   'name_submit'       => 'submit',
//   'title_reply'       => __( 'Leave a Reply' ),
//   'title_reply_to'    => __( 'Leave a Reply to %s' ),
//   'cancel_reply_link' => __( 'Cancel Reply' ),
//   'label_submit'      => __( 'Post afsdf' ),
//   'format'            => 'xhtml',


//   'comment_field' =>  '<div class="field_text field_textarea"><label for="comment" class="label_title">' . _x( 'Comment', 'noun' ) .'</label><textarea cols="30" rows="10" name="comment" id="comment" class="textarea textarea_middle required no-radius">' .
//     '</textarea></div><div class="clear"></div>',

//   'must_log_in' => '<p class="must-log-in">' .
//     sprintf(
//       __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
//       wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
//     ) . '</p>',

//   'logged_in_as' => '<p class="logged-in-as">' .
//     sprintf(
//     __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
//       admin_url( 'profile.php' ),
//       $user_identity,
//       wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
//     ) . '</p>',

//   'comment_notes_before' => '<p class="comment-notes">' .
//     __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
//     '</p>',

//   'comment_notes_after' => '<p class="form-allowed-tags">' .
//     sprintf(
//       __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
//       ' <code>' . allowed_tags() . '</code>'
//     ) . '</p>',

//   'fields' => apply_filters( 'comment_form_default_fields', $fields ),
// );

// comment_form($args); ?>
<?php	$args = array(  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',
  
 'comment_notes_before' => '<p class="comment-notes">' .
    __( '时光机器智能确认您未登陆~已为您开启接入隔断地带接口保护系统~请系好安全带~' ) . ( $req ? $required_text : '' ) .
    '</p>',
  'comment_notes_after' => '',
   'label_submit'      => __( '抱米花和瓜子' ),
'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( '时光机器智能确认您验证通过的ID是 <a href="%1$s">%2$s</a> 已经为您接入脉冲接口 <a href="%3$s" title="Log out of this account">是否倒流代号007</a>' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',
    'title_reply'=> '勾搭'
);
comment_form($args);?>
</div><!-- #comments -->