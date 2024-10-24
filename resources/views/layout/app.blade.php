<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
    <body class="w-screen overflow-y-auto overflow-x-hidden flex" style="background: #edf2f7;">
        <div id="app" class="w-full">
        <nav
            class="relative px-4 py-2 flex justify-between items-center bg-white dark:bg-gray-800 border-b-2 dark:border-gray-600 w-full">

            <a class="text-2xl font-bold text-violet-600 dark:text-white" href="#">
                PKL USDI
            </a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-violet-600 dark:text-gray-100 p-1" id="navbar_burger">
                        <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Navbar Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                </button>
            </div>
            <ul
                class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                @if (Auth::check())
                <li>
                    <div class=" relative mx-auto text-gray-600">
                        <input class="border border-gray-300 placeholder-current h-10 px-5 pr-16  rounded-lg text-sm focus:outline-none dark:bg-gray-500 dark:border-gray-50 dark:text-gray-200 " type="search" name="search" placeholder="Search">

                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                <svg class="text-gray-600 dark:text-gray-200 h-4 w-4 fill-current"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                    x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                    xml:space="preserve" width="512px" height="512px">
                                    <path
                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                        </button>
                    </div>
                </li>
                <li>
                    <div class=" relative mx-auto text-gray-600">
                        <span class="hidden" id="util_data" data=""></span>
                        <a class=" py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 hidden lg:inline-block "
                        href="/student/post">
                        New Post
                        </a>
                    </div>
                </li>
                <li>
                    <div class=" relative mx-auto text-gray-600">
                        <span class="hidden" id="util_data" data=""></span>
                        <a class=" py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 hidden lg:inline-block "
                        href="/student">
                        Profile
                        </a>
                    </div>
                </li>
                @endif
            </ul>


            <div class="hidden lg:flex">
                <button id="theme-toggle" type="button" class="hidden lg:inline-block lg:ml-auto py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg id="theme-toggle-dark-icon" class="w-5 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="w-5 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                </button>
                <!-- 
                <a href="https://tailwindflex.com/playground">
                    <button class=" py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700 hidden lg:block">
                            Tailwind Playground
                    </button>
                </a>
                -->
                @if (Auth::check())
                <div class=" py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700 hidden lg:block">
                    {{ Auth::user()->email}}
                </div>
                <div>
                    <span class="hidden" id="util_data" data=""></span>
                    <a class=" py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 hidden lg:inline-block "
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="/logout" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
                @else
                <div>
                    <span class="hidden" id="util_data" data=""></span>
                    <a class=" py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 hidden lg:inline-block "
                        href="/login">
                        Sign In
                    </a>
                </div>
                @endif
            </div>
        </nav>
        <main class="py-4 mx-2">
            @yield('content')
        </main>
        </div>
        <script>
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }


                var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
                var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

                var themeToggleDarkIcon_2 = document.getElementById('theme-toggle-dark-icon-2');
                var themeToggleLightIcon_2 = document.getElementById('theme-toggle-light-icon-2');

                // Change the icons inside the button based on previous settings
                if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
                    themeToggleLightIcon.classList.remove('hidden');
                    if (themeToggleDarkIcon_2) {
                        themeToggleLightIcon_2.classList.remove('hidden');
                    }
                } else {
                    themeToggleDarkIcon.classList.remove('hidden');
                    if (themeToggleDarkIcon_2) {
                        themeToggleDarkIcon_2.classList.remove('hidden');
                    }
                }


                var themeToggleBtn_2 = document.getElementById('theme-toggle-2');
                if (themeToggleBtn_2) {

                    themeToggleBtn_2.addEventListener('click', function () {

                        // toggle icons inside button
                        themeToggleDarkIcon_2.classList.toggle('hidden');
                        themeToggleLightIcon_2.classList.toggle('hidden');

                        sync_theme()

                    });
                }


                var themeToggleBtn = document.getElementById('theme-toggle');

                themeToggleBtn.addEventListener('click', function () {

                    // toggle icons inside button
                    themeToggleDarkIcon.classList.toggle('hidden');
                    themeToggleLightIcon.classList.toggle('hidden');

                    sync_theme()


                });


                function sync_theme() {
                    // if set via local storage previously
                    if (localStorage.getItem('color-theme')) {
                        if (localStorage.getItem('color-theme') === 'light') {
                            document.documentElement.classList.add('dark');
                            localStorage.setItem('color-theme', 'dark');
                        } else {
                            document.documentElement.classList.remove('dark');
                            localStorage.setItem('color-theme', 'light');
                        }
                        // if NOT set via local storage previously
                    } else {
                        if (document.documentElement.classList.contains('dark')) {
                            document.documentElement.classList.remove('dark');
                            localStorage.setItem('color-theme', 'light');
                        } else {
                            document.documentElement.classList.add('dark');
                            localStorage.setItem('color-theme', 'dark');
                        }
                    }

                }



                document.addEventListener('DOMContentLoaded', function () {
                    // open
                    const burger = document.querySelectorAll('.navbar-burger');
                    const menu = document.querySelectorAll('.navbar-menu');

                    if (burger.length && menu.length) {
                        for (var i = 0; i < burger.length; i++) {
                            burger[i].addEventListener('click', function () {
                                for (var j = 0; j < menu.length; j++) {
                                    menu[j].classList.toggle('hidden');
                                }
                            });
                        }
                    }

                    // close
                    const close = document.querySelectorAll('.navbar-close');
                    const backdrop = document.querySelectorAll('.navbar-backdrop');

                    if (close.length) {
                        for (var i = 0; i < close.length; i++) {
                            close[i].addEventListener('click', function () {
                                for (var j = 0; j < menu.length; j++) {
                                    menu[j].classList.toggle('hidden');
                                }
                            });
                        }
                    }
                

                    if (backdrop.length) {
                        for (var i = 0; i < backdrop.length; i++) {
                            backdrop[i].addEventListener('click', function () {
                                for (var j = 0; j < menu.length; j++) {
                                    menu[j].classList.toggle('hidden');
                                }
                            });
                        }
                    }
                });
        </script>
        
    </body>
</html>