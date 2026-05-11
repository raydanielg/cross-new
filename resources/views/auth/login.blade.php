<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            background-color: #3b82f6; /* AdminLTE Blue */
            transition: all 0.2s;
        }
        .btn-continue:hover {
            background-color: #2563eb;
        }
        .social-btn {
            border: 1px solid #d1d5db;
            background-color: white;
            transition: all 0.2s;
        }
        .social-btn:hover {
            background-color: #f9fafb;
        }
        /* Custom SweetAlert Position */
        .swal2-container.swal2-top-end {
            top: 20px !important;
            right: 20px !important;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md">
        <!-- Logo Section -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center mb-4 text-blue-600">
                <i class="fas fa-bicycle fa-3x"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-900"><b>Admin</b>LTE</h1>
            <p class="text-gray-600">Cross Tanzania Cycling System</p>
        </div>

        <!-- Card Section -->
        <div class="login-card rounded-xl p-8 shadow-sm">
            <form method="POST" action="{{ route('login') }}">
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

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none @error('password') border-red-500 @enderror"
                        placeholder="••••••••">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full btn-continue text-white font-medium py-2.5 rounded-lg flex items-center justify-center gap-2 mb-6">
                    Continue &rarr;
                </button>

                <div class="relative flex items-center justify-center mb-6">
                    <div class="border-t border-gray-300 w-full"></div>
                    <span class="absolute bg-transparent px-3 text-xs text-gray-500 uppercase">or</span>
                </div>

                <!-- Social Logins (Placeholders as per image) -->
                <div class="space-y-3">
                    <button type="button" class="w-full social-btn py-2 rounded-lg flex items-center justify-center gap-3 text-sm font-medium text-gray-700">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="w-5 h-5" alt="Google">
                        Continue with Google
                    </button>
                    <button type="button" class="w-full social-btn py-2 rounded-lg flex items-center justify-center gap-3 text-sm font-medium text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                        Continue with GitHub
                    </button>
                </div>

                <p class="text-center mt-8 text-sm text-gray-600">
                    Don't have an account? <a href="{{ route('register') }}" class="text-teal-600 hover:text-teal-700 font-medium">Sign up</a>
                </p>
                @if (Route::has('password.request'))
                    <p class="text-center mt-2 text-sm">
                        <a href="{{ route('password.request') }}" class="text-gray-500 hover:text-teal-600">Forgot your password?</a>
                    </p>
                @endif
            </form>
        </div>
    </div>

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        @if(session('status'))
            Toast.fire({
                icon: 'success',
                title: "{{ session('status') }}"
            });
        @endif

        @if($errors->any())
            Toast.fire({
                icon: 'error',
                title: "{{ $errors->first() }}"
            });
        @endif
    </script>
</body>
</html>
