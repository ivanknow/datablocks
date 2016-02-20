/**
 * 
 */

(function() {

	var app = angular.module("datablocks", []);
	app.controller("ProjectCtrl", function() {
		var vm = this;

		vm.title = "Hello Datablocks - Front-end just tomorrow";

		vm.add = function() {
			
		}

		vm.getById = function(id) {

		}

		vm.get = function() {

		}

	});
	app.controller("ClassCtrl", function() {
		var vm = this;
		vm.current = {"id":0,"name":"","attrs":[],"methods":[]};
		
		vm.add = function(){}
		vm.remove = function() {

		}

	});

})()