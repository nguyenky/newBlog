app = angular.module('app');
app.controller('MyAppCtrl',[
    '$scope',
    '$rootScope',
    'Auth',
    '$http',
    '$localStorage',
    function($scope,$rootScope,Auth,$http,$localStorage){
	$rootScope.name ="uchiha";
	$scope.logout = function(){
		Auth.logout();
	}
    if($localStorage.currentUser){
        $rootScope.avatar = $localStorage.currentUser.avatar;
    }

    // $scope.getNews= function (){
    //     $http({
    //         url: 'http://yesforme.esy.es/api/admin/getAllNews',
    //         method: 'GET',
    //         headers: {
    //             'Authorization': 'eyJ0eXAiOiJKV1QiLCJhbGciOiJub25lIiwianRpIjoiNGYxZzIzYTEyYWEifQ.eyJpc3MiOiJodHRwOlwvXC8yc29saWQudm5cLyIsImF1ZCI6Imh0dHA6XC9cLzJzb2xpZC52blwvIiwianRpIjoiNGYxZzIzYTEyYWEiLCJpYXQiOjE1MTY1ODc5MDEsImV4cCI6MTUxNjY3NDMwMSwiaWQiOjEsImVtYWlsIjoiYWRtaW5AZ21haWwuY29tIn0.',
    //             'Content-Type': 'application/json'
    //         }
    //     }).then(function(result){
    //         console.log(result.data.data);
    //         $http({
    //             url: 'http://newblog.com/api/update',
    //             method: 'POST',
    //             data: result.data.data,
    //             headers: {
    //                 // 'Authorization': user.remember_token,
    //                 'Content-Type': 'application/json'
    //             }
    //         }).then(function(result){
                
    //         },function(error){
    //             console.log(error);
    //         });
    //     },function(error){
    //         console.log(error);
    //     });
    // }
    // $scope.getNews();
    
    
}]);
// app.constant('baseurl', 'http://localhost/newBlog/api/')
app.constant('baseurl', 'http://yesforme.herokuapp.com/api/')
// app.constant('baseurl', 'http://newblog.com/api/')