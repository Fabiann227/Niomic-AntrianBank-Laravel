<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Bank Mandiri</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/theme/plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="/theme/plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="icon" href="/theme/images/favicon.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="/theme/assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	<header class="banner overlay bg-cover" data-background="/theme/images/banner.jpg">
		
		<!-- banner -->
		<div class="container section">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<h1 class="text-white mb-3">BANK MANDIRI</h1>
					<p class="text-white mb-4">Terdepan, Terpercaya, Tumbuh bersama anda</p>
					
				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">Daftar Antrian</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="cs()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_cs}}</h3>
						<p class="mb-0">Costumer Service</p>
						@if($antri == "cs")
						<audio controls autoplay hidden>
							<source src="/audio/{{$antri_cs}}.mp3" type="audio/mpeg">
						</audio>
						@endif
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="teller1()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_teller1}}</h3>
						<p class="mb-0">Teller 1</p>
						@if($antri == "tl1")
						<audio controls autoplay hidden>
							<source src="/audio/{{$antri_teller1}}.mp3" type="audio/mpeg">
						</audio>
						@endif
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="teller2()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_teller2}}</h3>
						<p class="mb-0">Teller 2</p>
						@if($antri == "tl2")
						<audio controls autoplay hidden>
							<source src="/audio/{{$antri_teller2}}.mp3" type="audio/mpeg">
						</audio>
						@endif
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->

	<!-- footer -->
	<footer class="section pb-4">
		<div class="container">
			<div class="row align-items-center">

			</div>
		</div>
	</footer>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="/theme/plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="/theme/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="/theme/plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="/theme/assets/script.js"></script>
	<script>
		
		function cs() {
			var audio = new Audio('/audio/cs1.mp3')
			audio.play()
			audio.addEventListener('ended', function(){
				location.href = "/antri_cs/"+{{$antri_cs}}+"/"+{{$antri_teller1}}+"/"+{{$antri_teller2}}
			})
		}

		function teller1() {
			var audio = new Audio('/audio/t1.mp3')
			audio.play()
			audio.addEventListener('ended', function(){
				location.href = "/antri_teller1/"+{{$antri_cs}}+"/"+{{$antri_teller1}}+"/"+{{$antri_teller2}}
			})
		}

		function teller2() {
			var audio = new Audio('/audio/t2.mp3')
			audio.play()
			audio.addEventListener('ended', function(){
				location.href = "/antri_teller2/"+{{$antri_cs}}+"/"+{{$antri_teller1}}+"/"+{{$antri_teller2}}
			})
		}
	</script>
</body>

</html>