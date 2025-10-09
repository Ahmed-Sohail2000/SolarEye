<div>
    <div class="text-center mb-8">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrYrMttUn1aIuH4h0PZ-7DDmbm_V9mSi30HQ&s" alt="SolarEye Logo" class="mx-auto w-20 h-20 mb-4">
        <h2 class="text-2xl font-bold text-[var(--color-accent)]">Welcome to SolarEye</h2>
        <p class="text-[var(--color-muted)]">AI-powered Solar Fault Monitoring</p>
    </div>

    <form wire:submit="login" class="space-y-4">
        <div>
            <label for="email" class="block text-sm font-medium text-[var(--color-muted)]">Email address</label>
            <input wire:model="form.email" id="email" type="email"
                class="w-full mt-1 rounded-lg bg-[var(--color-bg)] border border-gray-600 text-[var(--color-text)] p-2 focus:outline-none focus:ring-2 focus:ring-[var(--color-accent)]" />
            @error('form.email') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-[var(--color-muted)]">Password</label>
            <input wire:model="form.password" id="password" type="password"
                class="w-full mt-1 rounded-lg bg-[var(--color-bg)] border border-gray-600 text-[var(--color-text)] p-2 focus:outline-none focus:ring-2 focus:ring-[var(--color-accent)]" />
            @error('form.password') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center text-sm text-[var(--color-muted)]">
                <input wire:model="form.remember" type="checkbox" class="mr-2 rounded bg-[var(--color-bg)] border-gray-600" />
                Remember me
            </label>

            <a href="{{ route('password.request') }}" class="text-sm text-[var(--color-accent)] hover:underline">
                Forgot password?
            </a>
        </div>

        <button type="submit"
            class="w-full py-2 rounded-lg bg-[var(--color-button)] hover:bg-[var(--color-button-hover)] text-white font-semibold">
            Log in
        </button>

        <p class="text-center text-sm text-[var(--color-muted)] mt-4">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-[var(--color-accent)] hover:underline">Sign up</a>
        </p>
    </form>
</div>
