<?php

use function Laravel\Folio\name;

name('contact');
?>

@extends('layouts.base')

@section('header')
    <x-page-header image="https://www.hair-charm.com/templates/jblank/images/bg/blocks/wefts.jpg">
        <x-slot:title>
            Contact
        </x-slot>
    </x-page-header>
@endsection
