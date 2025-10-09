@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-zinc-900 px-4">
    <div class="w-full max-w-md bg-white dark:bg-zinc-800 rounded-2xl shadow-lg p-8 space-y-6">
        <div class="text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrYrMttUn1aIuH4h0PZ-7DDmbm_V9mSi30HQ&s" class="mx-auto mb-4" alt="SolarEye Logo">
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-white">🆕 Create Your Account</h1>
            <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-2">Access solar sites, inspections, and reports</p>
        </div>
        <form method="POST" wire:submit="register" class="space-y-5">
            @csrf
            <!-- Name -->
            <flux:input
                wire:model="name"
                label="Full Name"
                type="text"
                required
                placeholder="John Doe"
                class="w-full"
            />

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
            <flux:input
                wire:model="password"
                label="Password"
                type="password"
                required
                viewable
                placeholder="••••••••"
            />

            <!-- Confirm Password -->
            <flux:input
                wire:model="password_confirmation"
                label="Confirm Password"
                type="password"
                required
                viewable
                placeholder="••••••••"
            />

            <flux:button variant="primary" type="submit" class="w-full">
                Create Account
            </flux:button>
        </form>

        @if (Route::has('login'))
            <p class="text-center text-sm text-zinc-600 dark:text-zinc-400">
                Already have an account?
                <flux:link :href="route('login')" wire:navigate>Log in</flux:link>
            </p>
        @endif
    </div>
</div>
