<x-guest-layout>

<div class="bg-white">

    <nav class="border-b">
        <div class="container px-6 py-2 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <div>
                    <a href="#" class="text-xl text-gray-800 font-semiblod md:text-3xl hover:text-gray-700">
                        Brand
                    </a>
                </div>
                <div class="flex md:hidden">
                    <button type="button" aria-label="toggle menu"
                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="items-center hidden md:flex">
                <div
                    class="flex flex-col mt-4 space-y-8 md:flex-row md:items-center md:mt-0 md:space-y-0 md:space-x-16">
                    <a href="#" class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">Car
                        Search</a>
                    <a href="#" class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">How it
                        works!</a>
                    <a href="#" class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">Why us?</a>
                    <a href="#" class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">Contact</a>
                    <button
                        class="flex items-center px-5 py-3 font-medium tracking-wide text-center text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        Get in touch
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container bg-cover h-screen bg-black bg-fixed" style="background-image:url('https://images.unsplash.com/photo-1513584684374-8bab748fbf90?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1046&q=80')">
            <!-- Hero Section -->
                <section class="p-10 flex justify-between h-screen bg-black bg-opacity-30 ">
                    <!-- Hero info -->
                        <div class="flex justify-items-end items-start">
                            <div class="px-40">
                                <h1 class="text-right text-white text-2xl font-black underline uppercase">
                                For Property
                                </h1>
                                <h1 class="text-white text-right text-4xl font-bold space-x-1 uppercase mt-3">
                                    Best Deals
                                </h1>
                                <p class="text-right mt-10 text-white">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam illo quidem deserunt saepe sequi mollitia possimus, quis illum perspiciatis, ipsum aliquam eos odio adipisci alias pariatur esse ad eaque molestiae?
                                </p>
                                <div class="justify-end flex mt-5">
                                    <button class="px-10 py-2 font-bold bg-blue-500 text-white uppercase">
                                        see all properties
                                    </button>
                                </div>
                            </div>
                        </div>
                    <!-- Hero info -->
                    <!-- Search box -->
                        <div class="w-2/3 justify-end">
                            <div class="right-16 bg-white">
                            <div class="bg-black flex justify-between w-full p-3">
                                <span class="text-white text-xl font-bold">
                                    Find Property You'll Love
                                </span>
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                            </div>
                            <div class="mt-8">
                                <div class="mx-10">
                                    <span>
                                        Enter Location
                                    </span>
                                </div>

                                <div class="relative flex items-center">
                                    <svg class="absolute h-6 w-6 right-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <input type="text" class="w-4/5 pr-8 mx-10" placeholder="City"/>
                                </div>

                            </div>
                             <div class="mt-3 flex">
                                <div class="w-1/2">
                                    <div class="mx-10">
                                        <span>
                                            Property For
                                        </span>
                                    </div>

                                    <div class="relative flex items-center">
                                        <select name="" id="" class="mx-10">
                                            <option value="">Property For</option>
                                            <option value="">For Rent</option>
                                            <option value="">For Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <div class="mx-1">
                                        <span>
                                            Property Type
                                        </span>
                                    </div>

                                    <div class="relative flex items-center">
                                        <select name="" id="" class="mx-1">
                                            <option value="">Property Type</option>
                                            <option value="">House</option>
                                            <option value="">Industrial</option>
                                            <option value="">Office</option>
                                            <option value="">Villa</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-3 flex">
                                <div class="w-1/2">
                                    <div class="mx-10">
                                        <span>
                                            Budget
                                        </span>
                                    </div>

                                    <div class="flex items-center">
                                        <select name="" id="" class="mx-10">
                                            <option value="">Budget</option>
                                            <option value=""> >$100,000</option>
                                            <option value=""> >$200,000</option>
                                            <option value=""> >$300,000</option>
                                            <option value=""> >$400,000</option>
                                            <option value=""> >$500,000</option>
                                            <option value=""> >$600,000</option>
                                            <option value=""> >$700,000</option>
                                            <option value=""> >$800,000</option>
                                            <option value=""> >$900,000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <div class="mx-1">
                                        <span>
                                            Enter Location
                                        </span>
                                    </div>

                                    <div class="relative flex items-center">
                                        <select name="" id="" class="mx-1">
                                            <option value="">Area</option>
                                            <option value=""> >1,000 SQ FT</option>
                                            <option value=""> >2,000 SQ FT</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="bg-gray-300 p-8 mt-5 flex justify-end">
                                    <button class="py-2 px-10 w-full bg-blue-700 text-white text-lg font-semibold">
                                        Search
                                    </button>
                            </div>
                            </div>
                        </div>

                    <!-- Search box -->
                </section>
            <!-- Hero Section -->
            <!-- Recent offers -->
                <section class="flex flex-col text-center items-center my-10">
                    <div class="space-y-4 my-3">
                        <span class="block">Carefully picked high end properties</span>
                        <span class="block">MOST RECENT PROPERTY OFFERS FOR YOU</span>
                    </div>
                    <div class="flex justify-around my-10">
                        <div class="flex justify-center">
                            <div class="mx-10 w-full shadow-md rounded-md">
                                <div class="relative">
                                    <span class="absolute px-3 py-1 left-0 text-white bg-blue-700 font-bold text-sm font-roboto rounded-tl-md">
                                        700,000$
                                    </span>
                                    <img src="https://images.unsplash.com/photo-1459535653751-d571815e906b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" class="rounded-t-md">
                                </div>
                                <div class="px-10 py-3 ">
                                    <p>
                                        Property Title 1
                                    </p>
                                    <p class="text-gray-800">30 Webber Street, London, UK</p>
                                    <button class="px-8 py-2 mt-4 bg-blue-500 text-white text-sm font-bold uppercase">View Property</button>
                                </div>
                                <div>
                                <hr />
                                    <div class="grid grid-cols-3 gap-0 py-2">
                                        <div class="">
                                            <i class="fas fa-expand-alt text-sm text-gray-700"></i>
                                            <span class="text-sm text-gray-600 font-roboto">500 ft sq</span>
                                        </div>
                                        <div class="">
                                            <i class="fas fa-bed text-sm text-gray-700"></i>
                                            <span class="text-sm text-gray-600 font-roboto">3 Bedrooms</span>
                                        </div>
                                        <div class="">
                                            <i class="fas fa-tint text-sm text-gray-700"></i>
                                            <span class="text-sm text-gray-600 font-roboto">2 Bathrooms</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center">
                             <div class="mx-10 w-full shadow-md rounded-md">
                                <div class="relative">
                                    <span class="absolute px-3 py-1 left-0 text-white bg-blue-700 font-bold text-sm font-roboto rounded-tl-md">
                                        700,000$
                                    </span>
                                    <img src="https://images.unsplash.com/photo-1459535653751-d571815e906b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" class="rounded-t-md">
                                </div>
                                <div class="px-10 py-3 ">
                                    <p>
                                        Property Title 1
                                    </p>
                                    <p class="text-gray-800">30 Webber Street, London, UK</p>
                                    <button class="px-8 py-2 mt-4 bg-blue-500 text-white text-sm font-bold uppercase">View Property</button>
                                </div>
                                <div>
                                    <hr />
                                    <div class="grid grid-cols-3 gap-0 py-2">
                                        <div class="">
                                            <i class="fas fa-expand-alt text-sm text-gray-700"></i>
                                            <span class="text-sm text-gray-600 font-roboto">500 ft sq</span>
                                        </div>
                                        <div class="">
                                            <i class="fas fa-bed text-sm text-gray-700"></i>
                                            <span class="text-sm text-gray-600 font-roboto">3 Bedrooms</span>
                                        </div>
                                        <div class="">
                                            <i class="fas fa-tint text-sm text-gray-700"></i>
                                            <span class="text-sm text-gray-600 font-roboto">2 Bathrooms</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center">
                             <div class="mx-10 w-full shadow-md rounded-md">
                                <div class="relative">
                                    <span class="absolute px-3 py-1 left-0 text-white bg-blue-700 font-bold text-sm font-roboto rounded-tl-md">
                                        700,000$
                                    </span>
                                    <img src="https://images.unsplash.com/photo-1459535653751-d571815e906b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" class="rounded-t-md">
                                </div>
                                <div class="px-10 py-3 ">
                                    <p>
                                        Property Title 1
                                    </p>
                                    <p class="text-gray-800">30 Webber Street, London, UK</p>
                                    <button class="px-8 py-2 mt-4 bg-blue-500 text-white text-sm font-bold uppercase">View Property</button>
                                </div>
                                <div>
                                    <hr />
                                    <div class="grid grid-cols-3 gap-0 py-2">
                                        <div class="">
                                            <i class="fas fa-expand-alt text-sm text-gray-700"></i>
                                            <span class="text-sm text-gray-600 font-roboto">500 ft sq</span>
                                        </div>
                                        <div class="">
                                            <i class="fas fa-bed text-sm text-gray-700"></i>
                                            <span class="text-sm text-gray-600 font-roboto">3 Bedrooms</span>
                                        </div>
                                        <div class="">
                                            <i class="fas fa-tint text-sm text-gray-700"></i>
                                            <span class="text-sm text-gray-600 font-roboto">2 Bathrooms</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- Recent offers -->
    </div>
</div>

</x-guest-layout>
