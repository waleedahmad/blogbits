<!DOCTYPE html>
<html>
<head>
    @yield('title')
    <meta name="csrf_token" content="{{csrf_token()}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{mix('/assets/bundle/css/app.css')}}">
</head>
<body>

<div id="root">

</div>

@if(env('APP_ENV') === 'local')
    <script type="text/javascript" src="{{mix('/assets/bundle/js/app.js')}}"></script>
@else
    <script type="text/javascript" src="/assets/js/app.min.js"></script>
@endif
</body>
</html>