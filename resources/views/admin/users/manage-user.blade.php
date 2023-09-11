@extends('admin.master')
@section('title')
    Manage User
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Users
                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{route('users.create')}}" class="btn btn-primary">Add User</a></div>

{{--                <div class="mb-3">--}}
{{--                    <button id="showAdminUsers" class="btn btn-primary">Show Admin Users</button>--}}
{{--                    <button id="showRegularUsers" class="btn btn-primary">Show Regular Users</button>--}}
{{--                    <button id="showOfficeUsers" class="btn btn-primary">Show Office Users</button>--}}
{{--                </div>--}}
{{--                <script>--}}
{{--                    document.addEventListener('DOMContentLoaded', function() {--}}
{{--                        const showAdminUsersButton = document.getElementById('showAdminUsers');--}}
{{--                        const showRegularUsersButton = document.getElementById('showRegularUsers');--}}
{{--                        const showOfficeUsersButton = document.getElementById('showOfficeUsers');--}}
{{--                        const tableRows = document.querySelectorAll('#datatablesSimple tbody tr');--}}

{{--                        showAdminUsersButton.addEventListener('click', function() {--}}
{{--                            filterRows('Admin');--}}
{{--                        });--}}

{{--                        showRegularUsersButton.addEventListener('click', function() {--}}
{{--                            filterRows('Regular User');--}}
{{--                        });--}}

{{--                        showOfficeUsersButton.addEventListener('click', function() {--}}
{{--                            filterRows('Office');--}}
{{--                        });--}}

{{--                        function filterRows(targetUserType) {--}}
{{--                            tableRows.forEach(row => {--}}
{{--                                const userTypeCell = row.querySelector('td:nth-child(2)'); // Adjust the column index if needed--}}
{{--                                const rowUserType = userTypeCell.textContent.trim();--}}

{{--                                if (rowUserType === targetUserType) {--}}
{{--                                    row.style.display = 'table-row';--}}
{{--                                } else {--}}
{{--                                    row.style.display = 'none';--}}
{{--                                }--}}
{{--                            });--}}
{{--                        }--}}
{{--                    });--}}
{{--                </script>--}}






            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Office Code</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Area</th>
                        <th>No of Employee</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
{{--                            <td>{{$user->usertype}}</td>--}}
                            <td>
                                @if($user->usertype == 0)
                                    Regular User
                                @elseif($user->usertype == 1)
                                    Admin
                                @elseif($user->usertype == 2)
                                    Office
                                @else
                                    Unknown
                                @endif
                            </td>

                            <td>{{$user->name}}</td>
                            <td>{{$user->office_code}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->location}}</td>
                            <td>{{$user->num_employees}}</td>
                            <td>{{$user->address}}</td>
                            <td class="d-flex">
{{--                                @if(Auth::user()->id == $user->id)--}}
                                    <div class="btn-group">
                                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" onclick="return confirm('Are You Want to Delete This User?')" value="Delete" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">
                                        </form>
                                    </div>
{{--                                @endif--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
