<?php  define('WP_USE_THEMES', false);  get_header(); ?>
<div class="container">
    <div class="row">

        <div class="col-md-9">

            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    echo "<h2><a href='"; the_permalink(); echo " '>"; the_title(); echo "</a></h2>";
                    echo "<small class=\"text-muted\">";

                    the_tags('Tagged with: ',' • ',' @ '); the_time('F jS, Y'); echo " "; the_time('G:i');
                    echo "</small>";
                    the_content();
                } // end while
            } // end if

            // Print Next/Previous link --- page or post
            echo '<p class="text-muted text-center">';
            if(is_single()) {
                previous_post_link('<small>%link</small>');
                echo " <-> ";
                next_post_link('<samll>%link</small>');
            }else if(is_home() || is_archive() || is_tag()) {
                posts_nav_link(' <-> ', __(' Newer Posts '), __('Older Posts '));
            }
            echo '</p>';
            ?>

            <hr />
        </div> <!--End of main body-->

        <!--Start of Right -->
        <div class="col-md-3">
            <?php if ( function_exists('wp_tag_cloud') ) : ?>
                <h3>Popular Tags</h3>
                <ul>
                    <li><?php wp_tag_cloud('smallest=8&largest=22'); ?></li>
                </ul>
            <?php endif; ?>
            </hr>

            <h3>Archives</h3>
            <form id="archiveform" action="">
                <select name="archive_chrono" onchange="window.location =
(document.forms.archiveform.archive_chrono[document.forms.archiveform.archive_chrono.selectedIndex].value);" class="form-control">
                    <option value=''>Select Month</option>
                    <?php get_archives('monthly','','option'); ?>
                </select>
            </form>
	<hr />
	<h3>AD</h3>
		<span><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 250x250, 创建于 09-9-9 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:250px;height:250px"
     data-ad-client="ca-pub-4700775013300998"
     data-ad-slot="7292549554"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></span>
        </div>
    </div>
</div>


<?php get_footer(); ?>

