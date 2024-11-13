<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <h2 class="text-center text-2xl font-bold mb-4">Login</h2>
        <form action="{{ route('login') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary" required>
            </div>
            <button type="submit"
                class="w-full px-4 py-2 bg-primary text-white rounded-lg hover:bg-opacity-90">Login</button>
            <p class="text-sm text-center mt-4">
                Belum punya akun? <a href="{{ route('register') }}" class="text-primary font-semibold">Register</a>
            </p>
        </form>
    </div>
</body>

</html>