        <div id="input">
            <p>Please input values for your leg exercises.</p>
    
            <p>Lunges: <input type="text" id="lunges"></p>
			<p>Calf Raises: <input type="text" id="calves"></p>
            <p>Leg Lifts: <input type="text" id="lifts"></p>
            <p>Squats: <input type="text" id="squats"></p>
            <button class="wiggle" type = "button" onClick = "saveDataInLSLegs()">Store Results</button>
        </div>
        <div id="history" onClick="zoomIn()">
            <table id=output></table>
        </div>