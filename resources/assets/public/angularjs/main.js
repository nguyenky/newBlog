app = angular.module('app');
app.controller('MyAppCtrl',[
    '$scope',
    '$rootScope',
    '$http',
    'PublicService',
    '$sce',
    function($scope,$rootScope,$http,PublicService,$sce){
	$rootScope.name ="uchiha";
    // if($localStorage.currentUser){
    //     $rootScope.avatar = $localStorage.currentUser.avatar;
    // }
    $rootScope.latest = [];
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
    $scope.getProfile = function(){
        PublicService.getProfile().then(function(result){
            if(result &&result.success){
                $rootScope.profile = result.data;
                console.log(result.data);
            }
        },function(errors){
            console.log(errors)
        })
    }
    $scope.getProfile();
    $scope.countCategory = function(){
        PublicService.countCategory().then(function(result){
            if(result &&result.success){
                $rootScope.categories = result.data;
                console.log(result.data);
            }
        },function(errors){
            console.log(errors)
        })
    }
    $scope.getProfile();
    $scope.countCategory();
    $scope.trustAsHtml = function(value) {
        return $sce.trustAsHtml(value);
    };
    // $scope.getInstagram = function(){
    //     PublicService.getInstagram().then(function(result){
    //         if(result){
    //             console.log(result);
    //         }
    //     },function(errors){
    //         console.log(errors);
    //     })
    // }
    // $scope.getInstagram();

    // $scope.getLocation = function() {
    //     if (navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(function (position){
    //                 mysrclat = position.coords.latitude; 
    //               mysrclong = position.coords.longitude;
    //               console.log(mysrclat);
    //               console.log(mysrclong);
    //         });
    //     }
    // }

    // $scope.getLocation();
    
    
}]);
app.constant('baseurl', 'http://newblog.dev/api/')