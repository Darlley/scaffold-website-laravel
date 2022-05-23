@section('title', 'Página inicial')
<x-app-layout>


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full"
                        src="https://dummyimage.com/1200x500">
                </div>
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Phoebe Caulfield</h2>
                            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                            <p class="text-base">Raclette knausgaard hella meggs normcore williamsburg enamel pin
                                sartorial venmo tbh hot chicken gentrify portland.</p>
                        </div>
                    </div>
                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <p class="leading-relaxed text-lg mb-4">Meggings portland fingerstache lyft, post-ironic fixie
                            man bun banh mi umami everyday carry hexagon locavore direct trade art party. Locavore small
                            batch listicle gastropub farm-to-table lumbersexual salvia messenger bag. Coloring book
                            flannel truffaut craft beer drinking vinegar sartorial, disrupt fashion axe normcore meh
                            butcher. Portland 90's scenester vexillologist forage post-ironic asymmetrical, chartreuse
                            disrupt butcher paleo intelligentsia pabst before they sold out four loko. 3 wolf moon
                            brooklyn.</p>
                        <a class="text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">
                    1</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Shooting Stars</h2>
                        <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk
                            bespoke try-hard cliche palo santo offal.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">
                    2</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">The Catalyzer</h2>
                        <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk
                            bespoke try-hard cliche palo santo offal.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">
                    3</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="3"></circle>
                            <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                        </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">The 400 Blows</h2>
                        <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk
                            bespoke try-hard cliche palo santo offal.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">
                    4</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div
                        class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Neptune</h2>
                        <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk
                            bespoke try-hard cliche palo santo offal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac
                    Heirloom
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them
                    man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M8 17l4 4 4-4m-4-5v9"></path>
                            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
                        <p class="leading-relaxed">Downloads</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
                        <p class="leading-relaxed">Users</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                            <path
                                d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z">
                            </path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
                        <p class="leading-relaxed">Files</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
                        <p class="leading-relaxed">Places</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-partials.cta />

</x-app-layout>
