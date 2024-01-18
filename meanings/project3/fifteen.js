/*
Project 3: Fifteen Puzzle
Creator: Tatum Manning

*/
var row;
var column;
var emptyRow = 3;
var emptyColumn = 3;
var neighbors = [];

window.onload = function() {
	setUp();

};


function setUp() {
	var squares = $$("#puzzlearea div");
	
	var shuffleButton = $("shufflebutton");
	shuffleButton.onclick = shuffle;
	
	for (var i = 0; i < squares.length; i++) {
		var square = squares[i];
		square.addClassName("square");
		
		var newRow = parseInt(i/4);
		var newColumn = parseInt(i%4);
		
		square.id = "square_" + newRow + "_" + newColumn;

		
		var topPos = newRow * 100;
		var leftPos = newColumn * 100;
		
		square.style.top = topPos + "px";
		square.style.left = leftPos + "px";
		square.style.backgroundPosition = "-" 
			+ leftPos + "px " + "-" + topPos + "px";
		
		canMove(square);
		square.onclick = gameMove;
		square.onmouseover = highlight;	
	}
}


function shuffle() {
	
	for (var i = 0; i <= 500; i++) {
		var index = parseInt(Math.random() * neighbors.length);
		shiftTile(neighbors[index]);
	}		
	
}

function gameMove(event) {
	
	if (canMove(this)) {
		shiftTile(this);
	}
	
}

function shiftTile(tile) {
	row = emptyRow * 100;
	column =  emptyColumn * 100;
	
	tile.id = "square_" + emptyRow + "_" + emptyColumn;
	
	emptyRow = parseInt(tile.getStyle("top"))/100;
	emptyColumn = parseInt(tile.getStyle("left"))/100;
	
	tile.style.top = row + "px";
	tile.style.left = column + "px";
	updateNeighbors();
	
}

function highlight(event) {
	
	if (canMove(this)) {
		this.addClassName("selected");
	} else if (this.hasClassName("selected")) {
		this.removeClassName("selected");
	}				
		
}


function canMove(tile){
	row = parseInt(tile.getStyle("top"))/100;
	column = parseInt(tile.getStyle("left"))/100;

	if (row == emptyRow) {
		if ((column - 1) == emptyColumn || (column + 1) == emptyColumn) {
			neighbors.push(tile);
			return true;			
		} 
	} else if (column == emptyColumn) {
		if ((row + 1) == emptyRow || (row - 1) == emptyRow) {
			neighbors.push(tile);			
			return true;
		}
	} else {
		return false;
	}
}

function updateNeighbors() {
	var squares = $$("#puzzlearea div");
	
	while (neighbors.length > 0) {
		neighbors.pop();
	}
	
	for (var i = 0; i < squares.length; i++) {
			canMove(squares[i]);
	}	
}