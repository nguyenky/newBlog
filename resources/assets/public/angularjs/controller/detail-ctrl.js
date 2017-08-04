app = angular.module('app');
app.controller('DetailCtrl',[
    '$scope',
    '$rootScope',
    '$http',
    'PublicService',
    '$sce',
    '$stateParams',
    function($scope,$rootScope,$http,PublicService,$sce,$stateParams){
	$rootScope.name ="uchiha";
    // if($localStorage.currentUser){
    //     $rootScope.avatar = $localStorage.currentUser.avatar;
    // }
    console.log($stateParams);
    $scope.likes = false;
    $scope.getPost = function(id){
        PublicService.getNew(id).then(function(result){
            if(result &&result.success){
                $scope.post = result.data;
                console.log(result.data);
            }
        },function(errors){
            console.log(errors);
        });
    }
    $scope.getPost($stateParams.Id);
    $scope.like = function(id){
        // $scope.like = true;
        if($scope.likes){
            $scope.post.likes--;
            PublicService.unLike(id);
            $scope.likes = false;
        }else{
            $scope.post.likes++;
            PublicService.like(id);
            $scope.likes = true;
        }
        
    }
    $scope.trustAsHtml = function(value) {
        return $sce.trustAsHtml(value);
    };
}]);
