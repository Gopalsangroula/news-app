@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-1">
            <div class="col-nav-card">
                <div class="card-body">
                    <ul class="nav flex-column admin-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/admin') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/posts') }}">All Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/add-post') }}">Add Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('login') }}">Medai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">All User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Add User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Advertisement</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    @yield('AdminContent')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
