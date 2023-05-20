@include('partial.header', ['title'])
    <header class=" max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl text-white font-bold text-center">Edit {{$student->firstname}} </h1>
        </a>
    </header>

    <main class="max-w-lg bg-white rounded-lg
    p-8 mx-auto mt-6">
        <section class="mt-10">
            <form action="/student/{{$student->id}}" method="post" class="flex flex-col gap-5">
                @method('PUT')
                @csrf
                <input name="firstname" class="p-4" type="text" placeholder="First Name" value="{{$student->firstname}}"></input>
                @error('firstname')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <input name="lastname" class="p-4" type="text" placeholder="Last Name" value="{{$student->lastname}}"></input>
                @error('lastname')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <select name="gender" class="p-4" type="text" placeholder="gender" value="{{$student->gender}}">
                    <option value="Male">Male</option>
                    <option value="Male">Female</option>
                </select>
                @error('gender')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <input name="age" class="p-4" type="int" placeholder="Age" value="{{$student->age}}"></input>
                @error('age')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <input name="email" class="p-4" type="email" placeholder="Email" value="{{$student->email}}"></input>
                @error('email')
                <p class="text-red-500 text-xs">
                    {{$message}}
                </p>
                @enderror
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Update
                  </button>
            </form>
            <form action="" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="mt-2 bg-red-500 w-full hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                    Delete
                  </button>
            </form>

        </section>
    </main>

@include('partial.footer')