setInterval(function(){
   var date = new Date();
   var time = {
               hour: (function(){
                  var pm,am;
                 if(date.getHours() > 13 && date.getHours() < 23){
                   return {current:date.getHours()-12, AmPm:"pm"}
                 }
                 if(date.getHours()===0){
                   return {current:date.getHours()+12, AmPm:"am"}
                 }
                 if(date.getHours()===12){
                   return {current:date.getHours(), AmPm:"pm"}
                 }
                  return {current:date.getHours(), AmPm:"am"}
               }()),

               minute:date.getMinutes(),
               day:data.getDay(date.getDay()),
               date:date.getDate(),
            };

            document.querySelector(".time").innerHTML= ((23-time.hour.current<10)?"0":"")+(23-time.hour.current)+":"+((59-time.minute<10)?"0":"")+(59-time.minute)+" "+time.hour.AmPm;
            document.querySelector(".date").innerHTML = time.day+" "+time.date+", India";

},1000);

function playAudio() { 
   document.getElementById("myAudio").play(); 
 } 

var data = {
   getDay : function(par){
      var Days = ["monday","tuesday","wednesday","thursday","friday","saturday","sunday"];
      return Days[par-1];
   },
   getMonth: function(par){
      var Months = ["january","febrary","march","april","june","july","agoust",
                     "september","october","november","december"];
                     return Months[par-1];
   }
};