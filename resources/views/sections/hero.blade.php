<section class="relative bg-hero-gradient overflow-hidden">
    <!-- Background Decor (Optional pattern/texture) -->
    <div class="absolute inset-0 opacity-10">
        <svg class="h-full w-full text-white" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 L100 100 L0 100 Z" />
        </svg>
    </div>

    <!-- Main Hero Content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-12 lg:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Side: Philosophy -->
            <div class="lg:col-span-7 space-y-8">
                <div class="space-y-4">
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold font-heading text-white italic drop-shadow-md">
                        {{ __('home.philosophy_title') }}
                    </h1>
                    
                    <div class="relative">
                        <svg class="absolute -top-6 -left-6 h-12 w-12 text-white/40 transform -scale-x-100" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21L14.017 18C14.017 16.0547 15.372 14.5559 17.2141 14.2487C17.5213 14.1979 17.9824 14.1672 18.2897 14.1672C18.9041 14.1672 19.3853 14.1979 19.9997 14.2487L19.9997 17.5938C19.9997 17.5938 19.8466 17.5938 19.6936 17.5938C18.6186 17.5938 17.7778 18.4346 17.7778 19.5103L17.7778 21L14.017 21ZM6.16667 21L6.16667 18C6.16667 16.0547 7.5217 14.5559 9.36382 14.2487C9.67104 14.1979 10.1321 14.1672 10.4394 14.1672C11.0538 14.1672 11.535 14.1979 12.1494 14.2487L12.1494 17.5938C12.1494 17.5938 11.9963 17.5938 11.8427 17.5938C10.7677 17.5938 9.92695 18.4346 9.92695 19.5103L9.92695 21L6.16667 21Z" />
                        </svg>
                        <p class="text-xl md:text-3xl font-medium font-body text-neutral-900 italic leading-relaxed pl-2 bg-white/20 backdrop-blur-sm p-6 rounded-xl border-l-4 border-accent-orange shadow-lg">
                            "{{ __('home.philosophy_text') }}"
                        </p>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#" class="inline-flex items-center gap-2 px-8 py-3 bg-white text-primary-cyan font-bold rounded-full shadow-lg hover:bg-neutral-100 hover:scale-105 transition-all transform group">
                        <span>Join Us</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                    <p class="text-white/80 text-sm mt-2 ml-4">Become an Instructor</p>
                </div>
            </div>

            <!-- Right Side: Free Training Form -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end">
                @include('components.training-form')
            </div>
        </div>
        
        <!-- Partners Section (Integrated into Hero bottom like a floating banner) -->
        <div class="mt-16 pt-8 border-t border-white/30">
             @include('sections.clients')
        </div>
    </div>
</section>
