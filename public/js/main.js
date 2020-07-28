// =================================================================
// start animation when scroll down 
// =================================================================


 $( document ).ready(function() {
    new WOW().init();
  });

// =================================================================
// open dropdown menu when hover on link
// =================================================================

$(document).ready(function () {
    $("li.dropdown").hover(
        function () {
            $('div.dropdown-menu').slideDown('medium');
        },
        function () {
            $('div.dropdown-menu').slideUp('medium');
        }
    );

});



// =================================================================
// navbar change background when scroll down 
// =================================================================



$(document).ready(function(){
    $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
        $(".sticky-top").css("background-color", "#f8f8f8"); // if yes, then change the color of class "sticky-top" to white (#f8f8f8)
        } else {
        $(".sticky-top").css("background-color", "tranparent"); // if not, change it back to transparent
        }
    });
});



// =================================================================
// header typing text 
// =================================================================



$(function () {

    $("#typed").typed({
        // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
        stringsElement: $('#typed-strings'),
        typeSpeed: 30,
        backDelay: 700,
        loop: true,
        contentType: 'html', // or text
        // defaults to false for infinite loop
        loopCount: false,
        callback: function () { foo(); },
        resetCallback: function () { newTyped(); }
    });

    $(".reset").click(function () {
        $("#typed").typed('reset');
    });

});
function newTyped() { /* A new typed object */ }

function foo() { console.log("Callback"); }



// =================================================================
// animate-a-container1-on-mouse-over-using-perspective-and-transform
// =================================================================



(function() {
    // Init
    var container = document.getElementById("container"),
        inner = document.getElementById("inner");
  
    // Mouse
    var mouse = {
      _x: 0,
      _y: 0,
      x: 0,
      y: 0,
      updatePosition: function(event) {
        var e = event || window.event;
        this.x = e.clientX - this._x;
        this.y = (e.clientY - this._y) * -1;
      },
      setOrigin: function(e) {
        this._x = e.offsetLeft + Math.floor(e.offsetWidth / 1);
        this._y = e.offsetTop + Math.floor(e.offsetHeight / 1);
      },
      show: function() {
        return "(" + this.x + ", " + this.y + ")";
      }
    };
  
    // Track the mouse position relative to the center of the container.
    mouse.setOrigin(container);
  
    //----------------------------------------------------
  
    var counter = 0;
    var refreshRate = 10;
    var isTimeToUpdate = function() {
      return counter++ % refreshRate === 0;
    };
  
    //----------------------------------------------------
  
    var onMouseEnterHandler = function(event) {
      update(event);
    };
  
    var onMouseLeaveHandler = function() {
      inner.style = "";
    };
  
    var onMouseMoveHandler = function(event) {
      if (isTimeToUpdate()) {
        update(event);
      }
    };
  
    //----------------------------------------------------
  
    var update = function(event) {
      mouse.updatePosition(event);
      updateTransformStyle(
        (mouse.y / inner.offsetHeight / 3).toFixed(2),
        (mouse.x / inner.offsetWidth / 5).toFixed(2)
      );
    };
  
    var updateTransformStyle = function(x, y) {
      var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
      inner.style.transform = style;
      inner.style.webkitTransform = style;
      inner.style.mozTranform = style;
      inner.style.msTransform = style;
      inner.style.oTransform = style;
    };
  
    //--------------------------------------------------------
  
    container.onmousemove = onMouseMoveHandler;
    container.onmouseleave = onMouseLeaveHandler;
    container.onmouseenter = onMouseEnterHandler;
  })();
  
  
  
  
  
  
  
  (function() {
    // Init
    var container1 = document.getElementById("container1"),
        inner1 = document.getElementById("inner1");
  
    // Mouse
    var mouse = {
      _x: 0,
      _y: 0,
      x: 0,
      y: 0,
      updatePosition: function(event) {
        var e = event || window.event;
        this.x = e.clientX - this._x;
        this.y = (e.clientY - this._y) * -1;
      },
      setOrigin: function(e) {
        this._x = e.offsetLeft + Math.floor(e.offsetWidth / 1);
        this._y = e.offsetTop + Math.floor(e.offsetHeight / 1);
      },
      show: function() {
        return "(" + this.x + ", " + this.y + ")";
      }
    };
  
    // Track the mouse position relative to the center of the container.
    mouse.setOrigin(container1);
  
    //----------------------------------------------------
  
    var counter = 0;
    var refreshRate = 10;
    var isTimeToUpdate = function() {
      return counter++ % refreshRate === 0;
    };
  
    //----------------------------------------------------
  
    var onMouseEnterHandler = function(event) {
      update(event);
    };
  
    var onMouseLeaveHandler = function() {
      inner1.style = "";
    };
  
    var onMouseMoveHandler = function(event) {
      if (isTimeToUpdate()) {
        update(event);
      }
    };
  
    //----------------------------------------------------
  
    var update = function(event) {
      mouse.updatePosition(event);
      updateTransformStyle(
        (mouse.y / inner1.offsetHeight / 3).toFixed(2),
        (mouse.x / inner1.offsetWidth / 5).toFixed(2)
      );
    };
  
    var updateTransformStyle = function(x, y) {
      var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
      inner1.style.transform = style;
      inner1.style.webkitTransform = style;
      inner1.style.mozTranform = style;
      inner1.style.msTransform = style;
      inner1.style.oTransform = style;
    };
  
    //--------------------------------------------------------
  
    container1.onmousemove = onMouseMoveHandler;
    container1.onmouseleave = onMouseLeaveHandler;
    container1.onmouseenter = onMouseEnterHandler;
  })();
  
  




  

  
(function() {
    // Init
    var container2 = document.getElementById("container2"),
        inner2 = document.getElementById("inner2");
  
    // Mouse
    var mouse = {
      _x: 0,
      _y: 0,
      x: 0,
      y: 0,
      updatePosition: function(event) {
        var e = event || window.event;
        this.x = e.clientX - this._x;
        this.y = (e.clientY - this._y) * -1;
      },
      setOrigin: function(e) {
        this._x = e.offsetLeft + Math.floor(e.offsetWidth / 1);
        this._y = e.offsetTop + Math.floor(e.offsetHeight / 1);
      },
      show: function() {
        return "(" + this.x + ", " + this.y + ")";
      }
    };
  
    // Track the mouse position relative to the center of the container.
    mouse.setOrigin(container2);
  
    //----------------------------------------------------
  
    var counter = 0;
    var refreshRate = 10;
    var isTimeToUpdate = function() {
      return counter++ % refreshRate === 0;
    };
  
    //----------------------------------------------------
  
    var onMouseEnterHandler = function(event) {
      update(event);
    };
  
    var onMouseLeaveHandler = function() {
      inner2.style = "";
    };
  
    var onMouseMoveHandler = function(event) {
      if (isTimeToUpdate()) {
        update(event);
      }
    };
  
    //----------------------------------------------------
  
    var update = function(event) {
      mouse.updatePosition(event);
      updateTransformStyle(
        (mouse.y / inner.offsetHeight / 8).toFixed(2),
        (mouse.x / inner.offsetWidth / 8).toFixed(2)
      );
    };
  
    var updateTransformStyle = function(x, y) {
      var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
      inner2.style.transform = style;
      inner2.style.webkitTransform = style;
      inner2.style.mozTranform = style;
      inner2.style.msTransform = style;
      inner2.style.oTransform = style;
    };
  
    //--------------------------------------------------------
  
    container2.onmousemove = onMouseMoveHandler;
    container2.onmouseleave = onMouseLeaveHandler;
    container2.onmouseenter = onMouseEnterHandler;
  })();
  
  


// =================================================================
// counter 
// =================================================================



  //counter
    //-- Plugin implementation
    (function($) {
        $.fn.countTo = function(options) {
            return this.each(function() {
            //-- Arrange
            var FRAME_RATE = 80; // Predefine default frame rate to be 60fps
            var $el = $(this);
            var countFrom = parseInt($el.attr('data-count-from'));
            var countTo = parseInt($el.attr('data-count-to'));
            var countSpeed = $el.attr('data-count-speed'); // Number increment per second
    
            //-- Action
            var rafId;
            var increment;
            var currentCount = countFrom;
            var countAction = function() {              // Self looping local function via requestAnimationFrame
                if(currentCount < countTo) {              // Perform number incremeant
                $el.text(Math.floor(currentCount));     // Update HTML display
                increment = countSpeed / FRAME_RATE;    // Calculate increment step
                currentCount += increment;              // Increment counter
                rafId = requestAnimationFrame(countAction);
                } else {                                  // Terminate animation once it reaches the target count number
                $el.text(countTo);                      // Set to the final value before everything stops
                //cancelAnimationFrame(rafId);
                }
            };
            rafId = requestAnimationFrame(countAction); // Initiates the looping function
            });
        };
        }(jQuery));
    
        //-- Executing
        $('.number-counter').countTo();