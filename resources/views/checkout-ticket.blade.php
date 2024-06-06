<x-layout>
    <x-slot:title>Depublic</x-slot:title>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen max-w-[576px] mx-auto relative bg-[#FAFAFA]">
        <div class="flex gap-4 px-8 items-center w-[576px] h-[80px] bg-[#FDF9F0] z-0">
            <a href="{{ url()->previous() }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </a>
            <h1 class="text-[20px] font-bold">Ticket Package</h1>
        </div>
        {{-- <img src="/img/hero.png" alt="dpublic" class="ml-auto"> --}}

        <div class="p-8">
            <form action="" class="mt-4">

                <h1 class="text-[20px] font-bold">Your Contact</h1>
                <p class="mt-4 text-gray-600">Fill in this form correctly. We'll send the e-ticket to the email address
                    as
                    declared on this page.</p>
                <div class="bg-white flex flex-col gap-3 shadow p-4 rounded-xl mt-6">
                    <div class="input input-bordered border-gray-300 pt-1">
                        <input type="text" class="border-none w-full bg-transparent outline-none focus:outline-none"
                            placeholder="Full name">
                    </div>
                    <div class="input input-bordered border-gray-300 pt-1">
                        <input type="text" class="border-none w-full bg-transparent outline-none focus:outline-none"
                            placeholder="Phone number">
                    </div>
                    <div class="input input-bordered border-gray-300 pt-1">
                        <input type="email" class="border-none w-full bg-transparent outline-none focus:outline-none"
                            placeholder="Email">
                    </div>
                </div>

                <h1 class="text-[20px] font-bold mt-8">Visitor Details</h1>
                <p class="mt-4 text-gray-600">Make sure to fill in the visitor details correctly for a smooth
                    experience.</p>
                <div class="bg-white flex flex-col gap-3 shadow p-4 rounded-xl mt-6">
                    <h1 class="text-lg font-bold">Ticket 1 (Pax)</h1>
                    <div class="flex gap-2 items-center">
                        <input type="radio" id="radio-1" name="radio-1" className="border" checked />
                        <label for="radio-1" class="text-gray-500 text-sm">Same as contact details</label>
                    </div>
                    <div class="border-b"></div>
                    <p class="text-amber-600 text-sm bg-amber-100 py-2 px-4 rounded-full mt-2">ⓘ You only need one
                        visitor's info for all the tickets you book.</p>
                    <div class="input input-bordered border-gray-300 pt-1 mt-2">
                        <input type="text" class="border-none w-full bg-transparent outline-none focus:outline-none"
                            placeholder="Full name">
                    </div>
                    <div class="input input-bordered border-gray-300 pt-1">
                        <input type="text" class="border-none w-full bg-transparent outline-none focus:outline-none"
                            placeholder="Phone number">
                    </div>
                    <div class="input input-bordered border-gray-300 pt-1">
                        <input type="email" class="border-none w-full bg-transparent outline-none focus:outline-none"
                            placeholder="Email">
                    </div>
                    <div class="input input-bordered border-gray-300 pt-1">
                        <input type="email" class="border-none w-full bg-transparent outline-none focus:outline-none"
                            placeholder="Identity card number">
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow p-5 mt-8">
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Total Payment</p>
                        <p class="font-bold text-primary">IDR 1.999.000</p>
                    </div>
                    <div class="border-b mt-4"></div>
                </div>

                <a href="/ticket/id/payment" class="btn btn-primary rounded-none w-full mt-8">Book Ticket</a>


            </form>

            <div class="py-8"></div>
        </div>

</x-layout>
