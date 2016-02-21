/**
 * 
 */

(function() {

	var app = angular.module("datablocks", ["ngRoute"]);
	app.controller("ProjectCtrl", function(datablocksApi,$location) {
		var vm = this;
        vm.current = {};
        vm.projects = [];
		vm.title = "Datablocks";
		vm.description = "English:Create your domain classes using forms, once created, generate code for your platform program language";
		vm.descriptionptbr = "Portugês:Crie suas classes de domínio usando formulários, uma vez criadas , gere código para a sua plataforma de linguagem de programação";

		vm.newProject = function() {
			datablocksApi.insertProject(vm.current,function(result){
				vm.current = {};
				$location.path("/projects");
			});
			
			
		}

		
		datablocksApi.getAllProjects(function(data){
			vm.projects = data;
		});
		

	});
	
	app.controller("SelectedProjectCtrl", function(datablocksApi,$location,$routeParams) {
		this.params = $routeParams;
		this.id = this.params.id;
		var vm = this;
		vm.project = {}
		datablocksApi.getProject(vm.id,function(data){
			vm.project = data;
			console.log(vm.project);
		});
		
	});
	
	
	app.controller("ClassCtrl", function(datablocksApi,$location,$routeParams) {
		var vm = this;
		vm.current = {"id":0,"name":"","attrs":[],"methods":[]};
		
		vm.add = function(){}
		vm.remove = function() {

		}

	});

})()