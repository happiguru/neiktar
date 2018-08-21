<?php 
require 'constants/settings.php'; 
require 'constants/check-login.php';
require 'constants/db_config.php'; 
$fromsearch = false;

if (isset($_GET['blogid'])) {

$blogid = $_GET['blogid'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_blog WHERE blog_id = :blogid");
	$stmt->bindParam(':blogid', $blogid);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$rec = count($result);
	if ($rec == "0") {
	header("location:./");	
	}else{

    foreach($result as $row)
    {
	$blog_title = $row['blog_title'];
	$blogcity = $row['city'];
	$blogcountry = $row['country'];
	$blogcategory = $row['blog_cat'];
	$content1 = $row['blog1'];
	$content2 = $row['blog2'];
	$content3 = $row['blog3'];
	$postdate = $row['blog_date'];
	$author = $row['author'];
	$image_src3 =$row['feature_img'];

	//$blogid = $row['blog_id'];
	}
}
					  
	}catch(PDOException $e)
    {

    }


}else{
header("location:./");	
}


	

$today_date = strtotime(date('Y/m/d'));
$last_date = date_format(date_create_from_format('d/m/Y', $postdate), 'Y/m/d');
$post_date = date_format(date_create_from_format('d/m/Y', $postdate), 'd');
$post_month = date_format(date_create_from_format('d/m/Y', $postdate), 'F');
$post_year = date_format(date_create_from_format('d/m/Y', $postdate), 'Y');
$conv_date = strtotime($last_date);

$title = "Latest Articles";
$latpost = "Latest Post";
$latcat = "Job Category";


?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Neiktar Jobs - <?php echo "$blog_title"; ?></title>
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

	 <script type="text/javascript">
   function update(str)
   {
	   
	var txt;
    var r = confirm("Are you sure you want to apply this job , you can not UNDO");
    if (r == true) {
		document.getElementById("data").innerHTML = "Please wait...";
         var xmlhttp;

      if (window.XMLHttpRequest)
      {
        xmlhttp=new XMLHttpRequest();
      }
      else
      {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }	

      xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
          document.getElementById("data").innerHTML = xmlhttp.responseText;
        }
      }

      xmlhttp.open("GET","app/apply-job.php?opt="+str, true);
      xmlhttp.send();
    } else {

    }

  }
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8195845376414124",
    enable_page_level_ads: true
  });
</script>

	
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

			
		</header>
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
		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="postblog.php">All blogs</a></li>
						<li><a target="_blank" href="blog.php?ref=<?php echo "$blogcategory"; ?>"><?php echo "$blogcategory"; ?></a></li>
						<li><span><?php echo "$blog_title"; ?></span></li>
					</ol>
					
				</div>
				
			</div>
			
			<div class="section sm">
			
				<div class="container">
				
					<div class="row">
						
						<div class="col-sm-8">
						
							<div class="job-detail-wrapper">
							
								<div class="job-detail-header text-center">
											
									<h2 class="heading mb-15"><?php echo "$blog_title"; ?></h2>
								
									<div class="meta-div clearfix mb-25">
										<span>published by <a target="_blank" href="blog.php?ref=<?php echo "$author"; ?>"><?php echo "$author"; ?></a> on <?php echo "$post_month"; ?> <?php echo "$post_date"; ?>, <?php echo "$post_year"; ?> </span>
									</div>
									
									<ul class="meta-list clearfix">
										
									</ul>
									
								</div>
					
								<div class="job-detail-company-overview clearfix">
								
									<h3>Blog overview</h3>
									<div class="image">
										<img class="autofit3" style="width:100%;height:auto;" src='<?php echo $image_src3; ?>' >
									</div>
									
									<p><?php echo "$content1"; ?></p>
									
								</div>
								
								<div class="job-detail-content mt-30 clearfix">
								
									

									<p><?php echo "$content2"; ?></p>

									
									
									
                                    <p><?php echo "$content3"; ?></p>
									
								
                                   
                                    	<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
	<h4>Share this article with friends</h4>
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
								
								</div>
							
								<div class="tab-style-01">
								
									<ul class="nav" role="tablist">
										<li role="presentation" class="active"><h4><a href="#relatedJob1" role="tab" data-toggle="tab">Related articles about <?php echo "$blogcategory"; ?></a></h4></li>
									</ul>

									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="relatedJob1">
											<div class="tab-content-inner">
							<div class="recent-job-wrapper alt-stripe mr-0">
							<?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_blog WHERE blog_cat = :blog_cat ORDER BY rand() LIMIT 5");
							$stmt->bindParam(':blog_cat', $blogcategory);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  

                            foreach($result as $row) {
							
                            $blog_cat = $row['blog_cat'];
							
							$blog_title = $row['blog_title'];
							$author = $row['author'];
							$image_src2 =$row['feature_img'];
							
							?>
							<a href="explore-blog.php?blogid=<?php echo $row['blog_id']; ?>" class="recent-job-item clearfix">
														<div class="GridLex-grid-middle">
															<div class="GridLex-col-6_sm-12_xs-12">
																<div class="job-position">
																	<div class="image">
																	 <img class="autofit3" style="width:100%;height:auto;" src='<?php echo $image_src2; ?>' >
																	</div>
																	<div class="content">
																		<p><?php echo "$blog_cat"; ?></p>
																	</div>
																</div>
															</div>
															<div class="GridLex-col-3_sm-8-xs-8_xss-12 mt-10-xss">
																<div class="job-location">
																	<h4><?php echo $row['blog_title']; ?></h4>
																	<i class="fa  text-primary"></i> <?php echo $row['author']; ?>
																</div>
															</div>
															
														</div>
													</a>
													<?php
								
								
							}

	                        }catch(PDOException $e)
                            { 
                   
                             }
                             ?>
						



							
							</div>

											
											</div>
										</div>

									</div>
									
								</div>
								
							</div>

						
						</div><br><br>

			<!--  THIS IS THE RIGHT SIDE BAR CODES -->			
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

								
					
								<div class="pager-wrapper">
								
						        <ul class="pager-list">
								<!-- CHECK -->

						            </ul>	
					
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