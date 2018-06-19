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

                    Exercises
					<li class="nav-item" style="list-style:none";>
                                <a class="nav-link" href="/task1">{{ __('Knights of a Polygonal Table') }}</a>
                            </li>
							<li class="nav-item" style="list-style:none";>
                                <a class="nav-link" href="/task2">{{ __('Fingerprints') }}</a>
                            </li>
							<li class="nav-item" style="list-style:none";>
                                <a class="nav-link" href="/task3">{{ __('The Moral Dilemma') }}</a>
                            </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
