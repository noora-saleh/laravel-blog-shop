@extends('layouts.app')

@section('title', 'قائمة المقالات')

@section('content')

    <h1>جميع المقالات</h1>
    
    <a href="{{ route('articles.create') }}" class="btn-primary">+ إضافة مقال جديد</a>

    @forelse ($articles as $article)
        <article class="article-card">
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->body }}</p>
            <span class="article-status">الحالة: {{ $article->status }}</span>

            <div class="action-group">
                <!-- زر العرض -->
                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-show">عرض</a>

                <!-- زر التعديل -->
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-edit">تعديل</a>

                <!-- زر الحذف -->
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="margin: 0;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                        حذف
                    </button>
                </form>
            </div>
        </article>
    @empty
        <p>عفواً، لا توجد أي مقالات مضافة حالياً.</p>
    @endforelse

    <div style="margin-top: 20px;">
        {{ $articles->links() }}
    </div>

@endsection