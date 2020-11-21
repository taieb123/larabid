<!DOCTYPE html>
<html lang="en">

    @include('User.partials.header.head')

<body>
    
 
         @include('User.partials.header.navbar')
         
         
   

            @yield('content')
            
        
    @include('User.partials.footer')
    
    @include('User.partials.script')

</body>

</html>