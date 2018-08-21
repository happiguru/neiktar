<?php 
require 'constants/settings.php'; 
require 'constants/check-login.php';
require 'constants/db_config.php';
$fromsearch = false;
if (isset($_GET['empid'])) {
$empid = $_GET['empid'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employee' AND member_no = :empid");
	$stmt->bindParam(':empid', $empid);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$rec = count($result);
	if ($rec == "0") {
	header("location:./");	
	}else{

    foreach($result as $row)
    {
	$myfname = $row['first_name'];
	$mylname = $row['last_name'];
	$bdate = $row['bdate'];
	$bmonth = $row['bmonth'];
	$byear = $row['byear'];
	$mycountry = $row['country'];
	$mycity = $row['city'];
	$myphone = $row['phone'];
	$about = $row['about'];
	$empavatar = $row['avatar'];
	$current_year = date('Y');
	$myage = $current_year - $byear;
	$myedu = $row['education'];
	$mytitle = $row['title'];
	$mymail = $row['email'];
	}
	
	}

					  
	}catch(PDOException $e)
    {

    }


	
}else{
header("location:./");	
}


if (isset($_GET['country']) && ($_GET['category']) ){
$cate = $_GET['category'];
$country = $_GET['country'];	
//$query1 = "SELECT * FROM tbl_jobs WHERE category = :cate AND country = :country ORDER BY enc_id DESC LIMIT $page1,12";
$query2 = "SELECT * FROM tbl_jobs WHERE category = :cate AND country = :country ORDER BY enc_id DESC";
$fromsearch = true;

$slc_country = "$country";
$slc_category = "$cate";
$title = "$slc_category jobs in $slc_country";
}else{
//$query1 = "SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT $page1,12";
$query2 = "SELECT * FROM tbl_jobs ORDER BY enc_id DESC";	
$slc_country = "NULL";
$slc_category = "NULL";	
$title = "Employees";
$latpost = "Latest Post";
$latcat = "Job Category";
}

?>
<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Neiktar Jobs - <?php echo "$myfname"; ?> <?php echo "$mylname"; ?></title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Neiktar Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="images/ico/favicon.ico">
	
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="images/ico/favicon.png">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">

	
</head>

  <style>
  
    .autofit2 {
	height:110px;
	width:120px;
    object-fit:cover; 
  }
  
  </style>
  
<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><img src="images/logo.png" alt="Neiktar Jobs" /></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="./">Home</a>
								
							</li>
							
							<li>
								<a href="job-list.php">Job List</a>

							</li>
							
							<li>
								<a href="employers.php">Employers</a>
							</li>
							
							<li>
								<a href="employees.php">Employees</a>
							</li>
							<li>
								<a href="used-cars-for-sale.php">Used Cars</a>
							</li>
							<li>
								<a href="real-estate.php">Real Estate</a>
							</li>
							<li>
								<a href="postblog.php">Blog</a>
							</li>
							<li>
								<a href="employer/post-job.php">Post Job</a>
							</li>

						</ul>
				
					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
						<?php
						if ($user_online == true) {
						print '
						    <li><a href="logout.php">logout</a></li>
							<li><a href="'.$myrole.'">Profile</a></li>';
						}else{
						print '
							<li><a href="login.php">login</a></li>
							<li><a data-toggle="modal" href="#registerModal">register</a></li>';						
						}
						
						?>

						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>
			
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create your account for free</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register as Employer</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register as Employee</a>
						</div>

					</div>
				
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
				
			</div>

			
		</header>


		<div class="main-wrapper">

			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="employees.php">All Employees</a></li>
						<li><span><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></span></li>
					</ol>
					
				</div>
				
			</div>
			
			<div class="section sm">
			
				<div class="container">
				
					<div class="row">
						
							<div class="col-sm-8">
							
								<div class="employee-detail-wrapper">
								
									<div class="employee-detail-header text-center">
										
										<div class="image">
										<?php 
										if ($empavatar == null) {
										print '<center><img class="img-circle autofit2" src="images/default.jpg"  alt="image"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="image" src="data:image/jpeg;base64,'.base64_encode($empavatar).'"/></center>';	
										}
										?>
										</div>
										
										<h2 class="heading mb-15"><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h2>
									
										<p class="location"><i class="fa fa-map-marker"></i> <?php echo "$mycountry"; ?>, <?php echo "$mycity"; ?><span class="mh-5">|</span> <i class="fa fa-phone"></i> <?php echo "$myphone"; ?></p>
										
										
										<ul class="meta-list clearfix">
											<li>
												<h4 class="heading">Birth Day:</h4>
												<?php echo "$bdate"; ?>/<?php echo "$bmonth"; ?>/<?php echo "$byear"; ?>
											</li>
											<li>
												<h4 class="heading">Age:</h4>
												<?php echo "$myage"; ?>-year-old
											</li>
											<li>
												<h4 class="heading">Education:</h4>
												<?php echo "$myedu"; ?> in <?php echo "$mytitle"; ?>
											</li>
											<li>
												<h4 class="heading">Email: </h4>
												<?php echo "$mymail"; ?>
											</li>
										</ul>
										
									</div>
						
									<div class="employee-detail-company-overview mt-40 clearfix">
									
										<h3>Introduce my self</h3>
										
										<p><?php echo "$about"; ?></p>
										
										<div class="row">
										
											<div class="col-sm-12">
											
												<h3>Education</h3>
												
												<ul class="employee-detail-list">
												<?php
												require 'constants/db_config.php';
												try {
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                $stmt = $conn->prepare("SELECT * FROM tbl_academic_qualification WHERE member_no = :empid ORDER BY id");
	                                            $stmt->bindParam(':empid', $empid);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
	                                            $rec = count($result);
	                                            if ($rec == "0") {
 
	                                            }else{

                                                foreach($result as $row)
                                                {
                                                ?>
												<li>
												<h5><?php echo $row['course']; ?> </h5>
												<p class="text-muted font-italic">Level - <?php echo $row['level']; ?> , <?php echo $row['timeframe']; ?><span class="font600 text-primary"> <?php echo $row['institution']; ?></span> <?php echo $row['country']; ?></p>
												<p><a target="_blank" class="btn btn-primary btn-sm mb-5 mb-0-sm" href="view-certificate.php?id=<?php echo $row['id']; ?>">View Certificate</a></p>
												</li>
												<?php
	                                            }
	
	                                            }

					  
	                                            }catch(PDOException $e)
                                                {

                                                 } ?>

										
													
												</ul>
												
											</div>
											

											
										</div>
										
										<h3>Work Experience</h3>
											<ul class="employee-detail-list">
												<?php
												require 'constants/db_config.php';
												try {
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                $stmt = $conn->prepare("SELECT * FROM tbl_experience WHERE member_no = :empid ORDER BY id");
	                                            $stmt->bindParam(':empid', $empid);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
	                                            $rec = count($result);
	                                            if ($rec == "0") {
 
	                                            }else{

                                                foreach($result as $row)
                                                {
                                                ?>
												<li>
												<h5><?php echo $row['title']; ?> </h5>
												<p class="text-muted font-italic"><?php echo $row['start_date']; ?> to <?php echo $row['end_date']; ?><span class="font600 text-primary"> <?php echo $row['institution']; ?></span></p>
												<p>Supervisor : <span class="font600 text-primary"> <?php echo $row['supervisor']; ?></span> , Phone : <span class="font600 text-primary"> <?php echo $row['supervisor_phone']; ?></span> <br><?php echo $row['duties']; ?></p>
												</li>
												<?php
	                                            }
	
	                                            }

					  
	                                            }catch(PDOException $e)
                                                {

                                                 } ?>

										
													
												</ul>
										
							
										
										<h3>Training & Workshop</h3>
												<ul class="employee-detail-list">
												<?php
												require 'constants/db_config.php';
												try {
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                $stmt = $conn->prepare("SELECT * FROM tbl_training WHERE member_no = :empid ORDER BY id");
	                                            $stmt->bindParam(':empid', $empid);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
	                                            $rec = count($result);
	                                            if ($rec == "0") {
 
	                                            }else{

                                                foreach($result as $row)
                                                {
													$certificate = $row['certificate'];
                                                ?>
												<li>
												<h5><?php echo $row['training']; ?> </h5>
												<p class="text-muted font-italic"><span class="font600 text-primary"> <?php echo $row['institution']; ?></span> <?php echo $row['timeframe']; ?></p>
												<?php
												if ($certificate == "") {
													
												}else{
												?>
                                                <p><a target="_blank" class="btn btn-primary btn-sm mb-5 mb-0-sm" href="view-certificate-b.php?id=<?php echo $row['id']; ?>">View Certificate</a></p>
                                                <?php												
												}
												
												?>
												
												</li>
												<?php
	                                            }
	
	                                            }

					  
	                                            }catch(PDOException $e)
                                                {

                                                 } ?>

										
													
												</ul>
										
										<h3>Professional Qualifications</h3>
												<ul class="employee-detail-list">
												<?php
												require 'constants/db_config.php';
												try {
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                $stmt = $conn->prepare("SELECT * FROM tbl_professional_qualification WHERE member_no = :empid ORDER BY id");
	                                            $stmt->bindParam(':empid', $empid);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
	                                            $rec = count($result);
	                                            if ($rec == "0") {
 
	                                            }else{

                                                foreach($result as $row)
                                                {
													$certificate = $row['certificate'];
                                                ?>
											    <li>
												<h5><?php echo $row['title']; ?> </h5>
												<p class="text-muted font-italic"><?php echo $row['timeframe']; ?><span class="font600 text-primary"> <?php echo $row['institution']; ?></span> <?php echo $row['country']; ?></p>
												<p><a target="_blank" class="btn btn-primary btn-sm mb-5 mb-0-sm" href="view-certificate-c.php?id=<?php echo $row['id']; ?>">View Certificate</a></p>
												</li>
												<?php
	                                            }
	
	                                            }

					  
	                                            }catch(PDOException $e)
                                                {

                                                 } ?>
										
													
												</ul>
												
												
											<h3>Other Attachments</h3>
												<ul class="employee-detail-list">
												<?php
												require 'constants/db_config.php';
												try {
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                $stmt = $conn->prepare("SELECT * FROM tbl_other_attachments WHERE member_no = :empid ORDER BY id");
	                                            $stmt->bindParam(':empid', $empid);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
	                                            $rec = count($result);
	                                            if ($rec == "0") {
 
	                                            }else{

                                                foreach($result as $row)
                                                {
                                                ?>
												<li>
												<h5><?php echo $row['title']; ?> </h5>
												<p class="font600 text-primary"><?php echo $row['issuer']; ?></p>
												<p><a target="_blank" class="btn btn-primary btn-sm mb-5 mb-0-sm" href="view-attachment.php?id=<?php echo $row['id']; ?>">View Attachment</a></p>
												</li>
												<?php
	                                            }
	
	                                            }

					  
	                                            }catch(PDOException $e)
                                                {

                                                 } ?>
										
										
													
												</ul>
										
										
										<h3>Language Proficiency</h3>
												<ul class="employee-detail-list">
												<?php
												require 'constants/db_config.php';
												try {
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                $stmt = $conn->prepare("SELECT * FROM tbl_language WHERE member_no = :empid ORDER BY id");
	                                            $stmt->bindParam(':empid', $empid);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
	                                            $rec = count($result);
	                                            if ($rec == "0") {
 
	                                            }else{

                                                foreach($result as $row)
                                                {
                                                ?>
												<li>
												<h5><?php echo $row['language']; ?> </h5>
												<p class="text-muted font-italic">Speaking <span class="font600 text-primary"> <?php echo $row['speak']; ?></span> , Reading <span class="font600 text-primary"> <?php echo $row['reading']; ?></span> , Writing <span class="font600 text-primary"> <?php echo $row['writing']; ?></span></p>
												</li>
												<?php
	                                            }
	
	                                            }

					  
	                                            }catch(PDOException $e)
                                                {

                                                 } ?>
										
													
												</ul>
										
										
										<h3>Referees</h3>
										<ul class="list-icon">
												<?php
												require 'constants/db_config.php';
												try {
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                $stmt = $conn->prepare("SELECT * FROM tbl_referees WHERE member_no = :empid ORDER BY id");
	                                            $stmt->bindParam(':empid', $empid);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
	                                            $rec = count($result);
	                                            if ($rec == "0") {
 
	                                            }else{

                                                foreach($result as $row)
                                                {
                                                ?>
											<li>
											
												<div class="icon">
												
													<i class="flaticon-line-icon-set-user-1"></i>
												
												</div>
												
												<h5><?php echo $row['ref_name']; ?></h5>
												<p><?php echo $row['ref_title']; ?> <span class="font600 text-primary"><?php echo $row['institution']; ?></span></p>
												<p>Email : <a href="mailto:<?php echo $row['ref_mail']; ?>"><?php echo $row['ref_mail']; ?></a></p>
												<p>Phone : <a href="tel:<?php echo $row['ref_phone']; ?>"><?php echo $row['ref_phone']; ?></a></p>
											
											</li>
												<?php
	                                            }
	
	                                            }

					  
	                                            }catch(PDOException $e)
                                                {

                                                 } ?>
										
										
																
											
										</ul>
										
									</div>

								</div>
								<div class="section sm">
			    <div class="container">
			         
			        <div class="row">
			        
			        <div class="col-sm-8 col-md-6 col-md-offset-1 mb-30">
			            <div class="section-title">
					<b><i>If <?php echo "$myfname"; ?>'s profile interest you,</i></b>
								<h3>Send <?php echo "$myfname"; ?> an email</h3>
								
					</div>
						<?php include 'constants/check_reply.php'; ?>
						
							<form class="contact-form-wrapper" data-toggle="validator" action="app/send-employee-email.php" method="POST" autocomplete="off">
							
								<div class="row">
								
									<div class="col-sm-6">
									
										<div class="form-group">
											<label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
											<input id="inputName" name="fullname" type="text" class="form-control" data-error="Your name is required" required>
											<div class="help-block with-errors"></div>
										</div>
										
									</div>
									
									<div class="col-sm-6">
									
										<div class="form-group">
											<label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" name="email" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>
										
									</div>

									
									<div class="col-sm-12">
									
										<div class="form-group">
											<label for="inputMessage">Message <span class="font10 text-danger">(required)</span></label>
											<textarea id="inputMessage" name="message" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
											<div class="help-block with-errors"></div>
										</div>

									</div>
									
									<div class="col-sm-12 text-right">
										<button type="submit" class="btn btn-primary mt-5">Send Message</button>
									</div>
									
								</div>
								
							</form>
							
						</div>
						 </div>
			        
			    </div>
			    
			</div>
			
								
	
		</div>
							<br><br>
							<br><br>
							<br><br>
							<br>


	<div class="col-sm-4">
							
		<div class="sorting-header">
			<h3 class="sorting-title">Latest Post</h3>
		</div>
							
			<div class="result-list-wrapper">
				<?php
					require 'constants/db_config.php';
					try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT * FROM tbl_blog ORDER BY rand() LIMIT 4");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                   foreach($result as $row) {
					$image_src3 = $row['feature_img'];
				?>
		<div class="top-company-2">
									
				<div class="image">
				<img class="autofit3" style="width:100%;height:auto;" src='<?php echo $image_src3; ?>' >
				</div>
										
										<div class="content">
											<div class="job-item-list-info">
											
												<div class="row">
												
													<div class="col-sm-12 col-md-12">
													
														
														<div class="meta-div clearfix mb-25">
															<h6><?php echo $row['blog_title'];?></h6>
					                                    <a target="_blank" href="explore-blog.php?blogid=<?php echo $row['blog_id']; ?>">Read More</a>
														</div>
														
													</div>
													
												</div>
											
											</div>
										
										
										</div>
									
				</div>
									<?php
	 
	                            }

					  
	                            }catch(PDOException $e)
                                {

                                } ?>
                                </div>
	

<br>
					                <div class="col-sm-12">
								<div class="sorting-header">
									<h3 class="sorting-title">Quick Links</h3>
								</div>
								<div class="content">
											<div class="job-item-list-info">

												<?php
					require 'constants/db_config.php';
					try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT * FROM tbl_blog ORDER BY blog_date DESC LIMIT 8");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    foreach($result as $row) {
					$title = $row['blog_title'];
					?>

					<a target="_blank" href="explore-blog.php?blogid=<?php echo $row['blog_id']; ?>"><?php echo $title; ?></a><br>
					<?php
				}
				}catch(PDOException $e){}
				?>

				

											</div>
								</div>
<br>
								<a href="//partners.hostgator.com/c/297651/178149/3094"><img src="//a.impactradius-go.com/display-ad/3094-178149" border="0" alt="" width="250" height="250"/></a><img height="0" width="0" src="//partners.hostgator.com/i/297651/178149/3094" style="position:absolute;visibility:hidden;" border="0" />


							</div>

						</div>
						
						</div>
						
					</div>
				
				</div>
			
			</div>

			

			<footer class="footer-wrapper">
			
	<div class="main-footer">
				
		<div class="container">
							
					<div class="row">
								
						<div class="col-sm-6 col-md-4">
									
							<div class="footer-about-us">
								<h5 class="footer-title">About Neiktar Jobs</h5>
								<p>Neiktar Jobs is a job portal, simple CV creation and online job management system developed by Neiktar in January 2015.</p>
										
							</div>

						</div>
									
						<div class="col-sm-6 col-md-5 mt-30-xs">
							<h5 class="footer-title">Quick Links</h5>
								<ul class="footer-menu clearfix">
									<li><a href="./">Home</a></li>
									<li><a href="job-list.php">Job List</a></li>
									<li><a href="employers.php">Employers</a></li>
									<li><a href="employees.php">Employees</a></li>
									<li><a href="used-cars-for-sale.php">Used Cars</a></li>
									<li><a href="real-estate.php">Real Estate</a></li>
									<li><a href="#.php">Post Job</a></li>
									<li><a href="postblog.php">Blog</a></li>
									<li><a href="contact.php">Contact Us</a></li>
									<li><a href="#">Go to top</a></li>
								</ul>	
						</div>

							
						<div class="col-sm-6 col-md-3 mt-30-sm">
							
								<h5 class="footer-title">Neiktar Jobs Contact</h5>
								
								<p>Address : Sharjah, U.A.E PO.BOX 6652</p>
								<p>Email : <a href="mailto:info@neiktar.com">info@neiktar.com</a></p>
								<p>Phone : <a href="tel:+971 652 45 747">+971 652 45 747</a></p>
						</div>

							
					</div>
						
		</div>
	</div>
				
		<div class="bottom-footer">
				
			<div class="container">
					
				<div class="row">
						
					<div class="col-sm-3 col-md-3">
					
						<p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> Neiktar Corp</p>
								
					</div>
							
					<div class="col-sm-6 col-md-6">
							
						<ul class="bottom-footer-menu">
							<li><a >Developed by Neiktar</a></li>
							<li><a href="disclaimer.php" >Disclaimer</a></li>
							<li><a href="terms-and-condition.php">Terms and Conditions</a></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
						</ul>
							
					</div>
							
					<div class="col-sm-3 col-md-3">
						<ul class="bottom-footer-menu for-social">
							<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
							<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
							<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
						</ul>
					</div>
						
				</div>

			</div>
					
		</div>
			
	</footer>
		
	</div>

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>


</body>

</html>