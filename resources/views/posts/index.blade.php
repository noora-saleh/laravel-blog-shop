
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>قائمة المقالات</title>
</head>
<body>
    <h1>قائمة المقالات من قاعدة البيانات</h1>

    @foreach ($posts as $post)
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
    @endforeach
</body>
</html>
