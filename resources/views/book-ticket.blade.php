<x-layout>
    <x-slot:title>Depublic</x-slot:title>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen max-w-[576px] mx-auto relative bg-[#F5F0F6]">
        <div class="flex px-8 items-center justify-between w-[576px] h-[80px] bg-[#FAFAFA] z-0">
            <h1 class="text-[20px] font-bold">Book Ticket</h1>
            <a href="{{ url()->previous() }}" class="text-rose-500">
                Cancel Order
            </a>
        </div>
        {{-- <img src="/img/hero.png" alt="dpublic" class="ml-auto"> --}}

        <div class="p-8">

            <h1 class="text-[20px] font-semibold">Lorem Ipsum</h1>

            <div class="bg-white rounded-xl shadow-sm p-5 mt-4">
                <p class="font-bold">CAT 2A (STANDING)</p>
                <p class="font-bold text-primary mt-2">IDR 1.999.000</p>
                <div class="border-b mt-4"></div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-5 mt-4">
                <p class="font-bold">Date</p>
                <p class="font-bold text-primary mt-2">8 October 2023</p>
                <div class="border-b mt-4"></div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-5 mt-4">
                <p class="font-bold">Total</p>
                <p class="font-bold text-primary mt-2">IDR 1.999.000</p>
                <div class="border-b mt-4"></div>
            </div>

            <h1 class="text-[20px] font-semibold mt-8">Summary</h1>

            <div class="bg-white rounded-xl shadow-sm p-5 mt-4">
                <div class="flex justify-between items-center">
                    <p class="">Date</p>
                    <p class="font-bold text-primary mt-2">8 October 2023</p>
                </div>
                <div class="border-b mt-4"></div>
                <p class="text-sm mt-4">Total (1 Ticket)</p>
                <p class="font-bold text-primary mt-2">IDR 1.999.000</p>
            </div>

            <a href="/ticket/id/book" class="btn btn-primary rounded-none w-full mt-8">Next</a>

        </div>
        <div class="w-full h-[11px] bg-gray-100"></div>

        <div class="py-8"></div>
    </div>

</x-layout>
