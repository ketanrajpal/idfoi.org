<?php
$page="feedback";
require('recaptchalib.php');
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$privatekey = "6Lf3SxATAAAAAA-tO0W_yjJsVakS8GRcIBGlmjK8";
	$resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
	if(!$resp->is_valid)
	{
		$feedback_error="The reCAPTCHA wasn't entered correctly. Please try again.";
	}
	else
	{
		if(!empty($_POST["name"])||!empty($_POST["address_line_1"])||!empty($_POST["telephone"])||!empty($_POST["email"])||!empty($_POST["organization"])||!empty($_POST["designation"]))
		{
			$flag=0;
			$sequence='/[\'^£$%&*()}{@#~?><>,|=_+¬-]/';
			$sequence2='/[\'^£$%&*()}{#~?><>,|=+¬-]/';
			if (preg_match($sequence, $_POST['name']) || preg_match($sequence, $_POST['address_line_1']) || preg_match($sequence, $_POST['telephone']) || preg_match($sequence, $_POST['organization']) || preg_match($sequence, $_POST['designation']) || preg_match($sequence, $_POST['address_line_2']) || preg_match($sequence2, $_POST['email']))
			{
				$flag=$flag+1;
			}
			
			$urlarr=array("www","http","123456");
			
			foreach($urlarr as $checking)
			{
				if(strpos($_POST['name'], $checking)!== false || 
				strpos($_POST['address_line_1'], $checking)!== false || 
				strpos($_POST['telephone'], $checking)!== false ||
				strpos($_POST['email'], $checking)!== false ||
				strpos($_POST['organization'], $checking)!== false ||
				strpos($_POST['designation'], $checking)!== false)
				{
					$flag=$flag+1;
				}
			}
			if($flag>0)
			{
				$feedback_error="Please fill in all the fields correctly and Submit. Special Characters are not allowed.";
			}
			else
			{
				$feedback_error="Your query has been sucessfully submitted.";
				$name="name: ".$_POST["name"]."\n";
				$address_line_1="address_line_1: ".$_POST["address_line_1"]."\n";
				$address_line_2="address_line_2: ".$_POST["address_line_2"]."\n";
				$telephone="telephone: ".$_POST["telephone"]."\n";
				$email="email: ".$_POST["email"]."\n";
				$organization="organization: ".$_POST["organization"]."\n";
				$designation="designation: ".$_POST["designation"]."\n";
				$message="message: ".htmlentities($_POST["message"])."\n";
				$fullmessage="Enquiry from IDF OI.\n\n".$name.$address_line_1.$address_line_2.$telephone.$email.$organization.$designation.$message;
				mail("info@krpl.in","Enquiry from IDF OI",$fullmessage,"From: online.enquiries@idfoi.org");
			}
		}
		else
		{
			$feedback_error="Please fill in all the fields correctly and Submit.";
		}
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("../inc/head.php"); ?>
<script src="../js/validate.min.js"></script>
</head>
<body >
<?php require_once("../inc/header.php"); ?>
<section id="content" class="clear">
  <article>
    <h1>Feedback</h1>
    <p>Please answer as many questions as you are able to or are comfortable with. Your answers will help us to shape the work of IDF-OI and make our work in shaping India's future more effective.</p>
    <form id="feedback_form" name="feedback_form" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" class="feedback" method="post" onSubmit="return validate()">
    
     <div class="error"><?php echo $feedback_error; ?></div><br><br>
    
      <fieldset>
        <label>Name</label>
        <input type="text" id="name" name="name" required autocomplete="off">
      </fieldset>
      <fieldset>
        <label>Organization</label>
        <input type="text" id="organization" name="organization" required autocomplete="off">
      </fieldset>
      <div class="clear"></div>
      <fieldset>
        <label>Address Line 1</label>
        <input type="text" id="address_line_1" name="address_line_1" required autocomplete="off">
      </fieldset>
      <fieldset>
        <label>Address Line 2</label>
        <input type="text" id="address_line_2" name="address_line_2" autocomplete="off">
      </fieldset>
      <div class="clear"></div>
      <fieldset>
        <label>Telephone</label>
        <input type="number" id="telephone" name="telephone" required autocomplete="off">
      </fieldset>
      <fieldset>
        <label>Email</label>
        <input type="email" id="email" name="email" required autocomplete="off">
      </fieldset>
      <div class="clear"></div>
      <fieldset>
        <label>Designation</label>
        <input type="text" id="designation" name="designation" required autocomplete="off">
      </fieldset>
      <div class="clear"></div>
      <fieldset style="width:100%">
        <label>Message</label>
        <textarea id="message" name="message"></textarea>
      </fieldset>
      <div class="clear"></div>
      <?php
     require_once('recaptchalib.php');
     $publickey = "6Lf3SxATAAAAANKHXUTU7WgOGc9GEMktoQrEgjgU"; // you got this from the signup page
     echo recaptcha_get_html($publickey);
   ?>
      <br>
      <br>
      <input type="submit" value="Submit">
    </form>
  </article>
  <article> 
    <script>
$("#feedback_form").validate();
</script>
    <?php require_once("../inc/widget.php"); ?>
  </article>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
