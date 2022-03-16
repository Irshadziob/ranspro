<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ascent
 */
?>
        </div><!-- close .*-inner (main-content) -->
    </div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="site-footer-inner col-sm-12 clearfix">
            <?php get_sidebar( 'footer' ); ?>
            </div>
        </div>
    </div><!-- close .container -->
    <div id="footer-info">
        <div class="container">
            <div class="col-sm-6">
            <div class="site-info">
              <p>Copyright © <?php echo date ("Y"); ?> All Rights Reserved | Powered By <a href="https://www.webyfix.com/en/">Webyfix.com</a></p>
            </div><!-- close .site-info -->
			</div><!--.col-sm-6-->
			<div class="col-sm-6">
             <ul class="social-icons">
                            <?php
                            $socialmedia_navs = ascent_socialmedia_navs();
                            foreach ($socialmedia_navs as $socialmedia_url => $socialmedia_icon) {
                                if (of_get_option($socialmedia_url)) {
                                    echo '<li class="social-icon"><a target="_blank" href="'.of_get_option($socialmedia_url).'"><i class="'.$socialmedia_icon.'"></i></a></li>';

                                }
                            }
                            ?>
                        </ul>
			</div><!--.col-sm-6-->
        </div>
    </div>
</footer><!-- close #colophon -->
<?php if(of_get_option('enable_scroll_to_top')): ?>
    <a href="#top" id="scroll-top"></a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>

