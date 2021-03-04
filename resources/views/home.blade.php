@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ログイン</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    ログインに成功しました
                    <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">お問い合わせ一覧</a>
                    <a href="{{ route('contact.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">新規登録</a>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
