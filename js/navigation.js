app.controller('navigationCtrl', function($scope, $http, READ_PATH){
    var url = READ_PATH + "/navigation.php?navigation_type=all&navigation_id=1";
    $http.get(url).then(function (response) {
        $scope.read_navigation = response.data;
    });
});

