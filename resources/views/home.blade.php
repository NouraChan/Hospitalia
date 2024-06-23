@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{route('users.create')}}">Add a New Member</a></li>
                <li class="list-group-item"><a href="{{route('users.index')}}">Show Members</a></li>
                <li class="list-group-item"><a href="{{route('department.create')}}">Create a Department</a></li>
                <li class="list-group-item"><a href="{{route('department.index')}}">Show Departments</a></li>
                <li class="list-group-item"><a href="{{route('visits.create')}}">Book a Visit</a></li>
                <li class="list-group-item"><a href="{{route('visits.index')}}">Show Visits</a></li>
                <li class="list-group-item"><a href="{{route('surgery.create')}}">Book a Surgery</a></li>
                <li class="list-group-item"><a href="{{route('surgery.index')}}">Show Surgeries</a></li>
                <li class="list-group-item"><a href="{{route('pharmacy.create')}}">Order Pharmacy Service</a></li>
                <li class="list-group-item"><a href="{{route('pharmacy.index')}}">Show Pharmacy Services</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @yield('content2')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection