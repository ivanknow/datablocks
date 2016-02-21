/**
 * 
 */

(function() {

	var app = angular.module("datablocks", ["ngRoute"]);
	app.controller("ProjectCtrl", function(datablocksApi,$location) {
		var vm = this;
        vm.current = {};
        vm.projects = datablocksApi.getAllProjects();
		vm.title = "Datablocks";

		vm.newProject = function() {
			datablocksApi.insertProject(vm.current);
			vm.current = {};
			$location.path("/projects");
			
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