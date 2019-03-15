<?php
/**
	template name: Chat Bot Page 1 - 2019

**/
?>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Easy Web Learning">
  <meta name="keywords" content="Online Marketing, Facebook Business Tools, Wordpress Lessons">
  <meta name="author" content="Julian Hansby">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<style type="text/css">
	
	body {
		background-color: #fddc57;
		color: #16293b;
		font-family: 'Arial', sans-serif; 
	}

	button, .mailpoet_submit {
		background: green;
		padding: 10px 15px;
		border-radius: 5px;
		text-align: center;
		border: none;
		color: white;
		cursor: pointer;
	}

	input {
		padding: 6px;
		border: 1px solid grey;
		border-radius: 5px;
	}	

	.phone_view {
		width: 100%;
		max-width: 600px;
		margin: 0 auto;
		border: 1px solid #16293b;
		border-radius: 6px;
		padding: 0;
		-webkit-box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.5);
		-moz-box-shadow:    2px 2px 3px 1px rgba(0, 0, 0, 0.5);
		box-shadow:         2px 2px 3px 1px rgba(0, 0, 0, 0.5);
	}

	.header {
		text-align: center;
		padding: 4% 0;
		box-shadow: 0 8px 6px -6px rgba(0,0,0,0.5);
	}

	.chat_holder {
		padding: 2%;
		position: relative;
	}

		.chat_holder:after {
			content: "";
			background: url('../assets/images/bg_img.png');
			opacity: 0.2;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			position: absolute;
			z-index: -1;	
		}

	.chat_bubble {
		display: none;
		border-radius: 6px;
		padding: 0 0 0 70px;
		width: 100%;
		max-width: 60%;
		margin: 1% 2%;
		font-size: 14px;
		position: relative;
	}

		img.avatar {
			border-radius: 50%;
			width: 60px;
			position: absolute;
			top: 8px;
			left: 10px;
		}	

		img.avatar_user {
			width: 40px;
			position: absolute;
			left: 10px;
		}		

		.chat_bubble p {
		    margin: 0;
		    padding: 12px;
		}

	.chat_bubble:after {
		width: 0; 
		height: 0; 
		border-top: 10px solid transparent;
		border-bottom: 10px solid transparent;
		border-right:10px solid blue; 		
	}

		.julian {
			float: left;
			background-color: white;
		}
		.user {
			color: #f1f1f1 !important;
			float: right;
			background-color: #3498db;
			text-align: center;
			padding: 10px;
		}

/* Typing icon animation CSS */
.loader {
  border: 5px solid #fff;
  border-radius: 50%;
  border-top: 5px solid #3498db;
  width: 30px;
  height: 30px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
  margin: 10px auto;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

<div class="bot_holder">
	<div class="phone_view">
		<div class="header">
			<img src="https://easyweblearning.co.za/../assets/images/logo_bg_color_black_nospace.png">
		</div>
		<div class="chat_holder">
			<!-- bubble -->
			<div class="chat_bubble julian bubble1">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<p>Hi, my name is Julian.</p><p> A <strong>WARM</strong> and <strong>HEARTY</strong> welcome to you.</p>
			</div>
			<!-- bubble -->
			<div class="chat_bubble julian bubble2">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<p>You are here because you would like to learn <strong>HOW</strong> to generate more leads and sales for your own products, and / or for other businesses' products and services...correct?</p>
				<p><button class="btn_correct">CORRECT</button></p>
			</div>
			<!-- bubble -->
			<div class="chat_bubble user bubble3">
				<img src="../assets/images/avatar_user_2.png" class="avatar_user">
				<p>CORRECT!</p>
			</div>
			<!-- bubble -->
			<div class="chat_bubble julian bubble4">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<p>Excellent! I have created easy-to-learn videos which carefully takes you through a process on exactly <strong>HOW</strong> to go about generating leads and sales.</p>
			</div>
			<!-- bubble -->
			<div class="chat_bubble julian bubble5">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<p>The techniques I will teach you is sought after as there are hundreds of thousands of businesses (especially in South Africa) <strong>LOOKING</strong> for people to market their products and services...online.</p> 
				<p>What you will learn is called "<strong>High Income Skills</strong>" which basically means you can do marketing for <strong>ANY</strong> business across <strong>ANY</strong> industry...and earn thousands of rands.</p>
			</div>

			<!--  was born many comes from a combination of <strong>HIGHLY SUCCESSFULL</strong> business men such as Dan Lok, Kevin David, Russell Brunson (all of which are multi-dollar millionares), Dan Pena (the "$50B man") and one or two others.-->

			<!-- bubble -->
			<div class="chat_bubble julian bubble6">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<p>Below is a short introduction video on how I am going to help you succeed.</p>
				<p><strong>AFTER</strong> the video I will give you the link to one of my <strong>PAID</strong> lessons...absolutely <strong>FREE</strong> of charge, so please continue to have a chat with me after the video is done.</p>
				<p>I want to <strong>FAST-TRACK</strong> you and get you up and running as <strong>QUICKLY</strong> as possible.</p>
				<p><button class="btn_watchvideo">OK, WATCH VIDEO</button>
			</div>
			<!-- bubble -->
			<div class="chat_bubble user bubble7">
				<img src="../assets/images/avatar_user_2.png" class="avatar_user">
				<p>WATCH VIDEO...</p>
			</div>
			<!-- bubble -->
			<div class="chat_bubble julian bubble8">
				<iframe width="320" height="215" src="https://www.youtube.com/embed/4HpTKkja-VY?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<!-- bubble -->
			<div class="chat_bubble julian bubble9">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<p>Lets continue the conversation?</p>
				<p><button class="btn_yes_more">YES, I WANT TO KNOW MORE</button></p>
			</div>
			<!-- bubble -->
			<div class="chat_bubble user bubble10">
				<img src="../assets/images/avatar_user_2.png" class="avatar_user">
				<p>CONTINUE CONVERSATION</p>
			</div>
			<!-- bubble 
			<div class="chat_bubble julian bubble11">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<p>Lovely! Let's continue the conversation...</p>
				<p>By the way, if I may ask, what is your name?</p>
			</div>-->
			<!-- bubble 
			<div class="chat_bubble user bubble12">
				<p>My name is <input type="text" class="inp_name"></p>
				<p><button class="btn_continue">Continue..</button></p>
			</div>-->
			<!-- bubble -->
			<div class="chat_bubble julian bubble13">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<!--<p>Very glad to be acquanted <strong class="output_name"></strong></p>-->
				<p>Before watching my paid lesson <strong>FREE of charge</strong> allow me to send you a complimentary Online Marketing Strategy document, also <strong>FREE OF CHARGE</strong>.</p>
			</div>
			<!-- bubble -->
			<div class="chat_bubble julian bubble14">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<p>After watching the video you can use it for future reference.</p>
				<p><button class="btn_happy_cont">Happy, send me a copy</button></p>
			</div>
			<!-- bubble -->
			<div class="chat_bubble julian bubble15">
				<img src="../assets/images/julian_hansby_v2.png" class="avatar">
				<p>Excellent! Which email address can I send the document too?</p>
				<p><?php echo do_shortcode("[mailpoet_form id='2']"); ?></p>
				<!--<p><input type="text"><button>send</button></p>-->
			</div>
			<div style="clear: both;"></div>
			<div class="loader"></div>	
		</div>
	</div>	
</div>

<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript">
	
	;(() => {

		let sequence1 = () => {
			setTimeout(() => {
				$(".bubble2").show();
				$(".loader").hide();
			}, 3000);
		}

		let sequence2 = () => {
			$(".loader").show();
			$(".bubble3").show();
			setTimeout(() => { $(".bubble4").show() }, 3000);
			setTimeout(() => { $(".bubble5").show() }, 6000);
			setTimeout(() => {
				$(".bubble6").show();
				$(".loader").hide();
				animateToSection(".bubble6");
			}, 7000);				
		}

		let sequence3 = () => {
			$(".loader").show();
			$(".bubble7").show();
			animateToSection(".bubble7");
			// show video ...
			setTimeout(() => {
				$(".bubble8").show();
				animateToSection(".bubble8");
				$(".loader").hide();
			}, 3000);
			// ... then 15s later show continue chat button
			setTimeout(() => {
				$(".bubble9").show();
				animateToSection(".bubble9");
			}, 20000);
		}

		let sequence4 = () => {
			$(".loader").show();
			$(".bubble10").show();
			animateToSection(".bubble10");
			setTimeout(() => {
				$(".bubble13").show();
				animateToSection(".bubble13");
			}, 3000);
			setTimeout(() => {
				$(".bubble14").show();
				animateToSection(".bubble14");
				$(".loader").hide();
			}, 6000);											
		}

		let sequence5 = () => {
			$(".loader").show();
			$(".bubble13").show();
			animateToSection(".bubble13");
			setTimeout(() => {
				$(".bubble14").show();
				animateToSection(".bubble14");
				$(".loader").hide();
			}, 3000);
		}

		let sequence6 = () => {
			$(".loader").show();
			setTimeout(() => {
				$(".bubble15").show();
				animateToSection(".bubble15");
				$(".loader").hide();
			}, 3000);			
		}

		let storeName = () => {
			let getName = $(".inp_name").val();
			$(".output_name").text(getName)
		}

		let animateToSection = ((className) => {
			$("body").animate({
				scrollTop: $(className).offset().top
			})
		})

		// on init
		$(".bubble1").show();
		sequence1();

		// events

		$(".btn_correct").click(function () { sequence2() })
		$(".btn_watchvideo").click(function () { sequence3() })		
		$(".btn_yes_more").click(function () { sequence4() })
		$(".btn_continue").click(function () {
			storeName();
			sequence5();
		})
		$(".btn_happy_cont").click(function () { sequence6() })
	})()

</script>