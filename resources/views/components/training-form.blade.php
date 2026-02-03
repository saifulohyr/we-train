<div id="training-form-container" class="bg-white/90 backdrop-blur rounded-2xl p-6 shadow-2xl w-full max-w-md border-4 border-white/50 relative overflow-hidden transition-all duration-300">
    <div class="absolute top-0 left-0 w-full h-2 bg-secondary-yellow"></div>
    
    <div class="text-center mb-6">
        <h3 class="text-2xl font-bold font-heading text-neutral-900">{{ __('home.free_training') }}</h3>
        <p class="text-sm text-neutral-500 mt-1">Start your journey today</p>
    </div>

    <form id="contact-form" action="{{ route('inquiry.store') }}" method="POST" class="space-y-4">
        @csrf
        <!-- Email Input -->
        <div class="relative group">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-neutral-400 group-focus-within:text-primary-cyan transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <input type="email" name="email" id="email" required 
                   class="w-full pl-10 pr-4 py-3 rounded-lg border border-neutral-300 focus:ring-2 focus:ring-secondary-yellow focus:border-secondary-yellow block bg-neutral-50 placeholder-neutral-400 text-neutral-900 transition-shadow outline-none" 
                   placeholder="{{ __('home.email') }}">
        </div>

        <!-- Phone Input with Country Code -->
        <div class="flex items-stretch rounded-xl border border-neutral-200 bg-white shadow-sm hover:shadow-md focus-within:ring-2 focus-within:ring-secondary-yellow focus-within:border-secondary-yellow transition-all duration-300 h-14 overflow-hidden">
            <!-- Icon -->
            <div class="pl-4 flex items-center justify-center text-neutral-400 bg-neutral-50/50">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            </div>
            
            <!-- Country Code Select -->
            <div class="relative bg-neutral-50/50 hover:bg-neutral-100 transition-colors border-r border-neutral-100">
                <select name="country_code" class="appearance-none h-full pl-3 pr-9 bg-transparent text-neutral-800 font-bold text-sm focus:outline-none cursor-pointer">
                    <option value="+62">🇮🇩 +62</option>
                    <option value="+1">🇺🇸 +1</option>
                    <option value="+86">🇨🇳 +86</option>
                    <option value="+44">🇬🇧 +44</option>
                    <option value="+65">🇸🇬 +65</option>
                    <option value="+61">🇦🇺 +61</option>
                </select>
                <!-- Custom Arrow -->
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-neutral-400">
                    <svg class="h-3 w-3 fill-current transform translate-x-[-4px]" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>
                </div>
            </div>
            
            <!-- Number Input -->
            <div class="flex-1 relative">
                <input type="tel" name="phone" id="phone" required 
                   class="w-full h-full px-4 bg-transparent border-none focus:ring-0 placeholder-neutral-400 text-neutral-900 font-medium outline-none" 
                   placeholder="812-3456-7890">
            </div>
        </div>

        <button type="submit" class="w-full btn bg-neutral-800 hover:bg-neutral-700 text-white font-bold text-lg py-4 rounded-xl shadow-lg hover:shadow-xl transform active:scale-95 transition-all">
            {{ __('home.start') }}
        </button>
        
        <p class="text-xs text-center text-neutral-500 mt-2 opacity-80">
            {{ __('home.privacy_note') }}
        </p>
    </form>
    
    <!-- Social Icons -->
    <div class="mt-6 pt-4 border-t border-neutral-200/60">
        <div class="flex justify-center space-x-6 opacity-80 hover:opacity-100 transition-opacity">
             <!-- TikTok -->
             <a href="#" class="p-2.5 bg-neutral-900 text-white rounded-full hover:scale-110 transition-transform shadow-md hover:shadow-lg">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
           </a>
           <!-- WeChat -->
           <a href="#" class="p-2.5 bg-[#07C160] text-white rounded-full hover:scale-110 transition-transform shadow-md hover:shadow-lg">
               <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8.69 16c-.5 0-1-.1-1.4-.2.8.9 2 1.5 3.3 1.5 2.7 0 4.8-1.9 4.8-4.3 0-2.3-2.1-4.3-4.8-4.3-2.7 0-4.8 1.9-4.8 4.3 0 1.2.5 2.3 1.4 3.1 0 .6-.4 1.2-.5 1.2 0 0 1.3.1 2-.4zm7.4-4.8c-2.4 0-4.3-1.7-4.3-3.8 0-2.1 1.9-3.8 4.3-3.8 2.4 0 4.3 1.7 4.3 3.8 0 2.1-2 3.8-4.3 3.8zm0 0"/></svg>
           </a>
           <!-- LINE -->
           <a href="#" class="p-2.5 bg-[#06C755] text-white rounded-full hover:scale-110 transition-transform shadow-md hover:shadow-lg">
               <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.464 3.352V8.108c0-.345.282-.63.63-.63.345 0 .628.285.628.63v4.771zm-5.741 0c0 .344-.282.629-.629.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63.347 0 .629.285.629.63v4.771zm-2.466.629H4.917c-.345 0-.629-.285-.629-.629V8.108c0-.345.284-.63.629-.63.347 0 .628.285.628.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.259 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.432-6.975 1.608-1.858 2.552-4.009 2.552-6.268"/></svg>
           </a>
        </div>
    </div>
</div>
