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
    
    
}]);
// app.constant('baseurl', 'http://localhost/newBlog/api/')
app.constant('baseurl', 'https://yesforme.herokuapp.com/api/')
// app.constant('baseurl', 'http://newblog.com/api/')