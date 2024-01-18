<?php 
session_start();
include("top.html"); ?>

	<h1 class = "title">Locations</h1>

	<div class = "links">
			<button  class = "loc_button" onclick="window.location.href= '#daedalian';">
				Daedalian Keys
			</button>
			<button class = "loc_button" onclick="window.location.href= '#demiguise';">
				Demiguise Statues
			</button>
			<button class = "loc_button" onclick="window.location.href= '#doors';">
				Arithmancy Doors
			</button>
	</div>
	
	<div id = "daedalian">
		<h3>Daedalian Keys</h3>
		
		<button onclick="window.location.href= '#top';">
				Back to the top
		</button>
		<ul>
			<li>Astronomy Tower</li>
			<li>DADA Floo Flame</li>
			<li>Potions Classroom</li>
			<li>Central Hall Floo Flame</li>
			<li>Central Hall Upstairs</li>
			<li>Library</li>
			<li>Outside the Great Hall</li>
			<li>Fireplace in the Great Hall</li>
			<li>Inside the Great Hall, to the right</li>
			<li>Grand Staircase Tower</li>
			<li>Faculty Tower</li>
			<li>Up the stairs in the Faculty Tower</li>
			<li>Clock Tower Courtyard Floo Flame</li>
			<li>Bell Tower Courtyard</li>
			<li>Up the stairs from the Map Chamber</li>
			<li>Near the Sleeping Dragon Statue</li>
		</ul>
	</div>
	
	<div  id = "demiguise">
		<h3>Demiguise Statues</h3>
		<button onclick="window.location.href= '#top';">
				Back to the top
		</button>
		<ul>
			<li><h4>Hogwarts</h4></li>
				<ul>
					<li>Haunted Toilets: locked stall</li>
					<li>Great Hall: locked door at the end of the hall</li>
					<li>North Exit: locked door in northeast corner 
						of the grounds</li>
					<li>Muggle Studies Classroom: next to the Sleeping 
						Dragon Statue</li>
					<li>Divination Classroom</li>
					<li>Restricted Section: descend all the way down</li>
					<li>Professor Fig's Classroom</li>
					<li>The Long Gallery: first door on the left</li>
					<li>Professor Howin's Office</li>
					<li>Transfigurate Courtyard: through double doors to the 
						south, unlock room to right of the stairs</li>
				</ul>
			<li><h4>Hogsmeade</h4></li>
				<ul>
					<li>Tomes and Scrolls Back Room</li>
					<li>Second Floor of House Next to 
						Three Broomsticks</li>
					<li>Second Floor of House Next to Tomes and Scrolls</li>
					<li>Three Broomsticks Private Room</li>
					<li>Gladrags Wizardwear</li>
					<li>House Next to Brood and Peck</li>
					<li>House Behind Honeydukes</li>
					<li>Hog's Head</li>
					<li>House Next to J. Pippins Potions</li>
				</ul>
			<li><h4>Highlands</h4></li>
				<ul>
					<li>North Ford Bog: just above the 
						Forbidden Forest</li>
					<li>Pitt-Upon-Ford: second house on the right</li>
					<li>Upper Hogsfield: second house on the left</li>
					<li>Aranshire: tiny stone house on the left</li>
					<li>Lower Hogsfield: house with flowers out front</li>
					<li>Brocburrow: turn right past Eddie Thistlewood's shop,
						second house</li>
					<li>Keenbridge: up the hill, in the house with pumpkins
						out front</li>
					<li>Feldcroft: head down path on the left, house with 
						vines growing on the front door</li>
					<li>Irondale: turn right into the first house you see</li>
					<li>Marunweem Lake: house with 4 stacked pots</li>
					<li>Bainburgh: house directly behind the bulletin board</li>
					<li>Cragcroft: tiny house next to Bella Navarro's shop</li>
				</ul>
		</ul>
	</div>
	
	<div id = "doors"> 
		<h3 >Arithmancy Doors</h3>
		<button onclick="window.location.href= '#top';">
				Back to the top
		</button>
		<ul>
			<li>Ravenclaw Tower</li>
			<li>Grand Staircase Tower</li>
			<li>Grand Staircase</li>
			<li>Next to Divination Classroom</li>
			<li>Past the Divination Arithmancy Door inside a room
				there will be two doors</li>
			<li>Central Hall near Potions Classroom</li>
			<li>Down the stairs, past the Potions Classroom</li>
			<li>Astronomy Wing near the Charms Classroom</li>
			<li>To the left of the Great Hall</li>
			<li>Hospital Wing</li>
		</ul>
	</div>
	

<?php include("bottom.html"); ?>