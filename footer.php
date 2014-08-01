			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
	        			'after' => '',                                  // after the menu
	        			'link_before' => '',                            // before each link
	        			'link_after' => '',                             // after each link
	        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
					<?php if (function_exists('get_field') && get_field('copyrighted', 'option')) {
						?>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <span><?php the_field('copyrighted', 'option' ); ?></span></p>
						<?php
					} else { ?> 
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
					<?php } ?>

					<?php if (function_exists('get_field') && get_field('street_address', 'option')) {
						$email = get_field('contact_email', 'option');
						?>
						<p itemscope itemtype="http://schema.org/Organization" class="organization-address">
							<span itemprop="name" class="hide"><?php the_field('copyrighted', 'option' ); ?></span>
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						      <span itemprop="streetAddress"><?php the_field('street_address', 'option'); ?></span>,
						      <span itemprop="addressLocality"><?php the_field('city', 'option'); ?></span>,
						      <span itemprop="addressRegion"><?php the_field('state', 'option'); ?></span>
						      <span itemprop="postal-code"><?php the_field('zip', 'option'); ?></span>
						   </div>
						   Phone: <span itemprop="tel"><?php the_field('phone', 'option'); ?></span>
						   <a href="mailto:<?php echo antispambot($email); ?>" target="_blank" itemprop="email">Email Us</a>
						   <a href="<?php the_field('contact_page_link', 'option'); ?>">Contact Us</a>
						</p>
						<?php
					} else { ?> 

					<?php } ?>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
