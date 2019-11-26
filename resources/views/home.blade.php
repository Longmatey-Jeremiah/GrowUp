@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8">
            <div class="card">
                <div class="card-title">Dashboard</div>

                <div class="card-content">
                    <div class="alert alert-success" role="alert">
                            @if (session('status'))
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
