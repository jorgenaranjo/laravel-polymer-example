angular.module("ENES", [])
    .controller("appControler", ["$scope", "$http" , function($scope, $http){
        $scope.nombre = "Jorge";
        $scope.newComment = {}
        $scope.comentarios = [
            {
                comentario: "Comentario 1",
                username: "Jorge 1"
            },
            {
                comentario: "Comentario 2",
                username: "Jorge 2"
            }
        ];

        $scope.addComent = function(){
            $scope.comentarios.push($scope.newComment);
            $scope.newComment = {};
        }
    }]);