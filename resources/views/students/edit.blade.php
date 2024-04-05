<x-adminlayout>
@include('students.navbar')

<div class="container mx-auto py-3 bg-zinc-500 bg-gradient-to-r from-indigo-500 shadow-2xl ">
    <div class="grid justify-items-center py-5">

   
    <form action={{ route('student.update', $student->id) }} method="post">
        @csrf
        @method('PUT')
        <label for="" class="text-gray-700">name</label>
        <input type="text" class="form-input" name="name" value="{{$student->name}}">
        <label for="">class</label>
        <input type="text" name="class" value={{$student->class}}>
        <label for="">Age</label>
        <input type="number" name="age" value={{$student->age}}>
        <label for="">Gender</label>
        <select name="gender" id="" required>
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
    
        <button type="submit">Update</button>
    </form>
</div>
</div>
</x-adminlayout>