console.clear();

var s = Snap();
var sMaxX = 800;
var sMaxY = 600;
var viewBoxList = [0, 0, sMaxX, sMaxY];
s.attr({
    viewBox: viewBoxList
});

var gLines = s.g();
var gText = s.g();
var patt;
var maskObj;
var text;
var maskElem = s.mask();

var pSize = 700;
var maxLines = 16;
var maxLinesDouble = maxLines * 2;
var lineStep = pSize / maxLines;
var lines = [];
var pathDur = 1000;
var delay = 250;

var colorSteps = maxLines / 2;
var colors = ['purple',
              'crimson',
              'orangered',
              'orange',
              'gold',
              'yellowgreen',
              'steelblue',
              'teal',
              'purple'
             ]

var lineLength = Math.sqrt( Math.pow( pSize, 2 ) * 2);


var lineObj = function () {
    var d = 'M' + [pSize, 0, 0, pSize];
    var path = s.path(d);
    var pos = 0;
    var addMask = false;
    var pathDelay = 0;
    var dashArray = 0;
    var strokeW = 0;
    
    this.init = function ( params ) {
        pos = params.pos;
        strokeW = params.strokeW;
        var strokeColor = params.color || 'hotpink'
        var offsetX = params.offsetX || 0;
        var x = pSize - lineStep * (pos + .5) + offsetX;
        var translateParams = [x, 0];
        
        pathDelay = params.delay || delay;
        dashArray = lineLength;
        addMask = params.addMask || false;

        path.attr({
            transform: 'translate(' + translateParams + ')',
            'stroke-width': strokeW,
            stroke: strokeColor,
            'stroke-linecap': 'square',
            'stroke-dashoffset': lineLength,
            'stroke-dasharray': dashArray
        });
        
        gLines.add(path);
        
    }// Init
    
    this.reset = function () {
        path.attr({
            'stroke-dashoffset': lineLength,
            'stroke-dasharray': dashArray
        });
    }
    
    this.animdDelay = function() {
        setTimeout(pathAnim, 
                   (maxLinesDouble - pos) * pathDelay
                  );
    }
    
    var countNextAnim = 0;
    
    function runNextAnim() {
        if ( addMask == true ) {
            // Why 0?
            if ( pos == 0) {
                countNextAnim++;
                
                maskObj.maskAnim();
            }
        }
    }
    
    function pathAnim () {

        path.animate({
            'stroke-dashoffset': '0'
        	},
			pathDur,
			runNextAnim
            );
    }
    
}// lineObj

// ------------------------------------

function createLines( params ) {
    
    var strokeW = params.strokeW;
    
    for ( var i = 0; i < maxLinesDouble; i++ ) {
        var line = new lineObj;
        var color = params.color || colors[i % colorSteps];
        
        line.init({
            pos: i,
            strokeW: params.strokeW,
            offsetX: params.offsetX,
            delay: params.delay,
            addMask: params.addMask || false,
            color: color,
        });
        
        lines.push(line);
    }
}

// ------------------------------------

function createPattern() {
    
//     console.log('* - createPattern');
    
    var rect = s.rect(0,0, pSize, pSize);
    rect.attr({
        fill: 'white',
    });
    
    gLines.add(rect);
    
    createLines({
        strokeW: lineStep / 1.4,
        addMask: false
        });
    
    createLines({
        strokeW: 2,
        color: '#002',
        offsetX: lineStep / 2 + 7,
        delay: 300,
        addMask: true
    	});
    
  	patt = gLines.toPattern(0,0, pSize, pSize);    
    
}

function animatePattern() {
  
    for ( var i = 0; i < lines.length; i++ ) {
        var line = lines[i];
        
        line.reset();
        line.animdDelay();
    }
}

// ------------------------------------

var textObj = function () {
    
    var textDur = 1500;
    var dashoffset = 1200;
    var textGInit = s.g();
        var text1 = s.text('50%','34%','Congrats!');
        var text2 = s.text('50%','73%','');

    text1.attr({
       dy: '.3em',
       'font-size': '1.15em'
    });
    text2.attr({
       dy: '.3em'
    });
    
    textGInit.add(text1, text2);

    textGInit.attr({
        'text-anchor': 'middle',
        'font': '15em/1 Impact',
        fill: 'white',
        stroke: '#000',
        'stroke-width': 3,
        'stroke-dasharray': dashoffset,
        'stroke-dashoffset': dashoffset
    });

    var textGFill = textGInit.clone();

    textGInit.attr({
        transform: 'translate(10,10)'
    });
    
    gText.add(textGInit, textGFill);
    
    this.textAnim = function () {
        textGFill.animate({
            'stroke-dashoffset': 0
	        },
            textDur,
            setTextStroke);
    }
    
    function setTextStroke () {
        setTextFill();
        
        textGInit.animate({
            'stroke-dashoffset': 0
            },
            textDur
            );
    }
    
    function setTextFill () {
        
        animatePattern();
        
        textGFill.attr({
            fill: patt
        });
    }
    
    this.reset = function () {
        
        var initState = {
            fill: 'white',
            'stroke-dasharray': dashoffset,
            'stroke-dashoffset': dashoffset
        };
        
        textGInit.attr( initState );
        textGFill.attr( initState );
        
        this.textAnim();
    }
}

// ------------------------------------

function createText() {
//     console.log('* - createText');
    text = new textObj;
    text.textAnim();
}

// ------------------------------------

var maskObjInit = function () {
    var maskShape;
    
    var currentStep = 0;
    var steps = [
        {rx: '10%', ry: "10%"},
        {rx: '35%', ry: "35%"},
        {rx: '0%', ry: "0%"}
    ];
    
    this.init = function () {
        maskShape = s.ellipse('50%', '50%', '100%', '100%');
    
        maskShape.attr({
            fill: "white"
        });

        maskElem.add(maskShape);

        gText.attr({
            mask: maskElem
        });
    }
    
    this.maskAnim = function () {
//         console.log('- * - anim mask');
        
        if ( currentStep == steps.length ) {
            setTimeout(reRun, 1000);
            return;
        }
        
        maskShape.animate(
            steps[currentStep]
            ,
            300,
            maskObj.maskAnim);
        currentStep++;
    }
    
    this.reset = function () {
        currentStep = 0;
        
        var initState = {
            rx: '100%', 
            ry: "100%"
        };
        
        maskShape.attr(initState);
    }
}

function createMask() {
//     console.log('* - createMask');
    maskObj = new maskObjInit;
    maskObj.init();
}

// ------------------------------------

createPattern();
createText();
createMask();

function reRun() {
    
    maskObj.reset();
    text.reset();
}

/*var wrapper = document.createElement("div");
document.body.appendChild(wrapper);
wrapper.appendChild(s.node);*/

class Progress {
  constructor(param = {}) {
    this.timestamp        = null;
    this.duration         = param.duration || Progress.CONST.DURATION;
    this.progress         = 0;
    this.delta            = 0;
    this.progress         = 0;
    this.isLoop           = !!param.isLoop;

    this.reset();
  }

  static get CONST() {
    return {
      DURATION : 1000
    };
  }

  reset() {
    this.timestamp = null;
  }

  start(now) {
    this.timestamp = now;
  }

  tick(now) {
    if (this.timestamp) {
      this.delta    = now - this.timestamp;
      this.progress = Math.min(this.delta / this.duration, 1);

      if (this.progress >= 1 && this.isLoop) {
        this.start(now);
      }

      return this.progress;
    } else {
      return 0;
    }
  }
}

class Confetti {
  constructor(param) {
    this.parent         = param.elm || document.body;
    this.canvas         = document.createElement("canvas");
    this.ctx            = this.canvas.getContext("2d");
    this.width          = param.width  || this.parent.offsetWidth;
    this.height         = param.height || this.parent.offsetHeight;
    this.length         = param.length || Confetti.CONST.PAPER_LENGTH;
    this.yRange         = param.yRange || this.height * 2;
    this.progress       = new Progress({
      duration : param.duration,
      isLoop   : true
    });
    this.rotationRange  = typeof param.rotationLength === "number" ? param.rotationRange
                                                                   : 10;
    this.speedRange     = typeof param.speedRange     === "number" ? param.speedRange
                                                                   : 10;
    this.sprites        = [];

    this.canvas.style.cssText = [
      "display: block",
      "position: absolute",
      "top: 0",
      "left: 0",
      "pointer-events: none"
    ].join(";");

    this.render = this.render.bind(this);

    this.build();

    this.parent.appendChild(this.canvas);
    this.progress.start(performance.now());

    requestAnimationFrame(this.render);
  }

  static get CONST() {
    return {
        SPRITE_WIDTH  : 9,
        SPRITE_HEIGHT : 16,
        PAPER_LENGTH  : 100,
        DURATION      : 8000,
        ROTATION_RATE : 50,
        COLORS        : [
          "#EF5350",
          "#EC407A",
          "#AB47BC",
          "#7E57C2",
          "#5C6BC0",
          "#42A5F5",
          "#29B6F6",
          "#26C6DA",
          "#26A69A",
          "#66BB6A",
          "#9CCC65",
          "#D4E157",
          "#FFEE58",
          "#FFCA28",
          "#FFA726",
          "#FF7043",
          "#8D6E63",
          "#BDBDBD",
          "#78909C"
        ]
    };
  }

  build() {
    for (let i = 0; i < this.length; ++i) {
      let canvas = document.createElement("canvas"),
          ctx    = canvas.getContext("2d");

      canvas.width  = Confetti.CONST.SPRITE_WIDTH;
      canvas.height = Confetti.CONST.SPRITE_HEIGHT;

      canvas.position = {
        initX : Math.random() * this.width,
        initY : -canvas.height - Math.random() * this.yRange
      };

      canvas.rotation = (this.rotationRange / 2) - Math.random() * this.rotationRange;
      canvas.speed    = (this.speedRange / 2) + Math.random() * (this.speedRange / 2);

      ctx.save();
        ctx.fillStyle = Confetti.CONST.COLORS[(Math.random() * Confetti.CONST.COLORS.length) | 0];
        ctx.fillRect(0, 0, canvas.width, canvas.height);
      ctx.restore();

      this.sprites.push(canvas);
    }
  }

  render(now) {
    let progress = this.progress.tick(now);

    this.canvas.width  = this.width;
    this.canvas.height = this.height;

    for (let i = 0; i < this.length; ++i) {
      this.ctx.save();
        this.ctx.translate(
          this.sprites[i].position.initX + this.sprites[i].rotation * Confetti.CONST.ROTATION_RATE * progress,
          this.sprites[i].position.initY + progress * (this.height + this.yRange)
        );
        this.ctx.rotate(this.sprites[i].rotation);
        this.ctx.drawImage(
          this.sprites[i],
          -Confetti.CONST.SPRITE_WIDTH * Math.abs(Math.sin(progress * Math.PI * 2 * this.sprites[i].speed)) / 2,
          -Confetti.CONST.SPRITE_HEIGHT / 2,
          Confetti.CONST.SPRITE_WIDTH * Math.abs(Math.sin(progress * Math.PI * 2 * this.sprites[i].speed)),
          Confetti.CONST.SPRITE_HEIGHT
        );
      this.ctx.restore();
    }

    requestAnimationFrame(this.render);
  }
}

(() => {
  const DURATION = 8000,
        LENGTH   = 120;

  new Confetti({
    width    : window.innerWidth,
    height   : window.innerHeight,
    length   : LENGTH,
    duration : DURATION
  });

  setTimeout(() => {
    new Confetti({
      width    : window.innerWidth,
      height   : window.innerHeight,
      length   : LENGTH,
      duration : DURATION
    });
  }, DURATION / 2);
})();