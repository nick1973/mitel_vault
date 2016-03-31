var helloApp = angular.module("helloApp", []);
helloApp.controller("CompanyCtrl", function($scope, $http) {

    $http.get("/test")
        .then(function (response) {
            $scope.bonds = response.data;
            //Console.log(response.data);
        });

    //$scope.bonds = [];
    $scope.addRow = function(){
        $scope.bonds.push({ 'products':$scope.products, 'codes': $scope.codes, 'qtys':$scope.qtys, 'eup':$scope.eup, 'bonus':$scope.bonus });
        $scope.products='';
        $scope.codes='';
        $scope.qtys='';
        $scope.eup='';
        $scope.bonus='';
    };

    $scope.removeRow = function(products){
        var index = -1;
        var comArr = eval( $scope.bonds );
        for( var i = 0; i < comArr.length; i++ ) {
            if( comArr[i].products === products ) {
                index = i;
                break;
            }
        }
        //if( index === -1 ) {
        //    alert( "Something gone wrong" );
        //}
        $scope.bonds.splice( index, 1 );
    };



});