@extends('layouts.app')

@section('title', 'تعديل مقال')

@section('content')

    <h1>تعديل المقال</h1>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>عنوان المقال:</label>
            <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
        </div>

        <div class="form-group">
            <label>محتوى المقال:</label>
            <textarea name="body" class="form-control" rows="4" required>{{ $article->body }}</textarea>
        </div>

        <div class="form-group">
            <label>حالة المقال:</label>
            <select name="status" class="form-control">
                <option value="published" {{ $article->status == 'published' ? 'selected' : '' }}>منشور Published</option>
                <option value="draft" {{ $article->status == 'draft' ? 'selected' : '' }}>مسودة Draft</option>
                <option value="archived" {{ $article->status == 'archived' ? 'selected' : '' }}>مؤرشف Archived</option>
            </select>
        </div>

        <button type="submit" class="btn btn-submit">تحديث البيانات</button>
    </form>

@endsection