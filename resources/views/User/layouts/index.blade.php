<!DOCTYPE html>
<html lang="en">

    @include('User.partials.header.head')

<body>

        @include('User.partials.header.navbar')


        @if(Route::currentRouteName() === 'home_route')
            @include('User.partials.home.banner')
        @endif

            @yield('content')

    @include('User.partials.footer')

    @include('User.partials.script')

</body>
</html>
