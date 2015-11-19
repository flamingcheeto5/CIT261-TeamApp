<!DOCTYPE HTML>
<html lang="en-us">
<head>
<!-- CIT261 Team 7 project  -->
<meta charset="utf-8">
<title>Exercise Tracker</title>
<link rel="stylesheet" href="css/main.css">
<script type="text/JavaScript">
    //AJAX calls to load Goal Input Screen
    function loadGoals() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("container").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "goals.php", true);
  xhttp.send();
}
//AJAX calls to load Workout Input Screen
function loadWorkouts() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("container").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "workouts.php", true);
  xhttp.send();
}
    
// Call this function on button Click to store Arm workout
    function saveDataInLSWorkouts(){
    var obj={};
        obj.lunges=document.getElementById('lunges').value;
	obj.calves=document.getElementById('calves').value;
        obj.lifts=document.getElementById('lifts').value;
        obj.squats=document.getElementById('squats').value;
        obj.curls=document.getElementById('curls').value;
	obj.triceps=document.getElementById('triceps').value;
        obj.pushups=document.getElementById('pushups').value;
        obj.bench=document.getElementById('bench').value;
    var listObj=localStorage.getItem('WORKOUTS');
    if(listObj!=null){
      listObj=JSON.parse(listObj); //this will give array of object
      listObj.push(obj);
    }else{
      listObj=[obj]; //first time 
    }
   // Save Data in Local Storage 
    localStorage.setItem('WORKOUTS',JSON.stringify(listObj)); 
   
}
// Call this function on button Click to store Leg workout
    function saveDataInLSGoals(){
    var obj={};
        obj.lunges=document.getElementById('lunges').value;
	obj.calves=document.getElementById('calves').value;
        obj.lifts=document.getElementById('lifts').value;
        obj.squats=document.getElementById('squats').value;
        obj.curls=document.getElementById('curls').value;
	obj.triceps=document.getElementById('triceps').value;
        obj.pushups=document.getElementById('pushups').value;
        obj.bench=document.getElementById('bench').value;
    var listObj=localStorage.getItem('GOALS');
    if(listObj!=null){
      listObj=JSON.parse(listObj); //this will give array of object
      listObj.push(obj);
    }else{
      listObj=[obj]; //first time 
    }
   // Save Data in Local Storage 
    localStorage.setItem('GOALS',JSON.stringify(listObj)); 
   
}
// dynamically draw the table showing goals
    function doShowGoals() {
        if (CheckBrowser()) {
		var dataArr= localStorage.getItem('GOALS');
                dataArr=JSON.parse(dataArr);//this Will return An JS Array
                var results = "";
                var i = 0;
                for (i=0; i<=dataArr.length - 1; i++) {
                    var curls, triceps, pushups, bench, lunges, calves, lifts, squats;
                    curls = dataArr[i]['curls'];
                    triceps = dataArr[i]['triceps'];
                    pushups = dataArr[i]['pushups'];
                    bench = dataArr[i]['bench'];
                    lunges = dataArr[i]['lunges'];
                    calves = dataArr[i]['calves'];
                    lifts = dataArr[i]['lifts'];
                    squats = dataArr[i]['squats'];
                    results += "<tr><th>Goals " + (i + 1) + "</th><th> </th></tr>\n\
                                <tr><td>Curls</td>\n<td>" + curls + 
                                "</td></tr>\n<tr><td>Triceps</td>\n<td>"
                                + triceps + "</td></tr>\n\n\
                                <tr><td>Pushups</td>\n<td>" + pushups + 
                                "</td></tr>\n\n\<tr><td>Bench Press</td>\n<td>" + bench +
                                "</td></tr>\n\n\<tr><td>Lunges</td>\n<td>" + lunges +
                                "</td></tr>\n\n\<tr><td>Calf Raises</td>\n<td>" + calves +
                                "</td></tr>\n\n\<tr><td>Leg Lifts</td>\n<td>" + lifts +
                                "</td></tr>\n\n\<tr><td>Squats</td>\n<td>" + squats +
                                "</td></tr>\n";
                    
                }
                //below is an example of DOM replace
                var container = document.getElementById("container");
                var old = document.getElementById("input");
                var newdiv = document.getElementById("history");
                container.replaceChild(newdiv, old);
                document.getElementById('output').innerHTML = results;
           } else {
		alert('Cannot store saved list as your browser do not support local storage');
	}
}

// dynamically draw the table showing goals
    function doShowWorkouts() {
        if (CheckBrowser()) {
		var dataArr= localStorage.getItem('WORKOUTS');
                dataArr=JSON.parse(dataArr);//this Will return An JS Array
                var results = "";
                var i = 0;
                for (i=0; i<=dataArr.length - 1; i++) {
                    var curls, triceps, pushups, bench, lunges, calves, lifts, squats;
                    curls = dataArr[i]['curls'];
                    triceps = dataArr[i]['triceps'];
                    pushups = dataArr[i]['pushups'];
                    bench = dataArr[i]['bench'];
                    lunges = dataArr[i]['lunges'];
                    calves = dataArr[i]['calves'];
                    lifts = dataArr[i]['lifts'];
                    squats = dataArr[i]['squats'];
                    results += "<tr><th>Workouts Week " + (i + 1) + "</th><th> </th></tr>\n\
                                <tr><td>Curls</td>\n<td>" + curls + 
                                "</td></tr>\n<tr><td>Triceps</td>\n<td>"
                                + triceps + "</td></tr>\n\n\
                                <tr><td>Pushups</td>\n<td>" + pushups + 
                                "</td></tr>\n\n\<tr><td>Bench Press</td>\n<td>" + bench +
                                "</td></tr>\n\n\<tr><td>Lunges</td>\n<td>" + lunges +
                                "</td></tr>\n\n\<tr><td>Calf Raises</td>\n<td>" + calves +
                                "</td></tr>\n\n\<tr><td>Leg Lifts</td>\n<td>" + lifts +
                                "</td></tr>\n\n\<tr><td>Squats</td>\n<td>" + squats +
                                "</td></tr>\n";
                    
                }
                //below is an example of DOM replace
                var container = document.getElementById("container");
                var old = document.getElementById("input");
                var newdiv = document.getElementById("history");
                container.replaceChild(newdiv, old);
                document.getElementById('output').innerHTML = results;
           } else {
		alert('Cannot store saved list as your browser do not support local storage');
	}
}

function CheckBrowser() {
	if ('localStorage' in window && window['localStorage'] !== null) {
		// we can use localStorage object to store data
		return true;
	} else {
			return false;
	}
}
function ClearAll() {
	localStorage.clear();
	doShowAll();
}
//JS to zoom
var fontSize = 1;
function zoomIn() {
    fontSize += 0.1;
    document.body.style.fontSize = fontSize + "em";
}
function zoomOut() {
    fontSize -= 0.1;
    document.body.style.fontSize = fontSize + "em";
}
//BD-function to count workouts and log dates
//BD-displays alert message every fourth workout
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
			var t = new Date();
			var today = t.toDateString();
	//		dates.splice(1, 0, today);
	//		localStorage.datesList = dates;
        } else {
            localStorage.clickcount = 1;
	//		var dates = [];
        }
		document.getElementById("result").innerHTML = "Your workout has been logged: " + today;
        document.getElementById("result1").innerHTML = "LIFETIME TOTAL workouts logged: " + localStorage.clickcount;
		if (localStorage.clickcount % 4 == 0) {
				alert("You are a champion!  Keep up the great work!");
			}
	} else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script>
</head>

<body>

    <h2>Exercise Tracker</h2>
  
    <button type="button" onclick="loadGoals()">Enter Goals</button>

    <button type="button" onclick="loadWorkouts()">Enter Workouts</button>

    <div id="container">
                
        <div id="history" onClick="zoomIn()">
            <table id=output></table>
        </div>          
    </div>
<br>
<br>
<div id="goalscontainer">
<button type = "button" onClick = "doShowGoals()">Show Goals</button>
<br>
<button type = "button" onClick = "doShowWorkouts()">Show Workout History</button>
</div>
<p></p>
<p>
    <label><input type=button value="Clear" onclick="ClearAll()">
    <i>* Removes all items</i></label>
</p>

<input type="button" value="+" onClick="zoomIn()"/>
<input type="button" value="-" onClick="zoomOut()"/>
<!-- BD-Button to count clicks-->
<p><button onclick="clickCounter()" type="button">Log workout with a click of this button!</button></p>
<br>
 
<div id="result"></div><br>
<div id="result1"></div>

</body>

</html>