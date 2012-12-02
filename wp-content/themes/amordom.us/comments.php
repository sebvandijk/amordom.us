<?php

// Do not delete these lines or the Matrix will implode. or explode. I can't remember. But whichever it is, it isn't good.
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die ('Deze pagina mag niet direct benaderd worden.');

if ( post_password_required() ) { ?> 
	<p class="nocomments">Je moet ingelogd zijn om een reactie te kunnen plaatsen.</p>
<?php return;}?>

<div id="comments">

<?php if ( have_comments() ) : ?>
	
	<div class="divider"></div>
	
    <h1><?php comments_number('Nog geen reacties', '1 reactie', '% reacties' );?></h1>
	
    <ol id="comments_list">
    
        <?php foreach ($comments as $comment) : ?>
        
			<?php $comment_type = get_comment_type(); ?>
            <?php if($comment_type == 'comment') { ?>
            
            <li class="<?php if (the_author('', false) == get_comment_author()) echo 'author'; else echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
                
                <div class="comment-author contentcol frst">
               		
					<?php echo get_avatar( $comment, $size = '90', $default = '<path_to_url>' ); ?>
					<h3><?php comment_author_link()?></h3>
                
				</div>
                
                <div class="contentcol triple">
					
					<?php if ($comment->comment_approved == '0') : ?>
						<em>Uw reactie wordt gekeurd!</em>
					<?php endif; ?>
					
					<div class="date">Geplaatst op <?php comment_date('F j, Y') ?> om <?php comment_time()?></div>
						
					<div><?php comment_text(); ?></div>
					
				</div>
                
				<div class="clear"></div>
				
            </li>
            
            <?php /* Changes every other comment to a different class */	
                if ('alt' == $oddcomment){ $oddcomment = 'standard'; }
                else { $oddcomment = 'alt';}
            ?>
            <?php } 
            else { $trackback = true; } /* End of is_comment statement */ ?>
            
		<?php endforeach; /* end for each comment */ ?>
        
     </ol>

	<?php if ($trackback == true) { ?>
    
        <h2>Trackbacks</h2>
        
        <ol>
            <?php foreach ($comments as $comment) : ?>
                <?php $comment_type = get_comment_type(); ?>
                <?php if($comment_type != 'comment') { ?>
                    <li><?php comment_author_link() ?></li>
                <?php } ?>
            <?php endforeach; ?>
        </ol>
        
    <?php } ?>
    
    <?php else : ?>
    
        <?php if ( !comments_open() ) : //if comments are closed ?>
            <p class="nocomments">Comments zijn gesloten.</p>
        <?php endif; ?>
        
    <?php endif; ?>

</div><!-- end #comments -->

<?php if ( comments_open() ) : ?>

<div class="comments_reply" id="respond">

	<div class="divider"></div>
		
		<h2><?php comment_form_title( 'Voeg een reactie toe', 'Voeg je reactie toe op %s' ); ?></h2>
	
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : //if visitors must be logged in to comment ?>
		<p>Je moet <a href="<?php echo wp_login_url( get_permalink() ); ?>">ingelogd</a> zijn om te kunnen reageren.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		
		<div class="contentcol frst">
		
			<?php if ( is_user_logged_in() ) : //if user is logged in, displays username and option to log out ?>
				
				<div class="alignCenter">
					Ingelogd als:
					<div class="comment-avatar">	
						<?php
						global $current_user;
						get_currentuserinfo();
						echo get_avatar( $current_user->ID, 90 );
						?>
					 </div>
					<h3><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></h3> 
					<small><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Logout">uitloggen &raquo;</a></small>			
				</div>
		  
			<?php else : ?>
			
				<p>
					<label for="author">Naam <?php if ($req) echo "*"; ?></label>
					<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="30" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				</p>
			
				<p>
					<label for="email">E-mail <em>(wordt niet getoond)</em><?php if ($req) echo "*"; ?></label>
					<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="30" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				</p>
			
				<p>
					<label for="url">Website</label>
					<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="30" tabindex="3" />
				</p>
		
			<?php endif; ?>
		
		</div>
	    
	    <div class="contentcol triple">
		
			<p>
				<label for="comment">Reactie <?php if ($req) echo "*"; ?></label>
				<textarea name="comment" id="comment" cols="60" rows="4" tabindex="4"></textarea>
			</p>
			
			<p><input name="submit" type="submit" id="submit" tabindex="5" value="Plaats deze reactie" /><?php comment_id_fields(); ?></p>
		
		</div>
		
		<div class="clear"></div>
		
	<?php do_action('comment_form', $post->ID); ?>
	</form>

<?php endif; // If registration required and not logged in ?>

</div> <!-- end .comments_reply --> 

<?php endif; // if you delete this the Matrix will break and will hunt you down for revenge ?>
