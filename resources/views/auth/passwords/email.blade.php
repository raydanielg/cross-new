<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - Reset Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #e9e5d9;
            background-image: 
                radial-gradient(circle at 2px 2px, rgba(0,0,0,0.05) 1px, transparent 0),
                linear-gradient(45deg, rgba(45, 212, 191, 0.05) 25%, transparent 25%, transparent 50%, rgba(45, 212, 191, 0.05) 50%, rgba(45, 212, 191, 0.05) 75%, transparent 75%, transparent);
            background-size: 40px 40px, 100px 100px;
        }
        .login-card {
            background-color: #f3f4f6;
            border: 1px solid #d1d5db;
        }
        .btn-continue {
            background-color: #2dd4bf;
            transition: all 0.2s;
        }
        .btn-continue:hover {
            background-color: #14b8a6;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center mb-4">
                <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h1 class="text-2xl font-semibold text-gray-900">Reset Password</h1>
            <p class="text-gray-600 mt-2 text-sm">Enter your email to receive a reset link</p>
        </div>

        <div class="login-card rounded-xl p-8 shadow-sm">
            @if (session('status'))
                <div class="mb-4 p-3 rounded-lg bg-green-100 text-green-700 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none @error('email') border-red-500 @enderror"
                        placeholder="you@example.com">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full btn-continue text-white font-medium py-2.5 rounded-lg flex items-center justify-center gap-2 mb-6">
                    Send Password Reset Link &rarr;
                </button>

                <p class="text-center text-sm text-gray-600">
                    Remember your password? <a href="{{ route('login') }}" class="text-teal-600 hover:text-teal-700 font-medium">Back to login</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
