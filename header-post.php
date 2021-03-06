<?php ?>
<!DOCTYPE html>

<head>
    
    <!--Styles-->
    <link rel="stylesheet"  type="text/css" href='<?php echo get_template_directory_uri(); ?>/style-post.css'/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.ico" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Open+Sans|Roboto:400, 900" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'/>   
    <meta name='theme-color' content='#E5E5F2' />
    
    <!--Meta Info-->
    <?php the_post(); ?><!--Gather Post Excerpt Information for Meta Tags-->  
    <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-large' ); ?> 
    <title><?php echo get_the_title(); ?> | Otaku Voice</title>
    <meta name='title' content='<?php echo get_the_title(); ?>'>
    <meta name='description' content='<?php echo(get_the_excerpt()); ?>'>
    <meta name='section' content='<?php $catList = ''; foreach((get_the_category()) as $cat) { $catID = get_cat_ID( $cat->cat_name ); if(!empty($catList)) { $catList .= ', '; } $catList .= $cat->cat_name; } echo $catList; ?>'>
    <meta name='keywords' content='<?php $my_tags = get_the_tags(); if ( $my_tags ) { foreach ( $my_tags as $tag ) { $tag_names[] = $tag->name; } echo implode( ', ', $tag_names ); }?>'>
    <meta name='language' content='English'>
	<meta http-equiv="content-language" content="en-us">
    
    <!--AMP and Permalink Info-->
    <link rel='canonical' href='<?php echo get_the_permalink(); ?>'>
    <link rel='amphtml' href='<?php echo get_the_permalink(); ?>amp/'>
    
    <!--Facebook Meta Info-->
	<meta property='og:type' content='article'>
	<meta property='og:title' content='<?php echo get_the_title(); ?>'>
	<meta property='og:url' content='<?php echo get_the_permalink(); ?>'>
	<meta property='og:image:secure_url' content='<?php echo $thumb[0] ?>'>
	<meta property='og:description' content='<?php get_the_excerpt(); ?>'>
	<meta property='article:section' content='<?php echo $catList; ?>'>
	<meta property='article:tag' content='<?php echo implode( ', ', $tag_names ); ?>'>
	<meta property="article:published_time" content='<?php the_time("c"); ?>'>
	<meta property='article:modified_time' content='<?php the_modified_time("c");?>'>
	<meta property='og:site_name' content='Otaku Voice'>
	<meta property='fb:app_id' content='585600295152171'>

    <!--Twitter Meta Info-->
	<meta name='twitter:card' content='summary_large_image'>
	<meta name='twitter:url' content='<?php echo get_the_permalink(); ?>'>
	<meta name='twitter:title' content='<?php echo get_the_title(); ?>'>
	<meta name='twitter:image' content='<?php echo $thumb[0] ?>'>
	<meta name='twitter:description' content='<?php echo strip_tags(get_the_excerpt($post->ID)); ?>'>
	<meta name='twitter:site' content='@OtakuVoice'>
	<meta name='twitter:creator' content='@<?php the_author_meta( twitter ); ?>'>
    
    <!--Adsense Code-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	<!--Schema.org JSON Markup-->
	<script type="application/ld+json">
	{
	  "@context" : "http://schema.org",
	  "@type" : "Article",
	  "headline" : "<?php echo get_the_title(); ?>",
	  "description" : "<?php echo(get_the_excerpt()); ?>",
	  "author" : {
		"@type" : "Person",
		"name" : "<?php echo get_the_author_meta( 'user_nicename' ); ?>",
		"sameas" : "https://twitter.com/<?php the_author_meta( twitter ); ?>"
		},
	  "datePublished" : "<?php the_time("c"); ?>",
	  "dateModified" : "<?php the_modified_time("c"); ?>",
	  "image" : {
	  	"url" : "<?php echo $thumb[0] ?>",
	  	"width" : "1296",
		"height" : "720"
	  },
	  "articleSection" : "<?php echo $catList; ?>",
	  "keywords" : "<?php echo implode( ', ', $tag_names ); ?>",
	  "url" : "<?php echo get_the_permalink(); ?>",
	  "mainEntityOfPage" : {
         "@type": "WebPage",
         "@id": "<?php echo get_the_permalink(); ?>"
      	},
	  "publisher" : {
	  	"@type" : "Organization",
    	"name" : "Otaku Voice",
		"url" : "https://otakuvoice.com",
		"logo" : {
            "@type": "ImageObject",
            "name": "Otaku Voice Logo",
            "width": "64",
            "height": "64",
            "url": "<?php echo get_template_directory_uri(); ?>/img/ov-logo-64.png"
        	},
		"sameas" : [
			"https://twitter.com/OtakuVoice",
			"https://facebook.com/TheOtakuVoice",
			"https://theotakuvoice.tumblr.com"
  			]
		}
	}
	</script>

</head>
<body>
    <!--Header logo for OtakuVoice-->
    <a style='text-decoration: none;' href='<?php echo esc_url( home_url( '/' ) ); ?>'>
        <header>
            <h3 id='OV-Otaku'>Otaku</h3>
            <img id='OV-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/ov-logo-72.png' alt='Otaku Voice 72px Logo' />
            <h3 id='OV-Voice' >Voice</h3>
        </header>
    </a>