'use strict';

	medintux
		.config(['$routeProvider',
	
		function ($routeProvider) {
		  $routeProvider.
			  when('/login', {
				  title: 'Login',
				  templateUrl: '../resources/views/login/login.html',
				  controller: 'authCtrl',
				  controllerAs: 'vm'
			  })

			  .otherwise({
				  redirectTo: '/login'
			  });
  }]);