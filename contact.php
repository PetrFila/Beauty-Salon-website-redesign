<?php include('mailer.php'); ?>

<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beauty Salon</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!--  -->
</head>
<body>
 
    <div class="grid-container">
            <header class="header">
                <img class="logo" src="https://mu8mjq.dm.files.1drv.com/y4m5r-mTMXFaQkbQ4CBGlPU8YyJE-rWmn1L6XM-CDNBKs1fM4KsBKpLllcGyV-egnXS19kpvpmdtG2EOUV04ebgsgBiBw_OvqIlfhVTBOQW8-OEb7gIXnLcYHwGgi2T0X5cNXS5YgXyh6LI0rX6qHaMllm69VLz2k6ro0xv59dm62qOQgAqZzGTmqkClr3kp4OGr299xPGLm9vA_NyU-IVhNw?width=373&height=373&cropmode=none" /> 
               
                <div class="nav_container"> 
                    <nav role="navigation">
                        <div class="full_menu">
                            <ul id="menu">
                                <a class="nav_menu" href="index.html"><li>Domů</li></a>
                                <a class="nav_menu" href="about.html"><li>O mně</li></a>
                                <a class="nav_menu" href="services.html"><li>Služby</li></a>
                                <a class="nav_menu" href="contact.php"><li>Kontakt</li></a>
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

                        <div id="mobile_navigation" class="hidden">
                            <div class="nav">
                                <ul>
                                    <a class="nav_menu" href="index.html"><li>Domů</li></a>
                                    <a class="nav_menu" href="about.html"><li>O mně</li></a>
                                    <a class="nav_menu" href="services.html"><li>Služby</li></a>
                                    <a class="nav_menu" href="contact.php"><li>Kontakt</li></a>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>

        <div class="body-contact">
            <div class="contact-grid">
            
                <div class="contact_details">
                    <ul class="address">
                        <li>Company name</li>
                        <li>Street</li>
                        <li>City</li>
                    </ul>
                               
                    <iframe class="google_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.646861732663!2d12.357460715850658!3d50.07417482228632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a0f69100d394ad%3A0x7b0614dffcd9779d!2sAmerick%C3%A1+132%2F22%2C+350+02+Cheb%2C+Czechia!5e0!3m2!1sen!2sau!4v1529198545950" width=150% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                </div>    
            
                <div class="contact_form">
              
                    <form id="contact" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
                        <!-- Name -->
                        <div>
                            <label for="contact_name"></label>
                            <input type="text" id="contact_name" name="name" placeholder="Vaše celé jméno" value="<?= post('name'); ?>"></input>
                            <span class="error">Jméno musí být vyplněné</span>
                            <span class="PHPerror"><?= showError('name_error', $errors); ?></span>
                        </div>
                        <!-- Email -->
                        <div>
                            <label for="contact_email"></label>
                            <input type="email" id="contact_email" name="email" placeholder="Váš email" value="<?= post('email'); ?>"></input>
                            <span class="error">Zadaná adresa není platná</span>
                            <span class="PHPerror"><?= showError('email_error', $errors); ?></span>				
                        </div>						
                        <!--Subject -->
                        <div>
                            <label for="contact_subject"></label>
                            <input type="text" id="contact_subject" name="subject" placeholder="Předmět" value="<?= post('subject'); ?>"></input>
                            <span class="error">Předmět musí být vyplněný</span>
                            <span class="PHPerror"><?= showError('subject_error', $errors); ?></span>								
                        </div>						
                        <!-- Message -->
                        <div>
                            <label for="contact_message"></label>
                            <textarea id="contact_message" name="message" placeholder="Váše zpráva ..."><?= post('message'); ?></textarea>
                            <span class="error">Toto pole je povinné</span>
                            <span class="PHPerror"><?= showError('message_error', $errors); ?></span>												
                        </div>					
                        <!-- Submit Button -->
                        <div class="submit_button">				
                            <button type="submit">Odeslat</button>
                        </div>
                    </form>
                </div>


               

            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
   
     <!-- script source -->
     <script type="text/javascript" src = "script.js"></script> 

       
  
</body>
</html>