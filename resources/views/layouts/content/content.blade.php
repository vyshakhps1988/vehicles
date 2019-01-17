<body>
    {{--calling contents--}}
    @yield('content')

    {{--adding common scripts--}}
    @include('layouts.assets.js')

    {{--calling custom scripts from views--}}
    @yield('scripts')

</body>
