@include('components.head')
<body>
    <div id="app">
        <div class="main-wrapper">
            @include('components.navbar')
            @include('components.sidebar')

            <div class="main-content">
                @yield('content')
            </div>

            @include('components.footer')
        </div>
    </div>
    @include('components.script')
</body>
</head>
</html>
