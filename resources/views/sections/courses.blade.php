<section class="section-padding bg-neutral-50 relative border-y border-neutral-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-heading text-neutral-900 mb-4">
                {{ __('home.courses_title') }}
            </h2>
            <p class="text-neutral-600 max-w-2xl mx-auto">
                {{ __('home.courses_subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <!-- Level 0 -->
            <div class="bg-white rounded-xl shadow border-l-8 border-primary-cyan p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-4xl font-bold text-primary-cyan font-heading">Level 0</span>
                    <span class="bg-primary-cyan/10 text-primary-cyan text-xs font-bold px-3 py-1 rounded-full uppercase">Beginner</span>
                </div>
                <h4 class="text-lg font-bold mb-2">Introduction to English</h4>
                <ul class="space-y-2 text-sm text-neutral-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Basic vocabulary</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Simple greetings</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Letter recognition</li>
                </ul>
            </div>

            <!-- Level 1-3 -->
            <div class="bg-white rounded-xl shadow border-l-8 border-secondary-yellow p-6 hover:shadow-lg transition-shadow transform scale-105 z-10">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-4xl font-bold text-secondary-gold font-heading">Level 1 - 3</span>
                    <span class="bg-secondary-yellow/10 text-secondary-gold text-xs font-bold px-3 py-1 rounded-full uppercase">Intermediate</span>
                </div>
                <h4 class="text-lg font-bold mb-2">Confidence Building</h4>
                <ul class="space-y-2 text-sm text-neutral-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Daily conversation</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Sentence construction</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Short stories</li>
                </ul>
            </div>

            <!-- Level 4-6 -->
            <div class="bg-white rounded-xl shadow border-l-8 border-accent-orange p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-4xl font-bold text-accent-orange font-heading">Level 4 - 6</span>
                    <span class="bg-accent-orange/10 text-accent-orange text-xs font-bold px-3 py-1 rounded-full uppercase">Advanced</span>
                </div>
                <h4 class="text-lg font-bold mb-2">Academic Mastery</h4>
                <ul class="space-y-2 text-sm text-neutral-600">
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Complex grammar</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Debate & discussion</li>
                    <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Essay writing</li>
                </ul>
            </div>
        </div>
        
        <div class="text-center mt-12">
             <a href="#" class="inline-flex items-center gap-2 text-primary-cyan font-bold hover:text-primary-cyan-dark">
                 {{ __('home.view_curriculum') }} <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
             </a>
        </div>
    </div>
</section>
