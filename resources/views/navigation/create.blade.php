@extends('layouts.back')


@section('content')
        <div class="card">
            <div class="card-header">Crete new Navigation</div>
            <div class="card-body">
                <form action="{{ route('navigation.create') }}" method="POST">
                    @include('navigation.partials.form-control')
                </form>
            </div>
        </div>
@endsection
