<x-layout>
    <x-slot:title>Depublic - Sign In</x-slot:title>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen max-w-[576px] mx-auto relative bg-[#FAFAFA]">
        <div class="p-8">

            <div class="text-sm breadcrumbs">
                <ul>
                    <li class="text-gray-500"><a href="/">Home</a></li>
                    <li class="text-gray-500"><a href="/event">Ticket</a></li>
                    <li class="text-primary font-semibold">Detail Event</li>
                </ul>
            </div>


            <div class="rounded-xl overflow-hidden mt-4">
                <img src="https://s3-alpha-sig.figma.com/img/7fae/2ee3/6f12c39d92d686379baf1e2137640a55?Expires=1717977600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MuauGd5ICZRJify38Liz5~aOp2S8sh5eVC4XDqFdcV4GxYEApEbKmUUInbuBJLnj0xRzKtXZdBnVZ5sLslmFR4RnlgJRu2Ltt7u5xgNJvD6gCpFF9Dqkxl4efMhPDCXcuDk24R0kA5AyCQlw1FtezqPjz3NwCHfBhUnrufjTYqY3QWiOejkDROyk4dU4rWF5i6dpWMJitk5tSpxwc5rvzJEECVbAygQX7mscQibCYE0s0XTF1Xvm~9tz3EUH2LpEM95AwwI4~d2fD7PJZ2P0bMKqnsCwcVNAOS~kyLEq07gdwrTyYJAB4h5VUWUCKQ8-nca3mcUk5fKmnegS8apGyA__"
                    class="w-full" />
            </div>
        </div>

        <div class="flex gap-8 border-b px-8 text-[16px]">
            <a href="/event/id" class="py-4">Summary</a>
            <a href="/event/id/package" class="py-4">Package</a>
            <a href="/event/id/location" class="py-4">Location</a>
            <a href="/event/id/upcoming" class="py-4 text-primary font-semibold border-b-2 border-primary">Upcoming</a>
        </div>

        <div class="p-8">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 max-w-full mt-6">

                <x-event-card></x-event-card>
                <x-event-card></x-event-card>

            </div>
        </div>


        <x-footer></x-footer>
    </div>

</x-layout>
