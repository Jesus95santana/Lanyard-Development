<header class="border-b-[2px] border-black">
    <div class="headerContainer flex justify-center md:justify-between align-middle m-auto max-w-[900px] flex-wrap">
        <figure class="Logo">
            <a href="{{route('homePage')}}">
                <img src="./img/LC-LOGO.gif" alt="Logo">
            </a>
        </figure>
        <nav class="flex">
            <ul class="flex items-center">
                <li x-data="{open: false}" @mouseenter = "open = !open" @mouseleave = "open = !open" class="px-4 py-2 font-bold text-gray-500 font-[sans-serif] hover:bg-blue hover:text-white hover:cursor-pointer relative">
                    <a href="{{route('excavationPage')}}">EXCAVATION SITES</a>
                    <ul x-show="open" class="absolute top-[100%] left-0 w-full">
                        <li class="text-center bg-white px-4 py-2 font-bold text-gray-500 font-[sans-serif] hover:bg-gray-500 hover:text-white hover:cursor-pointer">
                            <a href="{{route('warnellPage')}}">Warnell Borrow Pit</a>
                        </li>
                        <li class="text-center bg-white px-4 py-2 font-bold text-gray-500 font-[sans-serif] hover:bg-gray-500 hover:text-white hover:cursor-pointer">
                            <a href="">Belford and Lewis Borrow Pits</a>
                        </li>
                        <li class="text-center bg-white px-4 py-2 font-bold text-gray-500 font-[sans-serif] hover:bg-gray-500 hover:text-white hover:cursor-pointer">
                            <a href="">Davis Borrow Pit</a>
                        </li>
                    </ul>
                </li>
                <li class="px-4 py-2 font-bold text-gray-500 font-[sans-serif] hover:bg-blue hover:text-white hover:cursor-pointer">
                    <a href="{{route('contactPage')}}">CONTACT</a>
                </li>
            </ul>
        </nav>
        <div class="headerContactContainer flex items-center p-2">
            <figure class="p-1"><img src="./img/LD-Phone-ICON.png" alt="Facebook Icon"></figure>
            <figure class="p-1"><img src="./img/LD-Phone-ICON.png" alt="Phone Icon"></figure>
            <p class="p-1 text-lg text-gray-500 font-medium">912 330-8351</p>
        </div>
    </div>
</header>
