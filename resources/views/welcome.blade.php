<!DOCTYPE HTML>
<!--
	Poissons by Manuel
-->
<html onload="name()">
    @include('header')
    <script>
        
        function dossier() {
            var name = document.getElementById("fullname").value;
            if (name === '') {
                alert("Completez le formulaire");
            
            } else {
                swal({
                    title: "Félicitations vous pouvez intégrer l'ecole!",
                    text: "Passer a l'école ou Appelez!",
                    icon: "success",
                    button: "Call +237 6 99 95 43 71!",
                });
            }
        }
    </script>

@if (session('success'))

<div class="alert alert-success col-md-12">
    {{ session('success') }}
</div>
<script>
    function name() {
    swal({
    title: 'Votre Message a ete recu ! Vous recevrez un message  . ',
    text: "Appelez nous !",
    icon: "success",
    buttons: {
        confirm: {
        text: "Continuez Maintenant",
        value: true,
        visible: true,
        className: "btn btn-success",
        closeModal: true
        }
    }
    });
}
</script>
@endif
@if (session('error'))

<div class="alert alert-danger col-md-12">
    {{ session('error') }}
</div>
<script>
    function name() {
        swal("Erreur!", "You clicked the button!", {
            icon : "error",
            buttons: {
                confirm: {
                    className : 'btn btn-danger'
                }
            },
        });
    }
</script>
@endif

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url({{asset('images/8.jpg')}})">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>L’éducation est l’arme la plus puissante que l’on puisse utiliser pour changer le monde
								<h5 style="color: white;">Nelson Mandela</h5>
							</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Etude De Dossier</h3>
											<form action="" aria-checked="dossier()" onsubmit="return false" >
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Votre Nom</label>
														<input required type="text" id="fullname" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Classe</label>
														<select required name="#" id="activities" class="form-control">
															<option value="">-</option>
															<option value="">Maternelle</option>
															<option value="">Primaire</option>
															<option value="">Creche</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="vie-scolaire">Appreciations de notes</label>
														<select name="#" id="vie-scolaire" class="form-control">
															<option value="">Bien</option>
															<option value="">Passable</option>
															<option value="">Assez-Bien</option>
															<option value="">Bien</option>
															<option value="">Tres Bien</option>
															<option value="">Excellent</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="tele">Votre Telephone</label>
														<input type="text" id="tele" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Date De Naissance</label>
														<input required type="text" id="date-start" class="form-control" placeholder="MOIS/JOUR/ANNEE">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input onclick="dossier()" type="submit" style="background-color: dodgerblue;" class="btn btn-primary btn-block" value="Submit">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Notre Engagement !</h2>
					<p>Groupe Scolaire Bilingue LES POISSONS a pour mission de promouvoir l’éducation intégrale de ses élèves, avec une attention particulière envers ceux éprouvant diverses difficultés.</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('images/logo.jpg')}}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('images/logo.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Staff Pedagogique</h2>
							<p>Une Equipe techniquement Competents et pedagogiquement efficace.</p>
							<p><span class="btn btn-primary">Plus De Details</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('images/poissons2.jpg')}}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('images/poissons2.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Excellence aux Examens</h2>
							<p>Les Majors des Grands colleges et lyc&eacute;e de la capitale viennent de Chez nous.</p>
							<p><span class="btn btn-primary">Plus De Details</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('images/1.jpg')}}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('images/1.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Vie Scolaire</h2>
							<p>La pédagogie du Groupe Scolaire Bilingue LES POISSONS repose sur les 5 principes: intellectuelle, physique, sociale, morale et spirituelle..</p>
							<p><span class="btn btn-primary">Plus De Details</span></p>
						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('images/2.jpg')}}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('images/2.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Epanouissement des plus jeunes</h2>
							<p>Le Groupe Scolaire Bilingue LES POISSONS offre une multitude d’activités parascolaires dans les domaines du sport, des arts ou de la culture générale.</p>
							<p><span class="btn btn-primary">Plus De Details</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('images/5.jpg')}}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('images/5.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Un seul Projet : La Reussite Collective</h2>
							<p>Former des enfants pour Construire Un Futur Meilleur.</p>
							<p><span class="btn btn-primary">Plus De Details</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('images/poissons.jpg')}}" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('images/poissons.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Vivre | Construire | Innover</h2>
							<p>le Groupe Scolaire Bilingue LES POISSONS met entre les mains de l’élève tous les outils technologiques visant à optimiser l’acquisition des connaissances.</p>
							<p><span class="btn btn-primary">Plus De Details</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Pourquoi choisir le Groupe Scolaire Bilingue LES POISSONS?</h2>
					<p>Les Raisons qui peuvent pousser a nous faire confiance sont les suivantes :</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>Un cadre de vie Ideale a l'&eacute;ducation </h3>
						<p>Nos bâtiments accueillent Les enfants et ils bénéficient d’une cour de récréation large avec espace vert.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Un corps enseignant de qualité</h3>
						<p>Une Equipe techniquement Competents et pedagogiquement efficace.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Une Education de qualité Sans se ruiner pour autant</h3>
						<p>Nous nous donnons l'obligation d'offrir a tous et toutes l'education de haut niveau.</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url({{asset('images/1.jpg')}})"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>Discipline &longmapsto; Travail  &longmapsto; Success</h1>
					<h3 style="color: gold;">Notre Philosophie de Vie </h3>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Nos Resultats</h2>
					<p>Nos Majors s'illustrent des le plus jeune Age.</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="296" data-speed="3000" data-refresh-interval="30">1</span>
						<span class="counter-label">El&egrave;ves Actuels</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="97" data-speed="3000" data-refresh-interval="30">1</span>
						<span class="counter-label">Mentions</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="1502" data-speed="3000" data-refresh-interval="30">1</span>
						<span class="counter-label">El&egrave;ves en secondaire Depuis 2005</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="1592" data-speed="3000" data-refresh-interval="30">1</span>
						<span class="counter-label">El&egrave;ves Depuis 2005</span>

					</div>
				</div>
					
			</div>
		</div>
	</div>

	

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>SUIVEZ-NOUS</h2>
					<p style="color: #fff;">Vous recevrez toutes l'actualit&eacute; sur le campus.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group" style="box-shadow: 1px 1px 0px #fff;">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Votre Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Envoyer</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    @include('footer')
	</body>
</html>

