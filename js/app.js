/**
 * 
 */

(function() {

	var app = angular.module("datablocks", []);
	app.controller("ProjectCtrl", function(datablocksApi) {
		var vm = this;

        vm.projects = datablocksApi.getAllProjects();
		vm.title = "Datablocks";

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