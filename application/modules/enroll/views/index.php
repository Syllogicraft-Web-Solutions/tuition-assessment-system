<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<header>

</header>

<section class="">
	
	<div class="hero-shot full-height full-width w3-display-container" style="">

		<!-- <div class="site-title w3-display-middle">
			<h1 class="w3-text-white w3-jumbo"> <?= $page_title ?> </h1>
		</div> -->
		<form class="enroll-form w3-theme-l3 w3-display-middle w3-display-container">
			<div class="w3-container w3-theme">
				<h3>Regisration Form</h3>
			</div>
			<div class="enroll-fields-container w3-container">
				<div class="fields w3-row-padding">
					<div class="w3-half"><label>Student No.</label><input class="w3-input w3-border-theme" type="text" name="student_no"></div>
					<div class="w3-half">
						<label>Student Class</label></br>
						<span class="margin-lr-20">
							<input id="new" class="w3-radio" type="radio" name="decrepitude" value="new"><label for="new">New</label>
						</span>
						<span class="margin-lr-20">
							<input id="old" class="w3-radio" type="radio" name="decrepitude" value="old"><label for="old">Old</label>
						</span>
					</div>
				</div>
				<div class="fields w3-row-padding">
					<div class="w3-third">
						<label>Last Name</label>
						<input class="w3-input w3-border-theme" type="text" name="last_name">
					</div>
					<div class="w3-third">
						<label>First Name</label>
						<input class="w3-input w3-border-theme" type="text" name="first_name">
					</div>
					<div class="w3-third">
						<label>Middle Name</label>
						<input class="w3-input w3-border-theme" type="text" name="middle_name">
					</div>
				</div>
				<div class="fields w3-row-padding">
					<div class="w3-half"><label>Semester</label><input class="w3-input w3-border-theme" type="text" name="semester"></div>
					<div class="w3-half">
						<label>School Year</label></br>
						<div class="w3-row">
							<span class="w3-third">
								<input class="w3-input w3-border-theme" type="input" name="school_year_start" value="">
							</span>
							<span class="w3-center w3-third">To</span>
							<span class="w3-third">
								<input class="w3-input w3-border-theme" type="input" name="school_year_end" value="">
							</span>
						</div>
					</div>
				</div>
				<div class="fields w3-row-padding">
					<div class="w3-half">
						<label>Address</label>
						<input class="w3-input w3-border-theme" type="text" name="address">
					</div>
					<div class="w3-half">
						<label>Guardian</label>
						<input class="w3-input w3-border-theme" type="text" name="guardian">
					</div>
				</div>
				<div class="fields w3-row-padding">
					<div class="w3-third">
						<label>Tel. No.</label>
						<input class="w3-input w3-border-theme" type="text" name="tel_no">
					</div>
					<div class="w3-third">
						<label>Birth Date</label>
						<input class="w3-input w3-border-theme" name="birth_date">
					</div>
					<div class="w3-third">
						<label>Birth Place</label>
						<input class="w3-input w3-border-theme" name="birth_place">
					</div>
				</div>
				<div class="fields w3-row-padding">
					<div class="w3-third">
						<label>Sex</label></br>
						<span class="margin-lr-20">
							<input id="male" class="w3-radio" type="radio" name="sex" value="male"><label for="male">Male</label>
						</span>
						<span class="margin-lr-20">
							<input id="female" class="w3-radio" type="radio" name="sex" value="female"><label for="female">Female</label>
						</span>
					</div>
					<div class="w3-third">
						<label>Course</label>
						<input class="w3-input w3-border-theme" name="course">
					</div>
					<div class="w3-third">
						<label>Year Level</label>
						<input class="w3-input w3-border-theme" name="year_level">
					</div>
				</div>
			</div>
			<div class="fields w3-right w3-margin">
				<label>Date</label><input class="w3-input w3-border-theme" style="" name="date_submitted">
			</div>
		</form>
	</div>

</section>

<div class="w3-container"></div>

<script>
	
	jQuery('[name=birth_date]').datepicker({
	    changeMonth: true, 
	    changeYear: true, 
	    dateFormat: "dd/mm/yy",
   		yearRange: "-90:+00"
	});

	jQuery('[name=date_submitted]').datepicker({
	    changeMonth: true, 
	    changeYear: true, 
	    dateFormat: "dd/mm/yy"
	});

</script>