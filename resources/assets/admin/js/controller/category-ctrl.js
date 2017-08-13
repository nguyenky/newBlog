app = angular.module('app',['angularUtils.directives.dirPagination','treeControl']);
app.controller('CategoryController',[
	'$scope',
	'Auth',
	'$uibModal',
	'toastr',
	'Category',
	'$localStorage',
	function($scope,Auth,$uibModal,toastr,Category,$localStorage){
		if(!$localStorage.currentUser){
	        $state.go('login');
	    }
	    var user = $localStorage.currentUser;
		$scope.showItem = 10;
		$scope.getCategories = function(){
			Category.getCategories().then(function(result){
				if(result && result.success){
					$scope.categories = result.data;
					console.log($scope.categories);
					$scope.edit = true;
				}
			},function(error){
				console.log(error);
				$scope.edit = false;
			});
		}

		$scope.getCategories();
		
		$scope.show = false;
		$scope.showFilter =function(){
			// alert(32423);
			if($scope.show){
				$scope.show = false;
			}else{
				$scope.show = true;
			}
			
		}
		$scope.update = function(category){
			Category.updateCategory(category).then(function(result){
				if(result && result.success){

				}
			},function(error){
				console.log(error);
			})
		}
	 //    $scope.save = function(profile){
	 //    	if($scope.edit){
	 //    		Profile.updateProfile(profile).then(function(result){
	 //    			if(result && result.success){
	 //    				$scope.profile = result.data;
	 //    				toastr.success('Update profile successfully !!!');
	 //    			}
	 //    		},function(error){
	 //    			console.log(data);
	 //    				toastr.danger('Update profile error !!!');

	 //    		});
	 //    	}
	 //    }
		$scope.showModal = function (category){
			    var modalInstance = $uibModal.open({
				    templateUrl: 'resources/views/admin/modal/category-modal.html',
				    controller: 'CategoryModalCtrl',
				    resolve: {
				        category: category
				    }
			    });
			    modalInstance.result.then(function (category) {
			    	if(category){
			    		$scope.categories.unshift(category);
			    	}
			    }, function () {
			    	console.log('Modal dismissed at: ' + new Date());
			    });
			};
		// $scope.treeOptions = {
	 //    nodeChildren: "children",
	 //    dirSelectable: true,
	 //    injectClasses: {
	 //        ul: "a1",
	 //        li: "a2",
	 //        liSelected: "a7",
	 //        iExpanded: "a3",
	 //        iCollapsed: "a4",
	 //        iLeaf: "a5",
	 //        label: "a6",
	 //        labelSelected: "a8"
	 //    }
		// }
		// $scope.dataForTheTree =
		// [
		// 	{ "name" : "Joe", "age" : "21", "children" : [
		// 		{ "name" : "Smith", "age" : "42", "children" : [] },
		// 		{ "name" : "Gary", "age" : "21", "children" : [
		// 			{ "name" : "Jenifer", "age" : "23", "children" : [
		// 				{ "name" : "Dani", "age" : "32", "children" : [] },
		// 				{ "name" : "Max", "age" : "34", "children" : [] }
		// 			]}
		// 		]}
		// 	]},
		// 	{ "name" : "Albert", "age" : "33", "children" : [] },
		// 	{ "name" : "Ron", "age" : "29", "children" : [] }
		// ];
		console.log($scope.dataForTheTree);
		$scope.startFilter = function(value){
			alert(value);
		}
		$scope.delete = function(category){
			Category.deleteCategory(category).then(function(result){
				if(result && result.success){
					var index = _.findIndex($scope.categories,function(val){
						return val.id === category.id;
					})
					if(index > -1){
						$scope.categories.splice(index,1);
					}
				}else{
					toastr.danger('Category cant delete!!!','Danger !!');
				}
			},function(error){
				console.log(error);
				toastr.danger('Category cant delete!!!','Danger !!');
			})
		}


}]);
app.controller('CategoryModalCtrl',[
	'$scope',
	'Auth',
	'$uibModalInstance',
	'toastr',
	'Category',
	'$localStorage',
	'category',
	function($scope,Auth,$uibModalInstance,toastr,Category,$localStorage,category){
		if(!$localStorage.currentUser){
	        $state.go('login');
	    }
	    if(category){
	    	$scope.edit = true;
	    	$scope.category = category;
	    }else{
	    	$scope.edit = false;
	    	$scope.category = null;
	    }
	    var user = $localStorage.currentUser;
	    $scope.getCategories = function(){
	    	Category.getAllCategoryTreeView().then(function(result){
	    		if(result && result.success){
	    			$scope.categories = result.data;
	    			if($scope.edit){
	    				$scope.categories.unshift({
	    					name:'No parent category',
	    					id: null
	    				});
	    			}
	    		}
	    	},function(error){
	    		console.log(error);
	    	})
	    }
	    $scope.getCategories();
	    $scope.save = function(){
	    	var cat = angular.copy(_.omit($scope.category,'has_parent'));
	    	if($scope.category.has_parent){
	    		cat.category_id = $scope.category.has_parent.id;
	    	}
	    	if($scope.edit){
	    		Category.updateCategory(cat).then(function(result){
	    			if(result && result.success){
	    				var dataCatogory = result.data;
		    				if($scope.category.has_parent){
					    		dataCatogory.has_parent = $scope.category.has_parent;
					    	}
		    			$uibModalInstance.close(dataCatogory);
	    			}
	    		},function(error){
	    			console.log(error);
	    		});
	    	}else{
	    		Category.createCategory(cat).then(function(result){
		    		if(result && result.success){
		    			var dataCatogory = result.data;
		    				if($scope.category.has_parent){
					    		dataCatogory.has_parent = $scope.category.has_parent;
					    	}
		    			$uibModalInstance.close(dataCatogory);
		    		}
		    	},function(error){
		    		console.log(error);
		    	});
	    	}
	    	
	    }
	    $scope.close = function (){
	        $uibModalInstance.dismiss('cancel');
	    };

}]);