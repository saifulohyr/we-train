<section class="section-padding bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold font-heading text-neutral-900">
                <span class="border-b-4 border-secondary-yellow pb-2">{{ __('home.tutors_title') }}</span>
            </h2>
             <p class="text-neutral-600 mt-4 max-w-2xl mx-auto">
                 {{ __('home.tutors_subtitle') }}
             </p>
        </div>

        <!-- Horizontal Scroll Snap Container -->
        <div class="flex overflow-x-auto pb-8 gap-6 snap-x snap-mandatory scrollbar-hide md:grid md:grid-cols-3 md:overflow-visible">
            
            <!-- Tutor 1 -->
            <div class="snap-center shrink-0 w-80 md:w-auto bg-white rounded-2xl shadow-lg border border-neutral-100 overflow-hidden group hover:shadow-xl transition-all">
                <div class="relative h-64 bg-neutral-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Layla Sanders" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-secondary-yellow text-xs font-bold px-2 py-1 rounded shadow">{{ __('home.star_teacher') }}</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold font-heading mb-1">Layla Sanders</h3>
                    <div class="flex items-center gap-1 text-sm text-neutral-500 mb-3">
                        <svg class="w-4 h-4 text-accent-orange" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span>{{ __('home.tesol') }}</span>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">Patient (4814)</span>
                        <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full">Expressive (4829)</span>
                    </div>
                    
                    <p class="text-neutral-600 text-sm italic border-l-2 border-primary-cyan pl-3">
                        "I'll do my best to make every class entertaining and educational. Let's make learning fun!"
                    </p>
                </div>
            </div>

            <!-- Tutor 2 -->
            <div class="snap-center shrink-0 w-80 md:w-auto bg-white rounded-2xl shadow-lg border border-neutral-100 overflow-hidden group hover:shadow-xl transition-all">
                <div class="relative h-64 bg-neutral-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cherish Dalton" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-secondary-yellow text-xs font-bold px-2 py-1 rounded shadow">{{ __('home.star_teacher') }}</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold font-heading mb-1">Cherish Dalton</h3>
                    <div class="flex items-center gap-1 text-sm text-neutral-500 mb-3">
                        <svg class="w-4 h-4 text-accent-orange" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span>{{ __('home.tesol') }}</span>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded-full">Encouraging (2641)</span>
                        <span class="text-xs bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full">Visual Aids (1882)</span>
                    </div>
                    
                    <p class="text-neutral-600 text-sm italic border-l-2 border-primary-cyan pl-3">
                        "The important thing is that we both learn something new at the end of each session."
                    </p>
                </div>
            </div>

            <!-- Tutor 3 -->
            <div class="snap-center shrink-0 w-80 md:w-auto bg-white rounded-2xl shadow-lg border border-neutral-100 overflow-hidden group hover:shadow-xl transition-all">
                <div class="relative h-64 bg-neutral-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Ruby Gleason" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-secondary-yellow text-xs font-bold px-2 py-1 rounded shadow">{{ __('home.star_teacher') }}</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold font-heading mb-1">Ruby Gleason</h3>
                    <div class="flex items-center gap-1 text-sm text-neutral-500 mb-3">
                        <svg class="w-4 h-4 text-accent-orange" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span>{{ __('home.tesol') }}</span>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded-full">Standard Pronunciation</span>
                        <span class="text-xs bg-cyan-100 text-cyan-700 px-2 py-1 rounded-full">Patient (6736)</span>
                    </div>
                    
                    <p class="text-neutral-600 text-sm italic border-l-2 border-primary-cyan pl-3">
                        "I'll help you learn English in the easiest way for you. Hope to hear from you soon!"
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
