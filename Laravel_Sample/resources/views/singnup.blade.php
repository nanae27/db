<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '家計簿') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('stylesheet')
 </head>
 <body>
 <div id="app">
             <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                 <div class="container">
                     <a class="navbar-brand" href="{{ url('/') }}">AAT掲示板</a>
                   </div>
               
                </nav>
                  @yield('content')
            </div>
            <h1>新規登録</h1>

            <div class="form-group">
            <label for="user_name">{{ __('⓵ユーザー名入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="user_name" id="user_name">

            <label for="email">{{ __('⓶メールアドレス入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="email" id="email">
            
            <label for="password">{{ __('⓷パスワード入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="password" id="password">
            
            <label for="password">{{ __('⓸パスワード確認入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="password" id="password">

            <button class="btn btn-success">⓸登録</button>
                     
     
   
   </body>
</html>