@extends('admin.master')
@section('title')
    Join Request
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage <Producs></Producs>
                {{--                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{route('office.create')}}" class="btn btn-primary">Add Office</a></div>--}}

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Usertype</th>
                        {{--                        <th>Description</th>--}}
                        <th>Office Code</th>
                        <th>No of Employee</th>
                        <th>Phone</th>
                        <th>Address</th>
{{--                        <th>Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $office)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$office->name}}</td>
                            <td>{{$office->email}}</td>
                            {{-- <td>{{$product->description}}</td> --}}
                            <td>
                                @if($office->usertype == 0)
                                    Employee
                                @elseif($office->usertype == 2)
                                    Office
                                @else
                                <!-- Handle other cases if needed -->
                                    {{$office->usertype}}
                                @endif
                            </td>
                            <td>{{$office->office_code}}</td>
                            <td>{{$office->num_employees}}</td>
                            <td>{{$office->phone}}</td>
                            <td>{{$office->address}}</td>

                            {{--                            <td class="d-flex">--}}
                                {{--                                @if(Auth::user()->id == $user->id)--}}
{{--                                <div class="btn-group">--}}
{{--                                    --}}{{--                                    <a href="{{route('chef.edit',$office->id)}}" class="btn btn-primary">Edit</a>--}}
{{--                                    <form action="{{route('chef.destroy',$office->id)}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <input type="submit" onclick="return confirm('Are You Want to Delete This?')" value="Delete" class="btn btn-danger" style="background-color: deeppink;color: white;margin-left: 5px;">--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                --}}{{--                                @endif--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
