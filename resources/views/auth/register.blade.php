<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="min-h-screen w-1/2 flex flex-col justify-center items-center bg-gray-100">
        <div class="w-full  bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold text-center mb-6">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">username</label>
                    <input type="text" name="username" id="username" required
                        class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="w-full px-3 py-2 border rounded-lg">
                </div>
                
                <div class="mb-4">
                    <label for="status" class="block text-gray-700">Pelatih</label>
                    <select name="status" id="status"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                        <option value="" disabled selected class="text-secondary">Pilih status</option>                     
                        <option value="user">User</option>
                        <option value="admin">Admin</option>                                              
                    </select>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg">Register</button>
            </form>
            <p class="text-sm mt-4 text-center">Already have an account? <a href="{{ route('login') }}"
                    class="text-blue-500">Login</a></p>
        </div>
    </div>
</body>

</html>
