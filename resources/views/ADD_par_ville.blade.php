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
			$heure = (date('H')+1); // Décalage horaire
			$reste=16-date('H');
 
			@endphp
			@if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
		@endif
		@if($heure >= 14 && $heure <= 18)
            <form method="POST" action="{{ route('covid.add') }}"  class="contact1-form validate-form" enctype="multipart/form-data">
                @csrf
            	<span class="contact1-form-title">
					Entrez Statistiques
				</span>
				<div class="form-group row">
					<label for="region" class="contact1-form validate-form"></label>

					<div class="col-md-6">
						<select name="region" class="input1" style="width: 215%;">
							<option value="" disabled selected>Veuillez Choisir une Région</option>

							<option value="" disabled >---- Tout Le Maroc ----</option>


							<option value="Tanger-Tetouan-El Houceima" > Tanger-Tetouan-El Houceima</option>
							<option value="Casablanca-Settat" > Casablanca-Settat</option>
							<option value="Rabat-Salé-Kenitra" > Rabat-Salé-Kenitra</option>
							<option value="Marrakech-Safi" > Marrakech-Safi</option>
							<option value="Dakhla-OuadiDahab" > Dakhla-OuadiDahab</option>
							<option value="El Aayoun-Sakia El Hamra" > El Aayoun-Sakia El Hamra</option>
							<option value="Ssouss-Massa" > Ssouss-Massa</option>
							<option value="Guelmim-Ouad Noun" > Guelmim-Ouad Noun</option>
							<option value="Daraa Tafilalt" > Daraa Tafilalt</option>
							<option value="Fes-Meknes"> Fes-Meknes</option>
							<option value="Beni-Mellal-Khenifra" > Beni-Mellal/Khenifra</option>
							<option value="Region EST"> Region EST</option>
							<span class="shadow-input1"></span>

						</select>

					</div>
				</div><br>

				<div class="form-group row">
					<label for="ville" class="contact1-form validate-form"></label>

					<div class="col-md-6">
						<select class="input1" name="ville" style="width: 215%;">
							<option value="" disabled selected>Veuillez Choisir la ville</option>


							<option value="" disabled >----Tanger-Tetouan-El Houceima ----</option>
							<option value="Tanger-Assila" > Tanger-Assila</option>
							<option value="El Aaraech" > El Aaraech</option>
							<option value="Tetouan" > Tetouan</option>
							<option value="El Houceima" > El Houceima</option>
							<option value="Ouazzane" >Ouazzane</option>
							<option value="Al fahss Anjra" >Al fahss Anjra</option>
							<option value="Medieq/Fnideq" > Medieq/Fnideq</option>
							<option value="Chefchaouen" > Chefchaouen</option>
							<option value="" disabled >---- Casablanca-Settat ----</option>
							<option value="Casablanca" > casablanca</option>
							<option value="El Mohammadia" >El Mohammadia</option>
							<option value="Medyouna" >Medyouna</option>
							<option value="E-Nouasser" >E-Nouasser</option>
							<option value="Bensslimane" >Bensslimane</option>
							<option value="Settat" >Settat</option>
							<option value="Berrchid" > Berrchid</option>
							<option value="El Jadida" > El Jadida</option>
							<option value="Sidi Bennour" > Sidi Bennour</option>
							<option value="" disabled >---- Rabat-Salé-Kenitra ----</option>
							<option value="Rabat">Rabat</option>
							<option value="Salé" >Salé</option>
							<option value="E-sskhirat/Temara" >E-sskhirat/Temara</option>
							<option value="Kenitra" >Kenitra</option>
							<option value="Khemisset" >Khemisset</option>
							<option value="Sidi-Slimane" >Sidi-Slimane</option>
							<option value="Sidi-Kacem" > Sidi-Kacem</option>
							<option value="" disabled >---- Marrakech-Safi ----</option>
							<option value="Marrakech" >Marrakech</option>
							<option value="Rehamna" >Rehamna</option>
							<option value="El haouz" >El haouz</option>
							<option value="Chichaoua" >Chichaoua</option>
							<option value="Kalaat Seraghna" >Kalaat Seraghna</option>
							<option value="Es-saouira" >Es-saouira</option>
							<option value="Safi" > Safi</option>
							<option value="El Youssfia" > El Youssfia</option>
							<option value="" disabled >----------Dakhla-OuadiDahab-------------</option>
							<option value="OuadiDahab" > OuadiDahab</option>
							<option value="Ousserd" > Ousserd</option>
							<option value="" disabled >-------El Aayoun-Sakia El Hamra---------</option>
							<option value="Boujdour" >Boujdour</option>
							<option value="El Aayoun" >El Aayoun</option>
							<option value="" disabled >------------Ssouss-Massa-------------</option>
							<option value="Inzegan-Ait Melloul" >Inzegan-Ait Melloul</option>
							<option value="Agadir" >Agadir</option>
							<option value="Tata" >Tata</option>
							<option value="Taroudant" >Taroudant</option>
							<option value="" disabled >-----------Guelmim-Ouad Noun---------</option>
							<option value="Guelmim" >Guelmim</option>
							<option value="Assa-Zagg" >Assa-Zagg</option>
							<option value="Sidi-Ifni" >Sidi-Ifni</option>
							<option value="" disabled >-----------Daraa Tafilalt-----------</option>
							<option value="Ouarzazate" >Ouarzazate</option>
							<option value="Rich" >Rich</option>
							<option value="Zagora" >Zagora</option>
							<option value="Tinghir" >Tinghir</option>
							<option value="Zagora" >Zagora</option>
							<option value="Tinghir" >Tinghir</option>
							<option value="Er-rachidia" >Er-rachidia</option>
							<option value="" disabled >------------Fes-Meknes--------------</option>
							<option value="Fes" >Fes</option>
							<option value="Hajeb" >Hajeb</option>
							<option value="Meknes" >Meknes</option>
							<option value="Tazza" >Tazza</option>
							<option value="Sefrou" >Sefrou</option>
							<option value="Taounate" >Taounate</option>
							<option value="Moulay Yaakoub" >Moulay Yaakoub</option>
							<option value="Boulmane" >Boulmane</option>
							<option value="" disabled >-------- Beni-Mellal/Khenifra--------</option>
							<option value="Azzilal" >Azzilal</option>
							<option value="Khouribga" >Khouribga</option>
							<option value="Beni Mellal" >Beni Mellal</option>
							<option value="Fekih Ben Saleh" >Fekih Ben Saleh</option>
							<option value="Khnifra" >Khnifra</option>
							<option value="" disabled >-------------- Region EST-------------</option>
							<option value="oujda" >oujda</option>
							<option value="Berkane" >Berkane</option>
							<option value="Nador" >Nador</option>
							<option value="Darouich" >Darouich</option>
							<option value="Taourirt" >Taourirt</option>
							<option value="Guerssif" >Guerssif</option>
							<span class="shadow-input1"></span>
						</select>

					</div>
				</div><br>
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

				<div class="wrap-input1 validate-input" data-validate = "Date required">
					<input class="input1" type="Date" name="Date" placeholder="Entrez Date"></input>
					<span class="shadow-input1"></span>
				</div><br>
				<div>
			    </div><br>
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

</body>
</html>