            <footer role="contentinfo">
            
                <div id="inner-footer" class="clearfix">
                  ** Note- If you are not redirected to the offer page from American Express when you click on the Apply Here link for AmEx cards, be sure all American Express windows in your browser are closed, or open in an alternate browser or an incognito window in Chrome.
                  <br />
                  <br />
                  <strong>Disclaimer</strong>: This content is not provided or commissioned by the credit card issuer. Opinions expressed here are author’s alone, not those of the credit card issuer, and have not been reviewed, approved or otherwise endorsed by the credit card issuer. This site may be compensated through the credit card issuer Affiliate Program.***
                  <br />
                  <br />
                  Some of these links provide referral bonuses to us, but we only recommend cards we use personally. Always use credit responsibility by paying the full balance every month. Do it right, and you can take advantage of luxury travel at budget prices for many years to come.
                  <hr />
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
                    
                    <p class="attribution">&copy; <?php bloginfo('name'); ?></p>
                
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