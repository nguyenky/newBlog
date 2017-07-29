app = angular.module('app');
app.controller('MyAppCtrl',[
    '$scope',
    '$rootScope',
    '$http',
    'PublicService',
    '$sce',
    function($scope,$rootScope,$http,PublicService,$sce){
	$rootScope.name ="uchiha";
	// $scope.logout = function(){
	// 	Auth.logout();
	// }
    // if($localStorage.currentUser){
    //     $rootScope.avatar = $localStorage.currentUser.avatar;
    // }
    $scope.getPosts = function(){
        PublicService.getPosts().then(function(result){
            if(result &&result.success){
                $rootScope.postMain = result.data[0];
                $rootScope.postExtra1 = result.data[1];
                $rootScope.postExtra2 = result.data[2];
                $rootScope.postExtra3 = result.data[3];
                $rootScope.demo = result.data;


            }
        },function(errors){
            console.log(errors);
        });
    }
    $scope.getPosts();
    $scope.trustAsHtml = function(value) {
        return $sce.trustAsHtml(value);
    };
    $scope.getInstagram = function(){
        PublicService.getInstagram().then(function(result){
            if(result){
                console.log(result);
            }
        },function(errors){
            console.log(errors);
        })
    }
    $scope.getInstagram();
    
    
}]);
app.constant('baseurl', 'http://localhost/newBlog/api/')