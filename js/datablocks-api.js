(function() {
	'use strict';
	angular.module("datablocks").factory('datablocksApi',
			[ '$http', datablocksApi ]);

	function datablocksApi($http) {
		self.baseUrl = "";
		self.currentProject = {};
		self.projects = [];

		function getAllProjects(callback) {
			$http.get('api/project/').success(function(data){
				callback(data);
			});
		}

		function getProject(id,callback) {
			$http.get('api/project/'+id).success(function(data){
				callback(data);
			});
		}

		function insertProject(project,callback) {
			$http.post('api/project/',project).success(function(data){
				callback(data);
			});
		}
		function removeProject(id,callback) {
			$http.delete('api/project/'+id).success(function(data){
				callback(data);
			});
		}
		function updateProject(project,callback) {
			$http.put('api/project/'+project.id).success(function(data){
				callback(data);
			});
		}

		return {
			getAllProjects : getAllProjects,
			getProject : getProject,
			insertProject : insertProject,
			removeProject : removeProject,
			updateProject : updateProject
		}
	}

})();