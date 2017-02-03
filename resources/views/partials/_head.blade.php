
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>@yield('title')</title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->

<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<!-- Bootstrap -->
{{ Html::style('css/icons/icomoon/styles.css') }}
{{ Html::style('css/bootstrap.css') }}
{{ Html::style('css/core.css') }}
{{ Html::style('css/components.css') }}
{{ Html::style('css/colors.css') }}

@yield('stylesheets')


<!-- Core JS files -->
<script type="text/javascript" src="/js/plugins/pace.min.js"></script>
<script type="text/javascript" src="/js/core/jquery.min.js"></script>
<script type="text/javascript" src="/js/core/bootstrap.min.js"></script>
<!-- /core JS files -->


<!-- Theme JS files -->
<script type="text/javascript" src="/js/core/app.js"></script>
<!-- /theme JS files -->