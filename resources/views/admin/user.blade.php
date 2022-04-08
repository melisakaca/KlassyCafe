<x-app-layout>

</x-app-layout>



@include('admin.admincss')
@include('admin.navbar')
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        @if ($user->usertype=="1")
        <td>
            <a href="{{url('\deleteuser',$user->id)}}">Delete</a>
        </td>
        @else <td>
            <a href="">Not Allowed</a>
        </td>

        @endif
    </tr>
    @endforeach
</table>

@include('admin.adminjs')
