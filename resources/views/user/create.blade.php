<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録画面</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="mt-3 w-75" style="margin: auto">
        <h1>登録画面</h1>
        <form action="{{ url('user/store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">名前</label>
                <input class="form-control bg-white" type="text" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="phone">電話番号</label>
                <input class="form-control bg-white" type="text" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">メールアドレス</label>
                <input class="form-control bg-white" type="text" name="email" required>
            </div>
            <a href="{{ url('user/all') }}" class="btn btn-secondary">戻る</a>
            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>
</body>
</html>