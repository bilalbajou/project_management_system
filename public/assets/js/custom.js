(function ($) {

  "use strict";

    // PRE LOADER
    // $(window).load(function(){
    //   $('.preloader').fadeOut(1000); // set duration in brackets    
    // });
    

    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });

    $(window).scroll(function() {
      if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
          } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
          }
    });
    
              // Smooth Scroll
    $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {
    
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
    
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
    

})(jQuery);

         // Vérification contact form

       
$(document).ready(function(){
  $("#btn_ajout").click(function(){
     $('form')
    .form({
      on: 'blur',
      fields: {
        Nom: {
          identifier  : 'Nom',
          rules: [
            {
              type   : 'empty',
              prompt : 'Veuillez saisir votre nom'
            }
          ],
        },
        Email: {
          identifier  : 'Email',
          rules: [
            {
              type   : 'empty',
              prompt : 'Veuillez saisir votre email'
            },
            {
              type : 'email',
              prompt : 'Adresse E-mail non valide'
            }
          ]
        },
        Numéro: {
          identifier  : 'Numéro',
          rules: [
            {
              type   : 'number',
              prompt : 'Le champs numéro n\'accepte que les digits'
            }
          ]
        },
        objet:{
            identifier : 'objet',
            rules : [
                 {
                   type : 'empty',
                   prompt : 'Veuillez mentionner objet de votre message'
                 }
            ]
        },
        message:{
             identifier : 'message',
             rules : [
                 {
                   type : 'empty',
                   prompt : 'Veuillez saisir votre message'
                 },
                 {
                   type : 'maxCount[255]',
                   prompt : 'Ne doit dépasse 255 caractère'
                 }
             ]
        }
      }
    })
  ;
  });
});