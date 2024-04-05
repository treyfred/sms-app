<x-adminlayout>
   
    <!-- content area -->
@include('subjects.navbar')
<div class="card">
    <form action={{ route('subjects.create') }} method="post">
        @csrf
        @method("POST")
        <label for="">name</label>
        <input type="text" name="name">
        <label for="">class</label>
        <input type="text" name="class">
        <label for="">Age</label>
        <input type="number" name="age">
        <label for="">Gender</label>
        <select name="gender" id="">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</div>


</x-adminlayout>