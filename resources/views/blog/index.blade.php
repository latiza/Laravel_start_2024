@extends('layouts.main')

@section('title', 'Blog - Bejegyzések')

@section('content')
    <h2>Bejegyzések</h2>
    <div class="post-list">
        @foreach ($posts as $post)
            <x-post-card :title="$post['title']" :excerpt="$post['excerpt']" />
        @endforeach
    </div>
@endsection
