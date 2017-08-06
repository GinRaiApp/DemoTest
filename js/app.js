var app = angular.module("myApp",[]);
app.controller("myCtrl",function($scope,$http){

  $scope.displayData = function(){
    $http.get("http://localhost:8888/demo/php/select.php").then(function(res){
      $scope.seat = res.data;
      console.log(JSON.stringify($scope.seat))
      BarChart($scope.seat);
    });
  }

});

function BarChart(dataTest){
  var ch = JSON.stringify(dataTest)
  console.log(ch)
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
            dataPoints:dataTest
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
