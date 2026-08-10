<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إضافة إعلان</title>
</head>
<body>
    <h1>إضافة إعلان جديد</h1>

    <!-- النموذج يرسل طلب POST إلى مسار التخزين store عبر اسم المسار -->
    <form action="{{ route('notices.store') }}" method="POST">
        @csrf {{-- حماية حقول النموذج من الثغرات الأمنية CSRF --}}

        <div>
            <label>عنوان الإعلان:</label><br>
            <input type="text" name="title" required>
        </div>

        <br>

        <div>
            <label>محتوى الإعلان:</label><br>
            <textarea name="content" required></textarea>
        </div>

        <br>

        <button type="submit">حفظ الإعلان</button>
    </form>
</body>
</html>