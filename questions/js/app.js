var home=document.getElementById("home1");
var rules=document.getElementById("rules");
var about=document.getElementById("about");
var modal=document.getElementById("signin_modal");
var credits=document.getElementById("credits");
var forum=document.getElementById("forum");
var nav= document.getElementsByClassName("navbaritem");
var homepage= document.getElementsByClassName("homepage")[0];
var rulespage= document.getElementsByClassName("rulespage")[0];
var aboutpage= document.getElementsByClassName("rulespage")[1];
var creditspage= document.getElementsByClassName("rulespage")[2];
var closebtn= document.getElementsByClassName("close_btn")[0];
home.onclick=function()
{
	for (var i = 0; i < 5; i++) {
	if(i==2)
		continue;
	else
	nav[i].classList.remove("bottomborderblack");
	}
	home.classList.add("bottomborderblack");
	homepage.classList.remove("hidden");
	rulespage.classList.add("hidden");
	aboutpage.classList.add("hidden");
	creditspage.classList.add("hidden");
};
rules.onclick=function()
{

	for (var i = 0; i < 5; i++) {
	if(i==1)
		continue;
	else
	nav[i].classList.remove("bottomborderblack");
	}
	rules.classList.add("bottomborderblack");
	rulespage.classList.remove("hidden");
	homepage.classList.add("hidden");
	aboutpage.classList.add("hidden");
	creditspage.classList.add("hidden");
};
about.onclick=function()
{
	for (var i = 0; i < 5; i++) {
	if(i==0)
		continue;
	else	
	nav[i].classList.remove("bottomborderblack");
	}
	about.classList.add("bottomborderblack");
	aboutpage.classList.remove("hidden");
	rulespage.classList.add("hidden");
	homepage.classList.add("hidden");
	creditspage.classList.add("hidden");
};
forum.onclick=function()
{
	for (var i = 0; i < 5; i++) {
	if(i==4)
		continue;
	else
	nav[i].classList.remove("bottomborderblack");
	
	}
	
};
credits.onclick=function()
{
	for (var i = 0; i < 5; i++) {
	if(i==3)
		continue;
	else
	nav[i].classList.remove("bottomborderblack");
	}
	credits.classList.add("bottomborderblack");
	creditspage.classList.remove("hidden");
	rulespage.classList.add("hidden");
	homepage.classList.add("hidden");
	aboutpage.classList.add("hidden");
};
closebtn.onclick=function() {
  modal.style.display = "none";
}