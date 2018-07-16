app.controller('contactCtrl', function($scope, $http){
    $scope.occupations = [
        {
            id: "student",
            description : "Student"
        },
        {
            id: "jobseeker",
            description: "Job Seeker"
        },
        {
            id: "employee",
            description: "Working"
        }
    ];

    $scope.hobbies = {
            reading: "Reading",
            music: "Music",
            other: "Other"
        };

    $scope.contactFormSubmit = function(s){
        var data = this.user;
        var data = angular.element.param(data);
    };
});