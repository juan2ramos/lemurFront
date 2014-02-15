$(function() {

  var allPanels = $('.accordion > dd').hide();
    
  $('.accordion > dt > .expand').click(function() {
      $this = $(this);
      $target =  $this.parent().next();      
      
        
      if($this.hasClass('open')){        
          $this.removeClass('open');
          $this.css("backgroundImage", "url(images/more.png)");
          allPanels.removeClass('active').slideUp();
      }
      else{
        $this.addClass('open');  
        if(!$target.hasClass('active')){
           allPanels.removeClass('active').slideUp();
           $target.addClass('active').slideDown();

           $('.expand').css("backgroundImage", "url(images/more.png)");
           $this.css("backgroundImage", "url(images/menos.png)");
        }
      }
    return false;
  });
  $('.popup-link').click(function() {
    $this = $(this);
    $('.popUp-container').addClass('show');

    $('#close').click(function() {
      $('.popUp-container').removeClass('show');
      $('#ingresa-cuenta').addClass('hidden');
      $('#registra-cuenta').addClass('hidden');
    });

    if($this.is('#img-ingresar')){
      $('#ingresa-cuenta').removeClass('hidden');
      $('#popUp-contend').css("backgroundImage", "url(images/pattern.jpg)");
    }else{
      $('#registra-cuenta').removeClass('hidden');
      $('#popUp-contend').css("backgroundImage", "url(images/pattern1.jpg)");
    }


  });

});