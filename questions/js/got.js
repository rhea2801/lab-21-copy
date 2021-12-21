var next= document.getElementById("button");
var txts = ["He is fighting a White Walker", "He doesn't have the correct weapon right now ?", "Whom should he call for help?","Rhaegal has arrived!","But he isn't under control!","Order him to help you out!" ]
  var counter = -1;
document.getElementsByClassName('submit')[0].style.display="none";
document.getElementsByClassName('submit')[1].style.display="none";
  next.onclick=function changeText() {
  	    
    if(counter==2){
    	document.getElementById('dialog_box').style.display="inline";
    	
    	
    	var x = document.forms["myForm"]["answer"].value;
      if (x == "arya" || x=="Arya") 
        alert("Arya isnt able to cross the wall to help Jon");
      if (x == "danaerys" || x=="Danaerys") 
        alert("Danaerys isnt able to cross the wall to help Jon");
	  	if (x == "Rhaegal" || x=="rheagal") 
	    	{counter++;
	    		document.getElementsByClassName('drg')[0].style.display="inline";}
	}
	else if(counter!=5){
		document.getElementById('dialog_box').style.display="none";
		counter++;
     }
     else if(counter==5)
     	{
        document.getElementById("button").style.display="none";
        document.getElementsByClassName('submit')[0].style.display="inline";
        document.getElementsByClassName('submit')[1].style.display="inline";


       } 
     document.getElementById('sent').innerHTML = txts[counter];
     if(counter!=2 && counter !=5)
     {document.forms["myForm"]["answer"].value="";
     document.getElementById('dialog_box').style.display="none";
  }


}

 


