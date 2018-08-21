<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>
<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Neiktar Jobs - Contact Us</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="images/ico/favicon.ico">

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
								<a href="employer/index.php">Post Job</a>
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
	</header>
	<div class="main-wrapper">

			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="./">Home</a></li>
						<li><span>Disclaimer</span></li>
					</ol>
					
				</div>
				
			</div>
			<div class="section sm">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<h2>Disclaimer</h2>

<p>Last updated: August 04, 2018</p>

<p>The information contained on www.neiktar.com website (the "Service") is for general information purposes only.</p>

<p>Neiktar Jobs assumes no responsibility for errors or omissions in the contents on the Service.</p>

<p>In no event shall Neiktar Jobs be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. Neiktar Jobs reserves the right to make additions, deletions, or modification to the contents on the Service at any time without prior notice.</p>

<p>Neiktar Jobs does not warrant that the website is free of viruses or other harmful components.</p>

<h3>External links disclaimer</h3>

<p>www.neiktar.com website may contain links to external websites that are not provided or maintained by or in any way affiliated with Neiktar Jobs</p>

<p>Please note that the Neiktar Jobs does not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.</p>
						</div>
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

								
					
								
					                <div class="col-sm-12">
								<div class="sorting-header">
									<h3 class="sorting-title">Job Category</h3>
								</div>


							</div>
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
							<li><a href="#" >Disclaimer</a></li>
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