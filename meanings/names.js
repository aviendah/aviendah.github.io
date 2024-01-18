window.onload = function() {
		new Ajax.Request(
		"https://webhome.auburn.edu/~tzt0062/babynames/babynames.php", 
        {
            method: "GET",
			parameters: {type: "list"},
            onSuccess: createList,
            onFailure: ajaxFailed,     
            onException: ajaxFailed
        }
    );
	
	$("search").onclick = searchClick;
}

function createList(ajax) {
	
	var names = ajax.responseText.trim().split("\n");
	for(var i = 0; i < names.length; i++) {
		var name = document.createElement("option");
		name.value = names[i];
		name.innerHTML = names[i];
		$("allnames").appendChild(name);
	}
	
	
	$("allnames").disabled = false;
	$("loadingnames").hide();
}

function searchClick() {
	
	$("norankdata").hide();
	$("meaning").innerHTML = "";
	$("graph").innerHTML = "";
	$("celebs").innerHTML = "";	
	$("loadingmeaning").show();
	$("loadinggraph").show();
	$("loadingcelebs").show();
	
	var name = $("allnames").value;
	var genders = document.getElementsByName("gender");
	
	for (var i = 0; i < genders.length; i++) {
		if (genders[i].checked) {
			var gender = genders[i].value;
		}
	}
	
	if (name != "(choose a name)") {
		meaningRequest(name);
		rankRequest(name, gender);
		celebsRequest(name, gender);
	}
	
	$("resultsarea").show();
}


function meaningRequest(name) {
	new Ajax.Request(
		"https://webhome.auburn.edu/~tzt0062/babynames/babynames.php", 
        {
            method: "GET",
			parameters: {type: "meaning", name: name},
            onSuccess: findMeaning,
            onFailure: ajaxFailed,     
            onException: ajaxFailed
        }
    );
}


function findMeaning(ajax) {

	var meaningArr = ajax.responseText.trim();
	var meaning = meaningArr[0];
	for (var i = 1; i < meaningArr.length; i++) {
		meaning += meaningArr[i];
	}
	
	$("meaning").innerHTML = meaning;	
	
	$("loadingmeaning").hide();

}


function rankRequest(name, gender) {
	new Ajax.Request(
		"https://webhome.auburn.edu/~tzt0062/babynames/babynames.php", 
        {
            method: "GET",
			parameters: {type: "rank", name: name, gender: gender},
            onSuccess: findRank,
            onFailure: ajaxFailed,     
            onException: ajaxFailed
        }	
	);
}


function findRank(ajax) {
	
    var ranks = ajax.responseXML.getElementsByTagName("rank");

	
	// Creates a row for Years
	var trYear = document.createElement("tr");
	trYear.setAttribute("id", "yearRow");
	$("graph").appendChild(trYear);		
	
	//Creates a row for Ranks
	var trRank = document.createElement("tr");
	trRank.setAttribute("id", "rankRow");
	$("graph").appendChild(trRank);	
	
	// Loop through elements and add to HTML page
	for (var i = 0; i < ranks.length; i++) {
		var rank = ranks[i].firstChild.nodeValue;
		var year = ranks[i].getAttribute("year");
		
		
		//Creates year headings
		var th = document.createElement("th");
		th.innerHTML = year;
		$("yearRow").appendChild(th);
		
		//Creates rank data
		var td = document.createElement("td");
		
		// Gives each rank their own ID.
		var id = "\"" + year + "\"";			
		td.innerHTML = "<div class = \"bar\" id = " 
			+ id + ">" + rank + "</div>";
		
		$("rankRow").appendChild(td);
	}
	
	setBarHeight();
	
	$("loadinggraph").hide();
}

// Sets the height of each bar in the graph based on rank.
function setBarHeight() {
	var divs = $("graph").getElementsByTagName("div");
	for (var i = 0; i < divs.length; i++) {
		var rank = parseInt(divs[i].innerHTML);
		
		
		if (rank == 0) {
	// Gives a bar height of zero.
			divs[i].addClassName("zero");
		} else {
	// Sets the height according to findHeight() calculation.
			var height = findHeight(rank);
			divs[i].style.height = height + "px";
		}
	// Changes color of rank to red if it is very popular (1-10).	
		if ((1 <= rank) && (rank <= 10)) {
			divs[i].addClassName("popular");
		}

	}

}

// Calculates height based on division of inverse ranking by 4.
function findHeight(rank) {
	var inverse = 1000 - rank;
	var height = parseInt(inverse / 4);
	return height;
}


function celebsRequest(name, gender) {
	new Ajax.Request(
		"https://webhome.auburn.edu/~tzt0062/babynames/babynames.php", 
        {
            method: "GET",
			parameters: {type: "celebs", name: name, gender: gender},
            onSuccess: findCelebs,
            onFailure: ajaxFailed,     
            onException: ajaxFailed
        }	
	);
}


function findCelebs(ajax) {
	var data = JSON.parse(ajax.responseText);
	
	for (var i = 0; i < data.actors.length; i++) {
		var li = document.createElement("li");
		var firstName = data.actors[i].firstName;
		var lastName = data.actors[i].lastName;
		var movies = data.actors[i].filmCount;
		
		li.innerHTML = firstName + " " + lastName + " (" 
				+ movies + " films)";
		
		$("celebs").appendChild(li);
	}
	
	$("loadingcelebs").hide();

}

function ajaxFailed(ajax, exception) {
	var msg = "Error making Ajax request: "; 
	$("loadingnames").hide();
	$("loadinggraph").hide();	
	$("loadingcelebs").hide();
	$("loadingmeaning").hide();
	if (exception) {
		msg += " Exception: " + exception.message;
	} else if (ajax.status == 410){
		$("norankdata").show();
		msg = "";
	} else {
		msg += "Server status: " + ajax.status + " Status text: " + ajax.statusText +
			   " Server response text: " + ajax.responseText;
	}
	$("errors").innerHTML = msg;
}

