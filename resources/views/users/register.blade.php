@include('partial.header')

    <header class=" max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl text-white font-bold text-center">Admin Register</h1>
        </a>
    </header>

    <main class="max-w-lg bg-white rounded-lg
    p-8 mx-auto mt-6">
        <section class="text-center">
            <h1 class="font-bold py-2">Welcome to Student System</h1>
            <p>Login to your account <a href="login" class="text-blue-500">here</a></p>
        </section>
        <section class="mt-10">
            <form action="/store" method="POST" class="flex flex-col gap-5">
                @csrf
                <input name="name" class="p-4 border-b" type="name" placeholder="Name"></input>
                @error('name')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror

                <input name="email" class="p-4 border-b" type="email" placeholder="Email"></input>
                @error('email')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <input name="password" class="p-4 border-b" type="password" placeholder="Password"></input>
                @error('password')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <input name="password_confirmation" class="p-4 border-b" type="password" placeholder="Confirm Password"></input>
                
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Register
                  </button>
            </form>
        </section>
    </main>

@include('partial.footer')