@include('partials._nav')
@extends('main')

@section('content')
    <div class="container">
        <h1 class="main_heading">Edit User</h1>

        @include('partials.errors')

        <form action="{{ route('admin.users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password (leave blank to keep the same)</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            <div class="form-group">
                <label for="roles">Roles</label>
                <select name="roles[]" id="roles" class="form-control" multiple required>
                    @foreach($roles as $role)
                        <option value="{{ $role }}" {{ in_array($role, $user->getRoleNames()->toArray()) ? 'selected' : '' }}>{{ $role }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
@endsection
