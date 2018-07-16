var app = angular.module("myApp", ['ngRoute']);

app.constant("READ_PATH", "/gaming/php/read");

app.run(function($rootScope){
    $rootScope.title = 'Gaming or What?';
});

app.config(function($routeProvider){
    $routeProvider
    .when('/home',{
        templateUrl: '/gaming/template/home.html'
    })
    .when('/contact',{
        templateUrl: '/gaming/template/contact.html'
    })
    .when('/gaming', {
        templateUrl: '/gaming/template/gaming.html'
    })
    .otherwise({
        templateUrl: '/gaming/template/index.html'
    });
});
