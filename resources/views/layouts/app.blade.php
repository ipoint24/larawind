<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layouts.partials.menu')
        @include('layouts.partials.mobile-menu')

        <div class="flex flex-col flex-1 w-full">
            @include('layouts.partials.navigation-dropdown')
            <main class="h-full overflow-y-auto">
                @include('layouts.partials.breadcrumbs')
                @include('layouts.partials.flash')
                @include('layouts.partials.banner')
                {{ $slot }}
            </main>
        </div>
        @include('layouts.partials.footer')
    </div>
</body>

</html>
