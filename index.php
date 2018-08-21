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

	<title>Jobs in UAE - Job Portal</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content=" jobs in uae, gulf jobs, job vacancies in dubai, part time jobs in dubai, job vacancies in uae, emirates careers, dubai hotel jobs, driver jobs in dubai, new jobs in dubai, security jobs in dubai, how to get job in uae, how to find job in uae, how to search job in uae, how is job market in uae,jobs in uae, how to change job in uae,job, jobs in dubai,jobs near me, jobs in abu dhabi, jobs hiring, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="NeiktarSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Neiktar Jobs" />
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

  <style>
  
    .autofit2 {
	height:70px;
	width:400px;
    object-fit:cover; 
  }
  
      .autofit3 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  

  </style>
<body class="home">

<div id="introLoader" class="introLoading"></div>
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

	<div class="hero" style="background-image:url('images/hero-header/01.jpg');">
				<div class="container">

					<h1>your future starts here now</h1>
					<p>Finding your next job or career on Neiktar Jobs</p>

					<div class="main-search-form-wrapper">
					
						<form action="job-list.php" method="GET" autocomplete="off">
					
							<div class="form-holder">
								<div class="row gap-0">
								
									<div class="col-xss-6 col-xs-6 col-sm-6">
										<select class="form-control" name="category" required/>
										<option value="">-Select category-</option>
										 <?php
										 require 'constants/db_config.php';
										 try {
                                         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                         $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
                                         $stmt->execute();
                                         $result = $stmt->fetchAll();

                                         foreach($result as $row)
                                         {
                                        ?>
										
										<option style="color:black" value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
										<?php
	                                     }
                                         $stmt->execute();
					  
	                                     }catch(PDOException $e)
                                         {
        
                                         }
	
										?>
														   
										</select>
									</div>
									
									<div class="col-xss-6 col-xs-6 col-sm-6">
										<select class="form-control"  name="country" required/>
										<option value="">-Select country-</option>
										 <?php
										 require 'constants/db_config.php';
										 try {
                                         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                         $stmt = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                         $stmt->execute();
                                         $result = $stmt->fetchAll();

                                         foreach($result as $row)
                                         {
                                        ?>
										
										<option style="color:black" value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option>
										<?php
	                                     }
                                         $stmt->execute();
					  
	                                     }catch(PDOException $e)
                                         {
               
                                         }
	
										?>

										</select>
									</div>
									
								</div>
							
							</div>
							
							<div class="btn-holder">
								<button name="search" value="✓" type="submit" class="btn"><i class="ion-android-search"></i></button>
							</div>
						
						</form>
						
					</div>

				</div>
				
	</div>
</div>

</div>

<!-- Header Ends here -->
<div class="post-hero bg-light">
				<div class="container">
				    <div class="row">
				        <div class="col-sm-8">
        </div>
        <div class="col-sm-4">
            <a href="http://www.jdoqocy.com/click-8856538-11188475">
<img src="http://www.awltovhc.com/image-8856538-11188475" width="180" height="150" alt="Reseller Web Hosting" border="0"/></a>
        </div>
					
				</div>
				</div>
			</div>
<!-- Job Walk through Starts here -->
<div class="post-hero bg-light">
			
				<div class="container">

					<div class="process-item-wrapper mt-20">
							
						<div class="row">
						
							<div class="col-sm-4">
								
								<div class="process-item clearfix">
									
									<div class="icon">
										<i class="flaticon-line-icon-set-magnification-lens"></i>
									</div>
									
									<div class="content">
										<h5>01 / Search for jobs</h5>
									</div>
									
								</div>
								
							</div>
							
							<div class="col-sm-4">
							
								<div class="process-item clearfix">
									
									<div class="icon">
										<i class="flaticon-line-icon-set-pencil"></i>
									</div>
									
									<div class="content">
										<h5>02 / Apply a Job</h5>
									</div>
									
								</div>
								
							</div>
							
							<div class="col-sm-4">
								
								<div class="process-item clearfix">
									
									<div class="icon">
										<i class="flaticon-line-icon-set-calendar"></i>
									</div>
									
									<div class="content">
										<h5>03 / Start Working</h5>
									</div>
									
								</div>
								
							</div>
							
						</div>
					
					</div>
					
				</div>
			
			</div>
<!-- Job Walk through Ends here -->


<!-- Middle Starts Here -->	

<div class="container">

	<div class="row">	
		
	    <div class="col-sm-8">
	    	<br><br>
	<!-- Second Starts here -->
	<div class="bg-light pt-10 pb-20">
			<div class="clear"></div>
				<div class="container">
				<div class="clear"></div>
					
				<div class="">
							
							<h3>Latest Jobs</h3>	

					</div>
					
					<div class="row">
						
						<div class="col-sm-7">
						
							<div class="recent-job-wrapper alt-stripe mr-0">
							<?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT 4");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  

                            foreach($result as $row) {
							$jobcity = $row['city'];
							$jobcountry = $row['country'];
							$type = $row['type'];
							$title = $row['title'];
							$listeddate = $row['date_posted'];
							$closingdate = $row['closing_date'];
							$company_id = $row['company'];
							$listed_date = date_format(date_create_from_format('d/m/Y', $listeddate), 'd');
                            $listed_month = date_format(date_create_from_format('d/m/Y', $listeddate), 'F');
                            $listed_year = date_format(date_create_from_format('d/m/Y', $listeddate), 'Y');
										   
							$post_date = date_format(date_create_from_format('d/m/Y', $closingdate), 'd');
                            $post_month = date_format(date_create_from_format('d/m/Y', $closingdate), 'F');
                            $post_year = date_format(date_create_from_format('d/m/Y', $closingdate), 'Y');
										   
							$stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$company_id' and role = 'employer'");
                            $stmtb->execute();
                            $resultb = $stmtb->fetchAll();
							foreach($resultb as $rowb) {
							$complogo = $rowb['avatar'];
							$thecompname = $rowb['first_name'];	
								
							}
							
							if ($type == "Freelance") {
							$sta = '<div class="job-label label label-success">
									Freelance
									</div>';
											  
							}
							if ($type == "Part-time") {
							$sta = '<div class="job-label label label-danger">
									Part-time
									</div>';
											  
							}
							if ($type == "Full-time") {
							$sta = '<div class="job-label label label-warning">
									Full-time
									</div>';
											  
							}
							?>
							<a class="recent-job-item clearfix" target="_blank" href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
							<div class="GridLex-grid-middle">
							<div class="GridLex-col-5_xs-12">
							<div class="job-position">
							<div class="image">
							<?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
							</div>
							<div class="content">
							<h4><?php echo "$title"; ?></h4>
							<p><?php echo "$thecompname"; ?></p>
							</div>
							</div>
							</div>
							<div class="GridLex-col-3_xs-6_xss-12 mt-10-xss">
							<div class="job-location">
							<i class="fa fa-map-marker text-primary"></i> <?php echo "$jobcountry" ?></strong> - <?php echo "$jobcity" ?>
							</div>
							</div>
							<div class="GridLex-col-4_xs-4_xss-12">
							<?php echo "$sta"; ?>
							<span class="font12 block spacing1 font400 text-center">Listed - <?php echo "$listed_month"; ?> <?php echo "$listed_date"; ?>, <?php echo "$listed_year"; ?></span>
							<span class="font12 block spacing1 font400 text-center">Due - <?php echo "$post_month"; ?> <?php echo "$post_date"; ?>, <?php echo "$post_year"; ?></span>
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
<!--For properties sales -->
	<div class="bg-light pt-10 pb-20">
			<div class="clear"></div>
				<div class="container">
				<div class="clear"></div>
					
				<div class="">
							
							<h3>Used Cars For Sale</h3>	

					</div>
					
					<div class="row">
						
						<div class="col-sm-7">
						
							<div class="recent-job-wrapper alt-stripe mr-0">
							<?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_car ORDER BY car_id DESC LIMIT 4");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  


                            foreach($result as $row) {
							$user_id = $row['user_id'];
							$caption = $row['caption'];
							$listeddate = $row['postdate'];
							$color = $row['color'];
							$contact = $row['numbero'];
							$category = $row['category'];
							$price = $row['sellprice'];
							$photos = $row['img_name'];
							$imgpath = $row['img_path'];
							$imgtype = $row['img_type'];
							
							$listed_date = date_format(date_create_from_format('d/m/Y', $listeddate), 'd');
                            $listed_month = date_format(date_create_from_format('d/m/Y', $listeddate), 'F');
                            $listed_year = date_format(date_create_from_format('d/m/Y', $listeddate), 'Y');


                             $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$user_id' and role = 'employer'");
                            $stmt->execute();
                            $resultb = $stmt->fetchAll();
                            foreach($resultb as $rowb) {
							
							$user_name = $rowb['first_name'];	
								
							}

							?>			   
						
							<a class="recent-job-item clearfix" target="_blank" href="explore-car.php?carid=<?php echo $row['car_id']; ?>">
								<h4 class="" style="color: rgb(0,0,0);margin-left:30px; !impoartant"><strong><?php echo $caption; ?></strong></h4>   
							
							<div class="GridLex-grid-middle">

							<div class="GridLex-col-8_xs-12">
							<div class="job-position">
							<div class="image">


									<img src="upload1/<?php echo $row["img_name"]; ?>" alt="logo" />
							
							</div>
							<div class="content">
							<h4><?php echo "$caption"; ?></h4>
							<p>Post by:<?php echo "$user_name"; ?></p>
							</div>
							</div>
							</div>
							
							<div class="GridLex-col-4_xs-4_xss-12">
							<div class="job-label label label-success">Price: <strong> AED <?php echo "$price"; ?></strong></div>
							Listed - <?php echo "$listed_month"; ?> <?php echo "$listed_date"; ?>, <?php echo "$listed_year"; ?>
							Category: - <?php echo "$category"; ?> <?php echo "$color"; ?> <br>Contact: <?php echo "$contact"; ?>
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
<!--property sales end -->
<!--For propeties sales -->
	<div class="bg-light pt-10 pb-20">
			<div class="clear"></div>
				<div class="container">
				<div class="clear"></div>
					
				<div class="">
							
							<h3>Properties For Sale | Rent</h3>	

					</div>
					
					<div class="row">
						
						<div class="col-sm-7">
						
							<div class="recent-job-wrapper alt-stripe mr-0">
							<?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_car ORDER BY car_id DESC LIMIT 4");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  


                            foreach($result as $row) {
							$user_id = $row['user_id'];
							$caption = $row['caption'];
							$listeddate = $row['postdate'];
							$color = $row['color'];
							$contact = $row['numbero'];
							$category = $row['category'];
							$price = $row['sellprice'];
							$photos = $row['img_path'];
							$listed_date = date_format(date_create_from_format('d/m/Y', $listeddate), 'd');
                            $listed_month = date_format(date_create_from_format('d/m/Y', $listeddate), 'F');
                            $listed_year = date_format(date_create_from_format('d/m/Y', $listeddate), 'Y');

                             $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$user_id' and role = 'employer'");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($resultb as $rowb) {
							
							$user_name = $rowb['first_name'];	
								
							}

							?>			   
						
							<a class="recent-job-item clearfix" target="_blank" href="explore-car.php?carid=<?php echo $row['car_id']; ?>">
								<h4 class="" style="color: rgb(0,0,0);margin-left:30px; !impoartant"><strong><?php echo $caption; ?></strong></h4>   
							
							<div class="GridLex-grid-middle">

							<div class="GridLex-col-8_xs-12">
							<div class="job-position">
							<div class="image">
							<?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';		
							}
							?>
							</div>
							<div class="content">
							<h4><?php echo "$caption"; ?></h4>
							<p>Post by:<?php echo "$user_name"; ?></p>
							</div>
							</div>
							</div>
							
							<div class="GridLex-col-4_xs-4_xss-12">
							<div class="job-label label label-success">Price: <strong> AED <?php echo "$price"; ?></strong></div>
							Listed - <?php echo "$listed_month"; ?> <?php echo "$listed_date"; ?>, <?php echo "$listed_year"; ?>
							Category: - <?php echo "$category"; ?> <?php echo "$color"; ?> <br>Contact: <?php echo "$contact"; ?>
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
<!--property sales end -->
<!--For laptop and mobile sales -->
	<div class="bg-light pt-10 pb-20">
			<div class="clear"></div>
				<div class="container">
				<div class="clear"></div>
					
				<div class="">
							
							<h3>New|Used Mobiles & Laptops For Sale</h3>	

					</div>
					
					<div class="row">
						
						<div class="col-sm-7">
						
							<div class="recent-job-wrapper alt-stripe mr-0">
							<?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_car ORDER BY car_id DESC LIMIT 4");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  


                            foreach($result as $row) {
							$user_id = $row['user_id'];
							$caption = $row['caption'];
							$listeddate = $row['postdate'];
							$color = $row['color'];
							$contact = $row['numbero'];
							$category = $row['category'];
							$price = $row['sellprice'];
							$photos = $row['img_path'];
							$listed_date = date_format(date_create_from_format('d/m/Y', $listeddate), 'd');
                            $listed_month = date_format(date_create_from_format('d/m/Y', $listeddate), 'F');
                            $listed_year = date_format(date_create_from_format('d/m/Y', $listeddate), 'Y');

                             $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$user_id' and role = 'employer'");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($resultb as $rowb) {
							
							$user_name = $rowb['first_name'];	
								
							}

							?>			   
						
							<a class="recent-job-item clearfix" target="_blank" href="explore-car.php?carid=<?php echo $row['car_id']; ?>">
								<h4 class="" style="color: rgb(0,0,0);margin-left:30px; !impoartant"><strong><?php echo $caption; ?></strong></h4>   
							
							<div class="GridLex-grid-middle">

							<div class="GridLex-col-8_xs-12">
							<div class="job-position">
							<div class="image">
							<?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';		
							}
							?>
							</div>
							<div class="content">
							<h4><?php echo "$caption"; ?></h4>
							<p>Post by:<?php echo "$user_name"; ?></p>
							</div>
							</div>
							</div>
							
							<div class="GridLex-col-4_xs-4_xss-12">
							<div class="job-label label label-success">Price: <strong> AED <?php echo "$price"; ?></strong></div>
							Listed - <?php echo "$listed_month"; ?> <?php echo "$listed_date"; ?>, <?php echo "$listed_year"; ?>
							Category: - <?php echo "$category"; ?> <?php echo "$color"; ?> <br>Contact: <?php echo "$contact"; ?>
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
<!--property sales end -->

			<div class="pt-0 pb-50">
			
				<div class="">
				    
					<div class="">
							
								<br><h3>Partner Companies</h3>
								
							</div>
					
					<div class="row top-company-wrapper with-bg">
							
					<?php
					require 'constants/db_config.php';
					try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY rand() LIMIT 8");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    foreach($result as $row) {
					$complogo = $row['avatar'];
					?>
					<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
							
					<div class="top-company">
					<div class="image">
					<?php 
					if ($complogo == null) {
					print '<center><img class="autofit2" alt="image"  src="images/blank.png"/></center>';
					}else{
					echo '<center><img class="autofit2" alt="image"  src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
					}
					?>
					</div>
					<h6><?php echo $row['first_name'];?></h6>
					<a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">View Company</a>
					</div>
							
					</div>
					<?php
					
                    {

	                }
					  
	                }}catch(PDOException $e)
                    {

                    }
	
					?>
						

						
						
					</div>
					

				</div>

			</div>

	<!-- Second Ends here -->
		
	    </div>

	    <div class="col-md-4">
	    	<br><br>
	    	
			<div class="result-list-wrapper">
							    <div class="sorting-header">
									<h3 class="sorting-title">Latest Posts</h3>
								</div>
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
                                <div class="clearfix"></div><br>
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

								<div class="center">
									<!-- quicklinks here -->
									<a href="//partners.hostgator.com/c/297651/178149/3094"><img src="//a.impactradius-go.com/display-ad/3094-178149" border="0" alt="" width="250" height="250"/></a><img height="0" width="0" src="//partners.hostgator.com/i/297651/178149/3094" style="position:absolute;visibility:hidden;" border="0" />
								</div>
	

	    </div>

<br>

	</div>
	

</div>



<!-- Middle Ends Here -->	
<!-- Footer Starts here -->
			
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
	


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122860830-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122860830-1');
</script>

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