<div id="global-floating-cta" class="fixed bottom-6 right-6 z-[100] transform translate-y-24 opacity-0 transition-all duration-500" style="display: none;">
    <a href="{{ request()->routeIs('home') ? '#contact-form' : route('home').'#contact-form' }}" 
       id="floating-cta-btn"
       class="group flex items-center justify-center w-14 h-14 bg-secondary-yellow text-primary-cyan rounded-full shadow-2xl hover:scale-110 active:scale-95 transition-all relative overflow-hidden ring-4 ring-white/50">
        <div class="absolute inset-0 bg-white/20 group-hover:bg-transparent transition-all"></div>
        <!-- Icon: Pencil for 'Register' -->
        <svg class="w-6 h-6 animate-pulse-slow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
        
        <!-- Tooltip -->
        <span class="absolute right-16 bg-neutral-900 text-white text-xs font-bold px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none shadow-lg">
            Register Now
        </span>
    </a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const floatingBtn = document.getElementById('global-floating-cta');
        const formContainer = document.getElementById('contact-form'); // Target the actual form ID
        
        if (!floatingBtn) return;

        // Force display block via JS to avoid FOUC, but allow CSS transition to handle opacity
        floatingBtn.style.display = 'block';

        // Logic:
        // 1. If we are NOT on home page, or if form doesn't exist? -> ALWAYS SHOW the button.
        // 2. If we ARE on home page and form exists? -> Use IntersectionObserver (Hide when form visible, Show when scrolled away).

        if (!formContainer) {
            // Not on home page / Form not present: Always show button immediately
            setTimeout(() => {
                floatingBtn.classList.remove('translate-y-24', 'opacity-0');
            }, 500); // Small delay for effect
        } else {
            // We are on a page with the form (Home)
            
            // Handle Smooth Scroll if clicking link on same page
            const btnLink = document.getElementById('floating-cta-btn');
            btnLink.addEventListener('click', function(e) {
                if(window.location.pathname === '/' || window.location.pathname === '') {
                     e.preventDefault();
                     formContainer.scrollIntoView({behavior: 'smooth', block: 'center'});
                }
            });

            // Observer to toggle visibility
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Form is visible -> HIDE floating button
                        floatingBtn.classList.add('translate-y-24', 'opacity-0');
                    } else {
                        // Form is hidden -> SHOW floating button
                        floatingBtn.classList.remove('translate-y-24', 'opacity-0');
                    }
                });
            }, {
                threshold: 0.1 // Trigger when 10% of form is visible
            });

            observer.observe(formContainer);
        }
    });
</script>
