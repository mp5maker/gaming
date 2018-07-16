app.directive('navigationTemplate', function(){
    return {
        restrict: 'AEC',
        templateUrl: "/gaming/template/navigation.html"
    };
});

app.directive('footerTemplate', function(){
    return{
        restrict: 'AEC',
        templateUrl: "/gaming/template/footer.html"
    }
});