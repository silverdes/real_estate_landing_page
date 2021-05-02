<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body class="antialiased">
       
        <div>
    <header class="bg-gray-800 bg-fixed h-screen bg-center bg-cover custom-img" style=" background-image: url('https://images.unsplash.com/photo-1583835745735-105f063d8967?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');" x-data="{ isOpen: false }">
        <nav class="container max-w-full px-6 py-4 mx-auto bg-black md:bg-transparent md:flex md:justify-between md:items-center" id="menu">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-white transition-colors duration-300 transform md:text-2xl hover:text-black three px-3 pt-2"
                    href="/">Brand
                    <span class="absolute left-0 -bottom-1 w-full h-1 transition-all bg-yellow-700" style="z-index: -9;"></span>
                    </a>
    
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button" class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
    
            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0" x-cloak >
                <a class="text-base font-medium text-gray-200 transition-colors duration-300 transform one"
                    href="/">Home 
                    <span class="absolute -bottom-1 left-0 w-0 transition-all h-2px bg-yellow-700"></span>
                    </a>
                <a class="text-base font-medium text-gray-200 transition-colors duration-300 transform one"
                    href="#">Templates 
                    
                    <span class="absolute -bottom-1 left-0 w-0 transition-all h-2px bg-yellow-700"></span>
                    </a>
                <a class="text-base font-medium text-gray-200 transition-colors duration-300 transform one"
                    href="#">Price 
                    
                    <span class="absolute -bottom-1 left-0 w-0 transition-all h-2px bg-yellow-700"></span>
                    </a>
                <a class="text-base font-medium text-gray-200 transition-colors duration-300 transform one"
                    href="#">Help 
                    
                    <span class="absolute -bottom-1 left-0 w-0 transition-all h-2px bg-yellow-700"></span>
                    </a>
            <div x-data="{open:false}" class="relative">    
                <button class="text-base font-medium text-center text-gray-200 transition-colors duration-300 transform rounded focus:outline-none hover:text-gray-400"
                    @click="open=!open">Account</button>

                    @if (Route::has('login'))
                <div class="absolute top-11 left-0 md:-left-12 px-4 py-2 block bg-white rounded-md shadow-md w-32" @click.away="open=false" x-cloak x-show="open">
                    @auth
                    <div class="flex items-start mx-auto">
                    
                        <a href="{{ url('/dashboard') }}" class="flex justify-center items-center my-2 text-sm font-medium text-center text-gray-800 transition-colors duration-300 transform rounded focus:outline-none hover:text-gray-400">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        Dashboard</a>
                    </div>

                <div class="flex items-start">
                     <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}" class="flex justify-center items-center my-2 text-sm font-medium text-center text-gray-800 transition-colors duration-300 transform rounded focus:outline-none hover:text-gray-400"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                {{ __('Log Out') }}
                                </a>
                            </form>

                        </div>
                    @else
                    <div class="flex items-start">
                        <a href="{{ route('login') }}" class="flex justify-center items-center my-2 text-sm font-medium text-center text-gray-800 transition-colors duration-300 transform rounded focus:outline-none hover:text-gray-400">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                        Log in</a>
                    </div>
                        @if (Route::has('register'))
                        <div class="flex items-start">
                            <a href="{{ route('register') }}" class="flex justify-center items-center my-2 text-sm font-medium text-center text-gray-800 transition-colors duration-300 transform rounded focus:outline-none hover:text-gray-400">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            Register</a>
                        </div>
                        @endif
                    @endauth
 
                </div>
            @endif
                    </div>
            </div>
        </nav>
    
        <section class="flex items-center" style="height: 500px;">
            <div class="text-left mx-20">
                <span class="text-xl font-medium tracking-wider bg-black bg-opacity-40 text-gray-50">Lorem ipsum dolor</span>
                <h2 class="mt-6 text-3xl font-bold text-white bg-opacity-40 bg-black md:text-5xl">Lorem ipsum dolor sit amet, <br> consectetur
                    adipiscing elit</h2>
    
                <div class="flex items-center mt-8">
                    <a class="px-8 py-2 text-lg font-medium text-black transition-colors duration-300 transform bg-yellow-700 rounded hover:bg-yellow-500"
                        href="#sec1">Get In Touch</a>
                </div>
            </div>
            
        </section>
    </header>
    
    
    <section class="bg-white" id="sec1">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800">Lorem ipsum dolor sit <br> amet, consectetur</h3>
                    <p class="max-w-md mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="#" class="block mt-8 text-pink-700 font-bold">Experienced team</a>
                </div>
    
                <div class="mt-8 md:mt-0 md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                src="https://images.unsplash.com/photo-1577105106699-5c230ed0bd70?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                src="https://images.unsplash.com/photo-1563372522-8e97eac82f62?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
                        </div>
                    </div>
                </div>
    
                <div class="mt-8 md:mt-0 md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800">Lorem ipsum dolor sit <br> amet, consectetur</h3>
                    <p class="max-w-md mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="#" class="block mt-8 text-pink-700 font-bold">Experienced team</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, <br> consectetur adipiscing</h2>
            <p class="max-w-lg mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-2">
                <div class="flex space-x-4">
                    <svg class="w-6 h-6 text-pink-500" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M47.6268 23.7062C48.2466 24.4484 48.2466 25.5277 47.6268 26.2699L44.4812 30.0372C43.803 30.8493 43.4742 31.8971 43.5669 32.9512L44.0044 37.9287C44.0912 38.9165 43.4411 39.8188 42.4765 40.0491L38.0619 41.1031C36.9808 41.3612 36.0559 42.0575 35.5089 43.025L33.2053 47.099C32.6961 47.9995 31.5844 48.3631 30.6415 47.9375L26.6498 46.1358C25.6003 45.6621 24.3976 45.6636 23.3493 46.14L19.3597 47.9531C18.4161 48.3819 17.3014 48.0189 16.7912 47.1168L14.4911 43.0489C13.9441 42.0814 13.0192 41.3851 11.9381 41.127L7.52286 40.0728C6.55849 39.8426 5.90838 38.9406 5.99496 37.9529L6.43346 32.9505C6.52583 31.8968 6.19706 30.8494 5.5191 30.0375L2.37029 26.2665C1.75138 25.5253 1.75043 24.4477 2.36803 23.7054L5.52362 19.9127C6.1988 19.1012 6.52582 18.0557 6.43339 17.0041L5.99624 12.0308C5.90922 11.0408 6.56225 10.1372 7.52946 9.90904L11.9298 8.87123C13.0153 8.61522 13.9446 7.91765 14.4935 6.94684L16.7947 2.87709C17.3039 1.97664 18.4156 1.61302 19.3585 2.03858L23.3544 3.8422C24.4007 4.31444 25.5993 4.31444 26.6456 3.8422L30.6415 2.03858C31.5844 1.61301 32.6961 1.97663 33.2053 2.87709L35.5089 6.95112C36.0559 7.9186 36.9808 8.61486 38.0619 8.87297L42.4765 9.92701C43.4411 10.1573 44.0912 11.0596 44.0044 12.0474L43.5669 17.0249C43.4742 18.079 43.803 19.1268 44.4812 19.939L47.6268 23.7062ZM25 37.9326C26.8075 37.9326 28.2727 36.4674 28.2727 34.6599V34.4275C28.2727 32.6201 26.8075 31.1548 25 31.1548C23.1925 31.1548 21.7273 32.6201 21.7273 34.4275V34.6599C21.7273 36.4674 23.1925 37.9326 25 37.9326ZM25 28.377C26.8075 28.377 28.2727 26.9117 28.2727 25.1042V15.3162C28.2727 13.5087 26.8075 12.0435 25 12.0435C23.1925 12.0435 21.7273 13.5087 21.7273 15.3162V25.1042C21.7273 26.9117 23.1925 28.377 25 28.377Z"
                            stroke="currentColor" stroke-width="2" />
                    </svg>
    
                    <div>
                        <h4 class="text-xl font-medium text-gray-800">Design concept</h4>
                        <p class="max-w-lg mt-4 text-gray-600">Vitae nulla nunc euismod vel nunc euismod velpretium tellus
                            accumsan nulla nunc euismod ve semper.</p>
                    </div>
                </div>
    
                <div class="flex space-x-4">
                    <svg class="w-6 h-6 text-pink-500" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 25C1 11.8023 11.8023 1 25 1C38.1977 1 49 11.8023 49 25C49 38.1977 38.1977 49 25 49C11.8023 49 1 38.1977 1 25ZM33.36 35.3573C34.7228 36.1959 36.5074 35.771 37.346 34.4082C38.1913 33.0346 37.7522 31.2351 36.3692 30.4053L28.221 25.5164C27.6186 25.155 27.25 24.504 27.25 23.8014V14.375C27.25 12.7872 25.9628 11.5 24.375 11.5C22.7872 11.5 21.5 12.7872 21.5 14.375V25.8236C21.5 27.2127 22.2206 28.5023 23.4036 29.2302L33.36 35.3573Z"
                            stroke="currentColor" stroke-width="2" />
                    </svg>
    
                    <div>
                        <h4 class="text-xl font-medium text-gray-800">Developing websites</h4>
                        <p class="max-w-lg mt-4 text-gray-600">Vitae nulla euismod velpretium tellus accumsan nulla nunc
                            euismod ve semper. Vitae nulla euismod velpretium tellus
                            accumsan nulla nunc euismod ve semper. Vitae nulla euismod velpretium tellus accumsan nulla nunc
                            euismod ve semper.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="px-8 py-12 rounded-md md:px-20 md:flex md:items-center md:justify-between" style="background-image: url('https://images.unsplash.com/photo-1602065538249-7f958ef7b356?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'); background-repeat: no-repeat; background-size: cover;">
                <div>
                    <h3 class="text-2xl font-semibold text-white">Lorem ipsum dolor sit amet</h3>
                    <p class="max-w-md mt-4 text-gray-200 bg-black bg-opacity-30">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac
                        volutpat, viverra magna risus aliquam massa.</p>
                </div>
    
                <a class="block px-8 py-2 mt-6 text-lg font-medium text-center text-black transition-colors duration-300 transform bg-yellow-700 rounded md:mt-0 hover:bg-yellow-500"
                    href="#">Get In Touch</a>
            </div>
        </div>
    </section>
    
    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="md:flex md:justify-between">
                <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, consectetur <br> adipiscing
                    elit, sed do eiusmod</h2>
                <a href="#" class="block mt-6 text-pink-700 font-bold md:mt-0">Experienced team</a>
            </div>
    
            <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
                <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md hover:shadow-2xl transition-all ease-in-out duration-300">
                    <h2 class="text-xl font-medium text-gray-800">Audio</h2>
                    <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac
                        volutpat, viverra magna risus aliquam massa.</p>
                </div>
    
                <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md hover:shadow-2xl transition-all ease-in-out duration-300">
                    <h2 class="text-xl font-medium text-gray-800">Audio</h2>
                    <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac
                        volutpat,
                        viverra magna risus aliquam massa.</p>
                </div>
    
                <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md hover:shadow-2xl transition-all ease-in-out duration-300">
                    <h2 class="text-xl font-medium text-gray-800">Audio</h2>
                    <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac
                        volutpat,
                        viverra magna risus aliquam massa.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, <br> consectetur adipiscing</h2>
            <p class="max-w-lg mx-auto mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
    
            <img class="object-cover object-center w-full mt-16 rounded-md shadow h-80"
                src="https://images.unsplash.com/photo-1475905760530-a22eda0fb1b3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1054&q=80">
        </div>
    </section>
    
    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto space-y-8 md:flex md:items-center md:space-y-0">
            <div class="md:w-2/3">
                <div class="hidden md:flex md:items-center md:space-x-10">
                    <img class="object-cover object-center rounded-md shadow w-72 h-96"
                        src="https://images.unsplash.com/photo-1603835438148-eaa66d78bc72?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80">
                    <img class="object-cover object-center w-64 rounded-md shadow h-96"
                        src="https://images.unsplash.com/photo-1580317092099-ade9937dee4f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=663&q=80">
                </div>
                <h2 class="text-3xl font-semibold text-gray-800 md:mt-6">Lorem ipsum dolor </h2>
                <p class="max-w-lg mt-4 text-gray-600">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse illum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia
                    deserunt mollit anim id est laborum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="md:w-1/3">
                <img class="object-cover object-center w-full rounded-md shadow" style="height: 700px;"
                    src="https://images.unsplash.com/photo-1573999388457-ff750cc4a875?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80">
            </div>
        </div>
    </section>
    
    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Our Leadership</h2>
            <p class="max-w-lg mx-auto mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
    
            <div class="grid gap-8 mt-6 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <img class="object-cover object-center w-full h-64 rounded-md shadow"
                        src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                    <p class="text-sm text-gray-600">CEO</p>
                </div>
    
                <div>
                    <img class="object-cover object-center w-full h-64 rounded-md shadow"
                        src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                    <p class="text-sm text-gray-600">CEO</p>
                </div>
    
                <div>
                    <img class="object-cover object-center w-full h-64 rounded-md shadow"
                        src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                    <p class="text-sm text-gray-600">CEO</p>
                </div>
    
                <div>
                    <img class="object-cover object-center w-full h-64 rounded-md shadow"
                        src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                    <p class="text-sm text-gray-600">CEO</p>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="border-t">
        <div class="container flex items-center justify-between px-6 py-8 mx-auto">
            <p class="text-gray-500">© 2019-2021 All Rights Reserved.</p>
            <p class="font-medium text-gray-700">Terms of Service</p>
        </div>
    </footer>
</div>
<style>
html {
  scroll-behavior: smooth;
}
    html:not([data-scroll='0']) {
    
    }
    html:not([data-scroll='0']) nav {
    position: fixed;
    background-color: #000;
    z-index:100;
    width: 100%;
    }
    [x-cloak] {
        display: none;
    }

    .one:hover span:last-child {
    width: 100%;
    }
    .three:hover span {
    height: 100%;
    }
</style>

        <script src="{{asset('js/app.js')}}"></script>
        <script>
        // The debounce function receives our function as a parameter
const debounce = (fn) => {

  // This holds the requestAnimationFrame reference, so we can cancel it if we wish
  let frame;

  // The debounce function returns a new function that can receive a variable number of arguments
  return (...params) => {
    
    // If the frame variable has been defined, clear it now, and queue for next frame
    if (frame) { 
      cancelAnimationFrame(frame);
    }

    // Queue our function call for the next frame
    frame = requestAnimationFrame(() => {
      
      // Call our function and pass any params we received
      fn(...params);
    });

  } 
};


// Reads out the scroll position and stores it in the data attribute
// so we can use it in our stylesheets
const storeScroll = () => {
  document.documentElement.dataset.scroll = window.scrollY;
}

// Listen for new scroll events, here we debounce our `storeScroll` function
document.addEventListener('scroll', debounce(storeScroll), { passive: true });

// Update scroll position for first time
storeScroll();
        </script>

    </body>
</html>
