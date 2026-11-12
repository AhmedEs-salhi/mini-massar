<x-layout>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
            <legend class="fieldset-legend">Login</legend>

            <label class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Email" />

            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" />

            <button type="submit" class="btn btn-neutral mt-4">Login</button>
        </fieldset>
    </form>
</x-layout>
