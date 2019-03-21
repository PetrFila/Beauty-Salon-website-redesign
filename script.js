// The validation form had to be separated and placed first otherwise to code didn't work properly

// Real-time Validation
$(document).ready(function() {
  
    // Name can't be blank
    $('#contact_name').on('input', function() {
      var input=$(this);
      var is_name=input.val();
      if(is_name){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}
    });
    
    // Email must be an email
    $('#contact_email').on('input', function() {
      var input=$(this);
      var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      var is_email=re.test(input.val());
      if(is_email){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}
    });
    
    // Subject can't be blank
    $("#contact_subject").on("input", function() {
      var input=$(this);
      var subject=$(this).val();
      console.log(subject);
      if(subject){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}	
    });
    
    // Message can't be blank
    $('#contact_message').keyup(function(event) {
      var input=$(this);
      var message=$(this).val();
      console.log(message);
      if(message){input.removeClass("invalid").addClass("valid");}
      else{input.removeClass("valid").addClass("invalid");}	
    });

  // After Form Submitted Validation
  $(".submit_button").click(function(event){
    var form_data=$("#contact").serializeArray();
    var error_free=true;
    for (var input in form_data){
      var element=$("#contact_"+form_data[input]['name']);
      var valid=element.hasClass("valid");
      var error_element=$("span", element.parent());
      if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
      else{error_element.removeClass("error_show").addClass("error");}
    }
    if (!error_free){
      event.preventDefault(); 
    }
   
  });

  $(".success").fadeOut(8000);
  $(".failure").fadeOut(6000);
  
});



// Hanburger Menu
$(document).ready(function() {

  $(function() {
    $(".menuToggle").click(function() {
      if ($("#mobile_navigation_index, #mobile_navigation_about, #mobile_navigation_services, #mobile_navigation_contact").hasClass("hidden")) {
        $("#mobile_navigation_index, #mobile_navigation_about, #mobile_navigation_services, #mobile_navigation_contact").attr("class", "visible animated slideToggle");
      } else {
        $("#mobile_navigation_index, #mobile_navigation_about, #mobile_navigation_services, #mobile_navigation_contact").attr("class", "hidden animated slideToggle");
      }
      $(this).toggleClass("open");
    });
  
    $("#mobile_navigation").click(function() {
      if ($("#mobile_navigation_index, #mobile_navigation_about, #mobile_navigation_services, #mobile_navigation_contact").hasClass("visible")) {
        $(".menuToggle").toggleClass("open");
      } else {
      }
      $(this).attr("class", "slideToggle hidden");
    });
  
  });
  
});