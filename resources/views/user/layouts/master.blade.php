<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('user.layouts.head')
</head>

<body>
    <div class="page">
       
        <div class="page-wrapper">
            @yield('content')
            @include('user.layouts.footer')
           
        </div>
    </div>
    @include('user.layouts.scripts')
    <x-alert />
</body>

</html>
