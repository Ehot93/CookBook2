var app = angular.module("App", []);
	app.controller("AppCont", function($scope){
		$scope.ShowButtons = function(){
			console.log('angular work');
		}

	})


// (function(){
// 	'use strict';
// 	angular
// 	.module('app', [])

// 	.controller('AppCont', ['$scope', function($scope){

// 	}])
// 	$scope.show = function(){
// 		// $scope.style.visibility = visible;
// 		GetElementByClass("btnh").style.visibility = visible;
// 	}
// } ) ();