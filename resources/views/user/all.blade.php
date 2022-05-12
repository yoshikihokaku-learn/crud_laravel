<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>一覧画面</title>
</head>
<body>
    <div class="m-3">
        <div class="w-75" style="margin: auto" >
            <h1>一覧画面</h1>
            <a class="btn btn-primary" href="{{ url('user/create') }}">追加</a>
            <table class="table m-auto" >
                <tr>
                    <th scope="col">名前</th>
                    <th scope="col">電話番号</th>
                    <th scope="col">メールアドレス</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                @foreach ($users as $user)
                    
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td><a class="btn btn-success" href="{{ url('/user/edit', ['id'=>$user->id]) }}">編集</a></td>
                    <td><a class="btn btn-danger" href="{{ url('/user/destroy', ['id'=>$user->id]) }}">削除</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
