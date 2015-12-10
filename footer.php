			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
				  
		          <div id="widget-footer" class="clearfix row-fluid">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					&nbsp;
					<div id="disclosure" class="attribution" align="left">
					<strong>Advertiser Disclosure:</strong> Cards for Travel partners with credit card issuing banks and receives compensation from these partners if your application is approved using the link provided on this site. Cards for Travel reviews do not include all card companies or credit card offers available in the market. Compensation from sponsors does not impact how or where products appear on this site.
 <br />
 <br />
Editorial Note: The opinions and card evaluations provided on this site are original editorial content of Cards for Travel and are not endorsed by any bank including, American Express, Barclaycard, Chase, Citibank, or any other financial institution. 
 <br />
 <br />

					</div>
					<div class="attribution" align="center">
						COPYRIGHT&copy; 2016 UNCONVENTIONALGUIDES.COM
						<br />
						<a href="/privacy">PRIVACY POLICY</a> | <a href="/disclaimer">DISCLAIMER</a>
					</div>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>