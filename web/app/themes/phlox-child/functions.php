<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION






// Slider Header Home

function home_slider() {
	ob_start();
	?> 
	<div class="home_slide">

	
			<div style="background: url('/wp-content/uploads/2022/11/img_slide.png');" class="slide_block">


			<div class="block_text">

				<h2><?php echo __('Meilleur hôtel boutique Montréal','Phlox Child') ?> </h2>
				<h1><?php echo __('Hôtel au centre-ville de Montréal','Phlox Child') ?></h1>
				<p>
					<?php echo __('Excentrique, éclectique et intime, le Chez Swann est le seul hôtel boutique dans son genre au centre-ville de Montréal. Ses 23 chambres spacieuses de plafonds hauts et grandes fenêtres sont un havre de paix séduisant à quelques pas des grandes attractions de la métropole.','Phlox Child') ?>
				</p>

			</div>

			<div class="block_shape"></div>

		</div>
		
		
		
		

			<div style="background: url('/wp-content/uploads/2022/12/U3A4073-FILEminimizer.jpg');" class="slide_block">


		<div class="block_text">

				<h2><?php echo __('Meilleur hôtel boutique Montréal','Phlox Child') ?> </h2>
				<h1><?php echo __('Hôtel au centre-ville de Montréal','Phlox Child') ?></h1>
				<p>
					<?php echo __('Excentrique, éclectique et intime, le Chez Swann est le seul hôtel boutique dans son genre au centre-ville de Montréal. Ses 23 chambres spacieuses de plafonds hauts et grandes fenêtres sont un havre de paix séduisant à quelques pas des grandes attractions de la métropole.','Phlox Child') ?>
				</p>

			</div>

			<div class="block_shape"></div>

		</div>
		
		

		<div style="background: url('/wp-content/uploads/2022/12/U3A4370-FILEminimizer.jpg');" class="slide_block">


			<div class="block_text">

				<h2><?php echo __('Meilleur hôtel boutique Montréal','Phlox Child') ?> </h2>
				<h1><?php echo __('Hôtel au centre-ville de Montréal','Phlox Child') ?></h1>
				<p>
					<?php echo __('Excentrique, éclectique et intime, le Chez Swann est le seul hôtel boutique dans son genre au centre-ville de Montréal. Ses 23 chambres spacieuses de plafonds hauts et grandes fenêtres sont un havre de paix séduisant à quelques pas des grandes attractions de la métropole.','Phlox Child') ?>
				</p>

			</div>

			<div class="block_shape"></div>

		</div>

	</div>

	<?php
	return ob_get_clean();
}
add_shortcode( 'home_slider', 'home_slider' );











/***************   Slide section******************************/

function slide_section() {
	ob_start();
	?> 

<div class="slider_section_home">	



	
	
	<div class="section_for_slide">

			<div class="slide_section" style="background:url('/wp-content/uploads/2022/12/BU0A8733-R-copy.png')">

				<div class="block_section">


					<div class="block_icon">
						<img src="/wp-content/uploads/2022/11/download.png">
					</div>

					<div class="block_text">
						<h4><?php echo __('SUITE STANDARD','Phlox Child') ?></h4>
						<p><?php echo __('Il n’y a rien de standard à propos de nos chambres standard. Havres spacieux style loft à partir de 300 pieds carrés avec de grandes fenêtres, des lits queen  et des lampes de lecture à faisceau directionnel. Salles de bain avec de l’art mural ludique et douches à jet de pluie offrant des vues sur la chambre.','Phlox Child') ?></p>

						<a href="<?php echo (ICL_LANGUAGE_CODE=='fr'? '//suite-standard':'/suite-standard/?lang=en') ?>" class="btn"><?php echo __('En savoir plus','Phlox Child') ?> </a>
					</div>

				</div>

			</div>	

			<div class="block_shape"></div>	

		</div>
	
	
	
	<div class="section_for_slide">

			<div class="slide_section" style="background:url('/wp-content/uploads/2022/12/BU0A8495_R-copy.png')">

				<div class="block_section">


					<div class="block_icon">
						<img src="/wp-content/uploads/2022/11/download.png">
					</div>

					<div class="block_text">
						<h4><?php echo __('SUITE JUNIOR','Phlox Child') ?></h4>
						<p><?php echo __('À la fois fonctionnelles et accueillantes, nos suites juniors évoquent un refuge bohème. Lits douillets aux matelas bien rembourrés, textiles riches en couleurs, et table de nuit en tronc d’arbre. Deux lits queen, et douches à jet de pluie offrant des vues sur la chambre.','Phlox Child') ?></p>

						<a href="<?php echo (ICL_LANGUAGE_CODE=='fr'? '/suite-junior':'/suite-junior/?lang=en') ?>" class="btn"><?php echo __('En savoir plus','Phlox Child') ?>  </a>
					</div>

				</div>

			</div>	

			<div class="block_shape"></div>	

		</div>
	
	
	<div class="section_for_slide">

			<div class="slide_section" style="background:url('/wp-content/uploads/2022/12/1I2A6144-not-edited-copy.png')">

				<div class="block_section">


					<div class="block_icon">
						<img src="/wp-content/uploads/2022/11/download.png">
					</div>

					<div class="block_text">
						<h4><?php echo __('SUITE EXÉCUTIVE','Phlox Child') ?></h4>
						<p><?php echo __('Les baies vitrées de nos suites offrent une vue privilégiée et rapprochée du centre-ville. Branchées et spacieuses, chaque suite est un refuge sensuel avec literie de luxe. Bar premium, tapis verts luxuriants, lustres, salles de bain avec art mural ludique et douches à jet de pluie avec vues sur la chambre.','Phlox Child') ?></p>

						<a href="<?php echo (ICL_LANGUAGE_CODE=='fr'? '/suite-executive':'/suite-executive/?lang=en') ?>" class="btn"><?php echo __('En savoir plus','Phlox Child') ?>  </a>
					</div>

				</div>

			</div>	

			<div class="block_shape"></div>	

		</div>


	</div>

<?php
	return ob_get_clean();
}
	
add_shortcode( 'slide_section', 'slide_section' );





/***************   Slide Event section 1 ******************************/

function slide_event1() {
	ob_start();
	?> 

<div class="slide_event">
		
		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/carousel.png');"></div>
<!-- 		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/Chez-Swann-Royal-Table-2022-1-scaled.jpg');"></div> -->
		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/Chez-Swann-Round-tables-Sept-2019.jpg');"></div>
		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/Salon_Chez_Swann_LPP-scaled.jpg');"></div>


	</div>

<?php
	return ob_get_clean();
}
	
add_shortcode( 'slide_event1', 'slide_event1' );





/***************   Slide Event section 2 (cellier) ******************************/

function slide_event2() {
	ob_start();
	?> 

<div class="slide_event">
		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/cellier-1.png');"></div>
		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/Le-Cellier_Pois_Penche_01-scaled.jpg');"></div>
		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/Le-Cellier_Pois_Penche_07.jpg');"></div>

	</div>

<?php
	return ob_get_clean();
}
	
add_shortcode( 'slide_event2', 'slide_event2' );







/***************   Slide A Propos  ******************************/

function slide_apropos() {
	ob_start();
	?> 

<div class="slide_apropos">

		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/img_apropos-2.png');"></div>
		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/img_apropos-1.png');"></div>
		<div class="block_img" style="background: url('/wp-content/uploads/2022/12/img_apropos-3.png');"></div>

	</div>

<?php
	return ob_get_clean();
}
	
add_shortcode( 'slide_apropos', 'slide_apropos' );









/***************   RDV Form  ******************************/

function rdv_form() {
	ob_start();
	?> 
<div class="rdv_form">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js" integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css" integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<form action="https://reservations.verticalbooking.com/premium/index2.html" method="post" name="myform" id="myform" target="_blank" style="margin:0px; padding:0px;" onsubmit="invia_form();" >

    <!-- ###################### --> 
    <!-- PARAMETERS TO CUSTOMIZE -->
    <input name="gg" id="gg" value="" type="hidden">
    <input name="mm" id="mm" value="" type="hidden">
    <input name="aa" id="aa" value="" type="hidden">
    <input name="id_albergo" value="25722" type="hidden">
    <input name="lingua_int" value="usa" type="hidden">
    <input name="dc" value="3874" type="hidden">
    <input name="id_stile" value="19576" type="hidden">
    <input name="headvar" value="ok" type="hidden">
    <input name="countryCode" class="country_code" value="ca" type="hidden">
    <input name="gps_latitude" class="gps_latitude" value=""  type="hidden">
    <input name="gps_longitude" class="gps_longitude" value="" type="hidden">
    <div id="arrival_date" class="blocco">
		
        <div class="label"><?php echo __('Arrival date','Phlox Child') ?></div>
        <div class="tendina">
            <input id="datepicker" type="text" value="" >
        </div>
    </div>
    <div id="nights" class="blocco">
        <div class="label"><?php echo __('Nights','Phlox Child') ?></div>
        <div class="tendina">
            <select class="select" name="notti_1" >
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
            </select>
        </div>
    </div>
    <div id="rooms" class="blocco">
        <div class="label"><?php echo __('Rooms','Phlox Child') ?></div>
        <div class="tendina">
            <select class="select" name="tot_camere">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    <div id="adults" class="blocco">
        <div class="label"><?php echo __('Adults','Phlox Child') ?></div>
        <div class="tendina">
            <select class="select" name="tot_adulti">
                <option value="1">1</option>
                <option value="2" selected="selected">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    <div id="children" class="blocco">
        <div class="label"><?php echo __('Children','Phlox Child') ?></div>
        <div class="tendina">
            <select class="select" name="tot_bambini" >
                <option value="0" selected >0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>

    

    <div id="search" class="blocco">
        <input id="button" type="submit" value="<?php echo __('Réservez maintenant','Phlox Child') ?>" />
    </div>

</form>
</div>
	
	
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var now = new Date();
        var today = (now.getMonth() + 1) + '/' + now.getDate() + '/' + now.getFullYear();
        $('#datepicker').val(today);

		 $(function () {
        $("#datepicker").datepicker({minDate: "0", showOtherMonths: true, selectOtherMonths: true, altFormat: "dd" , altField: "#gg"});
		});
		$('#datepicker').change(function () {
			var data = $("#datepicker").val();
			data = data.split('/');
// 			$('#gg').val(data[0]);
// 			$('#mm').val(data[1]);
			$('#mm').val(data[0]);
			$('#gg').val(data[1]);
			$('#aa').val(data[2]);
		});
		$(function invia_form() {
			var data = $("#datepicker").attr('value');
			data = data.split('/');

// 			$('#gg').attr({value: data[0]});
// 			$('#mm').attr({value: data[1]});
			$('#mm').attr({value: data[0]});
			$('#gg').attr({value: data[1]});
			$('#aa').attr({value: data[2]});

	// alert($('#gg').attr('value')+' - '+$('#mm').attr('value')+' - '+$('#aa').attr('value'));
	//$('#myform').submit();
		});
		});

   
</script> 

	

<?php
	return ob_get_clean();
}
	
add_shortcode( 'rdv_form', 'rdv_form' );


// Create current year shortcode
function current_year_shortcode() {
    $year = date('Y');
    return $year;
}
add_shortcode('current_year', 'current_year_shortcode');