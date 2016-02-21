(function() {
	'use strict';
	angular.module("datablocks").factory('datablocksApi',
			[ '$http',datablocksApi ]);
			
			function datablocksApi($http) {
			    self.currentProject = {};
			    self.projects = [{"id":1,"name":"P1"},{"id":2,"name":"P2"}];
			    
			    function getAllProjects(){
			        
			      return  self.projects;  
			    }
			    
			    function getProject(id){
			      return self.projects[0];  
			    }
			    
			     function insertProject(project){
			         project.id = self.projects.length;
			         self.projects.push(project);
			    }
			    function removeProject(id){
			      return {};  
			    }
			    function updateProject(project){
			      return {};  
			    }
			    
			    return {
			        getAllProjects:getAllProjects,
			        getProject:getProject,
			        insertProject:insertProject,
			        removeProject:removeProject,
			        updateProject:updateProject
			    }
            }
			
			
})();