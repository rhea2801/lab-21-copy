function resize() {
    if (window.innerWidth <=800) {
      //console.log('set to 4');
      document.getElementById('blurFilter').setAttribute('stdDeviation', 4);
    }else{
      //console.log('set to 10');
      document.getElementById('blurFilter').setAttribute('stdDeviation', 8);
    }
  }

  window.addEventListener("resize", resize);
  document.addEventListener("DOMContentLoaded", resize);


var rhea = document.querySelector(".rhea");
var sanskar = document.querySelectorAll(".profile")[1];
var shivoy = document.querySelectorAll(".profile")[2];
var kushagra = document.querySelectorAll(".profile")[3];

var rheap = document.querySelectorAll(".pfp")[0];
var sanskarp = document.querySelectorAll(".pfp")[1];
var shivoyp = document.querySelectorAll(".pfp")[2];
var kushagrap = document.querySelectorAll(".pfp")[3];

var rc = document.querySelector(".r-c");
var sac = document.querySelector(".sa-c");
var shc = document.querySelector(".sh-c");
var kc = document.querySelector(".k-c");

rc.addEventListener("mouseover", function(){
    rc.style.backgroundColor = "rgba(255,255,255,0.8)";
    rc.style.color = "rgba(0,0,0,0.8)";

    rheap.style.height = "120%";
    setTimeout(function(){
      document.getElementById("rheaspan").innerHTML = "&nbsp;&nbsp; <a target='blank' href='https://www.facebook.com/rhea2801/'><i class='fa fa-facebook'></i></a>&nbsp;&nbsp;&nbsp; <a href='https://www.github.com/rhea2801' target='blank'><i class='fa fa-github'></i></a>";
  
    }, 200);
})

rc.addEventListener("mouseout", function(){
  rc.style.backgroundColor = "rgba(255,255,255,0.25)";
  rc.style.color = "rgba(255,255,255,0.8)";
  rheap.style.height = "100%";
  setTimeout(function(){
    document.getElementById("rheaspan").innerHTML = "&nbsp;&nbsp;Rhea Sundaresan";

  }, 200);
})



//////// sanskar


sac.addEventListener("mouseover", function(){
  sac.style.backgroundColor = "rgba(255,255,255,0.8)";
  sac.style.color = "rgba(0,0,0,0.8)";

  sanskarp.style.height = "120%";
  setTimeout(function(){
    document.getElementById("sanskarspan").innerHTML = "&nbsp;&nbsp; <a target='blank' href='https://www.facebook.com/sanskar.patni.9/'><i class='fa fa-facebook'></i></a>&nbsp;&nbsp;&nbsp; <a href='https://www.github.com/sanskar28' target='blank'><i class='fa fa-github'></i></a>";

  }, 200);
})

sac.addEventListener("mouseout", function(){
sac.style.backgroundColor = "rgba(255,255,255,0.25)";
sac.style.color = "rgba(255,255,255,0.8)";
sanskarp.style.height = "100%";
setTimeout(function(){
  document.getElementById("sanskarspan").innerHTML = "&nbsp;&nbsp;Sanskar Patni";

}, 200);
})



/////// shivoy


shc.addEventListener("mouseover", function(){
  shc.style.backgroundColor = "rgba(255,255,255,0.8)";
  shc.style.color = "rgba(0,0,0,0.8)";
  shivoyp.style.height = "120%";
  setTimeout(function(){
    document.getElementById("shivoyspan").innerHTML = "&nbsp;&nbsp; <a target='blank' href='https://www.facebook.com/profile.php?id=100011022995972'><i class='fa fa-facebook'></i></a>&nbsp;&nbsp;&nbsp; <a href='https://www.github.com/shiv-aay' target='blank'><i class='fa fa-github'></i></a>";

  }, 200);
})

shc.addEventListener("mouseout", function(){
shc.style.backgroundColor = "rgba(255,255,255,0.25)";
shc.style.color = "rgba(255,255,255,0.8)";
shivoyp.style.height = "100%";
setTimeout(function(){
  document.getElementById("shivoyspan").innerHTML = "&nbsp;&nbsp;Shivoy Dixit";

}, 200);
})


///////// kushagra

kc.addEventListener("mouseover", function(){
  kc.style.backgroundColor = "rgba(255,255,255,0.8)";
  kc.style.color = "rgba(0,0,0,0.8)";
  kushagrap.style.height = "120%";
  setTimeout(function(){
    document.getElementById("kushagraspan").innerHTML = "&nbsp;&nbsp; <a target='blank' href='https://www.facebook.com/kushagra.khullar.3/'><i class='fa fa-facebook'></i></a>&nbsp;&nbsp;&nbsp; <a href='https://www.github.com/rhea2801' target='blank'><i class='fa fa-github'></i></a>";

  }, 200);
})

kc.addEventListener("mouseout", function(){
kc.style.backgroundColor = "rgba(255,255,255,0.25)";
kc.style.color = "rgba(255,255,255,0.8)";
kushagrap.style.height = "100%";
setTimeout(function(){
  document.getElementById("kushagraspan").innerHTML = "&nbsp;&nbsp;Kushagra Khullar";

}, 200);
})

