<!DOCTYPE HTML>
<html lang="en-us">
<head>
<!-- CIT261 Team 7 project  -->
<meta charset="utf-8">
<title>Exercise Tracker</title>
<link rel="stylesheet" href="css/main.css">
<script src="scripts/main.js"></script>
</head>

<body>
<p class = "top"></p>

  <h2>Exercise Tracker</h2>
    <button type="button" onclick="loadGoals()">Enter Exercise Goals</button>
    <button type="button" onclick="loadWorkouts()">Enter Workout Performance</button>
  <br>
  <br>
	<button type = "button" onClick = "doShowGoals()">Show Goals History</button>
	<button type = "button" onClick = "doShowWorkouts()">Show Performance History</button>
  
  <!-- BD-Button to count clicks-->
  <p><button onclick="clickCounter()" type="button">Click to log workout!</button></p>
  <br>
   
  <div id="result"></div>
  <div id="result1"></div>
  <p class = "bottom"></p>
  <div id="result2"></div>
  
  <div id="container">
	  <div id="history" onClick="zoomIn()"></div>
  </div>
	<p>
	  <label><input type="button" value="Clear" onclick="ClearAll()">
	  <i>* Removes all items</i></label>
  </p>
  <input type="button" value="+" onClick="zoomIn()"/>
  <input type="button" value="-" onClick="zoomOut()"/>

</body>
</html>