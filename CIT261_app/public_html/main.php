<!DOCTYPE HTML>
<html lang="en-us">
<head>
<!-- CIT261 Team 7 project  -->
<meta charset="utf-8">
<title>Exercise Tracker</title>
<link rel="stylesheet" href="main.css">
<script type="text/JavaScript">
    //AJAX calls to load Leg Exercise Input Screen
    function loadLegs() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("container").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "legs.php", true);
  xhttp.send();
}
//AJAX calls to load Arm Exercise Input Screen
function loadArms() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("container").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "arms.php", true);
  xhttp.send();
}
    
// Call this function on button Click to store Arm workout
    function saveDataInLSArms(){
    var obj={};
        obj.curls=document.getElementById('curls').value;
		obj.triceps=document.getElementById('triceps').value;
        obj.lifts=document.getElementById('lifts').value;
        obj.bench=document.getElementById('bench').value;

    var listObj=localStorage.getItem('DATA');
    if(listObj!=null){
      listObj=JSON.parse(listObj); //this will give array of object
      listObj.push(obj);
    }else{
      listObj=[obj]; //first time 
    }
   // Save Data in Local Storage 
    localStorage.setItem('DATA',JSON.stringify(listObj)); 
   
}

// Call this function on button Click to store Leg workout
    function saveDataInLSLegs(){
    var obj={};
        obj.lunges=document.getElementById('lunges').value;
	obj.calves=document.getElementById('calves').value;
        obj.lifts=document.getElementById('lifts').value;
        obj.squats=document.getElementById('squats').value;

    var listObj=localStorage.getItem('DATA');
    if(listObj!=null){
      listObj=JSON.parse(listObj); //this will give array of object
      listObj.push(obj);
    }else{
      listObj=[obj]; //first time 
    }
   // Save Data in Local Storage 
    localStorage.setItem('DATA',JSON.stringify(listObj)); 
   
}
// dynamically draw the table

    function doShowAll() {
	if (CheckBrowser()) {
		var dataArr= localStorage.getItem('DATA');
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
                    results += "<tr><th>Week " + (i + 1) + "</th><th> </th></tr>\n\
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

//function replaceDiv() {
//        var container = document.getElementById("container");
//        var old = document.getElementById("input");
//        var newdiv = document.getElementById("history");
//        container.replaceChild(newdiv, old);
//    }
</script>
</head>
<body>
    <h2>Exercise Tracker</h2>
    
    <button type="button" onclick="loadLegs()">Input Leg Exercises</button>

    <button type="button" onclick="loadArms()">Input Arm Exercises</button>

    <div id="container">
                
        <div id="history" onClick="zoomIn()">
            <table id=output></table>
        </div>          
    </div>
<br>
<br>
<button class="wiggle" type = "button" onClick = "doShowAll()">Show Results</button>

<p></p>
<p>
    <label><input type=button value="Clear" onclick="ClearAll()">
    <i>* Removes all items</i></label>
</p>

<input type="button" value="+" onClick="zoomIn()"/>
<input type="button" value="-" onClick="zoomOut()"/>

    
</body>
</html>