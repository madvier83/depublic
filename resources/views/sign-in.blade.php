<x-layout>
    <x-slot:title>Depublic - Sign In</x-slot:title>
    <x-navbar></x-navbar>

    <div class="w-full min-h-screen max-w-[576px] mx-auto relative bg-[#FAFAFA]">
        <div class="flex px-8 items-center justify-between w-[576px] h-[80px] bg-[#FDF9F0] z-0">
            <h1 class="text-[20px] font-bold">Sign In</h1>
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </a>
        </div>
        {{-- <img src="/img/hero.png" alt="dpublic" class="ml-auto"> --}}

        <div class="p-8">

            <h1 class="text-[20px] font-semibold">Welcome Back!</h1>
            <form action="" class="mt-8">
                <div class="border-b">
                    <input type="text"
                        class="border-none w-full border-b border-gray-700 bg-transparent py-4 px-5 outline-none focus:outline-none"
                        placeholder="Username">
                </div>
                <div class="border-b flex items-center mt-4">
                    <input type="password"
                        class="border-none w-full border-b border-gray-700 bg-transparent py-4 px-5 outline-none focus:outline-none"
                        placeholder="Password">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 mr-4 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>

                <button class="font-bold btn btn-primary h-[62px] w-full text-[20px] mt-8">Sign
                    In</button>


            </form>
            <div class="text-center mt-8">
                <p class="text-gray-600 mt-2">Don't have an account? <a href="/sign-up"
                        class="text-primary font-semibold">Register</a></p>
            </div>

        </div>
        <div class="w-full h-[11px] bg-gray-100"></div>

        <div class="py-8"></div>
    </div>

</x-layout>
