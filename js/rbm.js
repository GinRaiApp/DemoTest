var myApp = angular.module("myApp", []);
myApp.controller("RbmCtrl", function($scope){
  $scope.HeaderTable = [
    {
        build: "อาคาร",
        ground: "พื้นที่รวม (ตร.ม.)",
        seat: "จำนวนที่นั่ง",
        rent_ground: "ค่าเช่าพื้นที่ (บาท/ตร.ม.)",
        service: "ค่าบริการ (บาท/ตร.ม.)",
        service_add: "ค่าบริการส่วนเพิ่ม",
        furniture: "ค่าเช่าเฟอร์นิเจอร์ (บาท/ตร.ม.)",
        service_ip: "ค่าบริการIP (บาท/ตร.ม.)",
        special_service: "ค่าบริการพิเศษ (บาท/ตร.ม.)",
        rent_gent: "ค่าเช่าGen/UPS(บาท/ตร.ม.)",
        electric: "ค่าไฟฟ้า (บาท/unit)",
        ot: "ค่าโอที (บาท/Hr)",
        water: "ค่าน้ำ (บาท/unit)",
        total: "รวมอัตราค่าเช่าบริการ (บาท/ตร.ม./เดือน)",
        avg_rent: "AVG อัตราค่าเช่าบริการ",
        average_seat: "Average seat per sqm",
        cost_seat: "Cost per Seat"
    }
  ];
      $scope.addRow = function(){
        console.log('test')
        $scope.addrow.push({
          'name':$scope.names,
          'build': $scope.builds,
          'ground': $scope.grounds,
          'seat': $scope.seats,
          'rent_ground': $scope.rent_grounds,
          'service': $scope.services,
          'service_add': $scope.service_adds,
          'furniture': $scope.furnitures,
          'service_ip': $scope.service_ips,
          'special_service': $scope.special_services,
          'rent_gent': $scope.rent_gents,
          'electric': $scope.electrics,
          'ot': $scope.ots,
          'water': $scope.waters,
          'total': $scope.totals,
          'avg_rent': $scope.avg_rents,
          'average_seat': $scope.average_seats,
          'cost_seat': $scope.cost_seats
        });
        $scope.builds= '',
        $scope.grounds= '',
        $scope.seats= '',
        $scope.rent_grounds= '',
        $scope.services= '',
        $scope.service_adds= '',
        $scope.furnitures= '',
        $scope.service_ips= '',
        $scope.special_services= '',
        $scope.rent_gents= '',
        $scope.electrics= '',
        $scope.ots= '',
        $scope.waters= '',
        $scope.totals= '',
        $scope.avg_rents= '',
        $scope.average_seats= '',
        $scope.cost_seats= ''
      };
});
