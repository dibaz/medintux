

(function () {
    'use strict';
 
    medintux
			.controller('authCtrl', LoginController);
 
    LoginController.$inject = ['$scope', '$location', 'AuthenticationService', 'FlashService'];
	
    function LoginController($scope, $location, AuthenticationService, FlashService) {
        var vm = this;
 
        vm.login = login;
 
        (function initController() {
            // reset login status
            AuthenticationService.clearCredentials();
			vm.views = ["Accueil", "Agenda", "Rendez-vous répétés","Patients","Intervenants","Vidal","Interactions"];
			vm.delegates = [];
			vm.user = {
				password: '',
				identifier: '',
				delegateOf: "",
				homePage: "Accueil",
			}
        })();

		// $scope.$watch(
			// "vm.user.identifier",
			// function handleFooChange( newValue, oldValue ) {
				// if(newValue){
					// AuthenticationService.getDelegates(vm.user.identifier, function (response) {
						// if (response.success) {
							// vm.delegates = [{name:response.data, value:response.data}];
						// }
					// });
				// }
			// }
		// );

		
		function login() {
            vm.dataLoading = true;
            AuthenticationService.login(vm.username, vm.password, function (response) {
                if (response.success) {
                    AuthenticationService.SetCredentials(vm.username, vm.password);
                    $location.path('/');
                } else {
                    FlashService.Error(response.message);
                    vm.dataLoading = false;
                }
            });
        };

        function logout() {
       
        }
    }
 
})();