<?php include('mailer.php'); ?>

<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beauty Office</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
 
<div class="container">
   
    <div class="logo_div">
        <img class="logo" src="https://res.cloudinary.com/profile-avatar/image/upload/v1552560362/Beauty_Salon/Beauty_salon_logo.jpg" /> 
    </div> 

    <div class="nav_container"> 
          
          <div class="navbar-container">
              <ul class="full_menu">
                  <li class="nav-link">
                      <a href="index.html">Domů
                      </a>
                      <div class="underline"></div>
                  </li>
                  <li class="nav-link">
                      <a href="about.html">O mně</a>
                      <div class="underline"></div>
                  </li>
                  <li class="nav-link">
                      <a href="services.html">Služby</a>
                      <div class="underline"></div>
                  </li>
                  <li class="nav-link active-link">
                      <a href="contact.php">Kontakt</a>
                      <div class="underline"></div>
                  </li>
              </ul>
          </div>


          
          <div class="menuToggle">
                                      
              <!--
              The spans to act as a hamburger menu.
              -->
              <span></span>
              <span></span>
              <span></span>
          
          </div>

          <div id="mobile_navigation_contact" class="hidden">
           
                <div class="navbar-container-mobile">
                    <ul class = "mobile_menu">
                        <li class="nav-link">
                            <a href="index.html">Domů
                            </a>
                            <div class="underline"></div>
                        </li>
                        <li class="nav-link">
                            <a href="about.html">O mně</a>
                            <div class="underline"></div>
                        </li>
                        <li class="nav-link">
                            <a href="services.html">Služby</a>
                            <div class="underline"></div>
                        </li>
                        <li class="nav-link active-link">
                            <a href="contact.php">Kontakt</a>
                            <div class="underline"></div>
                        </li>
                    </ul>
                </div>
          </div>
          
      </div>
    
    <div class="address_frame">
    
        <ul class="address">
            <li>Americká 132/22</li>
            <li>350 02 Cheb</li>
            <li>+420 774 102 836</li>
        </ul>
        
    </div>

    <div class="mailerMessages">
        <div class="messagePossition">
            <?= $success; ?>
            <?= $failure; ?>
        </div>   
    </div>
    
    <div class="contact_details">

        <iframe class="google_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.646861732663!2d12.357460715850658!3d50.07417482228632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a0f69100d394ad%3A0x7b0614dffcd9779d!2sAmerick%C3%A1+132%2F22%2C+350+02+Cheb%2C+Czechia!5e0!3m2!1sen!2sau!4v1529198545950" width=150% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    </div>    
    
    <div class="contact_form">
        
        <form id="contact" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
            <!-- Name -->
            <div>
                <label for="contact_name"></label>
                <input type="text" id="contact_name" name="name" placeholder="Vaše celé jméno" value="<?= post('name'); ?>">
                <span class="error">Jméno musí být vyplněné</span>
                <span class="PHPerror"><?= showError('name_error', $errors); ?></span>
            </div>
            <!-- Email -->
            <div>
                <label for="contact_email"></label>
                <input type="email" id="contact_email" name="email" placeholder="Váš email" value="<?= post('email'); ?>">
                <span class="error">Zadaná adresa není platná</span>
                <span class="PHPerror"><?= showError('email_error', $errors); ?></span>             
            </div>                      
            <!--Subject -->
            <div>
                <label for="contact_subject"></label>
                <input type="text" id="contact_subject" name="subject" placeholder="Předmět" value="<?= post('subject'); ?>">
                <span class="error">Předmět musí být vyplněný</span>
                <span class="PHPerror"><?= showError('subject_error', $errors); ?></span>                               
            </div>                      
            <!-- Message -->
            <div>
                <label for="contact_message"></label>
                <textarea id="contact_message" name="message" placeholder="Vaše zpráva ..."><?= post('message'); ?></textarea>
                <span class="error">Toto pole je povinné</span>
                <span class="PHPerror"><?= showError('message_error', $errors); ?></span>                                               
            </div>                  
            <!-- Submit Button -->
            <button class="submit_button" type="submit">Odeslat</button>
         
        </form>
    </div>


</div>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
   
     <!-- script source -->
     <script type="text/javascript" src = "script.js"></script> 

       
  
</body>
</html>