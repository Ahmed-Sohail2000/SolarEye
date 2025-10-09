
@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-zinc-900 px-4">
    <div class="w-full max-w-md bg-white dark:bg-zinc-800 rounded-2xl shadow-lg p-8 space-y-6">
        <div class="text-center">

            <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrYrMttUn1aIuH4h0PZ-7DDmbm_V9mSi30HQ&s" class = "mx-auto mb-4" alt="SolarEye Logo">
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-white"> SolarEye Inspection</h1>
            <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">Log in to manage your inspection dashboards</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" wire:submit="login" class="space-y-5">
            @csrf
            <!-- Email -->
            <flux:input
                wire:model="email"
                label="Email address"
                type="email"
                required
                placeholder="you@example.com"
                class="w-full"
            />

            <!-- Password -->
            <div class="relative">
                <flux:input
                    wire:model="password"
                    label="Password"
                    type="password"
                    required
                    viewable
                    placeholder="••••••••"
                />
                @if (Route::has('password.request'))
                    <flux:link class="absolute right-0 top-0 text-sm mt-1 text-blue-600" :href="route('password.request')" wire:navigate>
                        Forgot password?
                    </flux:link>
                @endif
            </div>

            <flux:checkbox wire:model="remember" label="Remember me" />

            <flux:button variant="primary" type="submit" class="w-full">
                Log In
            </flux:button>
        </form>

        @if (Route::has('register'))
            <p class="text-center text-sm text-zinc-600 dark:text-zinc-400">
                Don’t have an account?
                <flux:link :href="route('register')" wire:navigate>Sign up</flux:link>
            </p>
        @endif
    </div>
</div>