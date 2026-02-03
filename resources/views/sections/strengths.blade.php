<section class="section-padding bg-white relative">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-heading text-neutral-900">
                <span class="border-b-4 border-secondary-yellow pb-2">{{ __('home.strengths_title') }}</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Strength 1 -->
            <div class="card p-8 text-center group">
                <div class="w-16 h-16 mx-auto bg-secondary-yellow/10 rounded-full flex items-center justify-center mb-6 text-secondary-gold group-hover:bg-secondary-yellow group-hover:text-neutral-900 transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold font-heading mb-4 group-hover:text-secondary-gold transition-colors">{{ __('home.strength_1_title') }}</h3>
                <p class="text-neutral-600 leading-relaxed">
                    {{ __('home.strength_1_desc') }}
                </p>
            </div>

            <!-- Strength 2 -->
            <div class="card p-8 text-center group">
                <div class="w-16 h-16 mx-auto bg-secondary-yellow/10 rounded-full flex items-center justify-center mb-6 text-secondary-gold group-hover:bg-secondary-yellow group-hover:text-neutral-900 transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold font-heading mb-4 group-hover:text-secondary-gold transition-colors">{{ __('home.strength_2_title') }}</h3>
                <p class="text-neutral-600 leading-relaxed">
                    {{ __('home.strength_2_desc') }}
                </p>
            </div>

            <!-- Strength 3 -->
            <div class="card p-8 text-center group">
                <div class="w-16 h-16 mx-auto bg-secondary-yellow/10 rounded-full flex items-center justify-center mb-6 text-secondary-gold group-hover:bg-secondary-yellow group-hover:text-neutral-900 transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                </div>
                <h3 class="text-xl font-bold font-heading mb-4 group-hover:text-secondary-gold transition-colors">{{ __('home.strength_3_title') }}</h3>
                <p class="text-neutral-600 leading-relaxed">
                    {{ __('home.strength_3_desc') }}
                </p>
            </div>
        </div>
    </div>
</section>
