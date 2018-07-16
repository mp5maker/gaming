app.factory('weatherService', function($http){
    return {
        getWeather: function(city, country){
            var query = city + ',' + country;
            return $http.get('http://api.openweathermap.org/data/2.5/weather', {
                params: {
                    q: query
                }
            }).then(function(response){
                return response.data.weather[0].description;
            });
        }
    }
});