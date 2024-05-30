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
            <a href="/event/id/location" class="py-4 text-primary font-semibold border-b-2 border-primary">Location</a>
            <a href="/event/id/upcoming" class="py-4">Upcoming</a>
        </div>

        <div class="p-8">
            <p class="text-gray-800 text-xl font-bold">Location</p>

            <div class="shadow-sm rounded-lg mt-8 overflow-hidden">
                <div class="h-[270px] w-full relative">
                    <img src="https://s3-alpha-sig.figma.com/img/0f9e/6097/0774408f5d414279753f4cb7f478dad5?Expires=1717977600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=IL0NzFVKxLL1v-kF0xy0chQgSAQGIUz1rXMiKhJsi4Q18boAsMddN3VMsm2nkQFKPXFRH-Hh~U49Qmm2l7~3VMaKqd5Hwb-SkxHEFEKUS0IbhzReAxD-4xLU0tiRQMi6VZUy2eQECLleJb8E9C4jseMwSPXFZ5wgj75BSgGKq05u5XxjhDJWSGCEInZyN8ZSRlSheK22VyuwJI0rdTmjYbzP0pLbx4U5ueBdVwtF3bbcDSrD1KUMgMICHYGC0Q3Hk9XMugVHBHy6HM0~tFIpSRXjgv7u1Y4uqPqhblErntqsllsSgwWjPQTCFUAUGgJYb6BBv6Mj7NLXAZ-FyPIL-Q__"
                        alt="" class="absolute top-0">
                    <div
                        class="flex justify-between items-end relative mt-auto h-full p-4 bg-gradient-to-t from-white via-35% via-white">
                        <div class="flex items-start">
                                <img src="/img/location.svg" alt="location"  class="w-[30px] h-[30px] mr-2">
                            <p>Jiexpo Hall B3 Pademangan Tim., Kec. Pademangan, Jkt Utara, Daerah Khusus Ibukota Jakarta
                                14410,
                                Kemayoran, Jakarta Pusat, Jakarta, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="bg-white w-full rounded-lg mt-4 p-3 px-4 shadow-sm">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-4">
                        <img src="/img/direction.svg" alt="directions">
                        <p class="font-bold">Directions</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </div>
        </div>


        <x-footer></x-footer>
    </div>

</x-layout>
