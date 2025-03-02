@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<style>
    .container {
        max-width: 600px;
    }
    .card {
        background-color: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
    }
    .form-control {
        border-radius: 10px;
        border: 2px solid #007bff;
        padding: 8px;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        font-size: 16px;
        padding: 12px;
        border-radius: 10px;
    }
</style>

<div class="card">
    <div class="card-header">Create User</div>
    <div class="card-body">
        <form id="userForm" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>First Name:</label>
                <input type="text" name="first_name" class="form-control" required>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Last Name:</label>
                <input type="text" name="last_name" class="form-control" required>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Contact Number:</label>
                <input type="text" name="contact_number" class="form-control" required>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Postcode:</label>
                <input type="text" name="postcode" class="form-control" required>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control" required>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Gender:</label>
                <div>
                    <input type="radio" name="gender" value="male" required> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                </div>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Hobbies:</label>
                <div>
                    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
                    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
                    <input type="checkbox" name="hobbies[]" value="Music"> Music
                    <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
                    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
                    <input type="checkbox" name="hobbies[]" value="Painting"> Painting
                    <input type="checkbox" name="hobbies[]" value="Dancing"> Dancing
                    <input type="checkbox" name="hobbies[]" value="Cooking"> Cooking
                </div>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Roles:</label>
                <select name="roles[]" multiple class="form-control">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>State:</label>
                <select name="state_id" id="state" class="form-control">
                    <option value="">Select State</option>
                    @foreach($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>City:</label>
                <select name="city_id" id="city" class="form-control">
                    <option value="">Select City</option>
                </select>
                <span class="text-danger error"></span>
            </div>

            <div class="mb-3">
                <label>Upload Files:</label>
                <input type="file" name="files[]" multiple class="form-control">
                <span class="text-danger error"></span>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {
        $('#state').change(function () {
            let state_id = $(this).val();
            $('#city').html('<option value="">Loading...</option>');
            $.get('/cities/' + state_id, function (data) {
                let options = '<option value="">Select City</option>';
                data.forEach(city => {
                    options += `<option value="${city.id}">${city.name}</option>`;
                });
                $('#city').html(options);
            });
        });
    });
</script> -->


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
    $(document).ready(function () {
        $("#userForm").validate({
            errorElement: 'span',
            errorClass: 'text-danger',
            rules: {
                first_name: { required: true, lettersonly: true },
                last_name: { required: true, lettersonly: true },
                email: { required: true, email: true },
                contact_number: { required: true, digits: true, minlength: 10, maxlength: 10 },
                postcode: { required: true, digits: true, minlength: 6, maxlength: 6 },
                password: { required: true, minlength: 6 },
                password_confirmation: { required: true, equalTo: "#password" },
                gender: { required: true },
                "hobbies[]": { required: true, minlength: 1 },
                "roles[]": { required: true },
                state_id: { required: true },
                city_id: { required: true },
                "files[]": { required: true }
            },
            messages: {
                first_name: { required: "First name is required.", lettersonly: "Only letters are allowed." },
                last_name: { required: "Last name is required.", lettersonly: "Only letters are allowed." },
                email: { required: "Email is required.", email: "Enter a valid email." },
                contact_number: { required: "Contact number is required.", digits: "Only digits are allowed.", minlength: "Must be 10 digits.", maxlength: "Must be 10 digits." },
                postcode: { required: "Postcode is required.", digits: "Only digits are allowed.", minlength: "Must be 6 digits.", maxlength: "Must be 6 digits." },
                password: { required: "Password is required.", minlength: "Password must be at least 6 characters." },
                password_confirmation: { required: "Confirm your password.", equalTo: "Passwords do not match." },
                gender: { required: "Select a gender." },
                "hobbies[]": { required: "Select at least one hobby." },
                "roles[]": { required: "Select at least one role." },
                state_id: { required: "Select a state." },
                city_id: { required: "Select a city." },
                "files[]": { required: "Please upload at least one file." }
            }
        });

        $.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-zA-Z]+$/.test(value);
        }, "Only letters are allowed.");

        $('#state').change(function () {
            let state_id = $(this).val();
            $('#city').html('<option value="">Loading...</option>');
            $.get('/cities/' + state_id, function (data) {
                let options = '<option value="">Select City</option>';
                data.forEach(city => {
                    options += `<option value="${city.id}">${city.name}</option>`;
                });
                $('#city').html(options);
            });
        });
    });
</script>

@endsection