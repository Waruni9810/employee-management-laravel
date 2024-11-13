@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
        </div>
        <div class="card-body">
            {{-- Welcome Section --}}
            <div class="mb-4">
                <h5>Welcome, {{ Auth::user()->name }}!</h5>
                <p>Email: <strong>{{ Auth::user()->email }}</strong></p>
            </div>

            {{-- Placeholder for future sections --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <h6>Feature 1</h6>
                            <p>This is a placeholder for a future feature or section. You can replace this with charts, stats, or anything else.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <h6>Feature 2</h6>
                            <p>This is another placeholder for a feature. Use this space to expand your dashboard functionality.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Logout Button --}}
            <div class="mt-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="text-center mt-4">
    <p>&copy; {{ now()->year }} My Application. All Rights Reserved.</p>
</footer>

@endsection
