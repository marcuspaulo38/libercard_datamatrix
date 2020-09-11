angular.module('starter.controllers', [])

    .controller('CORSDisabledCtrl', function ($scope, $http) {

        $scope.loadCountries = function(){

            $scope.countries = [];

            var ajaxRequest = $http.get("http://localhost/ListaPaisesPhpMysql/templates/getcountries-nocors.php");

            ajaxRequest.success(function(data, status, headers, config) {
                $scope.countries = data;
                alert("Carregando...");
            });

            ajaxRequest.error(function(data, status, headers, config) {
                alert("Ops!");
            });
        }
    })

    .controller('CORSEnabledCtrl', function ($scope, $http) {

        $scope.loadCountries = function() {

            $scope.countries = [];

            var ajaxRequest = $http.get("http://localhost/ListaPaisesPhpMySql/www/templates/getcountries-cors.php");

            ajaxRequest.success(function (data, status, headers, config) {
                $scope.countries = data;
                alert("Carregando...");
            });

            ajaxRequest.error(function (data, status, headers, config) {
                alert("Ops!");
            });
        };
    });
