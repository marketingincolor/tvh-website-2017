<?php
// Display Search component for Doctors in full-width container above footer
// 

 ?>
<div class="doctor-finder">
	<div class="small-11 small-centered columns">
		<h4>Search our 40+ primary care doctors and 20+ specialists by...</h4>
		<form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
			<div class="small-12 columns"><input type="text" name="s" placeholder="Doctor Name"/></div>
			<input type="hidden" name="post_type" value="staff" /> <!-- // hidden 'staff' value -->
			<div class="small-6 columns">
				<label for="specialty">Specialty</label>
				<select name="specialty">
					<option value="">Select an Option</option>
					<option value="Family Medicine">Family Medicine (Primary Care)</option>
					<option value="Internal Medicine">Internal Medicine (Primary Care)</option>
					<option value="Audiology">Audiology</option>
					<option value="Cardiology">Cardiology</option>
					<option value="Dermatology">Dermatology</option>
					<option value="Endocrinology">Endocrinology</option>
					<option value="Gastroenterology">Gastroenterology</option>
					<option value="General Surgery">General Surgery</option>
					<option value="Gynecology">Gynecology</option>
					<option value="Neurology">Neurology</option>
					<option value="Orthaopaedics">Orthaopaedics</option>
					<option value="Rheumatology">Rheumatology</option>
					<option value="Psychiatry">Psychiatry</option>
					<option value="Urology">Urology</option>
				</select>
			</div>
			<div class="small-6 columns">
				<label for="carecenter">Locations</label>
				<select name="carecenter">
					<option value="">Select a Location</option>
					<option value="Belleview Care Center">Belleview Care Center</option>
					<option value="Colony Care Center">Colony Care Center</option>
					<option value="Creekside Care Center">Creekside Care Center</option>
					<option value="Mulberry Grove Care Center">Mulberry Grove Care Center</option>
					<option value="Pinellas Care Center">Pinellas Care Center</option>
					<option value="Santa Barbara Care Center">Santa Barbara Care Center</option>
					<option value="Brownwood Care Center">Brownwood Care Center</option>
					<option value="Specialty Care Center">Specialty Care Center</option>
				</select>
			</div>
			<input class="top-button orange" type="submit" alt="Search" value="Find A Doctor" />
		</form>
	</div>
</div>