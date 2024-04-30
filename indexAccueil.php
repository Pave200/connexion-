<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Enterprise</title>

    <!-- Fichiers CSS -->
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="style.css" /> 
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css”> <!-- Librairie utile pour afficher les icônes de réseaux sociaux-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<body>
<header>
   <!-- Début du Bloc de configuration de la page d'accueil avec animation vidéo-->
   <div class="overlay"></div>
   <video autoplay muted loop>
    <source src="ressources/Barcode - 32643.mp4" type="video/mp4"> </video>


 <!-- Debut creation de la NavBar (barre de navigation)-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><strong>Enterprise</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">A propos</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#services">Nos Services</a>
              </li> 
             
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contacts</a>
              </li>        
              <li class="nav-item">
                <a class="nav-link" href="connexion.php">Se connecter</a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>
       <!-- Fin creation de la NavBar (barre de navigation)-->  
         
        <!-- Debut Configuration du fond d'écran Caroussel-->   
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="ressources/main.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Intelligence Artificielle</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              
            </div>
          </div>
          <div class="carousel-item">
            <img src="ressources/internet-gd0477ba56_1920.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Développement web et mobile</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                            
            </div> 
          </div>
          <div class="carousel-item">
            <img src="ressources/cadenas.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Cybersécurité</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                             
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivant</span>
        </button>
      </div>
      <!-- Fin Configuration du fond d'écran Caroussel--> 

      <!-- Configuration des sections -->
            <!-- Section A propos -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="ressources/entrepreneur-1340649_1280.jpg" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>Nous sommes une entreprise de prestation de services informatiques qui se veut la meilleure<br/>  au Cameroun</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio est non earum?</p>
                            <a href="#" class="btn btn-warning">En savoir plus</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Fin Section A propos -->
      <!-- Section Services -->
      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Nos Services</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop"></i>
                            <h3 class="card-title">Intelligence artificielle</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">En savoir plus</button>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-journal"></i>
                              <h3 class="card-title">Développement web</h3>
                              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                              <button class="btn bg-warning text-dark">En savoir plus</button>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-intersect"></i>
                              <h3 class="card-title">Cybersécurité</h3>
                              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                              <button class="btn bg-warning text-dark">En savoir plus</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Fin session Services -->

      
      <!-- Debut 'NOUS CONTACTER' -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Nous contacter</h2>


    <!--Début Configuration du formulaire de soumission d'une demande de service--->
    </section>
      <div class="pimg1">
        
            <!--Nous allons appliquer un style propre à notre formulaire et nous allons le reproduire dans le fichier CSS
              pour que le style puisse être appliqué--->
            <style>
              @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
          *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              
          }
          .contact-wrapper{
              display: flex;
              justify-content: flex-start;
              align-items: center;
              flex-direction: column;
              width: 100%;
              min-height: 100vh;
          }
          .heading{
              padding: 30px 0px;
              font-size: 35px;
          }
          .contact-box{
              display: flex;
              width: 90%;
              min-height: 80vh;
              background-color: rgb(238, 238, 238);
              padding: 20px;
              box-shadow: 15px 15px 15px rgb(211, 208, 208);
              border-radius: 10px;
          }
          .left-contact{
              background-color: #373c56;
              flex: 1;
              position: relative;
              overflow: hidden;
              color: white;
              padding: 50px;
              border-radius: 10px;
          }
         
          
          .right-contact,.form-container{
              flex: 2;
              display: flex;
              justify-content: center;
              align-items: center;
          }
          .input{
              display: flex;
              justify-content: center;
              align-items: flex-start;
              flex-direction: column;
          }
          form{
              display: flex;
              justify-content: center;
              align-items: flex-start;
              flex-direction: column;
              margin: 20px;
          }
          input,textarea{
              width: 450px;
              border: none;
              border-bottom: 2px solid transparent;
              background-color: rgb(190, 187, 187);
              padding: 10px;
              border-radius: 5px;
              font-size: 20px;
              margin: 10px;
          }
          label{
              font-size: 22px;
              padding: 10px 0px;
          }
          select{
              width: 450px;
              border-radius: 5px;
              padding: 10px;
              background-color: rgb(190, 187, 187);
              border: 2px solid transparent;
              font-size: 18px;
              margin: 10px;
          
           }
          button{
              padding: 15px 40px;
              border: none;
              background-color:  #eb77c4;
              font-size: 20px;
              margin: 30px 10px;
              border-radius: 5px;
              color: white;
              transition: .5s all ease-in-out;
              border: 2px solid transparent;
          }
          button:hover{
              background-color: transparent;
              border: 2px solid #eb77c4;
              color: black
              ;
          }
          .social-icons{
              display: flex;
              justify-content: center;
              align-items: flex-start;
              flex-direction: column;
          }
          .lab{
              padding: 20px 100px;
              font-size: 50px;
              color: rebeccapurple;
          }
          
          
          @media screen and (max-width:1350px ) {
              .lab{
                  padding: 20px 20px;
              }
          }
          @media screen and (max-width:1200px ) {
             .contact-box{
                 width: 95%;
             }
          }
          @media screen and (max-width:1100px ) {
             
              input,textarea{
                  width: 350px;
              }
          }
          @media screen and (max-width:950px ) {
              .contact-box{
                  flex-direction: column;
              } 
          }
          @media screen and (max-width:520px ) {
              .form-container{
                  flex-direction: column;
              }  
          }
          @media screen and (max-width:420px ) {
              input,textarea{
                  width: 300px;
              } 
          } /*----Fin Application du style-----*/
        
          </style>   <!-- configuration du formulaire proprement dit-->
              <section class="contact-wrapper">
                  <div class="heading">
                      <h3>Besoin d'un service ? Veuillez remplir le formulaire ci-dessous  </h3>
                  </div>
                  <div class="contact-box">
                      <div class="left-contact">
                      PDG  Enterprise
                        <img src="ressources/copie1.jpg" alt="PDG Enterprise">  
          
                      </div>
                      <div class="right-contact">
                         <div class="form-container">
                             <form method="post" action="action.php">
                                 <h3><strong> ENTERPRISE </strong></h3>
                              <input type="text" name="nom_prenom" placeholder="Nom / Prénom" >
                                 
                                 <input type="email" name="email" placeholder="Email">
                                 
                                 <input type="tel" name="telephone" placeholder="Numéro de téléphone">
                  
                                 <textarea type="text" name="details" placeholder="Bien vouloir détailler au maximum votre Besoin afin de pouvoir mieux vous aider"
                                   id="" cols="30" rows=""></textarea>

                                 <button type="submit" name="Envoyer">Envoyer</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </section>
              <p><h5>Enterprise</h5>
              <h6>Tous droits réservés </h6></p>

        <section class="premier">
            <h2>Nous contacter sur les différents sites que nous vous proposons ci-dessous</h2>
        </section>

                <footer>
                <li><a href="https://www.facebook.com">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg>
</a></li>

<li><a href="https://www.whatsapp.com">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg>
</a></li>
<li><a href="mailto:contact@email.com">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
</svg>
</a></li>
<li><a href="https://www.instagram.com">
 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg>
</a></li>
<li><a href="https://www.twitter.com">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
</svg>
</a></li>
 
                </footer>
<!-- application d'un style a notre section et a notre footer -->
<style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
section{
    padding:40px;
}
h2{
    font-family: 'Times New Roman', Times, serif;
    font-size: 40px;
    color: black;
    text-align: center;
}

footer li{
    display:inline-table ;
    list-style-type: none;
    align-items: center;
}
svg{
    margin-right: 30px;
    padding: 2px;
   
}

</style>

  <!--Fin configuration du formulaire de soumission d'une demande de service-->
      </div>
     
      <!-- Fin 'NOUS CONTACTER' -->
      </header>
      

    <!-- Liens Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>  <!-- intégration de la bibliothèque JavaScript GSAP (utilisée pour les animations) -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>