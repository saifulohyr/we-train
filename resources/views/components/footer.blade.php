<footer class="bg-neutral-900 text-white pt-16 pb-8 border-t border-neutral-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <!-- Brand Column -->
            <div class="space-y-6">
                <a href="{{ route('home') }}" class="flex items-center gap-1 group">
                    <span class="text-4xl font-extrabold italic text-accent-orange font-heading">W</span>
                    <span class="text-2xl font-bold tracking-tight text-white">
                        e<span class="text-secondary-yellow">Train</span>
                    </span>
                </a>
                <p class="text-neutral-400 text-sm leading-relaxed">
                    We believe data is knowledge, language is power, and every weakness is a place where growth begins.
                </p>
                <div class="flex space-x-4">
                    <!-- Social Icons -->
                    <a href="#" class="text-neutral-400 hover:text-white hover:bg-black p-2 rounded-full transition-all">
                        <span class="sr-only">TikTok</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
                    </a>
                    <!-- Add other social icons as needed -->
                </div>
            </div>

            <!-- Links Column 1 -->
            <div>
                <h3 class="text-lg font-bold font-heading mb-6 border-b border-neutral-700 pb-2 inline-block">Company</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('about') }}" class="text-neutral-400 hover:text-secondary-yellow transition-colors">{{ __('nav.about') }}</a></li>
                    <li><a href="{{ route('research') }}" class="text-neutral-400 hover:text-secondary-yellow transition-colors">{{ __('nav.research') }}</a></li>
                    <li><a href="#" class="text-neutral-400 hover:text-secondary-yellow transition-colors">{{ __('nav.language_training') }}</a></li>
                    <li><a href="#" class="text-neutral-400 hover:text-secondary-yellow transition-colors">{{ __('nav.data_training') }}</a></li>
                </ul>
            </div>

            <!-- Links Column 2 -->
            <div>
                <h3 class="text-lg font-bold font-heading mb-6 border-b border-neutral-700 pb-2 inline-block">Support</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-neutral-400 hover:text-secondary-yellow transition-colors">Help Center</a></li>
                    <li><a href="#" class="text-neutral-400 hover:text-secondary-yellow transition-colors">Terms of Service</a></li>
                    <li><a href="#" class="text-neutral-400 hover:text-secondary-yellow transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="text-neutral-400 hover:text-secondary-yellow transition-colors">Cookie Policy</a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div>
                <h3 class="text-lg font-bold font-heading mb-6 border-b border-neutral-700 pb-2 inline-block">Contact Us</h3>
                <ul class="space-y-4 text-neutral-400 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-accent-orange mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Singapore Headquarters<br>6 Shenton Way, #38-01</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="h-5 w-5 text-accent-orange flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:contact@wetrain.com" class="hover:text-white">contact@wetrain.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-neutral-800 pt-8 mt-8 text-center text-neutral-500 text-sm">
            <p>&copy; {{ date('Y') }} WeTrain. All rights reserved.</p>
        </div>
    </div>
</footer>
