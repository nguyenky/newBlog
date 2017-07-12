<!-- Main.html -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script src="resources/assets/admin/js/bootstrap/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="resources/assets/admin/js/bootstrap/bootstrap.min.js"></script>
    <!-- Angular -->
    <script src="node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="node_modules/oclazyload/dist/ocLazyLoad.js"></script>
    <!-- End Angular  -->
	<script src="resources/assets/public/angularjs/app.js"></script>
	<script src="resources/assets/public/angularjs/config.lazyload.js"></script>
	<script src="resources/assets/public/angularjs/config-public.js"></script>
	<!-- <script src="resources/assets/public/angularjs/main.js"></script> -->
	

</head>
<body data-ng-app="app">
    <h1>AngularJS Ui router - Demonstration</h1>
    <h4>This is the Home Page</h4> 
    <div ui-sref="home"><a href="">Home</a></div>   
    <div ui-sref="about"><a href="">About</a></div>   
    <div data-ui-view=""></div>
</body>
<html>