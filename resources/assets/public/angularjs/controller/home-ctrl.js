app = angular.module('app');
app.controller('HomeCtrl',[
    '$scope',
    '$rootScope',
    'PublicService',
    '$sce',
    function($scope,$rootScope,PublicService,$sce){
	$scope.name ="uchiha";
    $rootScope.showPosts = true;
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
                                $scope.chilhood = value;
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