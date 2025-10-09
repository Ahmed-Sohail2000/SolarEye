<div>
    <div class="text-center mb-8">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrYrMttUn1aIuH4h0PZ-7DDmbm_V9mSi30HQ&s" alt="SolarEye Logo" class="mx-auto w-20 h-20 mb-4">
        <h2 class="text-2xl font-bold text-[var(--color-accent)]">Create your SolarEye Account</h2>
        <p class="text-[var(--color-muted)]">Join us to monitor and analyze solar faults intelligently</p>
    </div>

    <form wire:submit="register" class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-medium text-[var(--color-muted)]">Full name</label>
            <input wire:model="form.name" id="name" type="text"
                class="w-full mt-1 rounded-lg bg-[var(--color-bg)] border border-gray-600 text-[var(--color-text)] p-2 focus:outline-none focus:ring-2 focus:ring-[var(--color-accent)]" />
            @error('form.name') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror
        </div>

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

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-[var(--color-muted)]">Confirm password</label>
            <input wire:model="form.password_confirmation" id="password_confirmation" type="password"
                class="w-full mt-1 rounded-lg bg-[var(--color-bg)] border border-gray-600 text-[var(--color-text)] p-2 focus:outline-none focus:ring-2 focus:ring-[var(--color-accent)]" />
            @error('form.password_confirmation') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit"
            class="w-full py-2 rounded-lg bg-[var(--color-button)] hover:bg-[var(--color-button-hover)] text-white font-semibold">
            Create account
        </button>

        <p class="text-center text-sm text-[var(--color-muted)] mt-4">
            Already have an account?
            <a href="{{ route('login') }}" class="text-[var(--color-accent)] hover:underline">Log in</a>
        </p>
    </form>
</div>
