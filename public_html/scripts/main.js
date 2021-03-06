//AJAX CALLS TO LOAD GOALS INPUT SCREEN
  function loadGoals() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (xhttp.readyState === 4 && xhttp.status === 200) {
      document.getElementById("container").innerHTML = xhttp.responseText;
      }
    };
    xhttp.open("GET", "goals.php", true);
    xhttp.send();
  }
  
//AJAX CALLS TO LOAD WORKOUT INPUT SCREEN
	function loadWorkouts() {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		if (xhttp.readyState === 4 && xhttp.status === 200) {
		  document.getElementById("container").innerHTML = xhttp.responseText;
		  }
		};
		xhttp.open("GET", "workouts.php", true);
		xhttp.send();
	}
  
//CALL THIS FUNCTION ON BUTTON CLICK TO STORE WORKOUT GOALS
    function saveDataInLSGoals(){
		var obj={};
                obj.lungeset=document.getElementById('lungeset').value;
                obj.calveset=document.getElementById('calveset').value;
                obj.liftset=document.getElementById('liftset').value;
                obj.squatset=document.getElementById('squatset').value;
                obj.curlset=document.getElementById('curlset').value;
                obj.tricepset=document.getElementById('tricepset').value;
                obj.pushupset=document.getElementById('pushupset').value;
                obj.benchset=document.getElementById('benchset').value;
                obj.lungereps=document.getElementById('lungereps').value;
                obj.calvereps=document.getElementById('calvereps').value;
                obj.liftreps=document.getElementById('liftreps').value;
                obj.squatreps=document.getElementById('squatreps').value;
                obj.curlreps=document.getElementById('curlreps').value;
                obj.tricepreps=document.getElementById('tricepreps').value;
                obj.pushupreps=document.getElementById('pushupreps').value;
                obj.benchreps=document.getElementById('benchreps').value;
                obj.lungeweight=document.getElementById('lungeweight').value;
                obj.calveweight=document.getElementById('calveweight').value;
                obj.liftweight=document.getElementById('liftweight').value;
                obj.squatweight=document.getElementById('squatweight').value;
                obj.curlweight=document.getElementById('curlweight').value;
                obj.tricepweight=document.getElementById('tricepweight').value;
                obj.pushupweight=document.getElementById('pushupweight').value;
                obj.benchweight=document.getElementById('benchweight').value;
		var listObj=localStorage.getItem('WORKOUTS');
		if(listObj!==null){
		  listObj=JSON.parse(listObj); //THIS PRODUCES ARRAY OF WORKOUTS
		  listObj.push(obj);
		} else {
		  listObj=[obj]; //first time 
		}
		// Save Data in Local Storage 
		localStorage.setItem('GOALS',JSON.stringify(listObj)); 
	}
    
//CALL THIS FUNCTION ON BUTTON CLICK TO STORE ACTUAL WORKOUT
	function saveDataInLSWorkouts(){
		var obj={};
	        obj.lungeset=document.getElementById('lungeset').value;
                obj.calveset=document.getElementById('calveset').value;
                obj.liftset=document.getElementById('liftset').value;
                obj.squatset=document.getElementById('squatset').value;
                obj.curlset=document.getElementById('curlset').value;
                obj.tricepset=document.getElementById('tricepset').value;
                obj.pushupset=document.getElementById('pushupset').value;
                obj.benchset=document.getElementById('benchset').value;
                obj.lungereps=document.getElementById('lungereps').value;
                obj.calvereps=document.getElementById('calvereps').value;
                obj.liftreps=document.getElementById('liftreps').value;
                obj.squatreps=document.getElementById('squatreps').value;
                obj.curlreps=document.getElementById('curlreps').value;
                obj.tricepreps=document.getElementById('tricepreps').value;
                obj.pushupreps=document.getElementById('pushupreps').value;
                obj.benchreps=document.getElementById('benchreps').value;
                obj.lungeweight=document.getElementById('lungeweight').value;
                obj.calveweight=document.getElementById('calveweight').value;
                obj.liftweight=document.getElementById('liftweight').value;
                obj.squatweight=document.getElementById('squatweight').value;
                obj.curlweight=document.getElementById('curlweight').value;
                obj.tricepweight=document.getElementById('tricepweight').value;
                obj.pushupweight=document.getElementById('pushupweight').value;
                obj.benchweight=document.getElementById('benchweight').value;
		var listObj=localStorage.getItem('WORKOUTS');
		if(listObj!==null){
		  listObj=JSON.parse(listObj); //THIS PRODUCES ARRAY OF WORKOUTS
		  listObj.push(obj);
		} else {
		  listObj=[obj]; //first time 
		}	  
//SAVE DATA IN LOCAL STORAGE 
    localStorage.setItem('WORKOUTS',JSON.stringify(listObj)); 
	}
  
//DYNAMICALLY DRAW THE TABLE SHOWING GOALS
	function doShowGoals() {
		if (CheckBrowser()) {
			var dataArr= localStorage.getItem('GOALS');
			dataArr=JSON.parse(dataArr);//THIS WILL RETURN A JSON ARRAY
			console.info('dataArr',dataArr);
			var results = "";
			var i = 0;
			for (i=0; i < dataArr.length; i++) {
			var curlset, tricepset, pushupset, benchset, lungeset, calveset, liftset, squatset,
					curlreps, tricepreps, pushupreps, benchreps, lungereps, calvereps, liftreps, squatreps,
					curlweight, tricepweight, pushupweight, benchweight, lungeweight, calveweight, liftweight, squatweight;
				curlset = dataArr[i]['curlset'];
                                tricepset = dataArr[i]['tricepset'];
                                pushupset = dataArr[i]['pushupset'];
                                benchset = dataArr[i]['benchset'];
                                lungeset = dataArr[i]['lungeset'];
                                calveset = dataArr[i]['calveset'];
                                liftset = dataArr[i]['liftset'];
                                squatset = dataArr[i]['squatset'];
						curlreps = dataArr[i]['curlreps'];
						tricepreps = dataArr[i]['tricepreps'];
						pushupreps = dataArr[i]['pushupreps'];
						benchreps = dataArr[i]['benchreps'];
						lungereps = dataArr[i]['lungereps'];
						calvereps = dataArr[i]['calvereps'];
						liftreps = dataArr[i]['liftreps'];
						squatreps = dataArr[i]['squatreps'];
							curlweight = dataArr[i]['curlweight'];
							tricepweight = dataArr[i]['tricepweight'];
							pushupweight = dataArr[i]['pushupweight'];
							benchweight = dataArr[i]['benchweight'];
							lungeweight = dataArr[i]['lungeweight'];
							calveweight = dataArr[i]['calveweight'];
							liftweight = dataArr[i]['liftweight'];
							squatweight = dataArr[i]['squatweight'];
				results += "<table><tbody><tr><th>Goals " + (i + 1) + "</th><th>Sets</th><th>Reps</th><th>Weight</th></tr>\n\
				<tr><td>Curls</td>\n<td>" + curlset + "</td><td>" 	+ curlreps 	+ "</td><td>" 	+ curlweight 	+ "</td></tr>\n\
				<tr><td>Triceps</td>\n<td>" + tricepset + "</td><td>" 	+ tricepreps 	+ "</td><td>" 	+ tricepweight 	+ "</td></tr>\n\
				<tr><td>Pushups</td>\n<td>" 		+ pushupset 	+ "</td><td>" 	+ pushupreps 	+ "</td><td>" 	+ pushupweight 	+ "</td></tr>\n\
				<tr><td>Bench Press</td>\n<td>" 		+ benchset 	+ "</td><td>" 	+ benchreps 	+ "</td><td>" 	+ benchweight 	+ "</td></tr>\n\
				<tr><td>Lunges</td>\n<td>" 		+ lungeset 	+ "</td><td>" 	+ lungereps 	+ "</td><td>" 	+ lungeweight 	+ "</td></tr>\n\
				<tr><td>Calf Raises</td>\n<td>" 		+ calveset 	+ "</td><td>" 	+ calvereps 	+ "</td><td>" 	+ calveweight 	+ "</td></tr>\n\
				<tr><td>Lifts</td>\n<td>" 		+ liftset 		+ "</td><td>" 	+ liftreps 	+ "</td><td>" 		+ liftweight 	+ "</td></tr>\n\
				<tr><td>Squats</td>\n<td>" 		+ squatset 	+ "</td><td>" 	+ squatreps 	+ "</td><td>" 	+ squatweight 	+ "</td></tr></table>\n";
				}	
	
	
	
//BELOW IS AN EXAMPLE OF DOM REPLACE
//var container = document.getElementById("container");
//var old = document.getElementById("input");
//var newdiv = document.getElementById("history");
//container.replaceChild(newdiv, old);

			document.getElementById('container').innerHTML = results;
		} else {
			alert('Cannot store saved list as your browser do not support local storage');
		}
	}

//DYNAMICALLY DRAW THE TABLE SHOWING ACTUAL PERFORMANCE IN WORKOUT
	function doShowWorkouts() {
		if (CheckBrowser()) {
			var dataArr= localStorage.getItem('WORKOUTS');
			dataArr=JSON.parse(dataArr);//THIS WILL RETURN A JAVASCRIPT ARRAY
			var results = "";
			var i = 0;
			for (i=0; i<=dataArr.length - 1; i++) {
							var curlset, tricepset, pushupset, benchset, lungeset, calveset, liftset, squatset,
					curlreps, tricepreps, pushupreps, benchreps, lungereps, calvereps, liftreps, squatreps,
					curlweight, tricepweight, pushupweight, benchweight, lungeweight, calveweight, liftweight, squatweight;
				curlset = dataArr[i]['curlset'];
                                tricepset = dataArr[i]['tricepset'];
                                pushupset = dataArr[i]['pushupset'];
                                benchset = dataArr[i]['benchset'];
                                lungeset = dataArr[i]['lungeset'];
                                calveset = dataArr[i]['calveset'];
                                liftset = dataArr[i]['liftset'];
                                squatset = dataArr[i]['squatset'];
						curlreps = dataArr[i]['curlreps'];
						tricepreps = dataArr[i]['tricepreps'];
						pushupreps = dataArr[i]['pushupreps'];
						benchreps = dataArr[i]['benchreps'];
						lungereps = dataArr[i]['lungereps'];
						calvereps = dataArr[i]['calvereps'];
						liftreps = dataArr[i]['liftreps'];
						squatreps = dataArr[i]['squatreps'];
							curlweight = dataArr[i]['curlweight'];
							tricepweight = dataArr[i]['tricepweight'];
							pushupweight = dataArr[i]['pushupweight'];
							benchweight = dataArr[i]['benchweight'];
							lungeweight = dataArr[i]['lungeweight'];
							calveweight = dataArr[i]['calveweight'];
							liftweight = dataArr[i]['liftweight'];
							squatweight = dataArr[i]['squatweight'];
				results += "<table><tbody><tr><th>Workouts " + (i + 1) + "</th><th>Sets</th><th>Reps</th><th>Weight</th></tr>\n\
				<tr><td>Curls</td>\n<td>" + curlset + "</td><td>" 	+ curlreps 	+ "</td><td>" 	+ curlweight 	+ "</td></tr>\n\
				<tr><td>Triceps</td>\n<td>" + tricepset + "</td><td>" 	+ tricepreps 	+ "</td><td>" 	+ tricepweight 	+ "</td></tr>\n\
				<tr><td>Pushups</td>\n<td>" 		+ pushupset 	+ "</td><td>" 	+ pushupreps 	+ "</td><td>" 	+ pushupweight 	+ "</td></tr>\n\
				<tr><td>Bench Press</td>\n<td>" 		+ benchset 	+ "</td><td>" 	+ benchreps 	+ "</td><td>" 	+ benchweight 	+ "</td></tr>\n\
				<tr><td>Lunges</td>\n<td>" 		+ lungeset 	+ "</td><td>" 	+ lungereps 	+ "</td><td>" 	+ lungeweight 	+ "</td></tr>\n\
				<tr><td>Calf Raises</td>\n<td>" 		+ calveset 	+ "</td><td>" 	+ calvereps 	+ "</td><td>" 	+ calveweight 	+ "</td></tr>\n\
				<tr><td>Lifts</td>\n<td>" 		+ liftset 		+ "</td><td>" 	+ liftreps 	+ "</td><td>" 		+ liftweight 	+ "</td></tr>\n\
				<tr><td>Squats</td>\n<td>" 		+ squatset 	+ "</td><td>" 	+ squatreps 	+ "</td><td>" 	+ squatweight 	+ "</td></tr></table>\n";
				}						
								
		
							
								
//BELOW IS AN EXAMPLE OF DOM REPLACE


	document.getElementById('container').innerHTML = results;
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
	}

//JS TO ZOOM IN AND OUT
	var fontSize = 1;
	function zoomIn() {
	  fontSize += 0.1;
	  document.body.style.fontSize = fontSize + "em";
	}
	function zoomOut() {
	  fontSize -= 0.1;
	  document.body.style.fontSize = fontSize + "em";
	}

//BD-FUNCTION TO COUNT WORKOUTS AND LOG DATES

	function clickCounter() {
		
		if(typeof(Storage) !== "undefined") {
			if (localStorage.clickcount) {
				localStorage.clickcount = Number(localStorage.clickcount)+1;
				var d = new Date();
			} else {
			    localStorage.clickcount = 1;
			}
		
		
		if ( !localStorage.getItem('workoutDates')) {
			var workoutDates = [];
		} else {
			  var workoutDates = JSON.parse(localStorage.getItem('workoutDates'));
		}
		
		var d = new Date();
		workoutDates.push(d);

		localStorage.setItem('workoutDates', JSON.stringify(workoutDates));
		var workoutDates = JSON.parse(localStorage.getItem('workoutDates'));

		var content = '<h3>Workout History</h3><ul>';
		for( var i = 0; i < workoutDates.length; i++ ) 
			content += '<li>'+ workoutDates[i] +'</li>'	;
			content += '</ul>';

		document.getElementById("container").innerHTML = content;
		document.getElementById("result").innerHTML = "Workout captured: ";
		document.getElementById("result1").innerHTML = d;
		document.getElementById("result2").innerHTML = "LIFETIME workouts logged: " + localStorage.clickcount;
	
		//BD-DISPLAYS ALERT MESSAGE EVERY FOURTH WORKOUT
		if (localStorage.clickcount % 4 === 0) {
		alert("You are a champion!  Keep up the great work!");}
		} else {
		document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
	}
}