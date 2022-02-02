		<footer class="footer section large-padding bg-dark clear" id="site-footer">

			<?php if ( is_active_sidebar( 'footer-a' ) || is_active_sidebar( 'footer-b' ) ) : ?>

				<div class="footer-widgets group">
			
					<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
						<div class="column column-1 left">
							<?php dynamic_sidebar( 'footer-a' ); ?>
						</div><!-- .column-1 -->
					<?php endif;?>
						
					<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
						<div class="column column-2 left">
							<?php dynamic_sidebar( 'footer-b' ); ?>
						</div><!-- .column-2 -->
					<?php endif; ?>

				</div><!-- .footer-widgets -->

			<?php endif; ?>


		
		</footer><!-- #site-footer -->
		
	</div><!-- .wrapper -->

</main><!-- #site-content -->

<?php wp_footer(); ?>

</body>
</html>