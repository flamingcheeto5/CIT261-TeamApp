<div id="input">
	<p>Please enter GOAL values for your workout.<p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SETS&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REPS&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WEIGHT<p>
	<label>Curls:</label><input type="number" id="curlset" max="999" min="0"><input type="number" id="curlreps" max="99" min="0"><input type="number" id="curlweight" max="99" min="0"><br/>
	<label>Tricep:</label><input type="number" id="tricepset" max="999" min="0"><input type="number" id="tricepreps" max="99" min="0"><input type="number" id="tricepweight" max="99" min="0"><br/>
	<label>Pushups:</label><input type="number" id="pushupset" max="999" min="0"><input type="number" id="pushupreps" max="99" min="0"><input type="number" id="pushupweight" max="99" min="0"><br/>
	<label>Bench Press:</label><input type="number" id="benchset" max="999" min="0"><input type="number" id="benchreps" max="99" min="0"><input type="number" id="benchweight" max="99" min="0"><br>
	<label>Lunges:</label><input type="number" id="lungeset" max="999" min="0"><input type="number" id="lungereps" max="99" min="0"><input type="number" id="lungeweight" max="99" min="0"><br>
	<label>Calf Raises:</label><input type="number" id="calveset" max="999" min="0"><input type="number" id="calvereps" max="99" min="0"><input type="number" id="calveweight" max="99" min="0"><br>
	<label>Leg Lifts:</label><input type="number" id="liftset" max="999" min="0"><input type="number" id="liftreps" max="99" min="0"><input type="number" id="liftweight" max="99" min="0"><br>
	<label>Squats:</label><input type="number" id="squatset" max="999" min="0"><input type="number" id="squatreps" max="99" min="0"><input type="number" id="squatweight" max="99" min="0"><br>
	<button class="wiggle" type = "button" onClick = "saveDataInLSGoals()">Store Results</button>
</div>
<div id="history" onClick="zoomIn()">
	<table id=output></table>
</div>