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
							<h2>Privacy Policy</h2>


<p>Effective date: August 05, 2018</p>


<p>Neiktar Jobs operates the www.neiktar.com website (hereinafter referred to as the "Service").</p>

<p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data. </p>

<p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible from www.neiktar.com</p>

<h3>Definitions</h3>
<ul>
    <li>
        <p><strong>Service</strong></p>
                <p>Service is the www.neiktar.com website operated by Neiktar Jobs</p>
            </li>
    <li>
        <p><strong>Personal Data</strong></p>
        <p>Personal Data means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</p>
    </li>
    <li>
        <p><strong>Usage Data</strong></p>
        <p>Usage Data is data collected automatically either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
    </li>
    <li>
        <p><strong>Cookies</strong></p>
        <p>Cookies are small files stored on your device (computer or mobile device).</p>
    </li>
</ul>

<h3>Information Collection and Use</h3>
<p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>

<h3>Types of Data Collected</h3>

<h4>Personal Data</h4>
<p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you ("Personal Data"). Personally identifiable information may include, but is not limited to:</p>

<ul>
<li>Email address</li><li>First name and last name</li><li>Phone number</li><li>Address, State, Province, ZIP/Postal code, City</li><li>Cookies and Usage Data</li>
</ul>

<h4>Usage Data</h4>

<p>We may also collect information how the Service is accessed and used ("Usage Data"). This Usage Data may include information such as your computer's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>

<h4>Tracking &amp; Cookies Data</h4>
<p>We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information.</p>
<p>Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyse our Service.</p>
<p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>
<p>Examples of Cookies we use:</p>
<ul>
    <li><strong>Session Cookies.</strong> We use Session Cookies to operate our Service.</li>
    <li><strong>Preference Cookies.</strong> We use Preference Cookies to remember your preferences and various settings.</li>
    <li><strong>Security Cookies.</strong> We use Security Cookies for security purposes.</li>
</ul>

<h3>Use of Data</h3>
    
<p>Neiktar Jobs uses the collected data for various purposes:</p>    
<ul>
    <li>To provide and maintain the Service</li>
    <li>To notify you about changes to our Service</li>
    <li>To allow you to participate in interactive features of our Service when you choose to do so</li>
    <li>To provide customer care and support</li>
    <li>To provide analysis or valuable information so that we can improve the Service</li>
    <li>To monitor the usage of the Service</li>
    <li>To detect, prevent and address technical issues</li>
</ul>

<h3>Transfer Of Data</h3>
<p>Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</p>
<p>If you are located outside United Arab Emirates and choose to provide information to us, please note that we transfer the data, including Personal Data, to United Arab Emirates and process it there.</p>
<p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
<p>Neiktar Jobs will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>

<h3>Disclosure Of Data</h3>

<h3>Legal Requirements</h3>
<p>Neiktar Jobs may disclose your Personal Data in the good faith belief that such action is necessary to:</p>
<ul>
    <li>To comply with a legal obligation</li>
    <li>To protect and defend the rights or property of Neiktar Jobs</li>
    <li>To prevent or investigate possible wrongdoing in connection with the Service</li>
    <li>To protect the personal safety of users of the Service or the public</li>
    <li>To protect against legal liability</li>
</ul>

<h3>Security of Data</h3>
<p>The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>

<h3>Service Providers</h3>
<p>We may employ third party companies and individuals to facilitate our Service ("Service Providers"), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.</p>
<p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>

<h3>Analytics</h3>
<p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>    
<ul>
            <li>
        <p><strong>Clicky</strong></p>
        <p>Clicky is a web analytics service. Read the Privacy Policy for Clicky here: <a href="https://clicky.com/terms">https://clicky.com/terms</a></p>
    </li>
    </ul>
 


<h3>Links to Other Sites</h3>
<p>Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>


<h3>Children's Privacy</h3>
<p>Our Service does not address anyone under the age of 18 ("Children").</p>
<p>We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</p>


<h3>Changes to This Privacy Policy</h3>
<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
<p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the "effective date" at the top of this Privacy Policy.</p>
<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>


<h3>Contact Us</h3>
<p>If you have any questions about this Privacy Policy, please contact us:</p>
<ul>
        <li>By email: info@neiktar.com</li>
            <li>By visiting this page on our website: http://www.neiktar.com</li>
      
        </ul>
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