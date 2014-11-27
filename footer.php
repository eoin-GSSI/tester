<?php
/**this is a branch
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
			</div></div>

			<div id="subnav" class="nav aside">
				<span class="subnav-title">
                	<?php 
						$parent = $post->post_parent;
						while ( $parent ) {
							$page = get_page( $parent );
							$parents[] = $page;
							$parent = $page->post_parent;
						}
						echo get_the_title($page);
					?>
                </span>
            	<?php include('subnav.php'); ?>
			</div>
			<div id="ctas" class="aside">
				<?php 
					$ctas = get_field('ctas', 'option');
					if ($ctas) : ?>
						
						<ul>
                            <?php 
							foreach ($ctas as $cta) :
								echo '<li><a href="'. $cta['link'] .'">'. $cta['title'] .'</a></li>';
							endforeach;
							?>
						</ul>
						
				<?php endif;?>
			</div>

		</div></div></div>

		<footer id="footer" class="page-section"><div class="f-w1"><div class="f-w2 section-inner">

            <div id="bottomlinks" class="nav"></div>
            <div id="copyright">
                <?php 
					$copyright = get_field('copyright', 'option');
					if ($copyright) :
						
						echo $copyright;
						
					endif;
				?>
            </div>
            <div id="credit">
            	<a href="http://www.graphicallyspeaking.ca/web-programming-technical/wordpress-website.aspx" target="_blank">Vancouver Web Design by Graphically Speaking</a>
            </div>

		</div></div></footer>
	</div></div></div>

<!-- SCRIPTS -->   
	
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/site-functions.js"></script>
    
	<?php wp_footer() ?>

</body>
</html>
