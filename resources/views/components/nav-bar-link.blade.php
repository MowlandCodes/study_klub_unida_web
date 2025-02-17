<li class="relative group justify-center">
    <a class="{{ $active ? 'text-blue-300 font-bold' : 'text-blue-500' }} hover:text-blue-300 hover:font-bold block px-4 py-6 transition-all" {{ $attributes }}>{{ $slot }}</a>
    <div class="{{ $active ? 'scale-x-100' : 'scale-x-0' }} absolute bottom-0 left-0 w-full h-[0.1rem] bg-blue-300 transform group-hover:scale-x-100 transition-transform origin-left">
    </div>
</li>
