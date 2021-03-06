<?php ?>
<!DOCTYPE html>

<head>
    
    <!--Styles-->
    <link rel="stylesheet"  type="text/css" href='<?php echo get_template_directory_uri(); ?>/style-home.css?r=<?php echo time(); ?>'/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Open+Sans|Roboto:400, 900" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'/>
    <link type="image/x-icon" rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.ico" />
    <meta name='theme-color' content='#E5E5F2' />
    
    <!--Meta Info-->
    <title><?php echo get_the_title(); ?></title>
    <meta name='description' content='Anything and Everything American Otaku'>
    <meta name='language' content='English'>
	<meta http-equiv="content-language" content="en-us">
    
    <!--Facebook Meta Info-->
	<meta property='og:title' content='<?php echo get_the_title(); ?> | Otaku Voice'/>
	<meta property='og:type' content='website'/>
	<meta property='og:url' content='www.otakuvoice.com'/>
	<meta property='og:description' content='Anything and Everything American Otaku'/>

    <!--Twitter Meta Info-->
	<meta name='twitter:card' content='summary'/>
	<meta name='twitter:url' content='www.otakuvoice.com'/>
	<meta name='twitter:title' content='<?php echo get_the_title(); ?> | Otaku Voice'>
	<meta name='twitter:image' content='Anything and Everything American Otaku'>
    
</head>