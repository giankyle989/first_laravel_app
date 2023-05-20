<ul class="flex flex-col md:flex-row px-4">
    <li>
        <a href="/add/student" class="block py-2 pl-3 pr-4 text-white">Add New</a>
    </li>
    <li>
        <form action="logout" method="POST">
            @csrf
            <button class="block py-2 pl-3 pr-4 text-white">Logout</button>
        </form>

    </li>
</ul>