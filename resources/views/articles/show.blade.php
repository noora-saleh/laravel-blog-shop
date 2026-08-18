@extends('layouts.app')

@section('title', $article->title)

@section('content')

    <a href="{{ route('articles.index') }}" style="display: inline-block; margin-bottom: 15px;">← العودة للقائمة</a>

    <h1>{{ $article->title }}</h1>
    <p style="line-height: 1.6; font-size: 1.1rem; color: #334155;">{{ $article->body }}</p>
    
    <span class="article-status"><strong>الحالة:</strong> {{ $article->status }}</span>

    <div class="meta-info">
        <p>تاريخ الإضافة: {{ $article->created_at }}</p>
        <p>تاريخ آخر تعديل: {{ $article->updated_at }}</p>
    </div>

@endsection