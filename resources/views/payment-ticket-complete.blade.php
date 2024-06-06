<x-layout>
    <x-slot:title>Depublic</x-slot:title>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen max-w-[576px] mx-auto relative bg-[#FAFAFA]">
        {{-- <img src="/img/hero.png" alt="dpublic" class="ml-auto"> --}}

        <div class="p-8">
            <div class="flex justify-between items-center bg-white shadow p-6 rounded-xl">
                <h1 class="text-[20px] font-bold">Complete Payment In</h1>

                <span class="flex gap-2 font-mono text-2xl bg-amber-100 p-3 rounded-lg">
                    <span style="">23</span>:
                    <span style="">59</span>:
                    <span style="">59</span>
                </span>
            </div>

            <div class="bg-white flex flex-col gap-3 shadow p-6 rounded-xl mt-6">
                <h1 class="text-xl font-bold py-4">Payment Instructions</h1>
                <div class="border-b"></div>
                <p class="py-2 font-semibold">Transfer to</p>
                <div class="p-4 bg-gray-100 rounded-lg">
                    Bank BCA
                </div>
                <div class="p-4 border rounded-lg flex justify-between items-center">
                    <p>1 2003 0456 7089 9876</p>
                    <button class="text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                        </svg>
                    </button>
                </div>

                <p class="py-2 font-semibold">Total payment</p>
                <div class="p-4 border rounded-lg flex justify-between items-center">
                    <p>IDR 1.999.000</p>
                </div>


                <div
                    class="text-amber-600 text-xs bg-amber-100 py-2 px-4 rounded-full mt-2 font-semibold flex items-center gap-3">
                    <p>ⓘ</p>
                    <p>
                        Once our payment is verified, your e-ticket and receipt will be sent to the registered email
                        address
                    </p>
                </div>

                <div class="flex gap-2 justify-between mt-4">
                    <button class="btn w-[49%] btn-primary btn-outline">Change Payment Method</button>
                    <button class="btn w-[49%] btn-primary">See Order List</button>
                </div>

            </div>



            <div class="bg-white rounded-xl shadow p-5 mt-8">

                <p class="text-amber-600 text-sm bg-amber-100 py-2 px-4 rounded-full mt-2 font-semibold text-center">
                    Order ID: 1243776184</p>
                <div class="flex items-center gap-4 mt-4">
                    <div class="w-[55px] h-[55px] bg-amber-200 rounded-full flex items-center justify-center">
                        <img src="/img/tickets.png" alt="">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-sm font-semibold">Lorem ipsum</p>
                        <p class="text-xs">Wed, 30 Aug 2023</p>
                    </div>
                </div>
                <div class="border-b border-dashed my-4"></div>
                <div class="flex justify-between items-center">
                    <p class="font-bold">Total Payment</p>
                    <p class="font-bold text-primary">IDR 1.999.000</p>
                </div>
            </div>

            <div class="py-8"></div>
        </div>
    </div>

</x-layout>
