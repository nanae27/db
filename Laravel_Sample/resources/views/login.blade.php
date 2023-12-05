<html>
<body>
@extends('layout')
    @section('content')
            <h1>ログイン</h1>

            <div class="form-group">
            <label for="email">{{ __('⓵メールアドレス入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="email" id="email">

            <label for="password">{{ __('⓶パスワード入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="password" id="password">

   
            <div class="login-form">
                     <a href="">※パスワードを忘れた方はこちら</a>

                  </div>
       
                     <button class="btn btn-success">⓷ログイン</button>
                     <br>

                     <button class="btn btn-success">⓸新規登録はこちらから</button>

                  
     
   
   </body>
</html>
@endsection
