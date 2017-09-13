/**
 * Created by user on 7/24/17.
 */

var automateApp = angular.module('automateApp', [ ]);

automateApp.controller('automateController', ['$scope', '$http', function($scope, $http){

        $scope.qty = 1;
        $scope.course_fee = 0;
        $scope.discount = 0;
        $scope.unit_price = 0;
        $scope.payment = 0;

}])