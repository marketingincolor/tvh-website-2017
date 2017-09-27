<?php
/**
 * The template part for displaying a custom modal popup on the EGW news page
 *
 */

?>
<div class="reveal" id="egwModal" data-reveal>
  <div class="notify">
    <h2><strong>Notice</strong></h2>
    <p>Evergreen Wellness<sup>&reg;</sup> is a resource that provides holistic information to people 55+, to help them live happier, healthier lives.</p>
    <p><strong>Evergreen Wellness is not affiliated with The Villages Health, and does not provide health care or give health care advice.</strong></p>
    <p>The content included on this page (on The Villages Health website), has been contributed by The Villages Health physicians and staff for your information and entertainment.</p>
    <p>If you have questions about any of the content on this page, or about your health, please contact your health care provider. And, of course, if you experience any sort of urgent health care need, do not seek guidance on this site, but immediately call 911.</p>
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <!--<span aria-hidden="true">&times;</span>-->
    </button>
    <form id="checkegw"><input id="set-cookie" type="checkbox"> I understand</form>
  </div>
</div>

<script>

	jQuery(document).ready(function(){

    if(Cookies('showed_modal') != "true") {
      jQuery("#egwModal").foundation("open");
    }
    jQuery('#checkegw :checkbox').change(function() {
      Cookies('showed_modal', 'true', { expires: 730 });
      jQuery("#egwModal").foundation("close");
    });

	});
</script>