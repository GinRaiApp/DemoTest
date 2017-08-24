window.onload = function () {

	//Annual Report
var chart = new CanvasJS.Chart("LineGraphContainer",
{
    title:{
      text: "Number of Inventory",
      margin: 15
    },
    theme: "theme2",
      animationEnabled: true,
      axisX: {
        valueFormatString: "YYYY",
        interval : 1,
        intervalType: "year"
      },

    legend:{
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },

    data: [
    {
      type: "stackedArea",
      name: "Awaya",
      showInLegend: true,
      dataPoints: [
        { x: new Date(2013, 00, 1), y: 1100 },
        { x: new Date(2014, 00, 1), y: 1200 },
        { x: new Date(2015, 00, 1), y: 1000},
        { x: new Date(2016, 00, 1), y: 1200 },
        { x: new Date(2017, 00, 1), y: 1600 }
      ]
    },
    {
      type: "stackedArea",
      name: "Headset",
      showInLegend: true,
      dataPoints: [
        { x: new Date(2013, 00, 1), y: 150 },
        { x: new Date(2014, 00, 1), y: 171 },
        { x: new Date(2015, 00, 1), y: 155},
        { x: new Date(2016, 00, 1), y: 150 },
        { x: new Date(2017, 00, 1), y: 165 }
      ]
    },
    {
      type: "stackedArea",
      name: "Amplifies",
      showInLegend: true,
      dataPoints: [
        { x: new Date(2013, 00, 1), y: 71 },
        { x: new Date(2014, 00, 1), y: 41 },
        { x: new Date(2015, 00, 1), y: 55},
        { x: new Date(2016, 00, 1), y: 50 },
        { x: new Date(2017, 00, 1), y: 65 }
      ]
    },

    {
      type: "stackedArea",
      name: "Computer",
      showInLegend: true,
      dataPoints: [
          { x: new Date(2013, 00, 1), y: 861 },
          { x: new Date(2014, 00, 1), y: 761 },
          { x: new Date(2015, 00, 1), y: 775},
          { x: new Date(2016, 00, 1), y: 680 },
          { x: new Date(2017, 00, 1), y: 785 }
      ]
    },
    {
      type: "stackedArea",
      name: "Seat",
      showInLegend: true,
      dataPoints: [
          { x: new Date(2013, 00, 1), y: 220 },
          { x: new Date(2014, 00, 1), y: 240 },
          { x: new Date(2015, 00, 1), y: 295},
          { x: new Date(2016, 00, 1), y: 300 },
          { x: new Date(2017, 00, 1), y: 265 }
      ]
    }

    ]
});
chart.render();

//	Seat Report
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
              {label: "ITALTHAI", y: 90 },
              {label: "KKN", y: 1327},
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
              {label: "ITALTHAI", y: 50},
              {label: "KKN", y: 180},
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



function makeChart(){
  var a = document.getElementById("ipn1").value;
  var b = document.getElementById("ipn2").value;
  var c = document.getElementById("ipn3").value;
  var d = document.getElementById("ipn4").value;

  console.log(typeof a)
  var getA = parseInt(a);
  var getB = parseInt(b);
  var getC = parseInt(c);
  var getD = parseInt(d);

  chart = new CanvasJS.Chart("BarChartContainer", {
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
              {label: "CP2", y: getA},
              {label: "TRUE2", y: getB},
              {label: "ITALTHAI", y: getC },
              {label: "KKN", y: getD},
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
              {label: "ITALTHAI", y: 50},
              {label: "KKN", y: 180},
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
}
//click button call function makechart
var runButton = document.getElementById("adjust");
runButton.addEventListener("click", makeChart);






//Devices Report
var chart = new CanvasJS.Chart("chartContainer2",
    {
      title:{text: "Computer"},
      data: [
      {
       type: "doughnut",
       dataPoints: [
       {  y: 15, indexLabel: "CP2" },
       {  y: 50, indexLabel: "TRUE2" },
       {  y: 5, indexLabel: "ITALTHAI" },
       {  y: 30, indexLabel: "KKN" },
       ]
     }
     ]

   });
chart.render();

var chart = new CanvasJS.Chart("chartContainer3",
    {
      title:{text: "Amplifier"},
      data: [
      {
       type: "doughnut",
       dataPoints: [
       {  y: 15, indexLabel: "CP2" },
       {  y: 50, indexLabel: "TRUE2" },
       {  y: 5, indexLabel: "ITALTHAI" },
       {  y: 30, indexLabel: "KKN" },
       ]
     }
     ]

   });
chart.render();

var chart = new CanvasJS.Chart("chartContainer4",
    {
      title:{text: "Headset"},
      data: [
        {
         type: "doughnut",
         dataPoints: [
         {  y: 15, indexLabel: "CP2" },
         {  y: 50, indexLabel: "TRUE2" },
         {  y: 5, indexLabel: "ITALTHAI" },
         {  y: 30, indexLabel: "KKN" },
         ]
       }
     ]
});

  chart.render();




//Devices Report
    var chart = new CanvasJS.Chart("100chartContainer",
    {
      title:{
      text: "Number of Overview"
      },

      data: [
      {
        type: "stackedColumn100",
        dataPoints: [
        {  y: 40, label: "CP2"},
        {  y: 10, label: "ITALTHAI" },
        {  y: 72, label: "TRUE2" },
        {  y: 30, label: "KKN" },

        ]
      }, {
        type: "stackedColumn100",
        dataPoints: [
        {  y: 40, label: "CP2"},
        {  y: 10, label: "ITALTHAI" },
        {  y: 72, label: "TRUE2" },
        {  y: 30, label: "KKN" },

        ]
      },
	    {
        type: "stackedColumn100",
        dataPoints: [
        {  y: 40, label: "CP2"},
        {  y: 10, label: "ITALTHAI" },
        {  y: 72, label: "TRUE2" },
        {  y: 30, label: "KKN" },

        ]
      },
		  {
        type: "stackedColumn100",
        dataPoints: [
        {  y: 40, label: "CP2"},
        {  y: 10, label: "ITALTHAI" },
        {  y: 72, label: "TRUE2" },
        {  y: 30, label: "KKN" },
        ]
      }


      ]
    });

    chart.render();
  }