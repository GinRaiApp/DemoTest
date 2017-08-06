var app = angular.module("myApp",[]);
app.controller("myCtrl",function($scope,$http){

  $scope.displayData = function(){
    $http.get("http://localhost:8888/inventory_demo/php/select.php").then(function(res){
      $scope.names = res.data.records;
    });
  }

});
