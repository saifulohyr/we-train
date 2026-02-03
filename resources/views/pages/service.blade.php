@extends('layouts.app')

@section('content')
    <!-- Service Hero -->
    <section class="relative bg-hero-gradient text-white py-20 lg:py-28 overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl">
                <div class="inline-block px-4 py-1 bg-white/10 backdrop-blur border border-white/20 text-white font-bold rounded-full text-sm uppercase tracking-wider mb-6">
                    Our Services
                </div>
                <h1 class="text-4xl md:text-6xl font-bold font-heading mb-6 tracking-tight">
                    {{ $title }}
                </h1>
                <p class="text-xl md:text-2xl font-light text-white/90 leading-relaxed">
                    {{ $description }}
                </p>
            </div>
        </div>
        <!-- Decorative Elements -->
        <div class="absolute right-0 top-0 h-full w-1/3 bg-white/5 skew-x-12 transform origin-top-right"></div>
    </section>

    <!-- Main Content -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Left: Detailed Content -->
                <div class="lg:col-span-8 space-y-12">
                    
                    <!-- Intro -->
                    <div class="prose prose-lg text-neutral-600">
                        <p class="text-lg leading-relaxed">
                            {{ $longDescription ?? $description }}
                        </p>
                    </div>

                    <!-- Key Features Grid -->
                    @if(isset($features) && count($features) > 0)
                    <div>
                        <h3 class="text-2xl font-bold text-neutral-900 mb-6 border-l-4 border-secondary-yellow pl-4">key Capabilities</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach($features as $feature)
                            <div class="flex gap-4 p-4 rounded-xl border border-neutral-100 bg-neutral-50 hover:border-secondary-yellow/50 transition-colors">
                                <div class="shrink-0 w-10 h-10 rounded-full bg-primary-cyan/10 flex items-center justify-center text-primary-cyan">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-neutral-900">{{ $feature }}</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Benefits Section -->
                    @if(isset($benefits) && count($benefits) > 0)
                    <div class="bg-neutral-900 text-white p-8 rounded-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-secondary-yellow rounded-full blur-3xl opacity-20 transform translate-x-16 -translate-y-16"></div>
                        <h3 class="text-2xl font-bold mb-6">Why Choose Us?</h3>
                        <ul class="space-y-4">
                            @foreach($benefits as $benefit)
                            <li class="flex items-start gap-3">
                                <span class="text-secondary-yellow mt-1">✦</span>
                                <span class="text-neutral-200">{{ $benefit }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                </div>

                <!-- Right: CTA Sidebar -->
                <div class="lg:col-span-4">
                    <div class="sticky top-24 bg-white p-6 rounded-2xl shadow-xl border border-neutral-100">
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Interested in {{ $title }}?</h3>
                        <p class="text-neutral-500 mb-6 text-sm">
                            Get a free consultation with our experts to verify your data needs.
                        </p>
                        
                        <a href="{{ route('home') }}#contact-form" class="block w-full text-center bg-accent-orange text-white font-bold py-4 rounded-lg hover:bg-orange-600 transition-colors shadow-lg">
                            Request Quote
                        </a>

                        <div class="mt-8 pt-8 border-t border-neutral-100">
                            <p class="text-xs font-bold text-neutral-400 uppercase tracking-widest mb-4">Trusted By</p>
                            <div class="flex gap-4 opacity-50 grayscale hover:grayscale-0 transition-all">
                                <!-- Mini logos or just text -->
                                <span class="font-bold text-neutral-300">Google</span>
                                <span class="font-bold text-neutral-300">Meta</span>
                                <span class="font-bold text-neutral-300">Amazon</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
