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
            <li><img class="address_pointer" src="/images/placeholder-filled-point.png" /></li>
            <li>Americká 000/00</li>
            <li>000 00 Cheb</li>
        </ul>


        <ul class="phone">
            <li><img class="phone_icon" src="/images/smartphone-call.png" /></li>
            <li>+000 000 000 000</li>
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
        
        <ul class="social_media">
            <li class="facebook_li">
                <a class="social_href" target="_blank" href="https://www.facebook.com/phbeautyoffice/">
                <svg class="facebook" width="50" height="50" viewBox="0 0 486.392 486.392" >
                        <path d="M243.196,0C108.891,0,0,108.891,0,243.196s108.891,243.196,243.196,243.196
				s243.196-108.891,243.196-243.196C486.392,108.861,377.501,0,243.196,0z M306.062,243.165l-39.854,0.03l-0.03,145.917h-54.689
				V243.196H175.01v-50.281l36.479-0.03l-0.061-29.609c0-41.039,11.126-65.997,59.431-65.997h40.249v50.311h-25.171
                c-18.817,0-19.729,7.022-19.729,20.124l-0.061,25.171h45.234L306.062,243.165z"/>                    
                    </svg>
                </a>
            </li>
        
            <li class="instagram_li">
                <a class="social_href" target="_blank" href="https://www.instagram.com/pavlina_heydukova/">
                <svg class="instagram" width="50" height="50" viewBox="0 0 512 512"  >
                    <path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0"/>
                    <path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"/><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"/></svg>
                </a>
            </li>
        </ul>

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