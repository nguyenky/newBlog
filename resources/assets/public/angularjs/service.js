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
            function getNews (){
                var deferred = $q.defer();
                $http({
                    url: baseurl+'public/getNewsPublic',
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
            // user_id = 2293866932
            //access_token = 2293866932.1677ed0.5fb0088e7ad44161a69a2de237d04fa7
            function getInstagram (){
                var deferred = $q.defer();
                $http({
                    url: 'https://api.instagram.com/v1/users/2293866932/media/recent/?access_token=2293866932.1677ed0.5fb0088e7ad44161a69a2de237d04fa7',
                    method: 'GET',
                    headers: {
                        // 'Access-Control-Allow-Origin': '*'
                        "Access-Control-Allow-Headers": "X-Requested-With, Content-Type, Accept"
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
        getPosts:getPosts,
        getNews:getNews,
        getInstagram:getInstagram
	};
}])