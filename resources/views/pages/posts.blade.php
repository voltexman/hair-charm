<?php
use function Laravel\Folio\name;
name('posts');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/bg-blog-header.png') }}">
        <x-slot:title>Posts</x-slot>
        <x-slot:caption>Read our latest articles and updates</x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section class="bg-charm-cream-100 min-h-screen">
        <div class="max-w-4xl mx-auto">
            @livewire('page-posts')
        </div>
    </x-section>
@endsection
