<?php get_header('amp'); ?>
<body>
	<amp-auto-ads type="adsense" data-ad-client="ca-pub-8642963533812241"></amp-auto-ads>
    <!--Wordpress loop code-->
        <?php $post = get_the_ID(); ?>
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-amp' ); ?>
        <?php $alt_text = get_post_meta($post->ID, '_wp_attachment_image_alt', true); ?>
    <!--Header logo for SuperIndieIO-->
    <header>
        <!--Header Image-->
        <div id='OV-AMPHeader'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
                <amp-img src='<?php echo get_template_directory_uri(); ?>/img/ov-logo-72.png'  alt="Otaku Voice Logo" height="72" width="72" class='header-logo'></amp-img>
            </a>
        </div>
        <!--Article Image-->
        <amp-img src='<?php echo $thumb[0] ?>' width="16" height="9" layout="responsive" class='featured-image'></amp-img>
    </header>
    <main>  
        
        <!--Article content-->
        <div id='OV-PostBody'>
            <h1 id='OV-PostHeadline' itemprop='headline'><?php echo get_the_title(); ?></h1>
            <h2 id='OV-PostSubHeadline'><?php echo(get_the_excerpt()); ?></h2>
            <div id='OV-PostAuthor' itemprop='author'><a href='<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>'><?php the_author(); ?></a> | <a href='https://www.twitter.com/<?php the_author_meta( twitter ); ?>'>@<?php the_author_meta( twitter ); ?></a> <p id='OV-PostDate' itemprop='datePublished'><?php the_time("M j, Y"); ?></p></div>
            <?php echo $this->get( 'post_amp_content' ); // amphtml content; no kses ?>
        
            <!--Social media sharing link-->
                <div id='OV-PostSocialMedia'>
                <a href="http://twitter.com/share" target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image' layout='fixed' height='24' width='24'/></a>

                <a href='https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>' target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image' layout='fixed' height='24' width='24'/></a>

                <a href='https://plus.google.com/share?url=<?php the_permalink(); ?>' target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/google_plus.svg' class='social-image' layout='fixed' height='24' width='24'/></a>

                <a href='http://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_the_permalink(); ?>' target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/tumblr.svg' class='social-image' layout='fixed' height='24' width='24'/></a>

                <a href='http://www.reddit.com/submit?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>' target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/reddit.svg' class='social-image' layout='fixed' height='24' width='24'/></a>
                </div>
        </div>
    </main>
    <footer>
	<span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
		<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
			<amp-img id='OV-FooterLogo' alt="Otaku Voice Logo" height="64" width="64" src='<?php echo get_template_directory_uri(); ?>/img/ov-logo-64.png'/>
			<meta itemprop="url" content='<?php echo get_template_directory_uri(); ?>/img/ov-logo-64.png'/>
			<meta itemprop="width" content="300">
      		<meta itemprop="height" content="30">
		</div>
        <meta itemprop="name" content="Otaku Voice"/>
		<meta itemprop='url' content='https://otakuvoice.com'/>
        </a>
    </span>
        <div id='OV-FooterSocialIcons'>
                <a href="https://twitter.com/otakuvoice" target='_blank'>
                <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image-follow' layout='fixed' height='24' width='24'/></a>
                
                <a href="https://facebook.com/theotakuvoice" target='_blank'>
                <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image-follow' layout='fixed' height='24' width='24'/></a>
                
                <a href="https://theotakuvoice.tumblr.com" target='_blank'>
                <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/tumblr.svg' class='social-image-follow' layout='fixed' height='24' width='24'/></a>
            </div>
        
        <div id='OV-FooterInfo'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>about-us'>About Us</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>contact-us'>Contact Us</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy'>Privacy Policy</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>?s=search'>Search</a>
        </div>
    </footer>
                <!--Analytics-->
        <amp-analytics type="googleanalytics">
            <script type="application/json">
            {
              "vars": {
                "account": "UA-110231473-1"
              },
              "triggers": {
                "trackPageview": {
                  "on": "visible",
                  "request": "pageview"
                }
              }
            }
            </script>
        </amp-analytics>
</body>
</html>