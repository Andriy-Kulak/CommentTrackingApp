<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Comment Tracking App </title>

    <!-- CSS -->
    <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <!-- load fontawesome -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .comment    { padding-bottom:20px; }
    </style>

    <!-- js and angular-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
</head>

<!-- declaring our angular app, controller and container -->
<body class="container" ng-app="commentApp" ng-controller="mainController">
    <div class="col-md-8 col-md-offset-2">

        <div>
            <!-- Title -->
            <h3>Comment Tracking App</h3>
        </div>

        <!-- Form -->
        <form ng-submit="submitComment()">

            <!--Author-->
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="author"
                       ng-model="commentData.author" placeholder="Name">
            </div>

            <!-- Text -->
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="comment"
                       ng-model="commentData.text" placeholder="Say what you have to say">
            </div>

            <!-- Submit Feature -->
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>

        <!-- Loading Icon. Will show if loading variable is true-->
        <p class="text-center" ng-show="loading">
            <span class="fa fa-meh-o fa-5x fa-spin"></span>
        </p>

        <!-- Hide Comments if loading variable is true -->
        <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
            <h3>Comment #{{ comment.id }} <small>by {{ comment.author }}</small></h3>
            <p>{{ comment.text }}</p>

            <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
        </div>

    </div>
</body>
</html>