<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}
	

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
	$phone = trim($_POST['phone']);
	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'luka.howard@gmail.com'; //Put your own email address here
		$body = "Name: $name \n\nPhone: $phone \n\nEmail: $email \n\nComments:\n $comments";
		$headers = 'DISUK Ennquiry' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Mooi | A Beautifully Clean and Simple SCSS Framework</title>
<!-- css3-mediaqueries.js for IE less than 9 -->
 <!--[if lte IE 8]>
<script src="http://www.lukehoward.me.uk/mooi/jquery/html5shiv.js"></script>

<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="//f.fontdeck.com/s/css/hHe2eeOPSef/0iNrBlOdAIYMato/lukehoward.me.uk/35410.css" type="text/css" />
<link rel="stylesheet" href="//f.fontdeck.com/s/css/hHe2eeOPSef/0iNrBlOdAIYMato/www.lukehoward.me.uk/35410.css" type="text/css" />
<link href="stylesheets/style.css" rel="stylesheet" type="text/css">
<!-- css3-mediaqueries.js for IE less than 9 -->
 <!--[if lte IE 8]>
<script src="http://www.lukehoward.me.uk/mooi/jquery/respond.js"></script>
<![endif]-->

<script type="text/javascript" src="jquery/navigation.js"> </script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	// validate signup form on keyup and submit
	var validator = $("#contactform").validate({
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			phone: {
				required: false,
			},
			company: {
				required: false,
			},
			message: {
				required: true,
				minlength: 10
			}
		},
		messages: {
			name: {
				required: "Please enter your name.",
				minlength: jQuery.format("Please enter your name")
			},
			email: {
				required: "Please enter your email address.",
				minlength: "Please enter your email address."
			},
			message: {
				required: "Please enter your message.",
				minlength: jQuery.format("Please enter your message.")
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			label.addClass("checked");
		}
	});
});
</script>


</head>

<body>
<?php include_once("scripts/analytics.php") ?>
<!-- Page Header -->

<header class="row">
	<div class="sixteen columns mooi-header">
    <img class="logo" src="images/mooi_logo_sml.png" width="168" height="60" alt="Mooi">
	<nav class="mooi-menu-right add-top-space">
    	<ul>
        	<li><a href="http://www.lukehoward.me.uk/mooi/">Home</a></li>
            <li><a href="http://www.lukehoward.me.uk/mooi/documentation.php">Documentation</a></li>
            <li><a href="http://www.lukehoward.me.uk/mooi/license.php">License</a></li>
            <li><a href="http://www.lukehoward.me.uk/mooi/contact.php">Contact</a></li>
		</ul>
	</nav>        	          
    </div>
</header>    

<div class="row section">
	<div class="sixteen columns">
    <h2>Drop us a Line</h2>
	</div>
    <div class="two-thirds column">
    
    	<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                    <div class="form_success">
                        <h6>Email Successfully Sent!</h6>
                        <p>Thanks for your message <strong><?php echo $name;?></strong>! I will be in touch with you soon.</p>
                	</div>
				<?php } ?>
    
    	<form class="mooi-form mooi-form-aligned" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform" >
        	<div>
                <label>Name</label>
                <input type="text" name="name" id="name" placeholder="Name" />
			</div>
            <div>
                <label>Email</label>
                <input type="text" name="email" id="email" placeholder="Email" />
			</div>
            <div>
                <label>Phone</label>
                <input type="text" name="phone" id="phone" placeholder="Phone" />
			</div>
            <div>
                <label>Message</label>
                <textarea name="message" id="message" placeholder="Message"></textarea>
			</div>            
            
            <div class="mooi-form-aligned-right">
            	<input class="mooi-button mooi-button-primary" type="submit" value="Send Message" name="submit" id="contact-submit-button" title="Click here to submit your message!" />
            </div>
		</form>
    		
            <?php if(isset($hasError)) { //If errors are found ?>
                    <p class="form_error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
			<?php } ?>
                
            
	</div>
    <div class="one-third column">
    
    </div>
    
</div>

<footer class="row">
    <div class="one-third column">
    	<p>&copy; Copyright 2013. Luke Howard. All Rights Reserved.</p>
    </div>
    <div class="one-third column">
    
    </div>
    <div class="one-third column">
    
    </div>
</footer>

</body>
</html>