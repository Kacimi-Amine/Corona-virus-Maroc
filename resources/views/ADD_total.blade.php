<!DOCTYPE html>
<html lang="en">
<head>
	<title>Statistique Covid19_Maroc</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/endor/select2/select2.min.css">
<!--==============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/cov.png" alt="IMG">
			</div>
	@php
			$heure = (date('H')+1); // Décalage horaire avec le serveur oblige, je rajoute deux heures.
			$reste=16-date('H');
			
 
			@endphp
@if($heure >= 14 && $heure <= 18)
            <form method="POST" action="{{ route('covid.total') }}"  class="contact1-form validate-form" enctype="multipart/form-data">
                @csrf
            	<span>
				 <strong><em style="font-size: 1.2em">Entrez Statistiques Total de la journée </strong> </em>
				</span>
				
				@if (session('message'))
				<div class="alert alert-success">{{ session('message') }}</div>
			@endif
				<br>
				<div class="wrap-input1 validate-input" data-validate = "champ required">
					<input class="input1" type="text" name="confirmés" placeholder="Cas confirmés">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "champ required">
					<input class="input1" type="text" name="géris" placeholder="Cas géris">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "champ required">
					<input class="input1" type="text" name="morts" placeholder="Cas morts">
					<span class="shadow-input1"></span>
				</div>

				
			
				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Ajouter 
							<i class="fa fa-plus" aria-hidden="true"></i>
						</span>
					</button>			
				</div>
			</form>
		</div>
	</div>


	
@else
<p>
<strong style="color:brown ">
	il vous reste {{$reste}} Heure pour inserer les nouvelles statistiques
</strong>
</p>
{{-- <div class="col-md-3 ml-5" >
	<div class="card bg-warning text-white">
	<h3 class="card-title text-center">
	<div class="d-flex flex-wrap justify-content-center mt-2">
	<span class="badge hours"></span> :
	<span class="badge min"></span> :
	<span class="badge sec"></span>
	</div>
	</h3>
	</div>
	</div> --}}
	

	
@endif

<!--===============================================================================================-->
	<script src="../../public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendor/bootstrap/js/popper.js"></script>
	<script src="../../public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="../../public/js/main.js"></script>
	<script>
		$(document).ready(function() {
		setInterval( function() {
		var hours = new Date().getHours();
		$(".hours").html(( hours < 10 ? "0" : "" ) + hours);
		}, 1000);
		setInterval( function() {
		var minutes = new Date().getMinutes();
		$(".min").html(( minutes < 10 ? "0" : "" ) + minutes);
		},1000);
		setInterval( function() {
		var seconds = new Date().getSeconds();
		$(".sec").html(( seconds < 10 ? "0" : "" ) + seconds);
		},1000);
		});
		</script>
		

</body>
</html>