<li class="relative group justify-center">
    <a class="{{ $active ? 'text-blue-500' : 'text-gray-700' }} hover:text-blue-500 block px-4 py-6 transition-all" {{ $attributes }}>{{ $slot }}</a>
    <div class="{{ $active ? 'scale-x-100' : 'scale-x-0' }} absolute bottom-0 left-0 w-full h-[0.1rem] bg-blue-500 transform group-hover:scale-x-100 transition-transform origin-left">
    </div>
</li>
