        <div id="input">
            <p>Please input values for your recent workout.</p>
    
            <p>Curls: <input type="text" id="curls"></p>
	    <p>Tricep: <input type="text" id="triceps"></p>
            <p>Pushups: <input type="text" id="pushups"></p>
            <p>Bench Press: <input type="text" id="bench"></p>
            <p>Lunges: <input type="text" id="lunges"></p>
	    <p>Calf Raises: <input type="text" id="calves"></p>
            <p>Leg Lifts: <input type="text" id="lifts"></p>
            <p>Squats: <input type="text" id="squats"></p>
            <button class="wiggle" type = "button" onClick = "saveDataInLSLegs()">Store Results</button>
        </div>
        <div id="history" onClick="zoomIn()">
            <table id=output></table>
        </div>