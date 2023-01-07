var app = angular.module('app',['ngRoute','controller','angularUtils.directives.dirPagination','akoenig.deckgrid','ngSanitize'])

.config(function($routeProvider){
	$routeProvider
	.when('/home',{
		//controller: 'SSOController'
	})
	.otherwise({
		//templateUrl: 'temp/404.html'
	})
})

.filter('range', function() {
  return function(input, total) {
    total = parseInt(total);
    for (var i=0; i<total; i++)
      input.push(i);
    return input;
  };
})

.filter('cut', function () {
    return function (value, wordwise, max, tail) {
        if (!value) return '';

        max = parseInt(max, 10);
        if (!max) return value;
        if (value.length <= max) return value;

        value = value.substr(0, max);
        if (wordwise) {
            var lastspace = value.lastIndexOf(' ');
            if (lastspace !== -1) {
              //Also remove . and , so its gives a cleaner result.
              if (value.charAt(lastspace-1) === '.' || value.charAt(lastspace-1) === ',') {
                lastspace = lastspace - 1;
              }
              value = value.substr(0, lastspace);
            }
        }

        return value + (tail || ' …');
    };
})

.filter('ageFilter', function() {
     return function(birthday){
        var birthday = new Date(birthday);
        var today = new Date();
        var age = ((today - birthday) / (31557600000));
        var age = Math.floor( age );
        return age;
    }
})





