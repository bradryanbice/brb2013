<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div>

<div role="contentinfo" class="global-footer">
    <footer>
    	<div class="foot-edu">
        	<h5>About This Site</h5>
            <p>This website is built using a responsive, "mobile-first" strategy. Whether you are viewing this on a mobile phone, a desktop computer, or on your television, my content is available to you. Load times are minimalized by serving the very basic content first and <em>responsively and progressively</em> enhancing the experience for those displays and connections that can handle a larger download and more enhanced experience. This is a work <em>always</em> in progress and my own personal sandbox.</p>
        </div><!-- /footedu -->
        <div class="foot-links">
        	<h5>Links of Interest</h5>
            <ul>
            	<?php wp_list_bookmarks('title_li=&categorize=0&show_description=1'); ?>
            </ul>
        </div>
        <div class="foot-social">
        	<h5>I'm social</h5>
            <ul>
            	<li><a href="http://www.facebook.com/bradbice"><i class="fa fa-facebook"></i> <span>Facebook</span></a></li>
                <li><a href="https://twitter.com/bradbice"><i class="fa fa-twitter"></i> <span>Twitter</span></a></li>
                <li><a href="http://www.linkedin.com/in/bradbice"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a></li>
                <li><a href="https://plus.google.com/107814259034636710666#107814259034636710666/posts"><i class="fa fa-google-plus"></i> <span>Google+</span></a></li>
            </ul>
        </div><!-- /footalso -->
        <div class="foot-about">
        	<h5>About me</h5>
            <p>I've been working with the web since 1997, and have lived and breathed HTML, CSS, and the web throughout my professional and personal life. For the past 4 years I've worked as Frontend Development Manager at Fanatics; overseeing frontend HTML/CSS as well as UI/UX design and conceptualization. When I'm not molding the web, I'm either playing volleyball or spending time with my lovely fianc&#233;.</p>
            <p>For more, please view my <a href="/work">work</a>, read/print <a href="/resume">my resum&#233;</a>, or <a href="http://twitter.com/bradbice">follow me on Twitter</a>!</p>
        </div><!-- /footabout -->
        <div class="foot-copy">
        	<p>&copy; <?php echo date('Y'); ?> Brad Bice. All Rights Reserved. <a href="<?php bloginfo('rss2_url'); ?>" class="feed ss-icon"><i class="fa fa-rss"></i> RSS</a></p>
        </div><!-- /footcopy -->
    </footer><!-- /footcontent -->
</div><!-- /contentinfo -->

<?php wp_footer(); ?>
</body>
</html>