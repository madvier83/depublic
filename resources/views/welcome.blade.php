<x-layout>
    <x-slot:title>Depublic</x-slot:title>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen max-w-[576px] mx-auto relative bg-[#FAFAFA]">
        <div class="absolute w-[576px] h-[510px] bg-[#FDF9F0] z-0">
            <img src="/img/hero.png" alt="dpublic" class="ml-auto">
        </div>

        <div class="flex flex-col p-8 gap-8 relative z-10">
            <label class="input bg-opacity-40 backdrop-blur-sm input-bordered flex items-center gap-2">
                <svg class="w-[24px] text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    strokeWidth={1.5} stroke="currentColor" className="size-6">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="text" class="grow border-none" placeholder="Search Activities" />
            </label>

            <h1 class="text-[30px] font-bold w-72 mt-8">Depublic Event Application</h1>

            <a href="/event" class="btn btn-primary btn-sm h-[44px] w-[141px] px-4 text-[16px]">All Events</a>

            <div>
                <div id="default-carousel" class="relative w-full mt-8" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden rounded-lg h-[250px]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://s3-alpha-sig.figma.com/img/7fae/2ee3/6f12c39d92d686379baf1e2137640a55?Expires=1717977600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MuauGd5ICZRJify38Liz5~aOp2S8sh5eVC4XDqFdcV4GxYEApEbKmUUInbuBJLnj0xRzKtXZdBnVZ5sLslmFR4RnlgJRu2Ltt7u5xgNJvD6gCpFF9Dqkxl4efMhPDCXcuDk24R0kA5AyCQlw1FtezqPjz3NwCHfBhUnrufjTYqY3QWiOejkDROyk4dU4rWF5i6dpWMJitk5tSpxwc5rvzJEECVbAygQX7mscQibCYE0s0XTF1Xvm~9tz3EUH2LpEM95AwwI4~d2fD7PJZ2P0bMKqnsCwcVNAOS~kyLEq07gdwrTyYJAB4h5VUWUCKQ8-nca3mcUk5fKmnegS8apGyA__"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://s3-alpha-sig.figma.com/img/7fae/2ee3/6f12c39d92d686379baf1e2137640a55?Expires=1717977600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MuauGd5ICZRJify38Liz5~aOp2S8sh5eVC4XDqFdcV4GxYEApEbKmUUInbuBJLnj0xRzKtXZdBnVZ5sLslmFR4RnlgJRu2Ltt7u5xgNJvD6gCpFF9Dqkxl4efMhPDCXcuDk24R0kA5AyCQlw1FtezqPjz3NwCHfBhUnrufjTYqY3QWiOejkDROyk4dU4rWF5i6dpWMJitk5tSpxwc5rvzJEECVbAygQX7mscQibCYE0s0XTF1Xvm~9tz3EUH2LpEM95AwwI4~d2fD7PJZ2P0bMKqnsCwcVNAOS~kyLEq07gdwrTyYJAB4h5VUWUCKQ8-nca3mcUk5fKmnegS8apGyA__"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://s3-alpha-sig.figma.com/img/7fae/2ee3/6f12c39d92d686379baf1e2137640a55?Expires=1717977600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MuauGd5ICZRJify38Liz5~aOp2S8sh5eVC4XDqFdcV4GxYEApEbKmUUInbuBJLnj0xRzKtXZdBnVZ5sLslmFR4RnlgJRu2Ltt7u5xgNJvD6gCpFF9Dqkxl4efMhPDCXcuDk24R0kA5AyCQlw1FtezqPjz3NwCHfBhUnrufjTYqY3QWiOejkDROyk4dU4rWF5i6dpWMJitk5tSpxwc5rvzJEECVbAygQX7mscQibCYE0s0XTF1Xvm~9tz3EUH2LpEM95AwwI4~d2fD7PJZ2P0bMKqnsCwcVNAOS~kyLEq07gdwrTyYJAB4h5VUWUCKQ8-nca3mcUk5fKmnegS8apGyA__"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://s3-alpha-sig.figma.com/img/7fae/2ee3/6f12c39d92d686379baf1e2137640a55?Expires=1717977600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MuauGd5ICZRJify38Liz5~aOp2S8sh5eVC4XDqFdcV4GxYEApEbKmUUInbuBJLnj0xRzKtXZdBnVZ5sLslmFR4RnlgJRu2Ltt7u5xgNJvD6gCpFF9Dqkxl4efMhPDCXcuDk24R0kA5AyCQlw1FtezqPjz3NwCHfBhUnrufjTYqY3QWiOejkDROyk4dU4rWF5i6dpWMJitk5tSpxwc5rvzJEECVbAygQX7mscQibCYE0s0XTF1Xvm~9tz3EUH2LpEM95AwwI4~d2fD7PJZ2P0bMKqnsCwcVNAOS~kyLEq07gdwrTyYJAB4h5VUWUCKQ8-nca3mcUk5fKmnegS8apGyA__"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://s3-alpha-sig.figma.com/img/7fae/2ee3/6f12c39d92d686379baf1e2137640a55?Expires=1717977600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MuauGd5ICZRJify38Liz5~aOp2S8sh5eVC4XDqFdcV4GxYEApEbKmUUInbuBJLnj0xRzKtXZdBnVZ5sLslmFR4RnlgJRu2Ltt7u5xgNJvD6gCpFF9Dqkxl4efMhPDCXcuDk24R0kA5AyCQlw1FtezqPjz3NwCHfBhUnrufjTYqY3QWiOejkDROyk4dU4rWF5i6dpWMJitk5tSpxwc5rvzJEECVbAygQX7mscQibCYE0s0XTF1Xvm~9tz3EUH2LpEM95AwwI4~d2fD7PJZ2P0bMKqnsCwcVNAOS~kyLEq07gdwrTyYJAB4h5VUWUCKQ8-nca3mcUk5fKmnegS8apGyA__"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>

            {{-- <div class="w-full border"></div> --}}

            <div class="flex items-center justify-between">

                <h1 class="text-[20px] font-bold">Upcoming Event</h1>
                <div class="flex items-center gap-2 ml-auto mr-4">
                    <button
                        class="w-[39px] h-[39px] flex items-center justify-center border-gray-200 border rounded-full"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <button
                        class="w-[39px] h-[39px] flex items-center justify-center border-gray-200 border rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <a href="/event" class="text-[14px]">See All</a>
            </div>

            <div class="grid grid-cols-2 gap-4 max-w-full">

                <x-event-card></x-event-card>
                <x-event-card></x-event-card>
                <x-event-card></x-event-card>
                <x-event-card></x-event-card>
                <x-event-card></x-event-card>

            </div>

        </div>

        <x-footer></x-footer>
    </div>
</x-layout>
