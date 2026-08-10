<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hello !
    <h1>مرحباً بك في الصفحة الرئيسية</h1>

    <!-- هنا نستخدم الدالة route() مع الاسم الذي اخترناه -->
    <a href="{{ route('posts.index') }}">اضغط هنا للانتقال إلى قائمة المقالات</a>
   
   
</body>
</html>