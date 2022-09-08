<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio - Plugg Resources | Creative, rhythmic technology</title>

  <!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	

<?php
  include('header.html');
?>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main style="z-index: 10;position: relative;">
	
<!-- =======================
Hero banner START -->
<section class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<!-- Title -->
				<h1 class="mb-3">Portfolio</h1>
				<!-- Content -->
				<p class="mb-0">Here are some of our previous projects</p>
			</div>       
		</div>    
	</div>
</section>
<!-- =======================
Hero banner END -->

<!-- =======================
Case-study START-->
<section>
	<div class="container">
		<div class="row mb-3">
			<div class="col-12">        
				
        <!-- Tab item START -->
        <div class="grid-menu" data-target=".filter-container">
					<ul class="nav nav-pills nav-pill-bg-primary-soft">
						<!-- Tab -->
						<li class="nav-item">
							<a class="nav-link active" data-filter="*">All</a>
						</li>
						<!-- Tab -->
						<li class="nav-item">
							<a class="nav-link" data-filter=".logo">Logos</a>          
						</li>
						<!-- Tab -->
						<li class="nav-item">
							<a class="nav-link" data-filter=".website">Websites</a>        
						</li>
						<!-- Tab -->
						<li class="nav-item">
							 <a class="nav-link" data-filter=".flyer">Flyers</a>        
						</li>
					</ul>
				</div>
        <!--Tab item END  -->

			</div>
		</div>  

		<!-- Tab content START -->
		<div class="row filter-container g-4" data-isotope='{"layoutMode": "masonry"}'>
			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/01.jpg" class="card-image-scale" alt="card image">
			
					     
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Koko's Artistry</a> </h5>
						<!-- Content -->
						<p>Logo design for Koko's Artistry.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0 mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/02.jpg" class="card-image-scale" alt="card image">
			
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Sharon Storz</a> </h5>
						<!-- Content -->
						<p>Logo design for Sharon Storz.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0 mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item website">
				<!-- Card START -->
				<div class="card rounded-0 ">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/03.jpg" class="card-image-scale" alt="card image">
			
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Websites</span>
						<!-- Title -->
						<h5> <a href="https://manutdinpidgin.com" class="stretched-link">Man United In Pidgin</a> </h5>
						<!-- Content -->
						<p>Website design for Man United In Pidgin.</p>
						<!-- Button -->
						<a href="https://manutdinpidgin.com" class="btn btn-link text-warning p-0 mb-0">View project</a>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/05.jpg" class="card-image-scale" alt="card image">
			      
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Idea Novus</a> </h5>
						<!-- Content -->
						<p>Logo design for Idea Novus.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0 mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item website">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/06.jpg" class="card-image-scale" alt="card image">
			       
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Websites</span>
						<!-- Title -->
						<h5> <a href="https://team2care.com.au/" class="stretched-link"></a>Team2Care</h5>
						<!-- Content -->
						<p>Website design for Team2Care.</p>
						<!-- Button -->
						<a href="https://team2care.com.au/" class="btn btn-link text-warning p-0 mb-0">View project</a>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/04.jpg" class="card-image-scale" alt="card image">
			      
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link"></a>Softlife Consult</h5>
						<!-- Content -->
						<p>Logo design for Softlife Consult.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0 mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/07.jpg" class="card-image-scale" alt="card image">
			     
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Maestro Exchange</a> </h5>
						<!-- Content -->
						<p>Logo Design for Maestro Exchange.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item flyer">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/08.jpg" class="card-image-scale" alt="card image">
			     
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Flyers</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Koko's Artistry</a> </h5>
						<!-- Content -->
						<p>Flyer design for Koko's Artistry.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item flyer">
				<!-- Card START -->
				<div class="card card-hover-overlay rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/09.jpg" class="card-image-scale" alt="card image">
			       
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Flyers</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Sharon Storz</a> </h5>
						<!-- Content -->
						<p>Flyer design for Sharon Storz.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item flyer">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/10.jpg" class="card-image-scale" alt="card image">
			     
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Flyers</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Softlife Consult</a> </h5>
						<!-- Content -->
						<p>Flyer design for Softlife Consult.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/11.jpg" class="card-image-scale" alt="card image">
			        
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Edwards Crypto Hub</a> </h5>
						<!-- Content -->
						<p>Logo design for Edwards Crypto Hub.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/12.jpg" class="card-image-scale" alt="card image">
			   
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Mafia Co.</a> </h5>
						<!-- Content -->
						<p>Logo design for Mafia Co.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item flyer">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/13.jpg" class="card-image-scale" alt="card image">
			       
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Flyers</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Maestro Exchange</a> </h5>
						<!-- Content -->
						<p>Flyer design for Maestro Exchange.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item website">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/14.jpg" class="card-image-scale" alt="card image">
			       
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Websites</span>
						<!-- Title -->
						<h5> <a href="https://ubs.unizik.edu.ng/" class="stretched-link">Unizik Business School</a> </h5>
						<!-- Content -->
						<p>Website design for Unizik Business School.</p>
						<!-- Button -->
						<a href="https://ubs.unizik.edu.ng/" class="btn btn-link text-warning p-0  mb-0">View project</a>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/15.jpg" class="card-image-scale" alt="card image">
			       
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Bube</a> </h5>
						<!-- Content -->
						<p>Logo design for Bube.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/16.jpg" class="card-image-scale" alt="card image">
			       
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Diogo</a> </h5>
						<!-- Content -->
						<p>Logo design for Diogo.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-sm-6 col-lg-4 grid-item logo">
				<!-- Card START -->
				<div class="card rounded-0">
					<div class="position-relative overflow-hidden rounded-4 rounded-bottom-right-0">
						<!-- Card Image -->
						<img src="assets/images/case-study/17.jpg" class="card-image-scale" alt="card image">
			       
					</div>
					<div class="card-body p-3">
						<!-- Badge -->
						<span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold mb-2">Logos</span>
						<!-- Title -->
						<h5> <a href="#" class="stretched-link">Blaqq</a> </h5>
						<!-- Content -->
						<p>Logo design for Blaqq.</p>
						<!-- Button -->
						<!-- <a href="#" class="btn btn-link text-warning p-0  mb-0">View project</a> -->
					</div>
				</div>
				<!-- Card END -->
			</div>
			
		</div><!-- Row END -->
		
		<!-- Pagination START -->
		<!-- <nav aria-label="navigation">
			<ul class="mt-5 mb-0 pagination pagination-rounded pagination-line d-flex justify-content-center">

				<li class="page-item disabled">
					<a class="page-link">Prev</a>
				</li>

				<li class="page-item">
					<a class="page-link" href="#">1</a>
				</li>

				<li class="page-item active" aria-current="page">
					<a class="page-link" href="#">2</a>
				</li>

				<li class="page-item" aria-current="page">
					<a class="page-link" href="#">....</a>
				</li>

				<li class="page-item" aria-current="page">
					<a class="page-link" href="#">15</a>
				</li>

				<li class="page-item" aria-current="page">
					<a class="page-link" href="#">Next</a>
				</li>  
			</ul>
		</nav> -->
		<!-- Pagination END -->
	</div>
</section>
<!-- =======================
Case-study END -->

<!-- =======================
Contact START -->
<section class="bg-light py-0">
	<div class="container">
		<div class="row py-5 align-items-center justify-content-between">
			<div class="col-lg-4">
				<!-- Title -->
				<h2 class="mb-0">Want to get in touch?</h2>
			</div>
			<div class="col-lg-6">
				<!-- Content -->
				<p>Get in touch with us to see how we can help you with your project. With offices throughout the world, you can connect with one near to you.</p>
				<!-- Button -->
				<a href="contact-us.html" class="btn btn-warning mb-0">Contact us</a>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Contact END -->
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START  -->
<?php
    include('footer.html');
?>
<!-- =======================
Footer END  -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div><!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="assets/vendor/imagesLoaded/imagesloaded.pkgd.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>
</html>