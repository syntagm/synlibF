<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

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
		$emailTo = 'syntagm@icon.co.za';
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: psdDesigner <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Syngenta Mobile Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
<meta name="author" content="SYNapps - http://www.syntagm.co.za" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />

<!-- SOME JQUERY PLUGINS START -->
	<script src="http://code.jquery.com/jquery-1.8.0.min.js" type="text/javascript"></script>
    <script src="js/jquery.transit.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="cufon/cufon.js" type="text/javascript"></script>
    <script src="cufon/Quicksand.js" type="text/javascript"></script>
<!-- SOME JQUERY PLUGINS END -->

<!-- GOOGLE FONTS START -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<!-- GOOGLE FONTS END -->

<!-- CUFON FONTS / You can change any text to cufon just add the id-class or TAG of your text. / -->
	<!-- Like this: Cufon.replace('TAG', { fontFamily: 'Quicksand Book', color: '#555' }); -->
<script type="text/javascript">
	Cufon.replace('h1', { fontFamily: 'Quicksand Book', color: '#444' });
	Cufon.replace('h2', { fontFamily: 'Quicksand Book', color: '#A53539' });
	Cufon.replace('h3', { fontFamily: 'Quicksand Book', color: '#555' });
	Cufon.replace('#skill li', { fontFamily: 'Quicksand Book', color: '#A53539' });
	Cufon.replace('.name', { fontFamily: 'Quicksand Book', color: '#A53539' });
</script>


<!-- GALLERY START -->
	<script type="text/javascript" src="lib/klass.min.js"></script>
    <script type="text/javascript" src="lib/code.photoswipe-3.0.5.min.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>

<!-- SLIDER START -->
	<script src="js/responsiveslides.min.js"></script>
    <script type="text/javascript"> $(function() { $(".rslides").responsiveSlides(); }); </script>
<!-- SLIDER END -->

</head>

<body>
<div id="fullpage">
    <div id="some_pos">
        <ul id="menu">
            <li id="HB"> Home </li>
            <li id="PB"> Products </li>
            <li id="SB"> Services </li>
            <li id="AB"> Support </li>
            <li id="CB"> Contact </li>
        </ul>
	</div>
        
<div id="content">

	<div id="top">
		<div id="button_nav_a"></div>
        <div id="button_nav_b"></div>
		<div id="logo"></div>
        <div id="social"> Social </div>
	</div>

    <div id="social_icons">
    	<div id="s_icons_pos">
            <a href="#"> <img src="img/s_icons/twitter.png" /> </a>
            <a href="#"> <img src="img/s_icons/facebook.png" /> </a>
            <a href="#"> <img src="img/s_icons/youtube.png" /> </a>
            <a href="#"> <img src="img/s_icons/github.png" /> </a>
            <a href="#"> <img src="img/s_icons/evernote.png" /> </a>
            <a href="#"> <img src="img/s_icons/flickr.png" /> </a>
            <a href="#"> <img src="img/s_icons/skype.png" /> </a>
            <a href="#"> <img src="img/s_icons/digg.png" /> </a>
    	</div>
    </div>
    
<div class="clr"></div>
        
<!-- START HOME PAGE --> <div id="CH"> 
        
    <ul class="rslides">
      <li><img src="img/slide/1.jpg" alt=""></li>
      <li><img src="img/slide/2.jpg" alt=""></li>
      <li><img src="img/slide/3.jpg" alt=""></li>
    </ul>
   
<div class="clr"></div>

    <h1> Welcome To Syngenta </h1>
    	<div class="decoration"></div>
    	<div class="text_box">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>

<div class="clr"></div>
   		<div class="decoration"></div>    
        
        <h1> NEWS </h1>
        <div id="post_content">
        
<div class="clr"></div> 
       
            <div class="post">
            	<img src="img/post_img/1.jpg" />
            	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
                <div class="clr"></div>
                <div class="i_post">
                	<div class="postedby i_post_class">Posted by : Admin</div>
                    <div class="postcomment i_post_class"> <a href="#"> Comment </a> </div>
                </div>
            </div>
            
<div class="clr"></div>

            <div class="post">
            	<img src="img/post_img/1.jpg" />
            	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
                <div class="clr"></div>
                <div class="i_post">
                	<div class="postedby i_post_class">Posted by : Admin</div>
                    <div class="postcomment i_post_class"> <a href="#"> Comment </a> </div>
                </div>
            </div>
            
<div class="clr"></div>
            
            <div class="post">
               		<img src="img/post_img/1.jpg" />
                	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    
                <div class="clr"></div>
                <div class="i_post">
                    <div class="postedby i_post_class">Posted by : Admin</div>
                    <div class="postcomment i_post_class"> <a href="#"> Comment </a> </div>
                </div>
            </div>
        </div>       
        
</div> <!-- END HOME PAGE -->     

<!-- START PORTFOLIO PAGE --> <div id="CP"> 
        
        <div class="clr"></div>

            <div id="MainContent">	
                <ul id="Gallery" class="gallery">
                    <li><a href="img/full/001.jpg"><img src="img/thumb/001.jpg" alt="Image 001" /></a></li>
                    <li><a href="img/full/002.jpg"><img src="img/thumb/002.jpg" alt="Image 002" /></a></li>
                    <li><a href="img/full/003.jpg"><img src="img/thumb/003.jpg" alt="Image 003" /></a></li>
                    <li><a href="img/full/004.jpg"><img src="img/thumb/004.jpg" alt="Image 004" /></a></li>
                    <li><a href="img/full/005.jpg"><img src="img/thumb/005.jpg" alt="Image 005" /></a></li>
                    <li><a href="img/full/006.jpg"><img src="img/thumb/006.jpg" alt="Image 006" /></a></li>
                    <li><a href="img/full/007.jpg"><img src="img/thumb/007.jpg" alt="Image 007" /></a></li>
                    <li><a href="img/full/008.jpg"><img src="img/thumb/008.jpg" alt="Image 008" /></a></li>
                    <li><a href="img/full/009.jpg"><img src="img/thumb/009.jpg" alt="Image 009" /></a></li>
                    <li><a href="img/full/010.jpg"><img src="img/thumb/010.jpg" alt="Image 010" /></a></li>
                    <li><a href="img/full/011.jpg"><img src="img/thumb/011.jpg" alt="Image 011" /></a></li>
                    <li><a href="img/full/012.jpg"><img src="img/thumb/012.jpg" alt="Image 012" /></a></li>
                    <li><a href="img/full/013.jpg"><img src="img/thumb/013.jpg" alt="Image 013" /></a></li>
                    <li><a href="img/full/014.jpg"><img src="img/thumb/014.jpg" alt="Image 014" /></a></li>
                    <li><a href="img/full/015.jpg"><img src="img/thumb/015.jpg" alt="Image 015" /></a></li>
                    <li><a href="img/full/016.jpg"><img src="img/thumb/016.jpg" alt="Image 016" /></a></li>
                    <li><a href="img/full/017.jpg"><img src="img/thumb/017.jpg" alt="Image 017" /></a></li>
                    <li><a href="img/full/018.jpg"><img src="img/thumb/018.jpg" alt="Image 018" /></a></li>
                    <li><a href="img/full/010.jpg"><img src="img/thumb/010.jpg" alt="Image 010" /></a></li>
                    <li><a href="img/full/011.jpg"><img src="img/thumb/011.jpg" alt="Image 011" /></a></li>
                    <li><a href="img/full/001.jpg"><img src="img/thumb/001.jpg" alt="Image 001" /></a></li>
                    <li><a href="img/full/002.jpg"><img src="img/thumb/002.jpg" alt="Image 002" /></a></li>
                    <li><a href="img/full/003.jpg"><img src="img/thumb/003.jpg" alt="Image 003" /></a></li>
                    <li><a href="img/full/004.jpg"><img src="img/thumb/004.jpg" alt="Image 004" /></a></li>
                    <li><a href="img/full/005.jpg"><img src="img/thumb/005.jpg" alt="Image 005" /></a></li>
                    <li><a href="img/full/006.jpg"><img src="img/thumb/006.jpg" alt="Image 006" /></a></li>
                    <li><a href="img/full/007.jpg"><img src="img/thumb/007.jpg" alt="Image 007" /></a></li>
                    <li><a href="img/full/015.jpg"><img src="img/thumb/015.jpg" alt="Image 015" /></a></li>
                </ul>
            </div>	
               
</div>  <!-- END PORTFOLIO PAGE -->  

<!-- START SERVICES PAGE --> <div id="CS"> 
        
    <h1> Services </h1>
    	<div class="decoration"></div>
    	
	<div id="serv_pos">
        <div class="service">
        	<div id="serv_web"></div>
            <h3> Web Design </h3>
            <div class="serv_content">
            	<span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>
        <div class="clr"></div>
        </div>
                
        <div class="service">
        	<div id="serv_logo"></div>
            <h3> Logo design </h3>
            <div class="serv_content">
            	<span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>
        <div class="clr"></div>
        </div>
        
        <div class="service">
        	<div id="serv_draw"></div>
            <h3> Draw </h3>
            <div class="serv_content">
            	<span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>
        <div class="clr"></div>
        </div>
        
        <div class="service">
        	<div id="serv_market"></div>
            <h3> Marketing </h3>
            <div class="serv_content">
            	<span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>
        <div class="clr"></div>
        </div>
        
        <div class="service">
        	<div id="serv_photo"></div>
            <h3> Photography </h3>
            <div class="serv_content">
            	<span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>
        <div class="clr"></div>
        </div>
        
        <div class="service">
        	<div id="serv_design"></div>
            <h3> Web Design </h3>
            <div class="serv_content">
            	<span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>
        <div class="clr"></div>
        </div>
	</div>
        
</div> <!-- END SERVICES PAGE -->    

<!-- START ABOUTME PAGE --> <div id="CA"> 
        
        <table cellpadding="0" cellspacing="0" id="team">
        
            <tr> <td class="td_img" valign="top"> <img src="img/someone.png" /> <div class="star5"></div> </td>
            	<td align="left" valign="top">
                	<div class="name"> John </div>
                    <div class="job"> Designer </div>
                    <p class="iperson"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </td>
            </tr>
            
            <tr> <td class="td_img" valign="top"> <img src="img/someone.png" /> <div class="star4"></div> </td>
            	<td align="left" valign="top">
                	<div class="name"> Mike </div>
                    <div class="job"> Web developer </div>
                    <p class="iperson"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </td>
            </tr>
            
             <tr> <td class="td_img" valign="top"> <img src="img/someone.png" /> <div class="star3"></div> </td>
            	<td align="left" valign="top">
                	<div class="name"> Thomas </div>
                    <div class="job"> Graphic </div>
                    <p class="iperson"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </td>
            </tr>
            
             <tr> <td class="td_img" valign="top"> <img src="img/someone.png" /> <div class="star2"></div> </td>
            	<td align="left" valign="top">
                	<div class="name"> Taylor </div>
                    <div class="job"> PHP Master </div>
                    <p class="iperson"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </td>
            </tr>
            
             <tr> <td class="td_img" valign="top"> <img src="img/someone.png" /> <div class="star1"></div> </td>
            	<td align="left" valign="top">
                	<div class="name"> Brian </div>
                    <div class="job"> CSS3 & HTML5 </div>
                    <p class="iperson"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </td>
            </tr>
            
             <tr> <td class="td_img" valign="top"> <img src="img/someone.png" /> <div class="star4"></div> </td>
            	<td align="left" valign="top">
                	<div class="name"> Maria </div>
                    <div class="job"> Logo designer </div>
                    <p class="iperson"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </td>
            </tr>
            
             <tr> <td class="td_img" valign="top"> <img src="img/someone.png" /> <div class="star4"></div> </td>
            	<td align="left" valign="top">
                	<div class="name"> Lisa </div>
                    <div class="job"> Content writer </div>
                    <p class="iperson"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </td>
            </tr>
            
         </table>
                   
</div> <!-- END ABOUTME PAGE -->   

<!-- START CONTACT PAGE --> <div id="CC"> 

    <h1> Send an email </h1>
    	<div class="decoration"></div>

		<?php if(isset($hasError)) { //If errors are found ?>
			<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
		<?php } ?>

		<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<div class="success">
				<p>Email Successfully Sent!</p>
				<p>Your email was successfully sent and we 'll be in touch with you soon.</p>
			</div>
		<?php } ?>

    <div id="contact_pos">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
			<div class="stage clear">
				<label for="name"><div class="cn">Name:<em>*</em></div></label>
				<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<label for="email"><div class="cn">Email:<em>*</em></div></label>
				<input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<label for="subject"><div class="cn">Subject:<em>*</em></div></label>
				<input type="text" name="subject" id="subject" value="" class="required" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<label for="message"><div class="cn">Message:<em>*</em></div></label>
				<textarea rows="8" name="message" id="message" class="required" role="textbox" aria-required="true" /></textarea>
			</div>
											
			<input type="submit" value="Send" name="submit" id="submitButton" />
		</form>
	</div>     
</div> <!-- END CONTACT PAGE -->  

<div class="clr"></div>              
        <div class="decoration"></div> 
        
        <div id="footer">
            <div id="desktop"> <a href="#"> Desktop view </a> </div>
            <div id="fastmail" class="MB"> CONTACT </div>
                <div class="clr"></div>
        </div>
        
</div> <!-- END CONTENT -->

</div> <!-- END FULLPAGE -->
</body>
</html>