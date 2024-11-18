<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md">
        
        <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <h2 class="text-center text-3xl font-bold mb-4 uppercase font-Rowdies ">Login</h2>
            <div class="mb-4">
                <label for="username" class="block text-gray-700">username</label>
                <input type="text" name="username" id="username"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-primary" required>
            </div>
            <button type="submit" class="w-full bg-primary text-white py-2 rounded-lg">Login</button>
            {{-- <p class="text-sm text-center mt-4">
                Belum punya akun? <a href="{{ route('register') }}" class="text-primary font-semibold">Register</a>
            </p> --}}
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = session('success'))
        <script>
            Swal.fire({
                title: "Good Job!",
                text: "{{ $message }}",
                icon: "success"
            });
        </script>
    @endif

    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                title: "You in trable",
                text: "{{ $message }}",
                icon: "error"
            });
        </script>
    @endif
</body>

</html>
