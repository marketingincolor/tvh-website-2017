<?php
/**
 * The sidebar containing specific staff widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="staff-widget-1" class="widget widget-dr-home">Staff Widget 1</article>
	<article id="staff-widget-2" class="widget widget-insurance">Staff Widget 2</article>
	<article id="staff-widget-3" class="widget widget-directory-dl">Staff Widget 3</article>
	<article id="staff-widget-4" class="widget widget-dr-articles">Staff Widget 4</article>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
