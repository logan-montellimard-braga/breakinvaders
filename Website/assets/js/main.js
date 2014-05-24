$(document).ready(function ($) {
  var links = $('.navbar').find('a');

  $('.tooltip-js').tooltip();
  $("[data-toggle=popover]").popover({
    html: true,
    content: function() {
      return $('#popoverContentContribute').html();
    },
    title: function() {
      return $('#popoverTitleContribute').html();
    }
  });

  // Preloader
  $('#loader').css({'visibility' : 'visible'});
  $('#preloader').css({'visibility' : 'visible'});
  $('body').css({'overflow' : 'hidden'});
  $(window).load(function() {
    $('#loader').fadeOut("swing");
    $('#preloader').delay(300).fadeOut('slow');
    $('body').delay(300).css({'overflow':'visible'});
  });

  // JS Warning
  $('.js-warning').css({'visibility' : 'hidden', 'display' :'none'});

  // Navbar smooth scroll
  links.click(function (e) {
    e.preventDefault();
    var target = $(this).attr('href');
    $('html, body').animate({ scrollTop: $(target).offset().top + 5}, 1200, 'easeInOutQuart');
  });
  $('.goto').click(function (e) {
    e.preventDefault();
    var target = $(this).attr('href');
    $('html, body').animate({ scrollTop: $(target).offset().top + 5}, 1200, 'easeInOutQuart');
  });

  // Form validation
  var validator = $("#contactForm").validate({

    errorElement: "label",
    wrapper: "td",
    errorPlacement: function(error, element) {
      error.insertBefore( element.parent().parent());
      error.wrap("<tr class='formError'></tr>");
      $("<td></td>").insertBefore(error);
    },

    rules: {
      message :{
        required : true,
        minlength : 10,
        maxlength : 600
      },
      email : {
        email : true,
        maxlength : 255
      },
      name : {
        required : true,
        maxlength : 50,
        minlength : 2
      }},

    messages: {
      name: {
        required: "Veuillez saisir votre nom",
        minlength: jQuery.format("Votre nom doit faire au moins {0} carac&egrave;res"),
        maxlength: jQuery.format("Votre nom doit faire moins de {0} caract&egrave;res")
      },
      email: {
        required: "Veuillez saisir votre adresse mail",
        email: "Veuillez saisir une adresse mail valide",
        maxlength : jQuery.format("Votre adresse mail doit faire moins de {0} caract&egrave;res")
      },
      message: {
        required: "Veuillez saisir votre message",
        minlength: jQuery.format("Votre message doit faire au moins {0} caract&egrave;res"),
        maxlength: jQuery.format("Votre message doit faire moins de {0} caract&egrave;res")
      }
    },
  });

  $('#formReset').click(function() {
    validator.resetForm();
  });

  jQuery.validator.prototype.hideErrors = function() {
    this.addWrapper( this.toHide  ).slideUp(600);
  }
});
