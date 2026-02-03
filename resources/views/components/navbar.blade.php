<header class="bg-primary-cyan sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 lg:h-20 items-center">
            
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-1 group">
                <span class="text-4xl lg:text-5xl font-extrabold italic text-accent-orange font-heading transition-transform group-hover:scale-110">W</span>
                <span class="text-xl lg:text-2xl font-bold tracking-tight text-white">
                    e<span class="text-secondary-yellow">Train</span>
                </span>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center space-x-1">
                <!-- About -->
                <a href="{{ route('about') }}" class="px-4 py-2 text-sm font-medium text-white hover:text-secondary-yellow transition-colors">
                    {{ __('nav.about') }}
                </a>

                <!-- Data Training Dropdown -->
                <div class="relative group">
                    <button class="px-4 py-2 text-sm font-medium text-white hover:text-secondary-yellow transition-colors inline-flex items-center">
                        {{ __('nav.data_training') }}
                        <svg class="ml-1 h-4 w-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 top-full pt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <div class="bg-white rounded-xl shadow-xl ring-1 ring-black/5 overflow-hidden">
                            <a href="{{ route('data-training.annotation') }}" class="block px-4 py-3 text-sm text-neutral-700 hover:bg-secondary-yellow-light hover:text-neutral-900 transition-colors">
                                {{ __('nav.annotation') }}
                            </a>
                            <a href="{{ route('data-training.transcribe') }}" class="block px-4 py-3 text-sm text-neutral-700 hover:bg-secondary-yellow-light hover:text-neutral-900 transition-colors">
                                {{ __('nav.transcribe') }}
                            </a>
                            <a href="{{ route('data-training.translate') }}" class="block px-4 py-3 text-sm text-neutral-700 hover:bg-secondary-yellow-light hover:text-neutral-900 transition-colors">
                                {{ __('nav.translate') }}
                            </a>
                            <a href="{{ route('data-training.localization') }}" class="block px-4 py-3 text-sm text-neutral-700 hover:bg-secondary-yellow-light hover:text-neutral-900 transition-colors">
                                {{ __('nav.localization') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Language Training Dropdown -->
                <div class="relative group">
                    <button class="px-4 py-2 text-sm font-medium text-white hover:text-secondary-yellow transition-colors inline-flex items-center">
                        {{ __('nav.language_training') }}
                        <svg class="ml-1 h-4 w-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 top-full pt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <div class="bg-white rounded-xl shadow-xl ring-1 ring-black/5 overflow-hidden">
                            <a href="{{ route('language-training.english') }}" class="block px-4 py-3 text-sm text-neutral-700 hover:bg-secondary-yellow-light hover:text-neutral-900 transition-colors">
                                {{ __('nav.english_training') }}
                            </a>
                            <a href="{{ route('language-training.ielts-toefl') }}" class="block px-4 py-3 text-sm text-neutral-700 hover:bg-secondary-yellow-light hover:text-neutral-900 transition-colors">
                                {{ __('nav.ielts_toefl') }}
                            </a>
                            <a href="{{ route('language-training.virtual-assistance') }}" class="block px-4 py-3 text-sm text-neutral-700 hover:bg-secondary-yellow-light hover:text-neutral-900 transition-colors">
                                {{ __('nav.virtual_assistance') }}
                            </a>
                            <a href="{{ route('language-training.seo') }}" class="block px-4 py-3 text-sm text-neutral-700 hover:bg-secondary-yellow-light hover:text-neutral-900 transition-colors">
                                {{ __('nav.seo') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Research -->
                <a href="{{ route('research') }}" class="px-4 py-2 text-sm font-medium text-white hover:text-secondary-yellow transition-colors">
                    {{ __('nav.research') }}
                </a>
            </nav>

            <!-- Right Side: Language Switcher -->
            <div class="flex items-center gap-4">
                <!-- Language Switcher -->
                <div class="flex items-center bg-white/20 backdrop-blur rounded-full px-1 py-1">
                    <a href="{{ route('locale.switch', 'en') }}" 
                       class="px-3 py-1 text-xs font-bold rounded-full transition-all {{ app()->getLocale() == 'en' ? 'bg-white text-primary-cyan shadow' : 'text-white hover:text-secondary-yellow' }}">
                        EN
                    </a>
                    <a href="{{ route('locale.switch', 'zh') }}" 
                       class="px-3 py-1 text-xs font-bold rounded-full transition-all {{ app()->getLocale() == 'zh' ? 'bg-white text-primary-cyan shadow' : 'text-white hover:text-secondary-yellow' }}">
                        中文
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button type="button" class="lg:hidden text-white hover:text-secondary-yellow p-2" id="mobile-menu-btn">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden bg-primary-cyan-dark" id="mobile-menu">
        <div class="px-4 py-4 space-y-2">
            <a href="{{ route('about') }}" class="block px-4 py-2 text-white hover:bg-white/10 rounded-lg">{{ __('nav.about') }}</a>
            
            <div class="px-4 py-2 text-secondary-yellow font-semibold text-sm">{{ __('nav.data_training') }}</div>
            <a href="{{ route('data-training.annotation') }}" class="block px-8 py-2 text-white/80 hover:text-white text-sm">{{ __('nav.annotation') }}</a>
            <a href="{{ route('data-training.transcribe') }}" class="block px-8 py-2 text-white/80 hover:text-white text-sm">{{ __('nav.transcribe') }}</a>
            <a href="{{ route('data-training.translate') }}" class="block px-8 py-2 text-white/80 hover:text-white text-sm">{{ __('nav.translate') }}</a>
            <a href="{{ route('data-training.localization') }}" class="block px-8 py-2 text-white/80 hover:text-white text-sm">{{ __('nav.localization') }}</a>
            
            <div class="px-4 py-2 text-secondary-yellow font-semibold text-sm">{{ __('nav.language_training') }}</div>
            <a href="{{ route('language-training.english') }}" class="block px-8 py-2 text-white/80 hover:text-white text-sm">{{ __('nav.english_training') }}</a>
            <a href="{{ route('language-training.ielts-toefl') }}" class="block px-8 py-2 text-white/80 hover:text-white text-sm">{{ __('nav.ielts_toefl') }}</a>
            <a href="{{ route('language-training.virtual-assistance') }}" class="block px-8 py-2 text-white/80 hover:text-white text-sm">{{ __('nav.virtual_assistance') }}</a>
            <a href="{{ route('language-training.seo') }}" class="block px-8 py-2 text-white/80 hover:text-white text-sm">{{ __('nav.seo') }}</a>
            
            <a href="{{ route('research') }}" class="block px-4 py-2 text-white hover:bg-white/10 rounded-lg">{{ __('nav.research') }}</a>
        </div>
    </div>
</header>

@push('scripts')
<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        document.getElementById('mobile-menu')?.classList.toggle('hidden');
    });
</script>
@endpush
