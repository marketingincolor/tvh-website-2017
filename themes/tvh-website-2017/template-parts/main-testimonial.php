<?php
// Display Client Testimonial in full-width container above footer
// of several pages on the TVH site.
// 

$testimonial = Array(
		'<h3>"When we were in Texas, sometimes I would sit waiting for my doctor for two hours. Here, we never have to wait. They are always ready for us."</h3><h4>Jim and Linda Ammons, Patients of Creekside Care Center</h4>',
		'<h3>"You have a team, not just a doctor, but a team that\'s working for you. They do follow up. They\'re a tremendous group. It\'s peace of mind to have that kind of team behind you. Frankly, I don\'t think you could get that kind of medical support anywhere else."</h3><h4>Bob Shrader, Patient at Pinellas Care Center</h4>',
		'<h3>"The Villages Health has been extremely good to me. I haven\'t felt this physically and mentally well for a long time. If you\'re rating it from one to 10, I\'d give it a 10-plus."</h3><h4>Jack Danahy, Patient at Santa Barbara Care Center</h4>',
		'<h3>"Having the nurse navigator come to our home and administer the care I needed once I left the hospital was very reassuring – especially to my wife who works full-time. It was beyond anything I have ever experienced before."</h3><h4>Joe Sidoti, Patient of Colony Care Center</h4>',
		'<h3>"Before I came to The Villages Health, I had problems for 30 years. Dr. Steepy and Dr. Ollivierre, working together on this, finally found what the problem was"</h3><h4>Paula Pearl, Patient of Specialty Care Center and Colony Care Center</h4>'
	);
 ?>
<div class="testimonial">
	<div class="tm-content">
		<?php echo $testimonial[array_rand($testimonial)]; ?>
	</div>
</div>