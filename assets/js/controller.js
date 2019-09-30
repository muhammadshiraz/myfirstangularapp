/* Records Array Controller */
var app = angular.module("recordsApp", []);

app.controller("recordsCtrl", function($scope) {
    $scope.records = [
        "Pakistan",
        "India",
        "Canada",
        "Germany",
        "France",
        "USA",
        "London",
        "UAE"
    ]
});