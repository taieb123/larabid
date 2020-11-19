<!DOCTYPE html>
<html lang="en">

    @include('Admin.partials.header.head')

<body>
    
    <div id="wrapper">
         @include('Admin.partials.header.navbar')
         
          <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('Admin.partials.header.topnavbar')

            @yield('content')
            
          </div>
    </div>
    
    @include('Admin.partials.script')

</body>
</html>