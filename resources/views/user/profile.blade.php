@extends('layouts.template')

@section('title', 'Update profile')

@section('main')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update profile') }}</div>

                    <div class="card-body">
                        <form action="/user/profile" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       placeholder="Your name"
                                       value="{{ old('name', auth()->user()->name ) }}"
                                       required>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Your email"
                                       value="{{ old('email', auth()->user()->email) }}"
                                       required>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
