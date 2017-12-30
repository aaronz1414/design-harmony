<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no" />
<link rel="stylesheet" href="css/dh_styles.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<title>Contact Design Harmony Interior Design | Chicago North and Northwest Suburbs</title>
</head>

<body>

<div id="floater"></div>
<div id="wrapper">
	<p class="tagline">Inviting interiors for living</p>
	<div id="container">    
    	<div id="sidenav">
        	<a href="index.html"><img src="images/dh_logo.png" alt="design harmony logo" class="main-logo" /></a>
            <ul class="nav">
            	<li><a href="index.html">HOME<br><img src="images/nav_line.png" alt="" ></a></li>
            	<li><a href="about.html">ABOUT<br><img src="images/nav_line.png" alt="" ></a></li>
                <li><a href="portfolio.html">PORTFOLIO<br><img src="images/nav_line.png" alt="" ></a></li>
                <li><a href="philosophy.html">PHILOSOPHY<br><img src="images/nav_line.png" alt="" ></a></li>               
                <li><a href="contact.php">CONTACT<br><img src="images/nav_line.png" alt="" ></a></li>
            </ul>
        </div><!--close sidenav-->
        <div id="main" class="contact">  
        	<div class="left">      	
                <img src="images/contact-dorothy.png" alt="Comtact Dorothy" class="main-heading"/>
                <div class="info">
                    <div><img src="images/icon-phone.png" alt="phone icon" /><p>847-338-8921</p></div>
                    <div><img src="images/icon-email.png" alt="phone icon" /><p>dzalewski14@gmail.com</p></div>
                </div>
            </div>
            <div class="right">
            	<div class="contact-form">   
                	<?php
if ($_POST) {
	$to = array('dzalewski14@gmail.com');
	if ($_POST['name'] != "" && $_POST['email'] != '' && $_POST['comment'] != '') {
		
		foreach ($_POST as $key=>$val) {
			$body .= $key . ": " . $val . "\r\n";
		}
		$body .= "\r\n IP: " . $_SERVER["REMOTE_ADDR"];
		
		foreach ($to as $oneto) {
		$headers = 'From: Design Harmony website' . "\r\n" .
    'Reply-To: dzalewski14@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

			mail($oneto,'Design Harmony Contact Form Submission',$body,$headers);
		}
		echo "<fieldset><p><br><br><br><br><br><br><br><br><br><br><br><br><span>Thank you for contacting me!<br>Your information has been submitted.</span></p></fieldset>";
	} else {
		$error = 1;	
	}
} 

if (!$_POST || $error == 1) {
	
?>    <form method=post action='contact.php'>
    	<fieldset>
        	<p class="error">
        		<?php
        		if ($error == 1) echo "The following fields are required:<br>";
        		if ($error == 1 && $_POST['name'] == "") echo "- Name<br>";
        		if ($error == 1 && $_POST['email'] == "") echo "- Email<br>";
        		if ($error == 1 && strlen($_POST['comment']) == 0) echo "- Comments";
        		if ($error == 1) echo "<br>";
        	
        		
        		?>
			<div>
            
            <label for="name">Name<span style="color:#707413;">*</span></label><br />
			<input type="text" id="name" name="name" class="required name" value='<?php echo $_POST['name'];?>'/>
            </p>
                        
			<p>
			<label for="company">Company</label><br />
			<input type="text" id="company" name="company" class="company"  value='<?php echo $_POST['company'];?>' />
			</p>                      
        			
            <p>
			<label for="email">Email<span style="color:#707413;">*</span></label><br />
			<input id="email" name="email" type="email" class="required email"  value='<?php echo $_POST['email'];?>' />
			</p>                           
            
            <p>
			<label for="phone">Phone</label><br />
			<input id="phone" name="phone" type="tel" class="phone"  value='<?php echo $_POST['phone'];?>' />
			</p>
                        
			<p>
			<label for="comment">Comments<span style="color:#707413;">*</span></label><br />
			<textarea id="comment" name="comment" class="required" rows="3" cols="35"><?php echo  $_POST['comment'];?></textarea>
			</p>
        
        <input class="submit" type="submit" value="Submit form"/>
    	</fieldset>
        <br />
    </form>
<?php
}
?>
				</div>
            </div>
        </div><!--close main-->
        <div id="rightside" class="morris">
        </div><!--close rightside-->
        <p class="copyright">&copy;2013 Design Harmony</p>
    </div><!--close container-->
</div>
<!--close wrapper-->

</body>
</html>