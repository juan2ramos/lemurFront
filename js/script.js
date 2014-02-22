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

    $('.close').click(function() {
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
  $('#about').click(function() {
    $('.popUp-container').addClass('show');
    $('.popUp-container').addClass('about-contend');
    $('#contend-about').removeClass('hidden');
    $('.close').click(function() {
      $('#contend-about').addClass('hidden');
      $('.popUp-container').removeClass('show');
      $('.popUp-container').removeClass('about-contend');
    });
  });


  if ($('.slider').length > 0) {
      $('.slider').flexslider({
      animation: "slide",
      slideshow: true,
      prevText: "<",
      nextText: ">",
      smoothHeight: true


    });
  }
  $('#slide').flexslider({
      animation: "slide",
      slideshow: true,
      prevText: "<",
      nextText: ">"


    });
  $('#slide img').click(function() {
    $('.popUp-container-slide').addClass('opacity');
    $('#close').click(function() {
      $('.popUp-container-slide').removeClass('opacity');

    });

  });
  $('#archivo').change(function(){
    $('#url-archivo').val($(this).val());
  });

  var s = skrollr.init({
        render: function(data) {
            //Debugging - Log the current scroll position.
            //console.log(data.curTop);
        }
    });
  $(window).scroll(function(){
    console.log($(window).scrollTop())
  })
  $('.arrows').on('click',function (e) {
      e.preventDefault();
      var action = $( this ).attr( "id" );
      var scroll = $(window).scrollTop(),
          positionScroll = [0,1480,2060 ,3960,5390,8000,9120,11440,13810,15230,16000,17000,18100,20000,21898];
          
      for (var i = 0; i < positionScroll.length; i++) {

        if (scroll < positionScroll[i]) {
          console.log(action)
            if(action == 'up'){
              $("body").animate({scrollTop:positionScroll[i-1]}, '4000');
              
            }else{
              $("body").animate({scrollTop:positionScroll[i]}, '4000');
            }
            return false
        }else if(scroll == positionScroll[i]){
            if(action == 'up'){
              $("body").animate({scrollTop:positionScroll[i-1]}, '4000');
            }else{
              $("body").animate({scrollTop:positionScroll[i+1]}, '4000');
            }
            return false
        };
        
      };

  });

var counter = $('#change');

count(counter, 0, 850, 500);

function count(elem, startnum, endnum, time){

  var curnum = startnum;
  elem.text(curnum);

  var speed = time ;
  

  var timer = window.setInterval(function(){
    

    if(curnum < endnum){

   
      curnum = curnum+50;
      
      elem.text(curnum);
    }else{

      curnum = 50;
      
elem.text(curnum);
    }
    
  },speed);
  
}
});