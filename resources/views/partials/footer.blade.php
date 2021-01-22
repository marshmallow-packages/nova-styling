<p class="mt-8 text-center text-xs text-80">
    <a href="{{ env('APP_URL', 'https://marshmallow.dev') }}" class="text-secondary dim no-underline">{{ env('APP_NAME', 'Marshmallow') }}</a> {{ __('by') }} <a href="https://marshmallow.dev" class="text-primary dim no-underline">Marshmallow</a> &copy; {{ date('Y') }}<span class="px-1">&middot;</span>
</p>    <p class="mt-1 text-center text-xs text-80">

    {{ __('Theme') }} v{{ \Marshmallow\NovaStyling\Theme::version() }}
    <span class="px-1">&middot;</span>
    Laravel Nova v{{ \Laravel\Nova\Nova::version() }}
</p>
