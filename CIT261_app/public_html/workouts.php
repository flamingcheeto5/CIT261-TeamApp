        <div id="input">
            <p>Please input values for your recent workout.<p>
    
            <label>Curls:</label><input type="number" id="curls" max="999" min="0"><input type="number" id="curlset" max="99" min="0"><br/>
	    <label>Tricep:</label><input type="number" id="triceps" max="999" min="0"><input type="number" id="tricepset" max="99" min="0"><br/>
            <label>Pushups:</label><input type="number" id="pushups" max="999" min="0"><input type="number" id="pushupset" max="99" min="0"><br/>
            <label>Bench Press:</label><input type="number" id="bench" max="999" min="0"><input type="number" id="benchset" max="99" min="0"><br>
            <label>Lunges:</label><input type="number" id="lunges" max="999" min="0"><input type="number" id="lungeset" max="99" min="0"><br>
	    <label>Calf Raises:</label><input type="number" id="calves" max="999" min="0"><input type="number" id="calvleset" max="99" min="0"><br>
            <label>Leg Lifts:</label><input type="number" id="lifts" max="999" min="0"><input type="number" id="liftset" max="99" min="0"><br>
            <label>Squats:</label><input type="number" id="squats" max="999" min="0"><input type="number" id="squatset" max="99" min="0"><br>
            <button class="wiggle" type = "button" onClick = "saveDataInLSWorkouts()">Store Results</button>
        </div>
        <div id="history" onClick="zoomIn()">
            <table id=output></table>
        </div>