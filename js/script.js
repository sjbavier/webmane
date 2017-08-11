
function init(){
	var random = document.getElementById("random"), x;
	
	for(x=0; x<100; x++){
		
		var r = Math.random()*100, sl;
		random.innerHTML += "<p>Random number 1 to 100 " + r + "</p>";
		random.innerHTML += "<p>iteration " + x + "</p>"
		sl = r.slice(0,1);
		random.innerHTML += "<p>first num " + sl + "</p>"
	}
	
	
	
	
}





document.addEventListener("DOMContentLoaded", init, false);