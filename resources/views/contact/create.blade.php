@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規作成</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                        @endforeach    
                        </ul>
                    </div>
                    @endif
                    
                    createです
                    <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="form-group">
                    <label for="your_name">氏名</label>
                    <input type="text" class="form-control" id="your_name" name="your_name">
                    </div>
                    <div class="form-group">

                    <label for="title">件名</label>
                    <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">

                    <label for="email">メールアドレス</label>
                    <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">

                    <label for="url">ホームページ</label>
                    <input type="text" class="form-control" id="url" name="url">
                    </div>
                   

                    性別
                    <div class="form-check">

                    <input class="form-check-input" type="radio" name="gender" id="gender" value="0"><label class="form-check-label" for="age">男性</label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="1"><label class="form-check-label" for="age">女性</label>
                    </div>

                    
                    <div class="form-group">

                    <label for="age">年齢</label>
                    <select name="age" id="age">
                    <option value="">選択してください</option>
                    <option value="1">～19歳</option>
                    <option value="2">20歳～29歳</option>
                    <option value="3">30歳～39歳</option>
                    <option value="4">40歳～49歳</option>
                    <option value="5">50歳～59歳</option>
                    <option value="6">60歳～</option>
                    </select>
                    </div>
                    <div class="form-group">

                    <label for="contact">お問い合わせ内容</label>
                    <textarea class="form-control" name="contact" id="contact" rows="10"></textarea>
                    </div>
                    
                    

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="caution" name="caution" value="1">
                            <label class="form-check-label" for="caution">
                            注意事項に同意する
                            </label>
                    </div>

                    <input class="btn btn-info" type="submit" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
