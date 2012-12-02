<?php get_header(); ?>

<div id="category">

	<div class="divider"></div>
	<div id="titel">

		<?php 
		if(is_category(5) || is_category(6)) { ?>
		
			<div id="volledigoverzicht">
				<a href="<?php bloginfo('url');?>/werk">naar Volledig portfolio</a>
			</div>
		
		<?php
		}
		?>
		
		<h1>
			<h1>
			<?php 
			if(is_category(4)){ 
				echo "Hersenspinsels & andere willekeurigheden";
			}
			else if(is_category(3)){
				echo "Een selectie van m'n werk";
			}
			else {
				single_cat_title(); 
			}
			?>
			</h1>
		</h1>
		
		<?php 
		if(is_category(3) || post_is_in_descendant_category(3)){ 
			if(is_category(5)){$ontwerpactive = "cat-active"; $ontwikkelactive = "off";}
			else if(is_category(6)) {$ontwerpactive = "off"; $ontwikkelactive = "cat-active";}
			else {$ontwerpactive = "off"; $ontwikkelactive = "off";}
			?>
	
			<div id="cat-filter">
			
				<a href="<?php bloginfo('url'); ?>/werk/ontwerp" title="Filter op Ontwerp" class="ontwerp <?php echo $ontwerpactive; ?>"></a>
				<a href="<?php bloginfo('url'); ?>/werk/ontwikkeling" title="Filter op Ontwikkeling" class="ontwikkeling <?php echo $ontwikkelactive; ?>"></a>
			
			</div>
		
		<?php 
		}
		?>
		
	</div> <!-- end #titel -->
	<div class="divider"></div>

	<div id="content">

		<?php 
			if(is_category(3) || post_is_in_descendant_category(3)){ 
			
				get_template_part('inc/inc-werk-cat'); 
			
			}
			else {
				
				get_template_part('inc/inc-blog-cat'); 
				
			}
			
		?>
		
		<div class="clear"></div>

		<div class="divider"></div>
		
		<div id="pagenav">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		</div>

	</div> <!-- end #content -->

</div> <!-- end #category -->
	
<?php get_footer(); ?>