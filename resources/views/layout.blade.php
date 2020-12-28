@include('layout.header')
<div id="menu">
    @yield('menu')
</div>
<div id="content">
    @yield('content')
</div>
@yield('script')
@include('layout.footer')
