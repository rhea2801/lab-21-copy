// Using jQuery because I'm lazy
var lights = {
  
    // Set up event listeners for keyboard keys
    init: function(){
      // Every time a key is pressed...
      $(document).keypress(function(e){
        // ... get its value
        // and find the matching DOM element, if any...
        var ch = String.fromCharCode(e.charCode),
            el = $('#item--'+ch);
        // ... then send it to the 'blink' function
        lights.blink(el);
        // If user hits enter, flash everything randomly
        // Kinda crappy effect, I know
        if (e.which === 13) {
          lights.random();
        }
      });
      
      // Lights also respond to being clicked
      $('.item').on('click',function(e){
        lights.blink($(this));
      });
    },
    
    // Turn a single bulb on and off
    blink: function(el){
      var bulb = el.find('.bulb');
      bulb.addClass('lit');
      setTimeout(function(){
        bulb.removeClass('lit');
      },600);
    },
    
    // Flash lights randomly
    random: function(){
      (function(count){
        if (count < 36) {
          var caller = arguments.callee;
          window.setTimeout(function() {
            var rand = Math.floor(Math.random() * 26) + 1;
            var el = $('.item').eq(rand);
            var el2 = $('.item').eq(rand*2);
            lights.blink(el);
            lights.blink(el2);
            $('html').toggleClass('flicker');
            caller(count + 1);
          }, Math.floor(Math.random() * 100));
        }
      })(0)
    }
  }
  
  $(function(){
    lights.init();
  })