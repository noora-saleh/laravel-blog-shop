<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لوحة الإعلانات</title>
</head>
<body>
    <h1>جميع الإعلانات</h1>

    <!-- رابط ينقلنا لصفحة إضافة إعلان باستخدام اسم المسار -->
    <a href="{{ route('notices.create') }}">إضافة إعلان جديد +</a>
    
    <hr>

    @forelse ($notices as $notice)
            <h3>{{ $notice->title }}</h3>
            <p>{{ $notice->content }}</p>



      <form action="{{ route('notices.destroy', $notice->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">حذف</button>
    <!-- رابط عادي ينقلنا لصفحة التعديل ويحمل معه رقم الـ ID للإعلان -->
<a href="{{ route('notices.edit', $notice->id) }}">تعديل  </a>
</form>

    @empty
        <p>لا توجد إعلانات حالياً.</p>
        
    @endforelse
    
    
</body>
</html>