<html>
<head>
   @include('elements.head')
   @yield('style')
</head>
<body >
    <div class="side-bar"></div>
    <div class="bg-gray-900 text-white font-sans">
        @yield('content')
    </div>
    
    @yield('script')
</body>
</html>