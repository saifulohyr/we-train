@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('sections.hero')

    <!-- Our Strengths -->
    @include('sections.strengths')

    <!-- Course Structure -->
    @include('sections.courses')

    <!-- Our Tutors -->
    @include('sections.tutors')
    
    <!-- Why Choose Us -->
    @include('sections.reasons')
    
    <!-- How to Book -->
    @include('sections.how-to-book')

    <!-- FAQ Section -->
    @include('sections.faq')

    <!-- Journal Section (Optional, kept if needed) -->
    {{-- @include('sections.journal') --}}

@endsection
