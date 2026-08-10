@extends('layouts.app')

@section('title', 'إضافة مقال جديد')

@section('content')

    <h1>إضافة مقال جديد</h1>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>عنوان المقال:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label>محتوى المقال:</label>
            <textarea name="body" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label>حالة المقال:</label>
            <select name="status" class="form-control">
                <option value="published">منشور Published</option>
                <option value="draft">مسودة Draft</option>
                <option value="archived">مؤرشف Archived</option>
            </select>
        </div>

        <button type="submit" class="btn btn-submit">حفظ المقال</button>
    </form>

@endsection