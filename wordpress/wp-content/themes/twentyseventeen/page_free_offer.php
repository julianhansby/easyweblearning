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

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<style type="text/css">

	video { width: 100% }
	
	body {
		background-color: #fddc57;
    	font-family: 'Open Sans', sans-serif;
    	color: #16293b;
	}

	strong { color: #16293b }

	.free_offer {
		border: 4px dashed #16293b;
    	padding: 30px;
    	margin: 2% auto 5% auto;
    	max-width: 500px;		
	}

	.header { text-align: center }

	input[type="text"], input[type="email"] {
		border-radius: 4px;
		padding: 8px 14px;
		border: none;
	}

	.red_text { color: red !important }

	input[type="submit"] {
		border: none;
		padding: 15px 30px;
		font-size: 1.2em;
		border-radius: 4px;
		background-color: #16293b;
		color: #fff;
		text-transform: uppercase;
		cursor: pointer;
		margin: 0 auto;
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
