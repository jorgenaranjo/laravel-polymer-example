/**
 * Created by taxque on 17/01/16.
 */
angular.module("ENES", [])
.controller("appController",function($scope, $http){
        $scope.posts = [];
        $scope.newPost = {};
        $http.get("http://jsonplaceholder.typicode.com/posts")
            .success(function(data){
                console.log(data);
                $scope.posts = data;
            })
            .error(function(err){

            });

        //Create a new post

        $scope.addPost = function(){
            $http.post("http://jsonplaceholder.typicode.com/posts",
                {
                    title: $scope.newPost.title,
                    body: $scope.newPost.body,
                    userId: 1
                } //Parameters to send
            )
                .success( function(data, status, headers, config){
                    //$scope.posts.push($scope.newPost);
                    console.log(data);
                    $scope.posts.push(data);
                    $scope.newPost = {};
                })
                .error( function(err, status, headers, config){

                })
        }
        //End add post
    });