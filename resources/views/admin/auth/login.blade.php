<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <div class="flex min-h-screen items-center justify-center px-4">
        <div class="w-full max-w-md rounded-2xl border border-slate-800 bg-slate-900 p-8 shadow-2xl">
            <div class="mb-8 text-center">
                <h1 class="text-2xl font-semibold">Admin Portal</h1>
                <p class="mt-2 text-sm text-slate-400">Sign in to access the dashboard.</p>
            </div>

            <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="mb-1 block text-sm font-medium">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required class="w-full rounded-lg border border-slate-700 bg-slate-800 px-3 py-2 outline-none ring-0 focus:border-cyan-400" />
                    @error('email')
                        <p class="mt-1 text-sm text-rose-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="mb-1 block text-sm font-medium">Password</label>
                    <input id="password" name="password" type="password" required class="w-full rounded-lg border border-slate-700 bg-slate-800 px-3 py-2 outline-none focus:border-cyan-400" />
                </div>

                <button type="submit" class="w-full rounded-lg bg-cyan-500 px-4 py-2 font-semibold text-slate-950 transition hover:bg-cyan-400">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
