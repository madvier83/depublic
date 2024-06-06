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
                <h1 class="text-xl font-bold py-4">Payment Method</h1>
                <div class="border-b"></div>
                <p class="py-2 font-semibold text-primary">Select Payment Method</p>

                <p class="text-emerald-600 text-sm bg-emerald-100 py-2 px-4 rounded-full w-min font-semibold">Recomended
                </p>

                <div class="flex flex-col gap-4 my-2">
                    <div class="flex gap-2 items-center">
                        <input type="radio" id="radio-1" name="radio-1" className="border" checked />
                        <label for="radio-1" class="font-semibold text-sm">Mandiri</label>
                    </div>
                    <div class="flex gap-2 items-center">
                        <input type="radio" id="radio-2" name="radio-2" className="border" checked />
                        <label for="radio-2" class="font-semibold text-sm">BCA</label>
                    </div>
                    <div class="flex gap-2 items-center">
                        <input type="radio" id="radio-3" name="radio-3" className="border" checked />
                        <label for="radio-3" class="font-semibold text-sm">QRIS</label>
                    </div>
                </div>
            </div>


            <h1 class="text-[20px] font-bold mt-8">Your Ticket</h1>

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
                <div class="border flex justify-between items-center p-2 rounded-lg mt-4">
                    <p class="text-sm text-gray-500">See promos/vouchers</p>
                    <input type="radio" checked>
                </div>
                <div class="border flex justify-between items-center p-2 rounded-lg mt-4">
                    <p class="text-sm text-gray-500">Use 0 points</p>
                    <input type="radio" checked>
                </div>
                <div class="border-b border-dashed my-4"></div>
                <div class="flex justify-between items-center">
                    <p class="font-bold">Total Payment</p>
                    <p class="font-bold text-primary">IDR 1.999.000</p>
                </div>
                <p class="text-xs mt-4">Dengan melanjutkan proses pembayaran, kamu menyetujui <span
                        class="font-semibold text-primary">Syarat & Ketentuan dan Kebijakan Privasi</span> depublic.com
                </p>
            </div>

            <a href="/ticket/id/payment-complete" class="btn btn-primary rounded-none w-full mt-8">Continue Payment</a>

            <div class="py-8"></div>
        </div>
    </div>

</x-layout>
