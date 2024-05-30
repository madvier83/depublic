<div class="navbar bg-base-100">
    <div class="flex justify-between items-center max-w-[576px] w-full mx-auto py-2 px-8">
        <img src="/img/logo.png" alt="logo" class="w-[75px] mr-auto">
        <div class="flex gap-2">
            @if (!Request::is('sign-in') && !Request::is('sign-up'))
                <a href="/sign-in" class="btn btn-primary btn-outline btn-sm h-[44px] w-[126px] px-4 text-[16px]">Sign
                    In</a>
                <a href="/sign-up" class="btn btn-primary btn-sm h-[44px] w-[126px] px-4 text-[16px]">Sign Up</a>
            @endif
        </div>
    </div>
</div>
