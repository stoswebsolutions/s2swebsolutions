<?php
// Get the base name of the currently executing PHP script file
$current_file_name = basename($_SERVER['PHP_SELF']);
$activeClassServices='';
/*
 $activeClassHome='';
 $activeClassAbout='';
 $activeClassSer='';
 $activeClassP='';
 $activeClassPrice='';
 $activeClassContact='';
 $activeClassBlog='';
  if($current_file_name='index.php'){
	 $activeClassHome='active';
  }else{
		
	}
    if($current_file_name='about.php'){
      $activeClassAbout='active';
    }else{
		$activeClassHome='';
		
		$activeClassSer='';
		$activeClassP='';
		$activeClassPrice='';
		$activeClassContact='';
		$activeClassBlog='';
	}*/
	/*
   if($current_file_name='projects.php'){
      $activeClassP='active';
    else if($current_file_name='price.php')
      $activeClassPrice='active';
    else if($current_file_name='contact.php')
      $activeClassContact='active'; 
    else if($current_file_name='blog.php')
      $activeClassBlog='active';
    else
      $activeClassSer='active';	*/	
 if($current_file_name=='services.php' || $current_file_name=='website-design-company-at-Karimnagar.php' || $current_file_name=='website-development-company-at-karimnagar.php' || $current_file_name=='web-hosting-service-at-karimnagar.php' || $current_file_name=='logo-design-at-karimnagar.php' || $current_file_name=='digital-marketing-at-Karimnagar.php' || $current_file_name=='mobile-app-development-at-karimnagar.php' || $current_file_name=='ecommerce-website-design-at-karimnagar.php' || $current_file_name=='responsive-web-design-at-karimnagar.php' || $current_file_name=='cms-website-design-at-karimnagar.php'){
	 $activeClassServices='active';
  }else{
	$activeClassServices='';	
	}
?>

<nav class="navbar navbar-expand-lg navbar-dark navbar-light px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
			<h1 class="m-0">
               <img src="img/logo.jpeg" alt="S2S Web Solutions logo" width="225"  height="55"   >	
              </h1>			   
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link <?php echo ($current_file_name=='index.php') ? 'active' : '';?>">Home</a>
                    <a href="about.php" class="nav-item nav-link <?php echo ($current_file_name=='about.php') ? 'active' : '';?>">About</a>
                    <!--<a href="service.html" class="nav-item nav-link">Services</a>-->
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo $activeClassServices;?>" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="services.php" class="dropdown-item">All Services</a>
     <a href="website-design-company-at-Karimnagar.php" class="dropdown-item">Web Design Service</a>
     <a href="website-development-company-at-karimnagar.php" class="dropdown-item">Web Development Service</a>
   <a href="web-hosting-service-at-karimnagar.php" class="dropdown-item">Web Hosting Service</a>
	<a href="logo-design-at-karimnagar.php" class="dropdown-item">Logo Designing</a>
	<a href="digital-marketing-at-Karimnagar.php" class="dropdown-item">Digital Marketing</a>
	<a href="seo-company-at-karimnagar.php" class="dropdown-item">SEO Service</a>
	<a href="mobile-app-development-at-karimnagar.php" class="dropdown-item">App Development</a>
	<a href="ecommerce-website-design-at-karimnagar.php" class="dropdown-item">E-Commerce Service</a>
	<a href="responsive-web-design-at-karimnagar.php" class="dropdown-item">Responsive Design</a>
	<a href="cms-website-design-at-karimnagar.php" class="dropdown-item">CMS Development</a>
							
                        </div>
                    </div>
					<a href="projects.php" class="nav-item nav-link <?php echo ($current_file_name=='projects.php') ? 'active' : '';?>">Projects</a>
					<a href="price.php" class="nav-item nav-link <?php echo ($current_file_name=='price.php') ? 'active' : '';?>">Price</a>
					 <a href="contact.php" class="nav-item nav-link <?php echo ($current_file_name=='contact.php') ? 'active' : '';?>">Contact</a>
					  <a href="blog.php" class="nav-item nav-link <?php echo ($current_file_name=='blog.php') ? 'active' : '';?>">Blog</a>
                   <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>-->
                    <!--<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>-->
                   
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="#" class="btn btn-primary py-2 px-4 ms-3">GET A QUOTE</a>
            </div>
        </nav>