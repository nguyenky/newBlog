app = angular.module('app',['ui.bootstrap']);
app.controller('DashboardCtrl',[
	'$scope',
	'$state',
	'Auth',
	'$rootScope',
	'$uibModal',
	'$localStorage',
	function($scope,$state,Auth,$rootScope,$uibModal,$localStorage){
		if(!$localStorage.currentUser){
			$state.go('login');
		}
		var user = $localStorage.currentUser;
		$scope.title = "asdsd";
		$scope.openAnimalModal = function (){
		// alert(34324);
			// var oldAnimal = angular.copy(animal);
			// var parentElem = angular.element($document[0].querySelector('.page-container'));
		    var modalInstance = $uibModal.open({
			    // animation: true,
			    // ariaLabelledBy: 'modal-title',
			    // ariaDescribedBy: 'modal-body',
			    templateUrl: 'resources/views/admin/modal/demo-modal.html',
			    // controller: 'AnimalModalCtrl',
			    // size: size,
			    // appendTo: parentElem,
			    // resolve: {
			    //     animal: oldAnimal
			    // }
		    });

		   //  modalInstance.result.then(function (animal) {
		   //  	if(animal){
		   //  		var indexAnimal = _.findIndex($scope.animals, function (val) {
					// 	return val.id == animal.id;
					// });
					// if(indexAnimal > -1){
					// 	$scope.animals[indexAnimal] = animal;
			  //   		toastr.success('Update animal success!', 'Success!');
					// }else{
			  //   		$scope.animals.push(animal);
			  //   		toastr.success('Create animal success!', 'Success!');
					// }
		   //  	}
		   //  }, function () {
		   //  	console.log('Modal dismissed at: ' + new Date());
		   //  });
		};
}]);