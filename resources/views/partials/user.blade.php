<dropdown-trigger class="h-9 w-8 flex items-center">
    @isset($user->email)
        <img
            src="https://marshmallow.dev/cdn/media/mrmallow-250x250.png"
            class="mrmallow rounded-full w-8 h-8 mr-3 pr-3"
        />
    @endisset

    <span class="text-90">
        {{ $user->name ?? $user->email ?? __('Nova User') }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" class="mt-1 z-60 " direction="rtl">
    <ul class="list-reset">
        <li>
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Logout') }}
            </a>
        </li>
    </ul>
</dropdown-menu>