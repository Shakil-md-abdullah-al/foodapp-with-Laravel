@extends('admin.master')
@section('title')
    Edit Users
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if(session()->has('message'))
                <div class="alert alert-{{ session()->has('success') ? 'success' : 'danger' }}">
                    <button data-dismiss="alert" type="button" class="close">&times;</button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit User</h3></div>
                    <div class="card-body">
                        <form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{--Usertype--}}

                            <div class="col-12 mb-3">
                                <label class="form-label">User Type</label>
                                <select name="usertype" id="usertype" class="form-control" required>
                                    <option value="">Select User Role</option>
                                    <option value="1">Admin</option>
                                    <option value="0">Regular User</option>
                                    <option value="2">Office</option>
                                </select>
                                <div class="alert alert-danger usertype-error" style="display: none;">User Type is required.</div>
                            </div>

                            <div class="col-12 mb-3" id="officeFields" style="display: none;">
                                <label class="form-label">Office Code</label>
                                <input type="text" name="office_code" value="{{$user->office_code}}" class="form-control">
                                <label class="form-label">Office ID</label>
                                <input type="text" name="office_id"value="{{$user->office_id}}" class="form-control">
                                <label class="form-label">Number of Employees</label>
                                <input type="number" name="num_employees" value="{{$user->num_employees}}" class="form-control">
                            </div>

                            <!-- Hidden input for current date and time -->
                            <input type="hidden" name="current_datetime" id="current_datetime">

                            <script>
                                // JavaScript code for handling user type and validation
                                document.addEventListener('DOMContentLoaded', function() {
                                    const userTypeSelect = document.getElementById('usertype');
                                    const officeFields = document.getElementById('officeFields');
                                    const currentDatetimeInput = document.getElementById('current_datetime');

                                    const userTypeError = document.querySelector('.usertype-error');

                                    userTypeSelect.addEventListener('change', function() {
                                        if (userTypeSelect.value === '2') {
                                            officeFields.style.display = 'block';
                                        } else if (userTypeSelect.value === '0') {
                                            officeFields.style.display = 'block';
                                        } else {
                                            officeFields.style.display = 'none';
                                        }
                                    });

                                    // Function to update the hidden current_datetime input field
                                    function updateCurrentDateTime() {
                                        const now = new Date();
                                        const formattedDatetime = now.toISOString(); // Format as ISO date-time string
                                        currentDatetimeInput.value = formattedDatetime;
                                    }

                                    // Call the function initially and update every second
                                    updateCurrentDateTime();
                                    setInterval(updateCurrentDateTime, 1000);

                                    document.querySelector('form').addEventListener('submit', function(event) {
                                        if (userTypeSelect.value === '2') {
                                            if (!officeFields.querySelector('input[name="office_code"]').value) {
                                                officeCodeError.style.display = 'block';
                                                event.preventDefault();
                                            } else {
                                                officeCodeError.style.display = 'none';
                                            }
                                        } else if (userTypeSelect.value === '0') {
                                            if (!officeFields.querySelector('input[name="office_id"]').value) {
                                                officeIdError.style.display = 'block';
                                                event.preventDefault();
                                            } else {
                                                officeIdError.style.display = 'none';
                                            }

                                            if (!officeFields.querySelector('input[name="num_employees"]').value) {
                                                numEmployeesError.style.display = 'block';
                                                event.preventDefault();
                                            } else {
                                                numEmployeesError.style.display = 'none';
                                            }
                                        } else {
                                            officeCodeError.style.display = 'none';
                                            officeIdError.style.display = 'none';
                                            numEmployeesError.style.display = 'none';
                                        }
                                    });
                                });
                            </script>




                            {{--End of usertype--}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$user->name}}" name="name" type="text" placeholder="Enter User's Name" />
                                        <label for="inputFirstName">Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$user->email}}" id="inputPassword" name="email" type="email" placeholder="Product Price" />
                                        <label for="username">Email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$user->phone}}" id="inputPassword" name="phone" type="number" placeholder="Phone" />
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" value="{{$user->address}}" id="inputPassword" name="address" type="text" placeholder="Address" />
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Enter Password" />
                                        <label for="categoryName">Password</label>
                                    </div>
                                </div>
                            </div>



                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Update User">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
