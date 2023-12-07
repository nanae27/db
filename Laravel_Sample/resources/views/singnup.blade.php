@extends('layout')
      @section('content')
            <h1>新規登録</h1>
            <div class="card-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('singnup') }}" method="POST">
              @csrf

               <div class="form-group">
                  <label for="user_name">{{ __('⓵ユーザー名入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                  <input type="text" class="form-control" name="user_name" id="user_name">
                </div>

                <div class="form-group">
                    <label for="email">{{ __('⓶メールアドレス入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="email" id="email">
                 </div>

                 <div class="form-group">
                    <label for="password">{{ __('⓷パスワード入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="password" id="password">
                 </div>

                 <div class="form-group">
                    <label for="password">{{ __('⓸パスワード確認入力') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="password" id="password">
                 </div>

                  <div class="text-right">
                      <button class="btn btn-success">⓸登録</button>
                  </div>

@endsection
                     
     
   
