<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>absenyuu</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-orange-500">

   @include('components.navbar')
    
   @yield('content')
   
   <script>
   let xstatus = false;
    function showhidemenu() {
            if (!xstatus) {
                document.getElementById("menu").classList.remove("hidden");
                document.getElementById("menu").classList.add("flex");
                if (document.documentElement.scrollTop < 20) {
                    document.getElementById("topheader").classList.add("bg-white");
                    document.getElementById("topheader").classList.add("shadow-lg");
                }
                xstatus = true;
            } else {
                document.getElementById("menu").classList.remove("flex");
                document.getElementById("menu").classList.add("hidden");
                if (document.documentElement.scrollTop < 20) {
                    document.getElementById("topheader").classList.remove("bg-white");
                    document.getElementById("topheader").classList.remove("shadow-lg");
                }
                xstatus = false;
            }
        }
</script>
</body>

</html>