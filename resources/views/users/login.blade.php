@include('partial.header')

    <header class=" max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl text-white font-bold text-center">Admin Login</h1>
        </a>
    </header>

    <main class="max-w-lg bg-white rounded-lg
    p-8 mx-auto mt-6">
        <section class="text-center">
            <h1 class="font-bold py-2">Welcome to Student System</h1>
            <p>Create account <a href="register" class="text-blue-500">here</a></p>
        </section>
        <section class="mt-10">
            <form action="/login/process" method="post" class="flex flex-col gap-5">
                @csrf
                <input name="email" class="p-4" type="email" placeholder="Email"></input>
                @error('email')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <input name="password" class="p-4" type="password" placeholder="Password"></input>
                @error('password')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Login
                  </button>
            </form>
        </section>
    </main>

@include('partial.footer')