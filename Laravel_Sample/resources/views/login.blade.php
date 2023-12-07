@extends('layout')
      @section('content')
       <h1>ログイン</h1>
       <div class="card-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
          <form action="{{ route('login') }}" method="post">
              @csrf

             <div class="form-group">
                 <label for="email">{{ __('⓵メールアドレス入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                 <input type="text" class="form-control" name="email" id="email">
             </div>

              <div class="form-group">
                  <label for="password">{{ __('⓶パスワード入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                  <input type="text" class="form-control" name="password" id="password">
              </div>
   
             <div class="form-group">
                  <a href="">※パスワードを忘れた方はこちら</a>
             </div>

             <div class="text-right">
                  <button class="btn btn-success">⓷ログイン</button><br>
              </div>

              <div class="text-right">
                  <button class="btn btn-success">⓸新規登録はこちらから</button>
              </div>
           </form>

@endsection
