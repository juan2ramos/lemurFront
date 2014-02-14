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

});