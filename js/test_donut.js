window.onload = function () {
	  google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['TRUE2',     11],
          ['CP2',      50],
          ['ITALTHAL',  2],
          ['KKN', 2],
         ]);

        var options = {
          title: 'Computer',
          pieHole: 0.4,
        };

		
	  
	  
	  
}