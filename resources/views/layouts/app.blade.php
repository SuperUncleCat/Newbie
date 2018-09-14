<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','菜鸟学院') - 改变世界从改变自己开始,踏歌长行,梦想永存!</title>
    <!-- 样式 -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta+Stencil" />
  </head>
  <body>
    <div id="app" class="{{ route_class() }}-page">
      @include('layouts._header')
      <div class="container">
        @yield('content')
      </div>
      @include('layouts._footer')
    </div>
    <!-- JS脚本 -->
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
