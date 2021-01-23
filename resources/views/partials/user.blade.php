<dropdown-trigger class="h-9 flex items-center p-relative">

    <img src="https://marshmallow.dev/cdn/media/mrmallow-250x250.png" class="mrmallow rounded-full w-8 h-8 mr-3"/>

    @if (class_exists('\Marshmallow\Translatable\Models\Language'))
        <img src="{{ \Marshmallow\Translatable\Models\Language::currentTranslatableModel()->getIcon() }}"
             class="current-language-header-icon rounded-full w-8 h-8 mr-3"/>
    @endif

    <span class="text-90">
        {{ $user->name ?? $user->email ?? __('Marshmallow User') }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        <li>
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Logout') }}
            </a>
        </li>
    </ul>
</dropdown-menu>
