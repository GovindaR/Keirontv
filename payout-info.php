<!DOCTYPE html>
<html>
<head>
	<title>kieron</title>
	<?php include('include/head.php') ?>
</head>
<body>
	<!-- navbar start -->
	<nav>
	<div class="half"></div>
	<div class="center clearfix">
		<div class="logo animated hinge">kierontv.com</div>
			<ul>
				<li>
					<a href="index.php" class="active">Hemo
					</a>
						<ul>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>Daily video coaching</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>Live video coaching</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>Group mindsed coaching</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>$100k+/yer coaching</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>Millionaire coaching</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">coaching
						</a>
						<ul>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>Daily video coaching</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>Live video coaching</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>Group mindsed coaching</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>$100k+/yer coaching</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-play-circle-o"></span>Millionaire coaching</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">courses</a>
					</li>
					<li>
						<a href="#">about</a>
					</li>
					<li>
						<a href="contact.php">contact</a>
					</li>
					<li>
						<a href="blog.php">blog</a>
					</li>
					<li>
						<a href="#">more</a>
					</li>
					<li>
						<a href="plan&features.php">plans & features</a>
					</li>
				</ul>
	</div>
	<!-- login form -->
	<div class="login menubar-loggedin">
		<div class="login-left">
		<a href="#" class="faa-parent animated-hover"><i class="fa faa-pulse login-img"></i>
			Kieron Sweeney
		</a>
		<div class="form-login">
        <ul>
			<li>
				<a href="member-dashboard.php">
					<span><span></span>	<img src="images/icon-dashboard-user.png" alt="Dashboard"></span>
					<ins>Dashboard</ins>
				</a>
			</li>
			<li>
                <a href="add-renew-subscription.php">
                    <span><span></span><img src="images/icon-dashboard-renew-subscription.png" alt="Renew subscription"></span>
                    <ins>Add/Renew subscription</ins>
                </a>
			</li>
			<li class="active-menulink">
                    
				<a href="payment-history.php">
					<span><span></span><img src="images/icon-dashboard-payment-history.png" alt="Payment history"></span>
					<ins>Payment history</ins>
				</a>
			</li>
			<li>
				<a href="edit-profile.php">
					<span><span></span><img src="images/icon-dashboard-edit-profile.png" alt="Edit profile"></span>
					<ins>Edit profile</ins>
				</a>
			</li>
			<li>   
				<a href="#">
					<span><span></span><img src="images/icon-dashboard-affiliate-info.png" alt="Affiliate info"></span>
					<ins>Affiliate info</ins>
				</a>
				
				<ul>            
					<li>
						<a href="affiliate-info.php">
						<span><span></span><img src="images/icon-dashboard-affiliate-info.png" alt="Get affiliate banners and links"></span>
						<ins>Get affiliate banners and links</ins>
						</a>
					</li><li>
						<a href="affiliate-stats.php">
						<span><span></span><img src="images/icon-dashboard-affiliate-info.png" alt="Review your affiliate statistics"></span>
						<ins>Review your affiliate statistics</ins>
						</a>
					</li><li>
						<a href="payout-info.php">
						<span><span></span><img src="images/icon-dashboard-affiliate-info.png" alt="Payout info"></span>
						<ins>Commissions payout info</ins>
						</a>
					</li>
				</ul>
                    
			</li>
			<li>
                    
				<a href="helpdesk.php">
					<span><span></span><img src="images/icon-dashboard-helpdesk.png" alt="Helpdesk"></span>
					<ins>Helpdesk</ins>
				</a>
			</li>
			<li> 
				<a href="index.php">
					<span><span></span><img src="images/icon-dashboard-logout.png" alt="Logout"></span>
					<ins>Logout</ins>
				</a>
            </li>
		</ul>
		</div>
		</div>
		<form method="post" action="#">
		<input type="text">
		<span>Click to type, Press enter to search.<br>
					<a href="#">Click here</a> for advanced search.</span>
				</form>
	</div>
</nav>
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
            <u>Payout info</u>
            <span style="margin-top: 0">Change/update your commision payout info.</span>
            </h1>
            <div class="tickets-wrapper">
                <h3 style="margin-top:20px;">Enter the details</h3>
            </div>
            <div class="grid-pay-info">
                <div class="left-pay-ionfo">
                Affiliate Payout Type
                </div>
                <div class="right-pay-info">
                <div class="select-wrapper"><a href="javascript:;"></a>
                <select  style="width: 170px;">
                	<option selected="">Not Selected</option>
                	<option>Paypal</option>
                </select>
                </div>
                </div>
            </div>
            <div class="grid-pay-info">
                <div class="left-pay-ionfo">
                Affiliate Payout - Paypal E-Mail address
                <br>
                <span class="input-info">for affiliate commission payouts</span>
                </div>
                <div class="right-pay-info">
                <label for="textfield"></label>
                <input name="textfield" type="text" id="textfield" value="user@mail.com">
                </div>
            </div>
            <div class="grid-pay-info">
                <div class="left-pay-ionfo">
                </div>
                <div class="right-pay-info">
                <input type="submit" name="button" id="button" value="Save" class="btn1 btn2">
                </div>
            </div>
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