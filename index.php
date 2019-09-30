<!DOCTYPE html>
<html ng-app="recordsApp">
<head>
    <title>Angular JS Tutorial</title>

    <meta charset="UTF-8">
    <meta name="description" content="Angular JS Tutorial">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,Angular,Ajax">
    <meta name="author" content="Angular JS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Angular Library -->
    <script type="text/javascript" src="assets/js/angular.min.js"></script>

    <!-- Custom Style Sheet -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="angular_container">
    <div class="inner_container">
        <h1>My First Angular App Without Bind</h1>
        <label>Your Name :</label>
        <p><input type="text" ng-model="yourName" placeholder="Enter Your Name"></p>
        <h2>Hellow {{yourName}} !</h2>
    </div>

    <div class="inner_container">
        <h1>My First Angular App With ng-bind</h1>
        <label>Your Name :</label>
        <p><input type="text" ng-model="yournameBind" placeholder="Enter Your Name"></p>
        <p ng-bind="yournameBind"></p>
    </div>

    <div class="inner_container">
        <div ng-controller="recordsCtrl">
            <h1>My First Angular App With ng-repeat</h1>
            <label>Records Array :</label>
            <ul>
                <li ng-repeat="x in records">{{x}}</li>
            </ul>
        </div>
    </div>
</div>

<!-- Angular Controller -->
<script type="text/javascript" src="assets/js/controller.js"></script>

</body>
</html>