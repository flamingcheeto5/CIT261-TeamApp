<!DOCTYPE HTML>
<html lang="en-us">
<head>
<!-- JSON EXAMPLE 2  -->
<meta charset="utf-8">
<title>Advanced Example</title>
<link rel="stylesheet" href="main.css">
<script type="text/JavaScript">
    // Call this function on button Click
    function saveDataInLS(){
    var obj={};
        obj.curls=document.getElementById('curls').value;
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
                    var curls, lifts, squats;
                    //curls = 0;
                    //lifts = 0;
                    //squats = 0;
                    curls = dataArr[i]['curls'];
                    lifts = dataArr[i]['lifts'];
                    squats = dataArr[i]['squats'];          
                    results += "<tr><th>Week " + (i + 1) + "</th><th> </th></tr>\n\
                                <tr><td>Curls</td>\n<td>" + curls + 
                                "</td></tr>\n<tr><td>Leg Lifts</td>\n<td>"
                                + lifts + "</td></tr>\n\n\
                                <tr><td>Squats</td>\n<td>" + squats + 
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
    <div id="container">
        <div id="input">
            <p>Please input values for your exercises.</p>
    
            <p>Curls: <input type="text" id="curls"></p>
            <p>Leg Lifts: <input type="text" id="lifts"></p>
            <p>Squats: <input type="text" id="squats"></p>
            <button class="wiggle" type = "button" onClick = "saveDataInLS()">Store Results</button>
        </div>
        
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