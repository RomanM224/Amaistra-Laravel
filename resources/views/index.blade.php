@extends('layouts.main')

@section('title', 'Главная')

@section('custom_css')

@endsection

@section('content')
<textarea class="description" name="description"></textarea>
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300
    });
</script>
@endsection