<?php
/*
Template Name: Green Landing Page
*/
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W3NRWG');</script>
		<!-- End Google Tag Manager -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <title>Our World Revolves Around You</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link href="../tvh-lander.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/javascript/js.cookie.js"></script>
		<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-951156-27"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments)};
		  gtag('js', new Date());
		  gtag('config', 'UA-951156-27');
		</script>

        <style>
        .lander { color:#333333; text-align:center; font-family:'Roboto', sans-serif; }
        .lander p { text-align:left; margin-bottom:1em !important; }
        .logo { padding:10px; }
        .logo { background-color:rgb(45, 122, 61); }
        .green-lander { margin-bottom:2em; }
        h1, h2, h3, h4, h5, h6 { font-family:'Roboto', sans-serif; }
        h2 { font-weight:200 !important; font-size:2em; text-align:left; }
        h2.special { font-weight:400 !important; font-size:1.25em; margin:.5em 0em; text-align:center; }
        .h1-headline { font-weight:200 !important; font-size:3.25em; padding:0em; color:#3594a7; margin:.5em 0em; }
        .h3-footer { font-weight:300 !important; font-size:1em; color:#fff; margin:2.5em 0em; }
        .main a, .main a:hover { color:rgb(219, 104, 41); text-decoration:underline; }
        .disclaimer { font-size:.75em; }
        .end-link { float:right; }
        </style>

	</head>
	<body class="lander">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3NRWG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

		<div class="row expanded">
            <div class="logo small-12 small-centered columns align-self-middle">
                <div class="row collapse">
                    <div class="small-12 small-centered columns">
                        <img src="../images/tvhlp-grfx-logo.png" alt="The Villages Health">
                    </div>
                </div>
            </div>
			<div class="image">
				<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'full', array( 'style' => 'width:100%;' ) );
				}  ?>
			</div>
        </div>

		<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="green-lander small-12 columns">

				<h1 class="h1-headline"><?php the_title(); ?></h1>

				<div class="main">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile;?>
		</div>

		<div class="row expanded">
            <div class="logo small-12 small-centered columns align-self-middle">
                <div class="row collapse">
                    <div class="small-12 small-centered columns">
                        <h3 class="h3-footer">&copy; <?php echo date('Y'); ?> The Villages Health</h3>
                    </div>
                </div>
            </div>
        </div>

	</body>
</html>
