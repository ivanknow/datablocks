(function() {
	
	
angular.module('datablocks').config(function($routeProvider){
		$routeProvider.when("/projects",{
			templateUrl:"views/projects.html"
		});
		$routeProvider.when("/newproject",{
			templateUrl:"views/new-project.html"
		});
		$routeProvider.when("/project/:id",{
			templateUrl : "views/project.html",
			
		});
		
		$routeProvider.otherwise({redirectTo:"/projects"});
	});
	
})();