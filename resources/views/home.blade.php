<!DOCTYPE html>
<html lang="en">
<head>

     <title>Acceuil</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/magnific-popup.css">
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">
     <Link rel="stylesheet" href="assets/semantic_ui/semantic.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="assets/css/templatemo-style.css">
</head>
<body>

      <!-- PRE LOADER -->
     {{-- <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section> - --}}


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a class="navbar-brand logo-navbar" href="#home">Unipro</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" >Acceuil</a></li>
                         <li><a href="#about">à propos de nous</a></li>
                         <li><a href="#services">Services</a></li>
                         <li><a href="#contact">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                         
                         <li>
                              @if (Route::has('login'))
                              
                             @auth
                                 <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Tableau du board</a>
                             @else
                              <li class="section-btn"> <a href="{{ route('login') }}" >Connecter</a></li>  
         
                                 @if (Route::has('register'))
                                <li class="section-btn">   <a href="{{ route('register') }}" >S'inscrire</a> </li>  
                                 @endif
                             @endauth
                         
                            @endif
                    </li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1>notre mission est de vous aider à gérer vos projets</h1>
                              <a href="{{route('register')}}" class="btn section-btn smoothScroll">Restez organisés</a>
                               
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="home-video" >
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe src="https://www.youtube.com/embed/AqcjdkPMPJA" frameborder="0" allowfullscreen></iframe>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- A PROPOS DE NOUS -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-6 col-xd-12">
                         <div class="about-info">
                              <div class="section-title">
                                   <h2>Laissez-nous vous présenter</h2>
                                   <span class="line-bar">...</span>
                              </div>
                              <p>Gérer des projets en ligne, c’est possible. Unipro est une plateforme de gestion de projet en ligne gratuite. Créez et gérez autant de projets que vous le souhaitez sur Unipro. Profitez des nombreuses fonctionnalités pour optimiser votre gestion : diagrammes de Gantt, gestion des tâches, rappels, outils de collaboration et bien plus encore.</p>
                              
                         </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-xd-12">
                         <img class="ui fluid image img_logo" src="assets/images/full_logo.png">

                    <div class="col-md-4 col-sm-12">
                         <div class="about-image">
                              <img src="images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- SERVICES -->
     <section id="services" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Services</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <h2 class="ui center aligned icon header">
                              <i class="tasks icon"></i>
                              Tâches et gestion de projet
                            </h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis delectus
                              numquam voluptas possimus minima in,
                              facere doloribus asperiores. Incidunt aut tempora et mollitia
                               ducimus ipsam quos sunt voluptates debitis accusamus.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <h2 class="ui center aligned icon header">
                              <i class="calendar alternate icon"></i>
                              Gestion du temps
                            </h2>
                            <p>Le temps passé sur chaque tâche du projet peut être suivi et les tâches
                                  sont intégrées au calendrier du groupe. 
                                 Vous pouvez également gérer les heures de travail de vos employés.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <h2 class="ui center aligned icon header">
                              <i class="chart bar icon"></i>
                              Diagramme de Gantt
                         </h2>
                         <p>Le diagramme de Gantt, couramment utilisé en gestion de projet, est l'un des outils
                               les plus efficaces pour représenter visuellement 
                              l'état d'avancement des différentes activités (tâches) qui constituent un projet</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <h2 class="ui center aligned icon header">
                              <i class="clipboard list icon"></i>
                              Gestion des ressources
                            </h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis delectus
                              numquam voluptas possimus minima in,
                              facere doloribus asperiores. Incidunt aut tempora et mollitia
                               ducimus ipsam quos sunt voluptates debitis accusamus.</p>
                    </div>
               </div>     
          </div>
     </section>


     <!-- NOTRE CILENTS -->
     <section id="clients" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Notre clients</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <img class="ui centered medium circular image" src="assets/images/about-image.jpg">
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                               Optio, voluptatibus. At quod magnam accusantium beatae architecto, 
                               magni, repellat harum aperiam dolore natus,
                               quis minima laborum asperiores distinctio deleniti ratione eum.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <img class="ui centered medium circular image" src="assets/images/about-image.jpg">
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                               Optio, voluptatibus. At quod magnam accusantium beatae architecto, 
                               magni, repellat harum aperiam dolore natus,
                               quis minima laborum asperiores distinctio deleniti ratione eum.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <img class="ui centered medium circular image" src="assets/images/about-image.jpg">
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                               Optio, voluptatibus. At quod magnam accusantium beatae architecto, 
                               magni, repellat harum aperiam dolore natus,
                               quis minima laborum asperiores distinctio deleniti ratione eum.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <img class="ui centered medium circular image" src="assets/images/about-image.jpg">
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                               Optio, voluptatibus. At quod magnam accusantium beatae architecto, 
                               magni, repellat harum aperiam dolore natus,
                               quis minima laborum asperiores distinctio deleniti ratione eum.</p>
                    </div>
                   
               </div>
          </div>
     </section>

     <!-- CONTACTS -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Contact</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>
                   

                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form id="contact-form" role="form" action="#" method="post">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" placeholder="Nom complet" id="cf-name" name="cf-name" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" placeholder="Email" id="cf-email" name="cf-email" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="tel" class="form-control" placeholder="Téléphone" id="cf-number" name="cf-number" required="">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" placeholder="Objet" id="cf-objet" name="cf-number" required="">
                              </div>

                             

                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="6" placeholder="Message" id="cf-message" name="cf-message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="submit" value="Send Message">
                              </div>

                         </form>
                    </div>
                           
                    <div class="col-md-4 col-sm-4">
                         <div class="about_information">
                                
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-12">
                         <div class="footer-thumb footer-info"> 
                              <h2>Unipro</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Company</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Acceuil</a></li>
                                   <li><a href="#">à propos de nous</a></li>
                                   <li><a href="#">Services</a></li>
                                   <li><a href="#">Notre clients</a></li>
                                   <li><a href="#">Contact</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Services</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Tâches et gestion de projet</a></li>
                                   <li><a href="#">Gestion du temps</a></li>
                                   <li><a href="#">Diagramme de Gantt</a></li>
                                   <li><a href="#">Gestion des ressources</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Find us</h2>
                              <p>Unipro@gmail.com, <br> 515 W. 8th Lane
                                   Neptune, NJ 07753</p>
                         </div>
                    </div>                    

                    <div class="col-md-12 col-sm-12">
                         <div class="footer-bottom">
                              <div class="col-md-6 col-sm-5">
                                   <div class="copyright-text"> 
                                        <p>Copyright &copy; {{ date('Y') }} Unipro</p>
                                   </div>
                              </div>
                              <div class="col-md-6 col-sm-7">
                                   <div class="phone-contact"> 
                                        <p>Appelez-nous <span>06XXXXXXXX</span></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     
  

     <!-- SCRIPTS -->
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/custom.js"></script>
     <script src="assets/js/jquery.magnific-popup.min.js"></script>
     <script src="assets/js/smoothscroll.js"></script>
     <script src="assets/js/jquery.stellar.min.js"></script>
     <script src="assets/semantic_ui/semantic.min.js"></script>
     <script src="assets/js/form_validation.js"></script>

</body>
</html>