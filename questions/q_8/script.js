var whisk = document.getElementById("whisk");
var i = 0;

whisk.addEventListener("click", change);

function change(){

    ht = Math.floor(Math.random() * 90); 
    wd = Math.floor(Math.random() * 90);       
    op = Math.floor(Math.random() * 50) + 20;    

    i++;

    if(i==20){
        document.getElementById("coffee").style.display = "block";
        whisk.style.display = "none";
        return;
    }

    else{
        whisk.style.opacity = op +"%";
        whisk.style.left = wd + "%";
        whisk.style.top = ht + "%";
    }
}