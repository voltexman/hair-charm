<?php
use function Laravel\Folio\name;
name('gallery');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="{{ Vite::asset('resources/images/bg-gallery-header.png') }}">
        <x-slot:title>Gallery</x-slot>
    </x-page-header>
@endsection

@section('content')
    <x-section class="bg-charm-cream-100 min-h-screen">
        <div class="max-w-xl mx-auto">
            <x-alert icon="frown">
                <x-slot:title>No photos yet</x-slot>
                <x-slot:message>We are working on it and will add photos soon. Thank you for your patience!</x-slot>
            </x-alert>
        </div>
    </x-section>
@endsection
