<footer>
    <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <img id='OV-FooterLogo' src='<?php echo get_template_directory_uri(); ?>/img/TheOtakuProjectSmallLogo.png'/>
            <meta itemprop="url" content='<?php echo get_template_directory_uri(); ?>/img/TheOtakuProjectSmallLogo.png'/>
            <meta itemprop="width" content="300">
            <meta itemprop="height" content="30">
        </div>
        <meta itemprop="name" content="TheOtakuProject"/>
        <meta itemprop='url' content='https://theotakuproject.com'/>
        </a>
    </span>
    <div id='OV-FooterSocialIcons'>
        <a href="http://twitter.com/otakuvoice" onclick="ga('send', 'event', 'Social Follow', 'Twitter Follow', 'Twitter', '1');" target='_blank'>
        <img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image-follow' /></a>

        <a href="http://facebook.com/theotakuvoice" onclick="ga('send', 'event', 'Social Follow', 'Facebook Follow', 'Facebook', '1');" target='_blank'>
        <img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image-follow' /></a>

        <a href="https://www.youtube.com/channel/UC0hq2bUJYw7NN12pf_7HDCw" onclick="ga('send', 'event', 'Social Follow', 'Youtube Follow', 'Youtube', '1');" target='_blank'>
        <img src='<?php echo get_template_directory_uri(); ?>/social-icons/youtube.svg' class='social-image-follow' /></a>
    </div>

    <div id='OV-FooterInfo'>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>about-us'>About Us</a>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>contact-us'>Contact Us</a>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy'>Privacy Policy</a>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>?s=search'>Search</a>
    </div>
</footer>
<span>
    
    <!--Defer Image Load JS-->
    <script>
        function init() {
            var imgDefer = document.getElementsByTagName('source');
            for (var i=0; i<imgDefer.length; i++) {
                if(imgDefer[i].getAttribute('data-srcset')) {
                imgDefer[i].setAttribute('srcset',imgDefer[i].getAttribute('data-srcset'));
            } } }
        window.onload = init;
    </script>
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://www.googletagmanager.com/gtag/js?id=UA-110231473-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110231473-1');
      gtag('set', {'user_id': 'USER_ID'}); // Set the user ID using signed-in user_id.
    </script>
</span>