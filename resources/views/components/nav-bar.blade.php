<header class="fixed top-0 left-0 w-full z-50 flex justify-between px-20 items-center h-auto transition-all duration-300">
    <a href="/" class="flex items-center font-bold text-2xl text-blue-400">
        <span class="text-blue-400 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                    <path stroke-linecap="round" d="M22 9H11a3 3 0 0 0-3 3v21h32V22" />
                    <path d="M4 33h40v2a6 6 0 0 1-6 6H10a6 6 0 0 1-6-6z" />
                    <path stroke-linecap="round" d="m33 7l-4 4l4 4m6-8l4 4l-4 4" />
                </g>
            </svg>
        </span>
        <span>Study Klub</span>
    </a>
    <ul class="flex items-center gap-x-16 font-medium text-white">
        <x-nav-bar-link href="/" :active="request()->is('/')">Beranda</x-nav-bar-link>
        <x-nav-bar-link href="/courses" :active="request()->is('courses')">Kursus</x-nav-bar-link>
        <x-nav-bar-link href="/about-us" :active="request()->is('about-us')">Tentang Kami</x-nav-bar-link>
        <x-nav-bar-link href="/contact-us" :active="request()->is('contact-us')">Hubungi Kami</x-nav-bar-link>
    </ul>
</header>
