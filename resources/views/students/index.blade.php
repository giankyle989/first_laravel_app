@include('partial.header')
<x-nav />


<header class=" max-w-xs mx-auto">
    <a href="#">
        <h1 class="text-4xl text-white font-bold text-center pt-10">Student List</h1>
    </a>
</header>
<section class="pt-10">
    <div class="overflow-x-auto relative">
        <table class="w-96 text-sm text-left text-gray-500 mx-auto">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th class="py-3 px-6">First Name</th>
                    <th class="py-3 px-6">Last Name</th>
                    <th class="py-3 px-6">age</th>
                    <th class="py-3 px-6">email</th>
                    <th class="py-3 px-6"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    
                
                <tr class="bg-gray-800 border-b text-white">
                    <td class="px-4 py-6">{{$student->firstname}}</td>
                    <td class="px-4 py-6">{{$student->lastname}}</td>
                    <td class="px-4 py-6">{{$student->age}}</td>
                    <td class="px-4 py-6">{{$student->email}}</td>
                    <td class="px-4 py-6"><a class="bg-blue-600 rounded p-2" href="student/{{$student->id}}">View</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <div class="mx-auto max-w-md pt-6 p-4">
            {{ $students->links() }}
        </div>

    </div>
</section>
@include('partial.footer')