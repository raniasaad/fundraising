<head>
<style>
.canvasjs-chart-credit{color:white!important;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Total pledges"
	},
	animationEnabled: true,
	exportEnabled: true,
	/*axisY: {
		title: "Total pledges ($)",
		suffix: " $"
	},*/
	axisY: {
		title: "Total pledges ($)",
		includeZero: false,
		suffix: " $",
		tickLength: 0,
		gridDashType: "solid",
		stripLines: [{
			value: 1100,
			label: "Target",
			labelFontColor: "#FF0800",
			showOnTop: true,
			labelAlign: "center",
			color: "#FF0800"
		}]
	},
	id:'myCanvas',
	data: [{
		type: "column",	
		yValueFormatString: "#,### $",
		indexLabel: "{y}",
		dataPoints: [
			{ label: "One time", y: 206 },
			{ label: "Monthly", y: 163 }
		]
	}]
});

function updateChart() {
	var  deltaY, yVal1 , yVal2,d;
	var dps = chart.options.data[0].dataPoints;
//	setInterval(function() {
	$.ajax({    //create an ajax request to display.php
      //  type: "GET",
        url: "display.php",  
		cache: false,
        //   dataType: 'json',
            complete: function(data) {
 console.log('sent');
 pos=data.responseText.indexOf("/");
  data1=data.responseText.substr(0, pos);
  data2=data.responseText.substr( pos+1,data.responseText.length);
  
  d1=parseInt(data1);  
  d2=parseInt(data2);  

// $("#responsecontainer").html('data'+data.responseText); 

//var obj = JSON.parse(data.responseText);

//deltaY = Math.round(2 + Math.random() *(-2-2));
		//deltaY = d;
		//yVal1 = d + dps[0].y > 0 ? dps[0].y + d : 0;
	//	yVal1 =  d + dps[0].y > 0 ? dps[0].y + d : 0;
		//yVal2 = deltaY + dps[1].y > 0 ? dps[1].y + deltaY : 0;
		
		dps[0] = {label: "One time " , y: d1, color: 'blue'};
		dps[1] = {label: "Monthly " , y: d2, color: 'red'};

	chart.options.data[0].dataPoints = dps; 
	chart.render();

}	/*,	
      //dataType: "html",   //expect html to be returned  
           success: function(response){
var seconds = new Date().getTime() / 1000;		   
		   response=response+seconds;
           $("#responsecontainer").html(response); 
		   //$("#responsecontainer").html(data); 
		//alert(document.getElementById('id1'));
        }*/

    });
	//}, 5000);
		
}
updateChart();

setInterval(function() {updateChart()}, 500);
   canvas = document.getElementsByClassName('canvasjs-chart-canvas');
     // var context = canvas.getContext('2d');
	  var context = canvas[0].getContext("2d");
	 
context.save();

// Use the identity matrix while clearing the canvas
context.setTransform(1, 0, 0, 1, 0, 0);
context.clearRect(0, 0,100, canvas.height);

// Restore the transform
context.restore();
	 	 
		  // };
}
</script>
</head>
@extends('layouts.app')

@section('content')
<div class="container">
<style>
.container a{color:white!important; }
</style>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>

<div id="responsecontainer" align="center">
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	</div>
@endsection