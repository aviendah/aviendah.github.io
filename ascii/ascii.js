var timer = null;
var string = "";
var i = -1;
var speed = 250;
var allFrames;

	document.getElementById("stop").disabled = true;
function onStart() {
	
	document.getElementById("stop").disabled = false;
	
	string = document.getElementById("textarea").value;
	document.getElementById("textarea").value = "";
	allFrames = string.split("=====\n");

	
	if (timer == null) {
		timer = setInterval(animate, speed, allFrames);
	} 
	
	document.getElementById("start").disabled = true;
	document.getElementById("animation").disabled = true;
	
}



function animate(allFrames) {
	i++;
	if(i >= allFrames.length) {
		i = 0;
	}
	document.getElementById("textarea").value = allFrames[i];
	
}



function onStop() {
	
	clearInterval(timer);
	i = -1;
	timer = null;
	document.getElementById("textarea").value = string;
	
	document.getElementById("stop").disabled = true;
	document.getElementById("start").disabled = false;
	document.getElementById("animation").disabled = false;
}

function chooseAnim() {
	var whichOne = document.getElementById("animation").value;
	document.getElementById("textarea").value = ANIMATIONS[whichOne];

}

function changeSize() {
	var size = document.getElementById("textSize").value;
	document.getElementById("textarea").style.fontSize = size;
}

function speedUp() {
	if (speed == 250) {
		clearInterval(timer);
		speed = 50;
		timer = setInterval(animate, speed, allFrames);
	} else {
		clearInterval(timer);
		speed = 250;
		timer = setInterval(animate, speed, allFrames);
	}
}