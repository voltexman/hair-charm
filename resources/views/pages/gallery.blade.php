<?php

use function Laravel\Folio\name;

name('gallery');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/wefts.jpg">
        <x-slot:title>
            Gallery
        </x-slot>
    </x-page-header>
@endsection
