<div id="gtco-counter" class="gtco-section">
    <div class="gtco-container" id="#contact">

        <div class="row" >
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                <h2>Contactez nous</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="contact-form">
                    <form id="contact" action="/contact" method="get">
                        <input class="form-control mb-" type="hidden" name="latitude" value="" required="">
                        <input class="form-control mb-0 " type="hidden" name="longitude" value="" required="">
                        <input class="form-control mb-0 " type="hidden" name="residence" value="">

                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input class="form-control mb-0 " name="name" type="text" id="name" placeholder="Votre Nom *" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input class="form-control mb-0 " name="phone" type="text" id="phone" placeholder="Numero de Téléphone" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input class="form-control mb-0 " name="email" type="email" id="email" placeholder="Votre E-mail *" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input class="form-control mb-0 " name="subject" type="text" id="subject" placeholder="Message">
                          </fieldset>
                        </div>
                        <div class="col-md-3 row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <label for=""> {{date("h")}} + {{ date("i") }} = </label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                  <input class="form-control mb-0 " required name="verif" type="text" id="subject" placeholder="Vérifier">
                                </fieldset>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon btn btn-success">Envoyer un message maintenant <i class="fa fa-arrow-right"></i></button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>A Propos</h3>
						<p>
							<figure>
								<img src="{{asset('images/logo.jpg')}}" alt="Image" class="img-responsive">
							</figure>
						</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Vie Scolaire</h3>
						<ul class="gtco-footer-links">
							<li><a href="/login">Connexion</a></li>
							<li><a href="#">Admission</a></li>
							<li><a href="#">Sorties</a></li>
							<li><a href="#">Staff</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Pages</h3>
						<ul class="gtco-footer-links">
							<li><a href="#contact">Contacts</a></li>
							<li><a href="#">Cycle</a></li>
							<li><a href="#">Creche</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +237 6 99 95 43 71</a></li>
							<li><a href="mailto:dassijean000@gmail.com"><i class="icon-mail2"></i>Mail ecole les poissons</a></li>
							<li><a href="https://wa.me/+237699954371"><i class="icon-chat"></i> Whatsapp Chat</a></li>
							<li><a href="#"><i class="icon-map"></i>YAOUNDE | DAMAS - Lieu dit Entr&eacute;e Maetur</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2019 GSB les Poissons. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="mailto:dassimanuel000@gmail.com" target="_blank">Dassi Manuel</a> Universite: <a href="https://www.estiam.education" target="_blank">Estiam Paris</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('js/jquery.countTo.js')}}"></script>

	<!-- Stellar Parallax -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>

	<!-- Magnific Popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup-options.js')}}"></script>
	
	<!-- Datepicker -->
	<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
	

	<!-- Main -->
	<script src="{{asset('js/main.js')}}"></script>

    <script src="{{asset('../js/sweetalert.min.js')}}"></script>
