<?php
/*
Template Name: INFO Main Landing Page
*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W3NRWG');</script>
<!-- End Google Tag Manager -->        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <title>Make the Best Choice for You</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
<style>/* Foundation Overrides */
.row {
    margin: 0 auto;
    max-width: 60em; /*changes 62.5em (1000px) to 60em (960px)*/
    width: 100%;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Roboto', sans-serif !important;
    font-weight: bold !important;
    line-height: 1.2 !important;
}
p { line-height: 1.2 !important; margin-bottom:1em !important; }
hr {margin: 0 !important; }
/* Main Page Components */
body {
    background-color: rgb(255, 255, 255);
    color:rgb(0, 0, 0);
    text-align:center;
    font-family: 'Roboto', sans-serif !important;
}
button { border-radius:50%; }
.green { color: rgb(45, 122, 61) !important; }
.orange { color: rgb(219, 104, 41) !important; }
.return { background-color: rgb(236, 236, 236); text-align:left; display:inline-flex; }
.return a { color: rgb(50, 147, 165); padding:.3125em 1em; }
.logo{ background-color:rgb(26, 71, 35); padding:10px; }
.video, .h1-intro, .h1-top, .h2-content, .h2-know { background-color: rgb(250, 250, 250);}
.h1-intro h1, .h1-headline h1 { color: rgb(45, 122, 61) !important; }
.h2-cta { background: url(../images/tvhlp-grfx-cta-bgnd.jpg) no-repeat center center / cover; }
.h2-cta h2, .h2-know h2 { color: rgb(255, 255, 255); }
.h2-cta p, .h2-know p { color: rgb(255, 255, 255); }
.h2-cta .cta-button { color: rgb(255, 255, 255); background-color: rgb(168, 80, 32); border-radius:30px; padding:0.5em 0.75em; }
.h2-cta .cta-button:hover { background-color:rgb(255, 129, 61); }
.h2-cta .each { padding:36px 0; }
.h2-know .know-button { color: rgb(255, 255, 255); background-color: rgb(168, 80, 32); border-radius:30px; padding:0.5em 0.75em; }
.h2-know .know-button:hover { background-color:rgb(255, 129, 61); }
.h2-know p { line-height: 1.3 !important; font-size:1.125em !important; }
.h3-social { background-color: rgb(53,148,167); }
.h3-social h3 { color: rgb(255, 255, 255); }
.h4-share { background-color: rgb(239,247,248); }
.h4-share h4 { color: rgb(37, 102, 115); }
.h4-share .share-button { color: rgb(255, 255, 255); background-color: rgb(37, 102, 115); border-radius:30px; padding:0.5em 1.5em; margin-bottom:1em;}

.info .h4-share, .h1-you { background-color: rgb(45, 122, 61); }
.info .h4-share h4, .info .h4-share, .h1-you { color: rgb(255, 255, 255); }
.info .h4-share .learn-button { color: rgb(255, 255, 255); background-color: rgb(26, 71, 35); border-radius:30px; padding:0.5em 1.5em; margin-bottom:1em;}
.info .h4-share .learn-button:hover { background-color:rgb(55,148,73); }
.h4-share .share-button:hover { background-color:rgb(53,148,167); }
.h4-like { background-color: rgb(29, 79, 89); }
.h4-like a { color: rgb(255, 255, 255); }
.h4-like a:hover { color: rgb(193, 248, 255); }
.circle-wrapper { border-radius: 50%; background-color: rgb(219, 104, 41); margin:auto; }
.circle-container { border-radius: 50%; border: solid 2px rgb(255, 129, 61); background-color: rgb(219, 104, 41); position: relative; }
.circle-wrapper-blue, .circle-wrapper-blue-big { border-radius: 50%; background-color: rgb(50, 147, 165); margin:auto; }
.circle-container-blue, .circle-container-blue-big { border-radius: 50%; border: solid 2px rgb(71, 192, 216); background-color: rgb(50, 147, 165); position: relative; }
.right-image { position:relative; }
.right-image img { bottom:0; left:0; position:absolute; }
.footer { min-height:3em;}
.footer a, .footer a:hover { color:rgb(0, 0, 0); text-decoration:underline;}
.orangebg { background-color: rgb(219, 104, 41); }
.greenbg { background-color: rgb(45, 122, 61); }
.bluebg { background-color:rgb(53,148,167); }
.underline { text-decoration:underline !important; }
/* Sub Page Components - share and success */
.h1-share h1 { font-size: 1.75em !important; color: rgb(37, 102, 115) !important; }
form {}
label { text-align:left; font-size:1em;  color: rgb(53, 148, 167); font-weight: bold; }
input, textarea { background-color: rgb(224, 224, 224) !important; border:none !important; box-shadow:none !important; }
.fsSubmitButton { color: rgb(255, 255, 255); background-color: rgb(37, 102, 115) !important; border-radius:30px; padding:0.5em 1.5em; margin-bottom:1em; font-family: 'Roboto', sans-serif !important; font-weight:bold; font-size:24px; }
.fsSubmitButton:hover { background-color:rgb(53,148,167) !important; }
.rtn-button { color: rgb(255, 255, 255); background-color: rgb(37, 102, 115); border-radius:30px; padding:0.5em 0.75em; margin-bottom:1em; font-family: 'Roboto', sans-serif !important; font-weight:bold; font-size:24px; }
.rtn-button:hover { background-color:rgb(53,148,167); color: rgb(255, 255, 255); }

.share-fb { background:url(../images/tvhlp-grfx-social-btn-fb.png) no-repeat center center / contain; }
.share-fb:hover { background:url(../images/tvhlp-grfx-social-btn-hov-fb.png) no-repeat center center / contain; }
.share-fb:active { background:url(../images/tvhlp-grfx-social-btn-clk-fb.png) no-repeat center center / contain; }
.share-tw {  background:url(../images/tvhlp-grfx-social-btn-tw.png) no-repeat center center / contain; }
.share-tw:hover { background:url(../images/tvhlp-grfx-social-btn-hov-tw.png) no-repeat center center / contain; }
.share-tw:active { background:url(../images/tvhlp-grfx-social-btn-clk-tw.png) no-repeat center center / contain; }
.share-em { background:url(../images/tvhlp-grfx-social-btn-em.png) no-repeat center center / contain; }
.share-em:hover { background:url(../images/tvhlp-grfx-social-btn-hov-em.png) no-repeat center center / contain; }
.share-em:active { background:url(../images/tvhlp-grfx-social-btn-clk-em.png) no-repeat center center / contain; }
.share-li { background:url(../images/tvhlp-grfx-social-btn-li.png) no-repeat center center / contain; }
.share-li:hover { background:url(../images/tvhlp-grfx-social-btn-hov-li.png) no-repeat center center / contain; }
.share-li:active { background:url(../images/tvhlp-grfx-social-btn-clk-li.png) no-repeat center center / contain; }

.panel { padding: 1em 1em; }
.panel h3 { font-size:1.375em !important; margin:0.5em 0 !important; }

.specialty {}
.specialty .logo { padding:20px; }
.specialty p { line-height:1.6 !important; }
.specialty .header h1 { font-size:26px; font-weight:300 !important; margin:1em 0em; }
.specialty .h1-spty { text-align:left; }
.specialty .h1-spty h2 { font-size:30px; font-weight:300 !important; margin: 2em 0 0.5em; line-height:1.4 !important; }
.specialty .h1-spty .cta-spty { margin:0em 0em 0.5em; }
.specialty .h2-spty { text-align:left; margin-bottom:60px; }
.specialty .h2-spty .dr { margin:1em 0em; }
.specialty .h2-spty .dr:last-child { margin-top:3em; }
.specialty .h2-spty .dr .dr-pic { text-align:center; }
.specialty .h2-spty .dr .spty-main { margin-right:2em; }
.specialty .h2-spty h2 { font-size:23px; font-weight:300 !important; margin:0em 0em 1em 0em; line-height:1.4 !important; }
.specialty .h3-spty {}
.specialty .h4-spty { text-align:left; }
.specialty .h4-spty h4 { font-size:24px; font-weight:300 !important; margin:2.125em 0em 1em 0em; }
.specialty .h4-spty .conditions { font-size:12px; line-height:1.2; }
.specialty .h4-spty, .specialty .h4-spty a, .specialty .h4-spty a:hover { color:#fff; }
.specialty .header-image { background:url(../images/tvhlp-grfx-spty-ur-hdr.jpg) no-repeat top center / cover; }
.specialty .footer-image { background:url(../images/tvhlp-grfx-spty-ur-ftr.jpg) no-repeat top center / cover; }
.specialty .cta { color: rgb(53, 148, 167); background-color:#f5f5f2; border-radius:20px; text-align:center; margin-top:4em; padding:2em !important;}

.specialty .header-image { height:364px; }
.specialty .footer-image .learn { padding-right:3em; }

/* MEDIA QUERIES */
/* Small screens */
@media only screen {
    .h1-intro h1, .h1-top h1 { font-size: 1.75em /*3em*/ !important; margin:.65em 0 .5em 0; }
    p { font-size: 1em /*2.250em*/ !important;}
    p.more { font-size: 1.375em /*2.875em*/ !important;}
    p.main { font-size: 1.25em !important; margin-bottom:36px !important; }
    .info p.main {margin:18px 0 !important; }
    .info p.main {margin:18px 0 21px 0 !important; }
    p.sub { font-size: 0.750em /*1.5em*/ !important; margin-bottom:2.25em !important; }
    .circle-container, .circle-container-blue { width: 16em; height: 16em; margin:auto; padding:3em 2em; }
    .circle-wrapper, .circle-wrapper-blue { width: 17em; height: 17em; padding-top:8px; }
    .circle-container-blue-big { width: 19em; height: 19em; margin:auto; padding:2em 2em; }
    .circle-wrapper-blue-big { width: 20em; height: 20em; padding-top:8px; }
    .info .h2-cta .cta-button { vertical-align:bottom; display:inline-block; }
    .h2-cta h2, .h2-know h2 { font-size:1.125em; }
    .h2-content h2 { font-size:1.375em; padding:24px 0 0 0; }
    .h2-know p { font-size: 1em !important; }
    .info .h2-cta h2 { font-size:1.375em; }
    .info .h2-content h2 { font-size:1.5em; }
    .h2-cta p { font-size:0.825em; }
    .h2-cta .cta-button, .h4-share .share-button  { font-size:0.825em; font-weight:bold; }
    .h3-social h3 { font-size: 1.1875em; margin:2.65em 0 0.50em 0; }
    .info .h3-social h3 { font-size: 1.1875em; margin:0.50em 0; }
    .info .h3-social div { margin-bottom:0.5em; }
    .h4-share h4 { font-size: 1.185em; margin:1.675em 0 0.8750em 0; }
    .h4-like h4 { font-size: 1.185em; margin:0.8750em 0; }
    .h1-share h1 { margin:1.250em 0 0.5em 0; }
    .mrc .h1-top .panel div { text-align:center; }
    .no-pad { padding:0px !important; }
    .share-fb {display:inline-block; width:38px; height:38px; }
    .share-tw {display:inline-block; width:38px; height:38px; }
    .share-em {display:inline-block; width:38px; height:38px; }
    .share-li {display:inline-block; width:38px; height:38px; }
    .footer div { padding:24px 0; }
} /* Define mobile styles */

/* Medium screens */
@media only screen and (min-width: 40.063em) {
    .logo { min-height:100px; }
    .h1-intro h1, .h1-top h1, .h1-you h1 { font-size: 1.75em !important; margin:.5em 0; }
    p { font-size: 1.125em !important;}
    p.main { font-size: 1.25em !important; margin-bottom:36px !important; }
    .info p.main {margin:36px 0 !important; }
    .info p.main.alt {margin:21px 0 36px 0 !important; }
    p.more { font-size: 1.375em !important;}
    p.sub { font-size: 0.750em !important; margin-bottom:2.25em !important;}
    .circle-container, .circle-container-blue { width: 18em; height: 18em; margin:auto; padding:3em 2em; }
    .circle-wrapper, .circle-wrapper-blue { width: 19em; height: 19em; padding-top:8px; }
    .circle-container-blue-big { width: 19em; height: 19em; margin:auto; padding:2em 2em; }
    .circle-wrapper-blue-big { width: 20em; height: 20em; padding-top:8px; }
    .info .h2-cta .cta-button { vertical-align:bottom; display:inline-block; }
    .h2-cta h2, .h2-know h2 { font-size:1.25em; }
    .info .h2-cta h2 { font-size:1.5em; }
    .h2-content h2 { font-size:1.5em; padding:36px 0 0 0; }
    .h2-cta p { font-size:0.825em; }
    .h2-cta .cta-button, .h4-share .share-button { font-size:0.825em; font-weight:bold; }
    .h2-know p { font-size:1em !important; }
    .h1-share h1 { margin:2.250em 0 0.5em 0; }
    .mrc .h1-top .panel div:nth-child(2) {text-align:left;}
    .share-fb {display:inline-block; width:76px; height:76px; }
    .share-tw {display:inline-block; width:76px; height:76px; }
    .share-em {display:inline-block; width:76px; height:76px; }
    .share-li {display:inline-block; width:76px; height:76px; }
    .footer div { padding:36px 0; }
} /* min-width 641px, medium screens */

/* Large screens */
@media only screen and (min-width: 64.063em) {
    .h1-intro h1, .h1-top h1, .h1-you h1 { font-size: 1.75em !important; margin:36px 0; }
    p { font-size: 1.125em !important;}
    p.main { font-size: 1.25em !important; margin-bottom:36px !important; }
    p.main.plus { font-size:1.375em !important; }
    .info p.main {margin:36px 0 !important; }
    .info p.main.alt {margin:21px 0 36px 0 !important; }
    p.more { font-size: 1.375em !important;}
    p.sub { font-size: 0.750em !important; margin-bottom:36px !important;}
    .circle-container, .circle-container-blue { width: 20.125em; height: 20.125em; margin:auto; padding:3.5em 2em; }
    .circle-container p { margin:1.25em 0em !important; }
    .circle-container-blue p, .circle-container-blue-big p { margin:0.75em 0em !important; }
    .circle-wrapper, .circle-wrapper-blue { width: 21.125em; height: 21.125em; padding-top:8px; }
    .circle-container-blue-big { width: 24em; height: 24em; margin:auto; padding:3em; }
    .circle-wrapper-blue-big { width: 25em; height: 25em; padding-top:8px; }
    .info .circle-container { padding:3.5em 2em; }
    .info .h2-cta .cta-button { vertical-align:bottom; display:inline-block; }
    .h2-cta h2, .h2-know h2 { font-size:1.5em; margin:0 !important; }
    .h2-content h2 { font-size:1.5em; padding:36px 0 0 0; }
    .h2-cta p { font-size:1.125em; }
    .h2-know p { font-size:1.125em !important; }
    .h2-cta .cta-button, .h4-share .share-button { font-size:1.25em; font-weight:bold; }
    .h3-social h3 { font-size: 1.5em; margin:2.375em 0 0.750em 0; }
    .info .h3-social h3 { font-size: 1.5em; margin:0.750em 0; }
    .info .h3-social div { margin-bottom:0.75em; }
    .h4-share h4 { font-size: 1.5em; margin:2.375em 0 0.750em 0; }
    .h4-like h4 { font-size: 1.5em; margin:30px 0; }
    .footer div { padding:45px 0; }

} /* min-width 1025px, large screens */
</style>    
        <script type='text/javascript'>
        var w = 520;
        var h = 480;
        var left = Math.round((screen.width/2)-(w/2));
        var tops = Math.round((screen.height/2)-(h/2));
        function showPopup(url) {
            newwindow=window.open(url,'name','height=480,width=520,left='+left+'top='+tops+',resizable');
            if (window.focus) {newwindow.focus()}
        }
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }

        </script>

        <style>
        .video {
        	position: relative;
        	padding-bottom: 56.25%; /* 16:9 */
        	padding-top: 25px;
        	height: 0;
        }
        .video iframe {
        	position: absolute;
        	top: 0;
        	left: 0;
        	width: 100%;
        	height: 100%;
        }
        </style>
    </head>
    <body class="info">
        
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3NRWG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->        <div class="row">
            <div class="logo small-12 small-centered columns align-self-middle">
                <div class="row collapse">
                    <div class="small-12 small-centered columns">
                        <img src="../images/tvhlp-grfx-logo.png" alt="The Villages Health">
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse row">
            <div class="video small-12 small-centered columns">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/DCi3HQgzqi4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="h1-top small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h1 class="orange">Make the Best Choice for You</h1>
                        <p class="main">The revolutionary style of care that we offer at The Villages Health<sup>&reg;</sup> (TVH) puts you at the center of your own well-being and ensures you have a close relationship with your primary care doctor, timely access to care, outstanding service, and the best health outcomes. We are currently accepting new patients but please note: if you are eligible for Medicare, we do require you to have one of the United Healthcare<sup>&reg;</sup> Medicare Advantage plans that we accept. We hope you will take a few minutes to review some additional information that may help you decide if TVH is the right choice for your future health care needs.</p>
                    </div>
                </div>

            </div>
            <div class="small-10 large-12 small-centered columns"></div>
        </div>

        <div class="row">
            <div class="h2-cta large-12 small-centered columns">
                <div class="row collapse" data-equalizer>
                    <div class="small-12 large-6 columns" data-equalizer-watch>
                        <div class="each row collapse">
                            <div class="circle-wrapper">
                                <div class="circle-container">
                                    <h2>Visit any UnitedHealthcare Medicare Store to learn more.</h2><br />
                                    <a class="cta-button" href="http://thevillageshealth.com/info/uhc-medicare-stores">Locations</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 large-6 columns" data-equalizer-watch>
                        <div class="each row collapse">
                            <div class="circle-wrapper">
                                <div class="circle-container">
                                    <h2><br />Visit any Medicare Resource Center to learn more.</h2><br />
                                    <a class="cta-button" href="http://thevillageshealth.com/info/medicare-resource-centers">Locations</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="h2-content large-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h2 class="orange">Understanding the Clinical Value of Medicare Advantage</h2>
                        <p class="main">Learn how Medicare Advantage is helping to transform health care for the better, resulting in better health outcomes for patients. <a href="../study">Click here to learn more and watch video</a>.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="h2-content large-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h2 class="orange">Expanding Our Circle of Specialty Care</h2>
                        <p class="main">TVH continues to grow our specialty care offerings and the services available to you. We've expanded our behavioral health program to offer treatment for every aspect of your health, from physical to emotional to psychological. We invite you to learn more about these behavioral health services available to you as a patient receiving primary care through TVH. <a href="./behavioral-health">Click here to learn more</a>.</p>
                        <p class="main">We have added 24 providers in 2016 to ensure all of our patients have convenient access to exceptional care whenever it's needed.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="h2-content large-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h2 class="orange">Hospital Care for The Villages Health Patients with Medicare Advantage</h2>
                        <p class="main">Are you aware that a TVH Hospitalist and Nurse Navigator care for TVH patients with Medicare Advantage if they become hospitalized at The Villages<sup>&reg;</sup> Regional Hospital? We invite you to learn more about our hospital medicine program.  <a href="./hospital-care">Click here to learn more</a>.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="h2-content large-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h2 class="orange">Hospitals Accepting Medicare Advantage</h2>
                        <p class="main">If you choose to leave our community for care, we invite you to learn more about the hospitals that accept Medicare Advantage. <a href="./hospital-coverage">Click here to learn more</a>.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="h2-content large-12 small-centered columns">
                <br />
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <p class="main">It's all part of an exceptional care model built around your individual needs that links primary care, behavioral health, vision, audiology, and a growing range of specialties for highly coordinated care.</p>
                        <p class="main">Nothing is as important as your health, so make sure you have the complete facts.</p>
                    </div>
                </div>
                <br />
            </div>
        </div>

        <div class="row">
            <div class="h4-share small-12 columns">
                <h4>Revolutionary Care Centered on You</h4>
                <p>We are here for you! To learn more about The Villages Health, please call <strong>352-702-3435</strong>, email <a href="mailto:info@TheVillagesHealth.com" style="color:#fff; text-decoration:underline;">info@TheVillagesHealth.com</a>, or visit <a href="http://thevillageshealth.com" style="color:#fff; text-decoration:underline;" target="_blank">The Villages Health</a>.</p>
                <p>&nbsp;</p>
            </div>
            <div class="h3-social small-12 columns">
                <h3>Share This Page</h3>
                <div class="row collapse">
                    <div class="small-2 small-offset-2 column">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://thevillageshealth.com/you" onclick="showPopup(this.href);return(false);" target="_blank" class="share-fb">&nbsp;</a>
                    </div>
                    <div class="small-2 column">
                        <a href="https://twitter.com/home?status=Our%20World%20Revolves%20Around%20You%20http://thevillageshealth.com/you" onclick="showPopup(this.href);return(false);" class="share-tw" target="_blank">&nbsp;</a>
                    </div>
                    <div class="small-2 column">
                        <a href="mailto:?subject=Our%20World%20Revolves%20Around%20You&body=http://thevillageshealth.com/you" class="share-em">&nbsp;</a>
                    </div>
                    <div class="small-2 column end ">
                        <p id="p1" style="display:none;">http://thevillageshealth.com/you</p>
                        <textarea id="holdtext" style="display:none;"></textarea>
                        <a href="javascript:;" onclick="copyToClipboard('#p1');" class="share-li">&nbsp;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="h4-like small-12 columns"><h4><a href="https://www.facebook.com/TheVillagesHealth" target="_blank"><img src="../images/tvhlp-grfx-social-share-fb.jpg" style="position:relative; top:-4px; padding-right:.25em;">Like Us On Facebook</a></h4>
            </div>
        </div>

        <div class="row footer">
            <div class="small-12 columns">
                &copy; 2017 The Villages Health
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
        <script src="https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.equalizer.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
