<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 text-gray-900">
    <nav class="bg-white-500  p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">NathanielXMaristela</h1>
            <ul class="flex space-x-15">
                <li><a href="/" class="hover:text-blue-500">Home</a></li>
                <li><a href="/" class="hover:text-blue-500">About</a></li>
                <li><a href="/projects" class="hover:text-blue-500">Projects</a></li>
                <li><a href="/contact" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container mx-auto mt-10">
        @yield('content')
    </div>
</body>
</html> 
