@extends('layout.app')


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

    <tr>
        <td>
            {{$employee->id}}
        </td>
        <td>
            {{$employee->name}}
        </td>
        <td>
            {{$employee->job}}
        </td>
        <td>
            {{$employee->salary}}
        </td>
        <td>
            <form action="{{route('employee.destroy',$employee)}}" method="POST">
                @csrf
                <button class="btn btn-light"><a href="{{route('employee.edit',$employee)}}">Edit</a></button>
                <button class="btn btn-warning"><a href="{{route('employee.show',$employee)}}">Show</a></button>
                @method('DELETE')
                <button class="btn btn-dager" type="submit">Delete</button>
            </form>
        </td>
    </tr>

</tbody>
</table>
</body>
</html>