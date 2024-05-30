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
            <a href="/event/id/package" class="py-4 text-primary font-semibold border-b-2 border-primary">Package</a>
            <a href="/event/id/location" class="py-4">Location</a>
            <a href="/event/id/upcoming" class="py-4">Upcoming</a>
        </div>

        <div class="p-8">
            <p class="text-gray-800 text-xl font-bold">Choose Package</p>

            <div class="flex flex-col gap-4 mt-8">
                <x-package-card></x-package-card>
                <x-package-card></x-package-card>
                <x-package-card></x-package-card>
            </div>
        </div>

        <x-footer></x-footer>
    </div>

</x-layout>
