<header class="border-b-[2px] border-black">
    <div class="headerContainer flex justify-center md:justify-between align-middle m-auto max-w-[900px] flex-wrap">
        <figure class="Logo">
            <a href="{{route('homePage')}}">
                <img src="./img/LC-LOGO.gif" alt="Logo">
            </a>
        </figure>
        <nav class="flex">
            <ul class="flex items-center">
                <li class="px-4 py-2 font-bold text-gray-500 font-[sans-serif] hover:bg-blue hover:text-white hover:cursor-pointer"><a href="{{route('excavationPage')}}">EXCAVATION SITES</a></li>
                <li class="px-4 py-2 font-bold text-gray-500 font-[sans-serif] hover:bg-blue hover:text-white hover:cursor-pointer"><a href="{{route('contactPage')}}">CONTACT</a></li>
            </ul>
        </nav>
        <div class="headerContactContainer flex items-center p-2">
            <figure class="p-1"><img src="./img/LD-Phone-ICON.png" alt="Facebook Icon"></figure>
            <figure class="p-1"><img src="./img/LD-Phone-ICON.png" alt="Phone Icon"></figure>
            <p class="p-1 text-lg text-gray-500 font-medium">912 330-8351</p>
        </div>
    </div>
    <div>
        <div x-data="{ open: false }" class="relative inline-block text-left">
            <button @click="open = !open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="dropdown-menu-button" aria-expanded="true" aria-haspopup="true">
                Dropdown
                <!-- Add an icon here if you wish (e.g., <svg>...</svg>) -->
            </button>
            <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-menu-button" tabindex="-1">
                <div class="py-1" role="none">
                    <!-- Dropdown items -->
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1">Item 1</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1">Item 2</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1">Item 3</a>
                </div>
            </div>
        </div>
    </div>
</header>
