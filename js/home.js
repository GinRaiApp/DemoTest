window.onload = function () {
  var chart = new CanvasJS.Chart("BarChartContainer", {
        title:{text: "Total Seat"},
        theme: "theme3",
        animationEnabled: true,
        toolTip: {
            shared: true
        },
        axisY: {
            title: "Seat"
        },
        axisX: {
            title: "Building"
        },
        data: [
            {
            type: "column",
            name: "Seat Total",
            legendText: "Seat Total",
            indexLabel: "{y}",
            showInLegend: true,
            dataPoints:[
              {label: "CP2", y: 690},
              {label: "TRUE2", y: 1868},
              {label: "KKN", y: 1327},
              {label: "ITALTHAI", y: 90},
            ]
          },
          {
            type: "column",
            name: "Null",
            legendText: "Null",
            showInLegend: true,
            dataPoints:[
              {label: "CP2", y: 100},
              {label: "TRUE2", y: 250},
              {label: "KKN", y: 180},
              {label: "ITALTHAI", y: 50},
            ]
          }
        ],

    legend:{
    cursor:"pointer",
    itemclick: function(e){
          if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
          }
          else {
            e.dataSeries.visible = true;
          }
            chart.render();
      }
    }
});
chart.render();

document.getElementById("adjust").addEventListener("click", function(e) {
    var a = document.getElementById("ipn1").value;
    var b = document.getElementById("ipn2").value;
    var c = document.getElementById("ipn3").value;
    var d = document.getElementById("ipn4").value;

    console.log(typeof a)
    chart.data[0].dataPoints[0].y = parseInt(a);
    chart.data[0].dataPoints[1].y = parseInt(b);
    chart.data[0].dataPoints[2].y = parseInt(c);
    chart.data[0].dataPoints[3].y = parseInt(d);
});
chart.render();


var chart = new CanvasJS.Chart("chartContainer2",
    {
      title:{text: "Computer"},
      data: [
      {
       type: "doughnut",
       dataPoints: [
       {  y: 53.37, indexLabel: "CP2" },
       {  y: 35.0, indexLabel: "TRUE2" },
       {  y: 7, indexLabel: "KKN" },
       {  y: 2, indexLabel: "ITALTHAI" },
       ]
     }
     ]

   });
chart.render();

var chart = new CanvasJS.Chart("chartContainer3",
    {
      title:{text: "AM"},
      data: [
      {
       type: "doughnut",
       dataPoints: [
       {  y: 53.37, indexLabel: "CP2" },
       {  y: 35.0, indexLabel: "TRUE2" },
       {  y: 7, indexLabel: "KKN" },
       {  y: 2, indexLabel: "ITALTHAI" },
       ]
     }
     ]

   });
chart.render();

var chart = new CanvasJS.Chart("chartContainer4",
    {
      title:{text: "HS"},
      data: [
        {
         type: "doughnut",
         dataPoints: [
             {  y: 53.37, indexLabel: "CP2" },
             {  y: 35.0, indexLabel: "TRUE2" },
             {  y: 7, indexLabel: "KKN" },
             {  y: 2, indexLabel: "ITALTHAI" },
         ]
       }
     ]
});

  chart.render();

var chart = new CanvasJS.Chart("LineGraphContainer",
{
    title:{
      text: "Number of Inventory",
      margin: 15
    },
    toolTip:{
      shared: true
    },
    axisX: {
      valueFormatString: "YYYY",
      intervalType: "year"
    },
    axisY:{

    },

    legend:{
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    data: [
    {
      type: "stackedArea",
      name: "Awaya",
      showInLegend: "true",
      dataPoints: [
        { x: new Date(2012, 00, 1), y: 1100 },
        { x: new Date(2012, 01, 1), y: 1200 },
        { x: new Date(2012, 02, 1), y: 1000},
        { x: new Date(2012, 03, 1), y: 1200 },
        { x: new Date(2012, 04, 1), y: 1600 },
      ]
    },
    {
      type: "stackedArea",
      name: "Headset",
      showInLegend: "true",
      dataPoints: [
        { x: new Date(2012, 00, 1), y: 150 },
        { x: new Date(2012, 01, 1), y: 171 },
        { x: new Date(2012, 02, 1), y: 155},
        { x: new Date(2012, 03, 1), y: 150 },
        { x: new Date(2012, 04, 1), y: 165 },
      ]
    },
    {
      type: "stackedArea",
      name: "Amplifies",
      showInLegend: "true",
      dataPoints: [
        { x: new Date(2012, 00, 1), y: 71 },
        { x: new Date(2012, 01, 1), y: 41 },
        { x: new Date(2012, 02, 1), y: 55},
        { x: new Date(2012, 03, 1), y: 50 },
        { x: new Date(2012, 04, 1), y: 65 },
      ]
    },

    {
      type: "stackedArea",
      name: "Computer",
      showInLegend: "true",
      dataPoints: [
          { x: new Date(2012, 00, 1), y: 861 },
          { x: new Date(2012, 01, 1), y: 761 },
          { x: new Date(2012, 02, 1), y: 775},
          { x: new Date(2012, 03, 1), y: 680 },
          { x: new Date(2012, 04, 1), y: 785 },
      ]
    },
    {
      type: "stackedArea",
      name: "Seat",
      showInLegend: "true",
      dataPoints: [
          { x: new Date(2012, 00, 1), y: 220 },
          { x: new Date(2012, 01, 1), y: 240 },
          { x: new Date(2012, 02, 1), y: 295},
          { x: new Date(2012, 03, 1), y: 300 },
          { x: new Date(2012, 04, 1), y: 265 },
      ]
    }

    ]
});
chart.render();
}
