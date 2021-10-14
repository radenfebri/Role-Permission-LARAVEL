@extends('layouts.back')


@section('content')
        <div class="card mb-4">
            <div class="card-header">Edit Permission</div>
            <div class="card-body">
                <form action="{{ route('permissions.edit', $permission) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @include('permission.permissions.partials.form-control')

                </form>
            </div>
        </div>

@endsection
