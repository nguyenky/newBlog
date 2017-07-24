angular.module('app')
	.factory('PublicService', [
        '$http',
        'baseurl',
        '$q',
        function($http,baseurl,$q){
            function getPosts (){
                var deferred = $q.defer();
                $http({
                    url: baseurl+'public/getPostPublic',
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                }).then(function(result){
                    if(result && result.data.success){
                        deferred.resolve(result.data);
                    }
                },function(error){
                    console.log(error);
                });
                return deferred.promise;
            }
	return {
        getPosts:getPosts
	};
}])