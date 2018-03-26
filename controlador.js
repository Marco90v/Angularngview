var practica = angular.module('practica-ng-view',['ngRoute']);

practica.config(['$routeProvider',
              function($routeProvider) {
                $routeProvider.
                  when('/Inicio', {
                    templateUrl: 'inicio.php',
                  }).
                  when('/Blog', {
                    templateUrl: 'blog.php',
                    controller: 'Blog'
                  }).
                  when('/Descargas', {
                    templateUrl: 'descargas.php',
                  }).
                  when('/Acerca', {
                    templateUrl: 'blog.php',
                    controller: 'Acerca'
                  }).
                  otherwise({
                    redirectTo: '/',
                      templateUrl: 'inicio.php',
                      //controller: 'miembros'
                  });
              }]);


practica.controller('inicio', function($scope){
	$scope.mensaje= "Aqui de se desarrolla todo el contenido de la paguina de Inicio."
});

practica.controller('Blog', function($scope){
	$scope.mensaje= "Aqui se encuentra las entradas del blog."
});

practica.controller('Acerca', function($scope){
	$scope.mensaje= "Estas en blog.php pero usando controller, puedes carga el Acerca de."
});