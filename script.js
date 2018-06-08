//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js

// https://api.jquery.com/toggleClass/
// $('.button').click(function(){
//     $(this).toggle('flipped');
//   });


  
// var coll = document.getElementsByClassName("collapsible");
// var i;

// for (i = 0; i < coll.length; i++) {
//   coll[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var content = this.nextElementSibling;
//     if (content.style.maxHeight){
//       content.style.maxHeight = null;
//     } else {
//       content.style.maxHeight = content.scrollHeight + "px";
//     } 
//   });
// }



var card = document.querySelector('.wedding_makeup');
card.addEventListener( 'click', function() {
  card.classList.toggle('flipped');
});

// $('.button').click(function(){
//   $('.wedding_makeup').toggleClass('flipped');
// });

// $(".flip_button").click(function () {
//   $flipper = $(".wedding_makeup");
  
//   if (!$flipper.hasClass("is-flipped") && !$flipper.hasClass("second-flip")) {
//       $flipper.addClass("flipped");
//   } else {
//       $flipper.toggleClass("is-flipped");
//       $flipper.toggleClass("second-flip");
//   }
// });