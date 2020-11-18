<!DOCTYPE html>
<html lang="en">

    @include('Admin.partials.header.head')

<body>
    
    <div id="wrapper">
         @include('Admin.partials.header.navbar')
         
         @yield('content')
    </div>
    
    @include('Admin.partials.script')

</body>
</html>