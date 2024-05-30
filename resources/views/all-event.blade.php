<x-layout>
    <x-slot:title>Depublic</x-slot:title>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen max-w-[576px] mx-auto relative bg-[#FAFAFA]">
        <div class="flex flex-col p-8 relative z-10">

            <div class="text-sm breadcrumbs">
                <ul>
                    <li class="text-gray-500"><a href="/">Home</a></li>
                    <li class="text-primary font-semibold">Ticket</li>
                </ul>
            </div>

            <div class="flex gap-2 mt-8">
                <label class="input bg-opacity-40 backdrop-blur-sm input-bordered flex items-center gap-2 w-[340px]">
                    <svg class="w-[24px] text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <input type="text" class="grow border-none" placeholder="Search Activities" />
                </label>
                <label
                    class="input bg-amber-100 bg-opacity-40 backdrop-blur-sm input-bordered flex items-center gap-2 w-[165px]">
                    <select class="grow border-none bg-transparent font-semibold" placeholder="Location">
                        <option value="" disabled selected>Location</option>
                    </select>
                </label>
            </div>

            {{-- <div class="w-full border"></div> --}}

            <div class="flex items-center justify-between mt-8">
                <h1 class="text-[20px] font-bold">All Event</h1>
                <div class="flex gap-2 justify-end">
                    <div class="flex items-center gap-2">
                        <button
                            class="border border-gray-300 h-[41px] w-full rounded-full px-4 font-semibold flex gap-2 items-center">
                            <img src="/img/filter.svg" alt="filter">
                            Filter</button>
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="border border-gray-300 h-[41px] w-full rounded-full px-4 font-semibold flex gap-2 items-center">
                            <img src="/img/date.svg" alt="filter">
                            Date</button>
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="border border-gray-300 h-[41px] w-full rounded-full px-4 font-semibold flex gap-2 items-center">
                            <img src="/img/price.svg" alt="filter">
                            Price</button>
                    </div>
                </div>
            </div>

            <div class="border mt-4"></div>
            <p class="mt-8">60 Event on result</p>

            <div class="grid grid-cols-2 gap-4 max-w-full mt-8">

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
