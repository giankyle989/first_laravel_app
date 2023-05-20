<nav x-data="{ open: false }" class="bg-gray-400 border-gray-200 h-auto w-full z-20 fixed sm:px-4 px-2 py-2.5 top-0 left-0">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="font-bold text-white whitespace-nowrap">Student System</a>
        <button data-collapse-toggle="navbar-main" class=" md:hidden"  @click="open = !open">
            <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </button>
        <div class="w-full md:hidden" x-show="open">
            <x-items/>
        </div>
        <div class="hidden md:block" id="navbar-main">
            <x-items/>
        </div>
    </div>
</nav>