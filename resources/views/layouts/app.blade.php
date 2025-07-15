<!DOCTYPE html>
<html>

<head>
        @livewireStyles
</head>

<body>
        @yield('content')
        <h1>Root App Page </h1>

        <livewire:counter />
        @livewireScripts
</body>

</html>