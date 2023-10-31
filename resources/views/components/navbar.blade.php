<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#home" class="font-bold text-lg text-primary block py-6">angellmaputrii</a>
            </div>
            <div class="flex items-center px-4">
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:dark:bg-transparent dark:bg-dark dark:shadow-slate-700">
                    <ul class="block lg:flex">
                        <li class="group py-5">
                            <a href="#home" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Home</a>
                        </li>
                        <li class="group py-5">
                            <a href="#about" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">About</a>
                        </li>
                        <li class="group py-5">
                            <a href="#portfolio" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Portfolio</a>
                        </li>
                        <li class="group py-5">
                            <a href="#clients" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Clients</a>
                        </li>
                        <li class="group py-5">
                            <a href="#blog" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Blog</a>
                        </li>
                        <li class="group py-5">
                            <a href="#contact" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Contact</a>
                        </li>
                        <li class="mt-3 flex items-center pl-8 lg:mt-0">
                            <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 left-0">
                                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                                    <div class="flex md:order-2">
                                        @if (Auth::user())
                                        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="w-8 h-8 rounded-full" src="{{ asset('images/angel.jpg') }}" alt="user photo">
                                        </button>
                                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                                            </div>
                                            <ul class="py-2" aria-labelledby="user-menu-button">
                                                <li>
                                                    <form action="{{ route('logout') }}"  method="post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                        @csrf
                                                        <button type="submit">Log out</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        @else
                                        <a href="{{ route('login') }}" class="mr-4">
                                            <button type="button" class="text-white bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-teal-500 dark:hover:bg-teal-400 dark:focus:ring-teal-500">Login</button>
                                        </a> 
                                        @endif
                                    </div>
                                </div>
                            </nav>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>