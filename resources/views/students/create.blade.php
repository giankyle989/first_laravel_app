@include('partial.header')

    <header class=" max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl text-white font-bold text-center">Add New Student</h1>
        </a>
    </header>

    <main class="max-w-lg bg-white rounded-lg
    p-8 mx-auto mt-6">
        <section class="mt-10">
            <form action="/add/student" method="post" class="flex flex-col gap-5">
                @csrf
                <input name="firstname" class="p-4" type="text" placeholder="First Name"></input>
                @error('firstname')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <input name="lastname" class="p-4" type="text" placeholder="Last Name"></input>
                @error('lastname')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <select name="gender" class="p-4" type="text" placeholder="gender">
                    <option value="Male">Male</option>
                    <option value="Male">Female</option>
                </select>
                @error('gender')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <input name="age" class="p-4" type="int" placeholder="Age"></input>
                @error('age')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <input name="email" class="p-4" type="email" placeholder="Email"></input>
                @error('email')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Add New
                  </button>
            </form>
        </section>
    </main>

@include('partial.footer')