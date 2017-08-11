app = angular.module('app',[
	'angularUtils.directives.dirPagination',
	'ui.bootstrap'
	]);
app.controller('DashboardCtrl',[
	'$scope',
	'$state',
	'Auth',
	'$rootScope',
	'$uibModal',
	'$localStorage',
	'Notification',
	'toastr',
	function($scope,$state,Auth,$rootScope,$uibModal,$localStorage,Notification,toastr){
		if(!$localStorage.currentUser){
			$state.go('login');
		}
		var user = $localStorage.currentUser;
		$scope.getNoti = function(){
			Notification.getNewNotification().then(function(result){
				if(result && result.success){
					// console.log(result.data);
					$scope.notifications = result.data;
					$rootScope.countNoti = result.data.length;
				}
			},function(errors){
				console.log(errors);
			})
		}
		$scope.getNoti();
		$scope.check = function(){
			Notification.checkAll().then(function(result){
				if(result && result.success){
					$scope.notifications = null;
					$rootScope.countNoti = 0;
				}	
			});
		}
		$scope.getAllNotification = function(){
			Notification.getAllNotification().then(function(result){
				if(result && result.success){
					$scope.fullNotification = result.data;
				}
			},function(errors){
				console.log(errors);
			})
		}
		$scope.deleteNoti = function(id){
			Notification.deleteNoti(id).then(function(result){
				if(result && result.success){
					var index = _.findIndex($scope.fullNotification,function(val){
						return val.id === id
					})
					if(index >-1){
						$scope.fullNotification.splice(index, 1);
					}
					toastr.success('Delete notification successfully !!!','Success !!');
				}	
			})
		}
		$scope.clear =function(result){
			Notification.clear().then(function(result){
				if(result && result.success){
					$scope.fullNotification= null;
				}
			});
		}
		$scope.getComments = function(){
			
		}

}]);