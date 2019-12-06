<!-- Contact-page -->

<main class="main contact-page">
    <!--Section: Contact v.2-->

    <!-- https://mdbootstrap.com/docs/jquery/forms/contact/ -->
    <section class="contact-page__section mb-4">

      <!--Section heading-->
      <h2 class="contact-page__section__title h1-responsive font-weight-bold text-center my-4"><?php the_title(); ?></h2>
      <!--Section description-->
      <p class="contact-page__section__text text-center w-responsive mx-auto mb-5"><?php the_field('sous-titre-contacte') ?></p>

      <div class="row">

          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="name" name="name" class="form-control">
                              <label for="name" class="">Votre nom</label>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="email" name="email" class="form-control">
                              <label for="email" class="">Votre e-mail</label>
                          </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <input type="text" id="subject" name="subject" class="form-control">
                              <label for="subject" class="">Sujet</label>
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                          <div class="md-form">
                              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                              <label for="message">Votre message</label>
                          </div>

                      </div>
                  </div>
                  <!--Grid row-->

              </form>

              <div class="text-center text-md-left">
                  <a class="button-send-contact btn" onclick="document.getElementById('contact-form').submit();">Envoyer <i class="icone-send-button fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>

               
            
              <!-- <div class="status"></div> -->
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>Rue Grand Mont 10, B-6997 SOY</p>
                  </li>

                  <li><i class="fa fa-phone mt-4 fa-2x"></i>
                      <p>+32 484 69 13 35</p>
                  </li>

                  <li><i class="fa fa-envelope-o mt-4 fa-2x"></i>
                      <p>bastien@ludoboost.be</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->

      </div>

    </section>
    <!--Section: Contact v.2-->

    <div class="main__footer">
        <a href="#" class="btn button-go-back-home">Retour à l'accueil</a>
      </div>

  </main>