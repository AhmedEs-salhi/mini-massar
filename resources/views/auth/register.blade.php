<x-layout>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-lg border p-4">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">Full Name</label>
            <input type="text" name="name" class="input w-full" placeholder="Ex: John Doe" />

            <label class="label">Email</label>
            <input type="email" name="email" class="input w-full @error('email') input-error @enderror" placeholder="Email" />

            <label class="label">Password</label>
            <input type="password" name="password" class="input w-full @error('password') input-error @enderror" placeholder="Password"/>

            <label class="label">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="input w-full" placeholder="Password" />

            @error('password')
            <div class="badge badge-error">
                {{ $message }}
            </div>
            @enderror

            <button type="submit" class="btn btn-primary mt-4">Register</button>

            <div class="text-center text-xs">Already have an account? <a href="{{ route('login') }}" class="text-primary font-bold">Login</a></div>
        </fieldset>
    </form>
</x-layout>
