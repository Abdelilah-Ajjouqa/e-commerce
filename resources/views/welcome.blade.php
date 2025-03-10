<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex space-x-4">
                <a href="{{ route('register') }}">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Register</button>
                </a>
                <a href="{{ route('login') }}">
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Login</button>
                </a>
            </div>
        </div>
    </nav>
</body>
</html>