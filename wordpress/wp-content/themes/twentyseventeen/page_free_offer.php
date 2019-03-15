<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0

 template name: Free Offer

 */

?>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Easy Web Learning">
  <meta name="keywords" content="Online Marketing, Facebook Business Tools, Wordpress Lessons">
  <meta name="author" content="Julian Hansby">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>


<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>

<style type="text/css">

	video { width: 100% }
	
	body {
		background-color: #fddc57;
    	font-family: 'Open Sans', sans-serif;
    	color: #16293b;
	}

	strong, a { color: #16293b }

	.free_offer {
		border: 4px dashed #16293b;
    	padding: 30px;
    	margin: 2% auto 5% auto;
    	max-width: 500px;		
	}

		@media screen and (max-width: 480px){
			.free_offer {
				max-width: 100% !important;
				margin: 5% !important;
			}

			iframe {
				width: 100% !important;
			}
		}

	.pmpro_checkout h3 { display: none !important }

	.pmpro_checkout { color:  #16293b}

	.pmpro_checkout-field { margin: 5px 0 }

	.pmpro_checkout-fields label {
		display: inline-block;
    	width: 40%;
	}

	#pmpro_payfast_before_checkout { margin-top: 20px;  }

	.pmpro_checkout-fields input { width: 55% }

	.header, .pmpro_submit { text-align: center }

	input[type="text"], input[type="email"], input[type="password"] {
		border-radius: 4px;
		padding: 8px 14px;
		border: none;
	}

	.red_text { color: red !important }

	.pmpro_hidden strong { display: none }

	input[type="submit"], .pmpro_checkout-fields input[type="button"] {
		border: none;
		padding: 15px 30px;
		font-size: 1.2em;
		border-radius: 4px;
		background-color: #16293b;
		color: #fff;
		text-transform: uppercase;
		cursor: pointer;
		margin: 15px auto;
		width: 100%;
	}

	.pmpro_error {
		color: red;
		text-align: center;
		font-weight: bold;
		margin-top: 20px;
		border: 1px solid red !important;
	}

	#pmpro_tos_fields label {
	    width: 80%;
	}

	#pmpro_tos_fields input {
	    width: 20px;
	    height: 20px;
	    position: relative;
	    top: 5px;
	}	

	h4 {
    	text-transform: uppercase;
    	font-size: 2em;
    	margin-bottom: 2%;
	}

	#mailpoet_form_1 .mailpoet_text, #mailpoet_form_1 .mailpoet_textarea {
		width: 250px !important;
		margin: 0 auto !important;
		padding: 15px 20px !important;
		font-size: 1em !important;
	}

	#mailpoet_form_1 .mailpoet_paragraph {
		text-align: center;
	}

	#mailpoet_form_1 .mailpoet_divider {
	    border-color: #16293b;
	}
</style>

<div class="free_offer">

	<div class="header">
		<img src="/assets/images/logo_bg_color_black_nospace.png" alt="EWL Logo" />
	</div>

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/page/content', 'page' );

	endwhile; // End of the loop.
	?>

</div>


<?php 
