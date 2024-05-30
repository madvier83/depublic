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
            <a href="/event/id" class="py-4 text-primary font-semibold border-b-2 border-primary">Summary</a>
            <a href="/event/id/package" class="py-4">Package</a>
            <a href="/event/id/location" class="py-4">Location</a>
            <a href="/event/id/upcoming" class="py-4">Upcoming</a>
        </div>

        <div class="p-8">

            <div class="flex gap-1 uppercase text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                <p>Bandung</p>
                <p class="text-gray-300 px-1">|</p>
                <p class="text-primary font-semibold">8 Oct 2023</p>
            </div>

            <p class="text-gray-800 text-2xl font-bold mt-4">Judul Event</p>

            <div class="flex gap-4 justify-between mt-4">
                <p class="text-gray-500 mt-2 text-sm w-3/5 text-justify">Lorem ipsum dolor sit amet consectetur. Nibh
                    ultricies facilisi faucibus euismod mauris lorem fermentum. </p>
                <div class="flex flex-col justify-start text-right pt-2">
                    <span class="text-sm font-semibold">Starting from</span>
                    <p class="text-gray-600 mt-2 text-xl"><span class="text-primary font-bold">IDR 1.999.000 </span></p>
                </div>
            </div>

            <p class="text-gray-800 text-xl font-bold mt-8">Highlight</p>

            <div class="text-sm mt-4 text-gray-500 text-justify">
                <ul class="list-disc pl-8">
                    <li>
                        Saksikan langsung penampilan memukau dari Maher Zain lewat tur perdana mereka, “2023 LE SSERAFIM
                        TOUR
                        'FLAME RISES' IN JAKARTA”
                    </li>
                    <li>
                        Konser akan berlangsung pada tanggal 3 Oktober 2023 di JIEXPO Hall B3, Jakarta
                    </li>
                    <li>
                        Untuk cara penggunaan membership code saat periode presale, harap kunjungi laman ini
                    </li>
                </ul>
            </div>
        </div>

        <x-footer></x-footer>
    </div>

</x-layout>
