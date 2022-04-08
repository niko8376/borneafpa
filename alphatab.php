<?php
     session_start();
?><!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <meta name=”viewport” content=”width-device-width, initial-scale=1”>

    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
       

 </head>
 <body>
 <header>
 <div class="navbar navbar-fixed-top navbar-custom ">
  <div class="container" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="navbar-logo"></span></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"></a></li>
        <li><a href="#contact">Formulaire</a></li>
        <li><a href="#about">Menu</a></li>
      
             </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><img src="imagesafpa/AFPA 3.jpg" class="img-responsive"></a></li> 
      
    </div>
  
    
    
    <div class="texte">
        <H1>Afpa</H1>
        <H1>Centre Afpa de Nice</H1></div>
        
       
  </div>
</div>
</header>
        <div class="bienvenue">
            <h1>Bienvenue</h1>
            <h1>Au centre Afpa de Nice</h1>
            <h1>Activités</h1>
            <H2>Dans nos activités nous conseillons sur l'orientation tout en valorisant votre capital compétences et optimiser vos ressources humaines.
                Professionnaliser vos acteurs et accompagner l'évolution de vos organisations et anticiper les mutations industrielles.
            </H2>
        </div>
        
    

        <div class="starter-template">

        <?php if(array_key_exists('errors', $_SESSION)): ?>
            <div class="alert alert-danger">
                <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
        <?php endif; ?>
        <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="alert alert-success">
                Votre email a bien été envoyé
            </div>
        <?php endif; ?> 
        <section id="contact">
			
			<div class="contact-section">
			<div class="container">
				<form>
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Nom*</label>
					    	<input type="text" class="form-control" id="name">
				  		</div>
    
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email*</label>
					    	<input type="email" class="form-control" id="exampleInputEmail">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Téléphone/Fax</label>
					    	<input type="tel" class="form-control" id="telephone">
			  			</div>
                          
                          <h1>Déposer une demande d'information</h1>
                          <h2>Cliquez ici</h2>
                          <input type="checkbox" name="données" id="données"/> <label for="données">*Par la présente j'accepte que les données que j'ai saisies dans le formuaire de contact soient stockées électroniquement, traitées et utilisées dans le but d'établir le contact. Je sais que je peux révoquer mon consentement à tout moment.</label> <br />
                          <h3 style="color: red;">Veuillez noter que le contenu de ce formulaire n'est pas crypté</h3>
                          <h3 style="color: red;">Remarque: les champs suivi d'un astérisque * sont obligatoires</h3>
                          <div class="merci">
                    <h2>Nous vous remercions d'avoir rempli le formulaire, nous vous contacterons dans les plus brefs délais</h2>
                    </div>
			  		     </div>
                           

                           
                             <p>
                             <h2>Formation recherchée</h2>
                             <input type="checkbox" name="option1" id="option1"/> <label for="option1">Option1</label> <br />
                            <input type="checkbox" name="option2" id="option2"/> <label for="option2">Option2</label> <br />
                            <input type="checkbox" name="option3" id="option3"/> <label for="option3">Option3</label> <br />
                            <input type="checkbox" name="option4" id="option4"/> <label for="option1">Option4</label> <br />
                            <input type="checkbox" name="option5" id="option5"/> <label for="option2">Option5</label> <br />

                          
                             
                            </p>
                             </p>
			  		<div class="col-md-6">
                      <div class="form-group">
			  				<label for ="description">Autre demande</label>
			  			 	<textarea  class="form-control" id="autre-demande"></textarea>
			  			</div>

			  			<div>

			  				<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Envoyer le formulaire</button>
                        
			  			</div>
                    
			  			
					</div>
				</form>
			</div>
		</section>
		<style>

                    
                        
                    
                     .content-header{
                     font-family: 'Oleo Script', cursive;
                     color:black;
                      font-size: 100px;
                       }

                      .section-content{
                       text-align: center; 
                                 }
                       #contact{
    
                      
                      font-family: 'Teko', sans-serif;
                      padding-top: 60px;
                      width: 0;
                      width: 0;
                      height:0;
                      color: black; 
                      
                      }
                     .contact-section{
                      padding-top: 40px;
                      
                      ;
                      }
                     .contact-section .col-md-6{
                     width: 50%;
                     }

                     

                    .form-group{
                    margin-top: 10px;
                    
                    }
                    label{
                    font-size: 1.3em;
                    line-height: 1em;
                    font-weight: normal;
                    }
                    .form-control{
                     font-size: 1.3em;
                     color: black;
                    }
                    textarea.form-control {
                    height: 135px;
                     /* margin-top: px;*/
                    }

                     .submit{  
                     font-size: 1.1em;
                     float: right;
                     width: 150px;
                     background-color: transparent;
                     color:black;

                     }
                     body {
                    
                      width: 100%;
                      background-color: greenyellow;
                      background-repeat: no-repeat;
                     background-size: cover;
                     padding-top:75%;
                       margin-right: 60%;
                       margin-top: -20%;
                    
                       }
                       .navbar-fixed-top {
                           background-color: green ;
                           padding: -7%;
                        color:black;
                        font-family:'Teko', sans-serif;
                        text-align: center;
                        font-style: italic;
                        font-weight: bold;

                         }
                             .texte{
                        
                             margin-top: -10%;
                             padding: -20%;
                             
                
                         }
                        
                         
                         .menu{ 
                             margin-top: -15%;
                             padding: 10px;
                             margin-right: 90%;
                             font-size: 2em;
                             color:black
                           }
                           .bienvenue{
                            font-family:'Teko', sans-serif;
                               color: black ;
                             font-weight: bold;
                             font-style: italic;
                             text-align: center;
                             
                            }
                            .merci{
                                text-align: center;
                                color: black;
                                

                            }

                             * {
                               margin: 0;
                               padding: 0;
                               box-sizing: border-box;
                             }

                             #wrap {
                             margin: 5px auto;
                             }

                                 ul li {
                                  list-style: none;
                                  
                                 }

                                 footer {
                                  margin: 2em 0;
                                 background:green ;
                                 margin-top: 50%;
                                 margin-bottom: -10%;
}


.contacts {
    width: 100%;
    height: 100px; 
    display: flex;
    justify-content: center;
    overflow: hidden;
    color: white;
    font-weight: bold;
}

.contacts-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
    align-content: center;
    color:black;
    
}

.contacts-item img {
    float: left;
    margin-right: .5em;
    
    
}

.contacts-item, .lang {
    width: calc(100% / 2 - 20px);
    margin: 5px 0;
    
    
}

.mentions {
    margin: 3em 0;
    display: flex;
    justify-content: center;
    
}

.mentions ul li {
    display: inline-flex;
    
}

.mentions ul li a {
    display: block;
    margin: 0 2em;
    color: black;
    font-weight: bold;
}

.footer-end {
    display: flex;
    justify-content: space-evenly;
    color: black;
    font-weight: bold;
}

.footer-end ul  {
    display: flex;
}

.footer-end ul li a {
    margin: 0 .1em;
}

                          
                           
                           
  
                        
                         
                    </style>
                   
                    <!--footer-->
<
                    <footer class="footer">
                    <div class="contacts">
                <div class="contacts-content">
                    <div class="contacts-item">
                        <img src="imagesafpa/tel.jpg" height="30px" alt="foo">
                        Nous appeler<br>
                        <a href="#">04-93-27-63-00</a>
                    </div>
                    <div class="contacts-item">
                        <img src="imagesafpa/mail.png" height="30px" alt="foo">
                        E-mail: <br>
                        <a href="#">benoit.hezard@afpa.fr</a>
                    </div>
                    
                    
                </div> 
            </div>
            <div class="mentions">
                <ul>
                    <li>
                        <a href="#">Mentions légales / CNIL / RGPD / INPI</a>
                    </li>
                    <li>
                        <a href="#">Responsabilité / Clause / Règlement</a>
                    </li>
                   
                    <li>
                        <a href="#">Avertissement Copyright France</a>
                    </li>
                </ul>
            </div>
            <div class="footer-end">
                <div>
                    <p>
                        © 2022 Copyright Afpa
                    </p>
                </div>
               
            </div>
            
                        </div>
                        </footer>
    </div>
                        
                          
                        </div>
                    

                    
                     
    
                     </body>
                                 </html><?php
                          unset($_SESSION['inputs']);
                          unset($_SESSION['errors']);
                          unset($_SESSION['sucess']);
                       