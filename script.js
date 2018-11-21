// the Query code is wrapped in one big function
// so that the scripts get loaded after the page finihes loading

$(document).ready(function() {

  // hanburger menu
  $(function() {
    $(".menuToggle").click(function() {
      if ($("#navigation").hasClass("hidden")) {
        $("#navigation").attr("class", "visible animated slideInRight");
      } else {
        $("#navigation").attr("class", "hidden animated slideOutRight");
      }
      $(this).toggleClass("open");
    });
  
    $("#navigation").click(function() {
      if ($("#navigation").hasClass("visible")) {
        $(".menuToggle").toggleClass("open");
      } else {
      }
      $(this).attr("class", "slideOutRight hidden");
    });
  
  });
  
  
  
  
  // cards on services page
  // $('.card').click(function(){
  //   $(this).toggleClass('flipped');
  // });

  // $( "#clickme" ).click(function() {
  //   $( "#book" ).animate({
  //     opacity: 0.25,
  //     left: "+=50",
  //     height: "toggle"
  //   }, 5000, function() {
  //     // Animation complete.
  //   });
  // });






 

    $(".home").click(function () {

        about.animate({
            'min-height': '0',
            'height': '0',
            'top': '50vh',
            'padding': '0'
        }, 300)
        // .animate({
        //     'width': '2px',
        //     'left': '50%'
        // }, 900)
        // .fadeOut(200, function () {
        //     front.fadeIn(200)
        //     .animate({
        //         'width': '100%',
        //         'left': '0'
        //     }, 900)
        //     .animate({
        //         'height': '100vh',
        //         'top': '0',
        //         'padding-top': '100px',
        //         'padding-bottom': '100px'
        //     }, 300);
        // });
    });
});
  





















  //Real-time Validation
  //Name can't be blank
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
  $('#contact_subject').on('input', function() {
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
  $("#contact_submit button").click(function(event){
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
    else{
      alert('No errors: Form will be submitted');
    }
  });
    
    
    
  
});
