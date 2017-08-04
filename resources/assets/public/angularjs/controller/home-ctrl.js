app = angular.module('app');
app.controller('HomeCtrl',[
    '$scope',
    '$rootScope',
    'PublicService',
    '$sce',
    function($scope,$rootScope,PublicService,$sce){
	$scope.name ="uchiha";
	// $scope.logout = function(){
	// 	Auth.logout();
	// }
    // if($localStorage.currentUser){
    //     $rootScope.avatar = $localStorage.currentUser.avatar;
    // }
    $scope.getNews = function(){
        PublicService.getNews().then(function(result){
            if(result &&result.success){
                console.log(result.data);
                angular.forEach(result.data, function(value, key) {
                        switch (value.category_id) {
                            case 1:
                                $scope.life = value;
                                $rootScope.latest.push(value);
                                break;
                            case 2:
                                $scope.childood = value;
                                $rootScope.latest.push(value);
                                break;
                            case 3:
                                $scope.trip = value;
                                $rootScope.latest.push(value);
                                break;
                            case 4:
                                $scope.history = value;
                                $rootScope.latest.push(value);
                                break;
                            case 5:
                                $scope.video = value;
                                break;
                            case 6:
                                $scope.music = value;
                                break;
                            default:
                        }
                });
                console.log($scope.life);
                    console.log($scope.childood);
                    console.log($scope.trip);
                    console.log($scope.history);
                    console.log($scope.video);
                    console.log($scope.music);
                // _.each(result.data,function(val){
                    // switch (val.category_id) {
                    //     case '1':
                    //         $scope.life = val;
                    //         break;
                    //     case '2':
                    //         $scope.childood = val;
                    //         break;
                    //     case '3':
                    //         $scope.trip = val;
                    //         break;
                    //     case '4':
                    //         $scope.history = val;
                    //         break;
                    //     case '5':
                    //         $scope.video = val;
                    //         break;
                    //     case '6':
                    //         $scope.music = val;
                    //         break;
                    //     default:
                    // }
                // });
                // console.log($scope.life);
                // console.log($scope.childood);
                // console.log($scope.trip);
                // console.log($scope.history);
                // console.log($scope.video);
                // console.log($scope.music);
                // $rootScope.postMain = result.data[0];
                // $rootScope.postExtra1 = result.data[1];
                // $rootScope.postExtra2 = result.data[2];
                // $rootScope.postExtra3 = result.data[3];
                // $rootScope.demo = result.data;


            }
        },function(errors){
            console.log(errors);
        });
    }
    $scope.getNews();
    $scope.trustAsHtml = function(value) {
        return $sce.trustAsHtml(value);
    };
    
    
}]);