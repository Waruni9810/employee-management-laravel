@extends('layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary"><center>Employee Signup</center></h3>
    </div>
    <div class="card-body">
        <form id="signupForm" method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
                <small id="nameError" class="text-danger"></small>
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Telephone -->
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" required value="{{ old('telephone') }}">
                <small id="telephoneError" class="text-danger"></small>
                @error('telephone')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
                <small id="emailError" class="text-danger"></small>
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Profile Image -->
            <div class="form-group">
                <label for="image">Profile Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <small id="imageError" class="text-danger"></small>
                @error('image')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <small id="passwordError" class="text-danger"></small>
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                <small id="confirmPasswordError" class="text-danger"></small>
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("signupForm");

        form.addEventListener("submit", function (e) {
            let hasErrors = false;

            // Clear previous errors
            document.querySelectorAll("small.text-danger").forEach(el => el.textContent = "");

            // Name Validation
            const name = document.getElementById("name").value.trim();
            if (!/^[a-zA-Z\s]+$/.test(name)) {
                document.getElementById("nameError").textContent = "Name must only contain alphabets and spaces.";
                hasErrors = true;
            }

            // Telephone Validation
            const telephone = document.getElementById("telephone").value.trim();
            if (!/^[0-9]{10,15}$/.test(telephone)) {
                document.getElementById("telephoneError").textContent = "Telephone must be 10–15 digits.";
                hasErrors = true;
            }

            // Email Validation
            const email = document.getElementById("email").value.trim();
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                document.getElementById("emailError").textContent = "Invalid email format.";
                hasErrors = true;
            }

            // Password Validation
            const password = document.getElementById("password").value;
            if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password)) {
                document.getElementById("passwordError").textContent = "Password must have at least 8 characters, with an uppercase, a lowercase, a number, and a special character.";
                hasErrors = true;
            }

            // Confirm Password Validation
            const confirmPassword = document.getElementById("password_confirmation").value;
            if (password !== confirmPassword) {
                document.getElementById("confirmPasswordError").textContent = "Passwords do not match.";
                hasErrors = true;
            }

            // Image Validation
            const image = document.getElementById("image").files[0];
            if (image && !["image/jpeg", "image/jpg", "image/png"].includes(image.type)) {
                document.getElementById("imageError").textContent = "Image must be JPG, JPEG, or PNG.";
                hasErrors = true;
            }
            if (image && image.size > 2 * 1024 * 1024) { // 2MB limit
                document.getElementById("imageError").textContent = "Image must not exceed 2MB.";
                hasErrors = true;
            }

            // Prevent form submission if errors exist
            if (hasErrors) {
                e.preventDefault();
            }
        });
    });
</script>
@endsection
