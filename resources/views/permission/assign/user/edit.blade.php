@extends('layouts.back')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

        <div class="card mb-3">
            <div class="card-header">Sync Role for : {{ $user->name }}</div>
            <div class="card-body">
                <form action="{{ route('assign.user.edit', $user) }}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="user">User</label>
                    <input type="text" class="form-control" name="email" id="user" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="role">Pick Role</label>
                    <select name="roles" id="roles" class="form-control select2" multiple>
                        @foreach ($roles as $role)
                            <option {{ $user->roles()->find($role->id) ? 'selected' : '' }} value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach

                    </select>
                </div>
                    <button type="submit" class="btn btn-secondary">Assign</button>
                </form>
            </div>
        </div>


@endsection

