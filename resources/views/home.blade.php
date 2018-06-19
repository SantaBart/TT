@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
					
					<li class="nav-item" style="list-style:none"; >
                                <a class="nav-link" href="/exercises">{{ __('Exercises') }}</a>
                            </li>
                            <li class="nav-item" style="list-style:none";>
                                <a class="nav-link" href="/results">{{ __('Results') }}</a>
                            </li>
							<li class="nav-item" style="list-style:none";>
                                <a class="nav-link" href="/solution">{{ __('Upload solution') }}</a>
                            </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
