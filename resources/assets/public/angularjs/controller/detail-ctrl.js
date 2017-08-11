app = angular.module('app');
app.controller('DetailCtrl',[
    '$scope',
    '$rootScope',
    '$http',
    'PublicService',
    '$sce',
    '$stateParams',
    'baseurl',
    function($scope,$rootScope,$http,PublicService,$sce,$stateParams,baseurl){
	if($rootScope.loginStatus){
        var friend = $rootScope.userLogin.name;
    }else{
        var friend = 'A friend';
    }
    // if($localStorage.currentUser){
    //     $rootScope.avatar = $localStorage.currentUser.avatar;
    // }
    $rootScope.showPosts = false;

    // console.log($stateParams);
    $scope.likes = false;
    $scope.comment = null;
    $scope.getPost = function(id){
        PublicService.getNew(id).then(function(result){
            if(result &&result.success){
                $scope.post = result.data;
                console.log(result.data);
                var dataEnter = {
                    content:friend + '  accessed your post - '+result.data.name+' !!!',
                    type:1
                };
                $scope.insertNoti(dataEnter);
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
            var dataEnter = {
                content:friend + ' unliked your post - '+$scope.post.name,
                type:4,news_id:$scope.post.id
            };
            $scope.insertNoti(dataEnter);
        }else{
            $scope.post.likes++;
            PublicService.like(id);
            $scope.likes = true;
            var dataEnter = {
                content:friend + ' unliked your post - '+$scope.post.name,
                type:4,
                news_id:$scope.post.id
            };
            $scope.insertNoti(dataEnter);
        }
        
    }
    $scope.pushComment = function(){
        // console.log($scope.comment);Your
        if($rootScope.loginStatus){
            $scope.comment.name = $rootScope.userLogin.name;
            $scope.comment.avatar = $rootScope.userLogin.avatar;
        }else{
            $scope.comment.avatar = null;
        }
        
        if(!$scope.comment.name | !$scope.comment.content){
            alert('Please enter your message :) !!!');
            $scope.allowCMT = false;
        }else{
            $scope.allowCMT = true;
        }
        $scope.comment.news_id = $scope.post.id;
        if($scope.allowCMT){
            PublicService.createComment($scope.comment).then(function(result){
                if(result && result.success){
                    $scope.post.comments.push($scope.comment);
                    $scope.comment = null;
                    var dataEnter = {
                        content:friend + ' commented on your post - '+$scope.post.name,
                        type:3,
                        news_id:$scope.post.id
                    };
                    $scope.insertNoti(dataEnter);
                }
            },function(errors){
                console.log(errors);
                $scope.comment = null;
            })
        }
        
        
    }
    $scope.insertNoti = function(data){
        PublicService.insertNoti(data);
    }
    
    $scope.trustAsHtml = function(value) {
        return $sce.trustAsHtml(value);
    };
}]);
