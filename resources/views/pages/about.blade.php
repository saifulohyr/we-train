@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-hero-gradient text-white py-20 lg:py-32 overflow-hidden">
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold font-heading mb-6 tracking-tight">
                Empowering Global Communication
            </h1>
            <p class="text-xl md:text-2xl font-light max-w-3xl mx-auto text-white/90">
                We bridge the gap between human intelligence and artificial intelligence through premier language and data training solutions.
            </p>
        </div>
        <!-- Decorative Background Pattern -->
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    </section>

    <!-- Our Mission -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-1 bg-secondary-yellow/20 text-secondary-yellow font-bold rounded-full text-sm uppercase tracking-wider">
                        Who We Are
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 font-heading">
                        More Than Just Training
                    </h2>
                    <p class="text-neutral-600 leading-relaxed text-lg">
                        WeTrain is a collective of linguistic experts, data scientists, and educational professionals dedicated to high-quality training. We understand that in the era of AI, the human touch in data annotation and language learning is more precise than ever.
                    </p>
                    <p class="text-neutral-600 leading-relaxed text-lg">
                        Founded with a vision to democratize access to global opportunities, we provide the tools and skills necessary for individuals and companies to thrive in a connected world.
                    </p>
                </div>
                <div class="relative h-96 rounded-2xl overflow-hidden shadow-2xl group">
                    <div class="absolute inset-0 bg-primary-cyan/20 group-hover:bg-transparent transition-all duration-500"></div>
                     <!-- Placeholder for team/office image -->
                    <div class="w-full h-full bg-neutral-200 flex items-center justify-center">
                        <span class="text-neutral-400 font-bold text-xl">WeTrain Team</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats / Values -->
    <section class="py-16 bg-neutral-50 relative">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-8 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-5xl font-bold text-primary-cyan mb-2">5+</div>
                    <div class="text-neutral-500 font-medium uppercase tracking-wide">Years Experience</div>
                </div>
                <div class="p-8 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-5xl font-bold text-secondary-yellow mb-2">10k+</div>
                    <div class="text-neutral-500 font-medium uppercase tracking-wide">Students Trained</div>
                </div>
                <div class="p-8 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-5xl font-bold text-neutral-900 mb-2">50+</div>
                    <div class="text-neutral-500 font-medium uppercase tracking-wide">Corporate Partners</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join CTA -->
    <section class="py-20 bg-primary-cyan text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">Ready to Transform Your Future?</h2>
            <a href="{{ route('home') }}#contact-form" class="inline-block px-8 py-4 bg-secondary-yellow text-primary-cyan font-bold rounded-full text-lg shadow-lg hover:scale-105 transition-transform">
                Get Started Today
            </a>
        </div>
    </section>
@endsection
