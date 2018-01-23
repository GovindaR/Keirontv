<!DOCTYPE html>
<html>
<head>
	<title>kieron</title>
	<?php include('include/head.php') ?>
</head>
<body>
	<!-- navbar start -->
	<?php include('include/nav.php') ?>
<!-- navbar end -->
<!-- video slider start -->
<div class="video">
	<div class="center clearfix">
<!-- header start -->
		<?php include('include/header.php') ?>
<!-- header end -->
<!-- video slider start -->
<!-- video slider end -->
	</div>
</div>
	<div class="center clearfix">
		<!-- leftcol -->
		<div class="leftcol">
			<h1 class="grid-container">
				<u>Contact us</u>
				<span>Are you already a member of KieronTV? Go to <a href="helpdesk.php" class="btn1">Helpdesk</a> and submit a ticket if you need help.</span>
			</h1>
			<form method="post" action="member-dashboard.php" class="membership-signup">
				<h3>Send us message</h3>
				<div class="item1 "><span class="input-required">*</span><label>First and Last name:</label></div>
				<div class="item2 item1"><input type="text" name="fname" class="placeholder" placeholder="First Name" required>
				&nbsp;&nbsp;
				 <input type="text" name="lname" class="placeholder" placeholder="Last Name" required></div>
				 <div class="item1 "><span class="input-required">*</span><label>Your email address
                </label></div>
				<div class="item1 item2 "><input type="email" name="email" required>
				</div>
				<div class="item1 "><span class="input-required">*</span><label>Phone number:
                </label></div>
				<div class="item1 item2 "><input type="text" name="phone" required>
				</div>
				<div class="item1 "><span class="input-required">*</span><label>Message
                </label></div>
				<div class="item1 item2 "><textarea name="message" cols="40" rows="7"></textarea>
					<span class="notice">This&nbsp;field&nbsp;is&nbsp;required.</span>
				</div>
				<div class="item1 ">&nbsp;</div>
				<div class="item2 item1 "><input type="submit" name="submit" class="btn1">
				</div>
			</form>
		</div>
		<!-- rightcol -->
		<?php include('include/rightcol.php') ?>
	</div>
	<!-- bottom-btn -->
	<!-- footer-links -->
	<?php include('include/footer-links.php') ?>
	<?php include('include/footer.php') ?>
	<?php include('include/script.php') ?>
</body>
</html>