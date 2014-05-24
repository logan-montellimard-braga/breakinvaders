jQuery(document).ready(function ($) {
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

  // Stop verbosity
  $('textarea').stopVerbosity({
    limit: 300,
    indicatorPosition: 'after',
    indicatorId: 'stopVerbosity',
    indicatorElementType: 'p',
    indicatorPhrase: [
      '[countdown]',
      'caractères restants'
    ],
    indicatorUpdateSpeed: 0,
    existingIndicator: '',
    generateIndicator: true,
    showIndicator: false,
    useNativeMaxlength: true,
    textLengthChange: false,
    useMaxlength: true,
    beforeAttachment: null,
    afterAttachment: null,
    existingText: 'clear'
  });

});
