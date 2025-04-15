@extends('layout.app')
@session('success')
<div class="alert alert-success">
{{$value}}
</div>
@endsession
<button class="btn btn-primary" ><a href="{{route('employee.create')}}" class="text-white">ADD EMPLOYEE</a></button>
<table class="table table-striped">
<thead>
<tr>
    <th>
        id
    </th>
    <th>
        name
    </th>
    <th>
        job
    </th>
    <th>
        salary
    </th>
    <th>
        action
    </th>
</tr>
</thead>
<tbody>
    @foreach ($employees as $emp )
    <tr>
        <td>
            {{$emp->id}}
        </td>
        <td>
            {{$emp->name}}
        </td>
        <td>
            {{$emp->job}}
        </td>
        <td>
            {{$emp->salary}}
        </td>
        <td>
            <form action="{{route('employee.destroy',$emp)}}" method="POST">
                @csrf
                <button class="btn btn-light"><a href="{{route('employee.edit',$emp)}}">Edit</a></button>
                <button class="btn btn-warning"><a href="{{route('employee.show',$emp)}}">Show</a></button>
                @method('DELETE')
                <button class="btn btn-dager" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</body>
</html>
