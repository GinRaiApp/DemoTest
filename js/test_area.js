 window.onload = function () {
 google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Seat', 'Company','Heatset','Amplifier','Expenses'],
		  
          ['2013',  1000,      400, 	500 , 		22, 	333],
          ['2014',  1170,      460, 	100 , 		40, 	554],
          ['2015',  660,       1120,	544, 		34, 	435],
          ['2016',  1030,      540,		543, 		32, 	454],
		  ['2017',  1000,      400,		234,		50,		987]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }