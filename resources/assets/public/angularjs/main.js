app = angular.module('app');
app.controller('MyAppCtrl',[
    '$scope',
    '$rootScope',
    '$http',
    'PublicService',
    '$sce',
    'Facebook',
    '$localStorage',
    function($scope,$rootScope,$http,PublicService,$sce,Facebook,$localStorage){
	$rootScope.name ="uchiha";
    if($localStorage.userLogin){
        $rootScope.userLogin = $localStorage.userLogin;
        $scope.loginStatus = true;
        console.log($localStorage.userLogin);
    }else{
        $rootScope.userLogin = {
            id:null,
            name:null,
            avatar:null
        }
        $scope.loginStatus = false;

    }
    $scope.logout = function(){
        $rootScope.userLogin = {
            id:null,
            name:null,
            avatar:null
        };
        $rootScope.userLogin = null;
        $scope.loginStatus = false;
    }
    $scope.login = function() {
      // From now on you can use the Facebook service just as Facebook api says
      Facebook.login(function(response) {
        $scope.me();
      });
    };
    $scope.me = function() {
      Facebook.api('/me', function(response) {
        if(!response.error){
            $rootScope.userLogin = response;
            $localStorage.userLogin = response;
            $scope.loginStatus = true;
            console.log(response);
        }
        
      });
      Facebook.api('/me/picture', function(response) {
        if(!response.error){
            $rootScope.userLogin.avatar = response.data.url;
            $localStorage.userLogin.avatar = response.data.url
            console.log(response);
        }
        
      });
      
    };
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
    $scope.getInstagram = function(){
        PublicService.getInstagram().then(function(result){
            if(result && result.success){
                // console.log(result);
                $rootScope.instagrams = result.data;
            }
        },function(errors){
            console.log(errors);
        })
    }
    $scope.getInstagram();

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
app.constant('baseurl', 'http://localhost/newBlog/api/')