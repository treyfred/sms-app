
<x-adminlayout>
   
    <!-- content area -->
    @include('subjects.navbar')
<div class="card">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-3 py-3">
                        Student name
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Age
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Class
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Update
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td>{{$student->name}}</td>
                    {{-- <td>{{$student->age}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->gender}}</td> --}}
                    <td><a href={{route('student.edit', $student->id)}}>edit</a></td>
                    <td>
                        <form action="{{route('student.delete', $student->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


</x-adminlayout>
