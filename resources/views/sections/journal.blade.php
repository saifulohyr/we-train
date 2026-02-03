<section class="py-16 bg-neutral-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold font-heading text-neutral-900 mb-4">{{ __('home.journal_title') }}</h2>
            <div class="h-1 w-20 bg-primary-cyan mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Journal Card 1 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border border-neutral-100">
                <div class="text-xs font-bold text-primary-cyan uppercase tracking-wider mb-2">Research</div>
                <h3 class="text-xl font-bold mb-3 font-heading text-neutral-800">The Future of AI Data Annotation</h3>
                <p class="text-neutral-600 mb-4 text-sm line-clamp-3">
                    Exploring how human-in-the-loop annotation improves machine learning accuracy in complex scenarios.
                </p>
                <a href="#" class="inline-flex items-center text-accent-orange font-bold text-sm hover:underline">
                    Read Paper <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <!-- Journal Card 2 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border border-neutral-100">
                <div class="text-xs font-bold text-primary-cyan uppercase tracking-wider mb-2">Case Study</div>
                <h3 class="text-xl font-bold mb-3 font-heading text-neutral-800">Language Learning in Digital Age</h3>
                <p class="text-neutral-600 mb-4 text-sm line-clamp-3">
                    How virtual assistance and AI tools are reshaping the way we learn new languages effectively.
                </p>
                <a href="#" class="inline-flex items-center text-accent-orange font-bold text-sm hover:underline">
                    Read Paper <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <!-- Journal Card 3 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border border-neutral-100">
                <div class="text-xs font-bold text-primary-cyan uppercase tracking-wider mb-2">Methodology</div>
                <h3 class="text-xl font-bold mb-3 font-heading text-neutral-800">Quality Control in Crowdsourcing</h3>
                <p class="text-neutral-600 mb-4 text-sm line-clamp-3">
                    Best practices for maintaining high data quality standards in large-scale crowdsourcing projects.
                </p>
                <a href="#" class="inline-flex items-center text-accent-orange font-bold text-sm hover:underline">
                    Read Paper <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('research') }}" class="inline-block px-6 py-3 border-2 border-primary-cyan text-primary-cyan font-bold rounded-lg hover:bg-primary-cyan hover:text-white transition-colors">
                View All Publications
            </a>
        </div>
    </div>
</section>
