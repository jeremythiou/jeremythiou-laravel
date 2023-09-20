<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176719040-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-176719040-1');
    </script>

    <title>Jérémy Thiou - Développeur Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Jérémy Thiou, développeur web Laravel et VueJS. La bonne structuration et l'ordre dans mon code sont des points importants pour moi. J'aime passer du temps à optimiser mes applications afin de livrer des projets d’excellente qualité.">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <link rel="icon" type="image/png" href="/images/favicon.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    @include('app.partials.header')
    
    @include('app.partials.profile')

    @include('app.partials.experience')

    @include('app.partials.abilities')

    <div class="background-grey">
      <div class="container">
        <div class="contact">
          <div class="contact__header">
            <div class="contact__title">
              Contact
            </div>
            <div class="contact__subtitle">
              
            </div>
          </div>

          <div class="contact__content">
            <div class="contact__list reveal">
              <a href="https://www.linkedin.com/in/j%C3%A9r%C3%A9my-thiou/" target="_blank">
                <div class="contact__row reveal-1">
                  <div class="contact__icon">
                    <i class="fab fa-linkedin-in"></i>
                  </div>
                  <div class="contact__link">
                    J&#233;r&#233;my Thiou
                  </div>
                </div>
              </a>
              <a href="mailto:jeremy.thiou@gmail.com" target="_blank">
                <div class="contact__row reveal-2">
                  <div class="contact__icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="contact__link">
                    jeremy.thiou@gmail.com
                  </div>
                </div>
              </a>
              <a href="https://github.com/jeremythiou/" target="_blank">
                <div class="contact__row reveal-3">
                  <div class="contact__icon">
                    <i class="fab fa-github"></i>
                  </div>
                  <div class="contact__link">
                    jeremythiou
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/js/app.js"></script>
  </body>
</html>