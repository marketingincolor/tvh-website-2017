<?php
/*
Template Name: INFO / Hospital Care Landing Page
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
        <title>Make the Best Choice for You - Hospital Care</title>
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
.h2-cta { background: url(../../images/tvhlp-grfx-cta-bgnd.jpg) no-repeat center center / cover; }
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
.specialty .header-image { background:url(../../images/tvhlp-grfx-spty-ur-hdr.jpg) no-repeat top center / cover; }
.specialty .footer-image { background:url(../../images/tvhlp-grfx-spty-ur-ftr.jpg) no-repeat top center / cover; }
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
    </head>
    <body class="info">
        
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3NRWG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->        <div class="row">
            <div class="logo small-12 small-centered columns align-self-middle">
                <div class="row collapse">
                    <div class="small-12 small-centered columns">
                        <img src="../../images/tvhlp-grfx-logo.png" alt="The Villages Health">
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse row">
            <div class="return small-12 small-centered columns">
                <a href="../">&lt;&nbsp;Go Back</a>
            </div>
        </div>
        <div class="row">
            <div class="h1-top small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h1 class="orange">Hospital Care for The Villages Health<sup>&reg;</sup> Patients with Medicare Advantage</h1>
                        <p class="main">Patients in the hospital are sometimes confused as to who's in charge of their care. They often see numerous doctors during the hospital stay, only to be left on their own after discharge. The experience can be confusing and even overwhelming.</p>
                        <p class="main">An exciting innovation of The Villages Health (TVH) is the development of a dedicated hospital medicine program. A TVH Hospitalist will oversee your care throughout your hospital stay. If you're a TVH patient with Medicare Advantage, you can take advantage of this program if you're admitted to The Villages<sup>&reg;</sup> Regional Hospital. Additional TVH Hospitalists are joining the growing hospital medicine team currently seeing our patients when they are hospitalized.</p>
                        <p class="main">In keeping with our primary care model, this TVH program is designed around allowing quality time with patients. For example, a TVH Hospitalist sees only 8-12 patients per day versus the typical Hospitalist who sees 25-35 per day. Since our Hospitalists are employed by TVH, you benefit from the care of a physician meeting our strict criteria. Our Hospitalists not only have access to your complete medical record, they also maintain frequent contact with your primary care physician.</p>

                    </div>
                </div>
            </div>
            <div class="small-10 large-12 small-centered columns"></div>
        </div>

        <div class="row">
            <div class="h2-know large-12 small-centered columns">
                <div class="row collapse" data-equalizer>
                    <div class="small-12 columns" data-equalizer-watch>
                        <div class="row collapse">
                            <div class="circle-wrapper-blue">
                                <div class="circle-container-blue">
                                    <br />
                                    <h2>Did you know?</h2>
                                    <p>A Hospitalist is a physician who visits and takes care of patients in the hospital.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="h2-content small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <p class="main">Many hospitalized patients require follow-up measures such as rehab, specialist visits, and home care. Often, this transitional care is overlooked as patients struggle to understand post-discharge instructions or find it difficult to make follow-up appointments. Many of these patients end up back in the hospital simply because they didn't receive properly coordinated care. For this reason, TVH provides you with a Nurse Navigator to help coordinate your care during the hospital stay and even after discharge.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="h2-know large-12 small-centered columns">
                <div class="row collapse" data-equalizer>
                    <div class="small-12 columns" data-equalizer-watch>
                        <div class="row collapse">
                            <div class="circle-wrapper-blue-big">
                                <div class="circle-container-blue-big">
                                    <h2>Did you know?</h2>
                                    <p>A TVH Nurse Navigator visits patients in the hospital and at home, if needed. He or she will make phone calls to the primary care team and other providers on behalf of the patient and also ensure that patients and family members understand discharge instructions and can provide the proper follow-up care at home.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="h2-content small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <P class="main">To learn more about our hospital medicine program or how The Villages Health and Medicare Advantage work together, call <strong>352-674-8789</strong>.  If you would like to learn more about the Medicare Advantage plans we accept, call your local insurance agent licensed to represent UnitedHealthcare<sup>&reg;</sup> Medicare Advantage or visit any <a href="http://thevillageshealth.com/info/uhc-medicare-stores" class="orange" style="font-weight:bold; text-decoration:underline;">UnitedHealthcare</a><sup class="orange">&reg;</sup> <a href="http://thevillageshealth.com/info/uhc-medicare-stores" class="orange" style="font-weight:bold; text-decoration:underline;">Medicare Store</a> or <a href="http://thevillageshealth.com/info/medicare-resource-centers" class="orange" style="font-weight:bold; text-decoration:underline;">Medicare Resource Center</a>.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="h2-content small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-4 columns">
                        <P class="main">
                            <a href="../behavioral-health">&lt;&nbsp;Behavioral Health</a>
                        </p>
                    </div>
                    <div class="small-4 small-offset-4 columns">
                        <P class="main">
                            <a href="../hospital-coverage">Hospital Coverage&nbsp;&gt;</a>
                        </p>
                    </div>
                </div>
            </div>
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
