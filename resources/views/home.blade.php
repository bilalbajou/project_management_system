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
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">
     <Link rel="stylesheet" href="assets/semantic_ui/semantic.min.css">
     <link rel="icon" href="assets/images/home.png">
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
                                 <a href="{{ url('redirects') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Tableau du board</a>
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
                              <p>Gérer des projets en ligne, c’est possible. Unipro est une plateforme de gestion de projet en ligne gratuite. Créez et gérez autant de projets que vous le souhaitez sur Unipro. Profitez des nombreuses fonctionnalités pour optimiser votre gestion :  gestion des tâches, rappels, outils de collaboration et bien plus encore.</p>
                              
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
                              <i class="suitcase icon"></i>
                              Suivi du projet
                            </h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis delectus
                              numquam voluptas possimus minima in,
                              facere doloribus asperiores. Incidunt aut tempora et mollitia
                               ducimus ipsam quos sunt voluptates debitis accusamus.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <h2 class="ui center aligned icon header">
                              <i class="tasks icon"></i>
                              Gestion des tâches
                            </h2>
                            <p>Le temps passé sur chaque tâche du projet peut être suivi et les tâches
                                  sont intégrées au calendrier du groupe. 
                                 Vous pouvez également gérer les heures de travail de vos employés.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <h2 class="ui center aligned icon header">
                              <i class="calendar check outline icon"></i>
                              Gestion des réunions
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
                         <img class="ui centered medium circular image" src="assets/images/Coinbase New.png">
                         <p>On pense que se programme et trop efficace et utile pour 
                              tous projets avec une équipe de réalisation .</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <img class="ui centered medium circular image" src="assets/images/Loopring.png">
                         <p>Cette solution étais trop utile a notre chef de projet aussi que les employées</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <img class="ui centered medium circular image" src="assets/images/Webflow.png">
                         <p>
                              Les services fournit par ce site sont utiles et bien pratique,
                               nos employées trouvent le site facile à utiliser.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                         <img class="ui centered medium circular image" src="assets/images/TC TechCrunch.png">
                         <p>Ce site nous a aidée à accélérer le processus de réalisation de nos projets aussi qu'améliore 
                              le niveau de contact entre les Collaborateurs de l'équipe.</p>
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
                         <form class="ui form" id="contact-form" action="{{route('addMessage')}}" method="post">
                              @csrf
                              
                              <div class="col-md-6 col-sm-6">
                                   <input  class="form-control" placeholder="Nom complet" id="Nom" value="{{old('Nom')}}" name="Nom" >
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input  class="form-control" placeholder="Email" type="text" id="Email" value="{{old('Email')}}" name="Email" >
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input  class="form-control" type="text"  placeholder="Téléphone" id="Numéro" value="{{old('Numéro')}}" name="Numéro">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input  class="form-control" placeholder="Objet" id="objet" name="objet" value="{{old('objet')}}" >
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="6" placeholder="Message" id="message" value="{{old('message')}}" name="message"></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" id="btn_ajout" class="form-control" value="Envoyer">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <div class="ui error message"></div>
                              </div>
                         </form>
                    </div>

               </div>
               @if ($errors->any())
               <div class="ui error message">
                    <div class="header">Veuillez de vérifier votre informations</div>
                    @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
               </div>
               @endif  
               
          </div>
     </section>

       
     <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-12">
                         <div class="footer-thumb footer-info"> 
                              <h2>Unipro</h2>
                              <p>Unipro c'est la meilleure outil pour gérer vos projets, Unipro propose les outils nécessaires pour la gestion de vos projets</p>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Entreprise</h2>
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
                                   <li><a href="#">Suivi du projet</a></li>
                                   <li><a href="#">Gestion des tâches</a></li>
                                   <li><a href="#">Gestion des réunions</a></li>
                                   <li><a href="#">Gestion des ressources</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Trouvez-nous</h2>
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
     <script src="assets/semantic_ui/semantic.min.js"></script>
     

</body>
</html>