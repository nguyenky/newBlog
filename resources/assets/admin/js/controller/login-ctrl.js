app = angular.module('app');
app.controller('LoginCtrl',[
    '$scope',
    '$rootScope',
    '$http',
    '$state',
    'Auth',
    function($scope,$rootScope,$http,$state,Auth){
    $scope.isShowError = false;

	$scope.login = function(user){
		Auth.login($scope.user.email, $scope.user.password)
                    .then(function(result) {
                        if(result){
							$state.go('admin.dashboard');
                            $scope.getAvatar();
                        }
                    }, function(error) {
                        if(error && error.data && error.data.message){
                            $scope.isShowError = true;
                            $scope.error = error.data.message;
                        }
                    });
	}
    $scope.getAvatar = function(){
        $http({
                url: 'http://newblog.com/api/getProfile/1',
                method: 'GET',
            }).then(function(result){
                if(result && result.data.success){
                    // console.log(result.data.data.avatar);
                    $rootScope.avatar = result.data.data.url;
                }
            },function(error){
                console.log(error);
            });
    }
}]);