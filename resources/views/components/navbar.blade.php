<div class="navbar bg-base-100">
    <div class="flex justify-between items-center max-w-[576px] w-full mx-auto py-2 px-8">
        <a href="/">
            <img src="/img/logo.png" alt="logo" class="w-[75px] mr-auto">
        </a>
        <div class="flex gap-2">
            @guest
                @if (!Request::is('sign-in') && !Request::is('sign-up'))
                    <a href="/sign-in" class="btn btn-primary btn-outline btn-sm h-[44px] w-[126px] px-4 text-[16px]">Sign
                        In</a>
                    <a href="/sign-up" class="btn btn-primary btn-sm h-[44px] w-[126px] px-4 text-[16px]">Sign Up</a>
                @endif
            @endguest

            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-primary btn-sm h-[44px] w-[126px] px-4 text-[16px]">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</div>
