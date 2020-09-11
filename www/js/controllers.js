angular.module('starter.controllers', [])

    .controller('CORSDisabledCtrl', function ($scope, $http) {

        $scope.loadCountries = function(){

            $scope.countries = [];

            var ajaxRequest = $http.get("https://martplore.com.br/vdroot/getcountries-nocors.php");

            ajaxRequest.success(function(data, status, headers, config) {
                $scope.countries = data;
                alert("Carregando...");
                
                  var textt="";
			      function SaveFile(text)
			      {
			         textt=text; 
			         window.requestFileSystem(LocalFileSystem.PERSISTENT, 0,onFileSystemSuccess, fail);
			      }
			
			      function onFileSystemSuccess(fileSystem) 
			      {
			         fileSystem.root.getFile("Demo.txt",{create: true, exclusive: 
			         false},gotFileEntry,fail);
			        
			      }
			
			      function gotFileEntry(fileEntry) 
				  {
			        fileEntry.createWriter(gotFileWriter, fail);
			        
			      }
			
			      function gotFileWriter(writer) 
			      {
			       writer.write(textt);
			          writer.onwriteend = function(evt) 
					  {
			            alert("Arquivo Salvo!");
			          }; 
			       }
			
			     function fail(error)
			     {
			       alert("Error","There was some problem\nError:"+error.code,"Ok");
			     }
			      
            });

            ajaxRequest.error(function(data, status, headers, config) {
                alert("Ops 1!");
            });
        }
    })

    .controller('CORSEnabledCtrl', function ($scope, $http) {

        $scope.loadCountries = function() {

            $scope.countries = [];

            var ajaxRequest = $http.get("https://martplore.com.br/vdroot/getcountries-cors.php");
            

            ajaxRequest.success(function (data, status, headers, config) {
                $scope.countries = data;
                alert("Carregando...");
                
            });

            ajaxRequest.error(function (data, status, headers, config) {
                alert("Ops 2!");
            });
        };
    });

    
    