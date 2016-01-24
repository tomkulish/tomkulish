<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" ng-app="myApp" class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="thomas kulish, tomkulish, kulish, php, software developer, java, solutions architect, software developer, big data, hadoop, analytics" />
    <meta name="google-site-verification" content="TUhKFf5iws-yjqEKm44_nx-GJ0PPr7VP5pN6otBkgCE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Superbowl 2016 Party">
    <meta name="author" content="Tom Kulish">

    <title>Superbowl 2016 Party - February 7th 5pm</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="bower_components/html5-boilerplate/dist/css/normalize.css">
    <link rel="stylesheet" href="bower_components/html5-boilerplate/dist/css/main.css">
    <link rel="stylesheet" href="app.css">
    <script src="bower_components/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">tomkulish.com</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="blog-header">
        <h1 class="blog-title"><h1>Thanks! See you soon!!</h1>
                                       </div>

<?php
// Here we will send Tom a email. Lets also setup a key to pass so if you don't have that key we fail.

$today = date('H:m:s');

$time = $_SERVER['REQUEST_TIME'];
$serverAddress = $_SERVER['SERVER_ADDR'];
$serverName = $_SERVER['SERVER_NAME'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
$remoteHost = $_SERVER['REMOTE_HOST'];
$remoteAddress = $_SERVER['REMOTE_ADDR'];

$message = "<!DOCTYPE html><html lang=\"en\"><body>";

foreach($_SERVER as $key =>$value)  {
	//print "$key: $value<br>\n";
	$message .= "$key: $value<br>\n";
}

foreach($_POST as $key => $value) {
	//print "$key: $value<br>\n";
	$message .= "$key: $value<br>\n";
}

// Sending Tom Email
$to="thomas.kulish@gmail.com, me@tomkulish.com";
$subject="SOMEONE WANTS TO PARTY!! $today";

$message .= "</body></html>";

$message = wordwrap($message, 70, "\r\n");
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($to,$subject,$message, $headers);


print "</body></html>\n";
?>
    <div class="jumbotron" id="superbowlJumbotron"><br><br>
    </div>
  </div>
  </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-433428-2', 'tomkulish.com');
    ga('send', 'pageview');

  </script>

 </body>
</html>

