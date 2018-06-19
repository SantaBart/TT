@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
				<img src="/img/icon.png{{Auth::user()->pic}}" width=80px; height=80px; border-radius:50%; style="float:right">
				<form style="float:right" enctype="multipart/form-data" action="/profile" method="POST" >
				<label >Update profile image</label>
				<br>
				<input type="file" name="pic">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<br>
				<br>
				<input type= "submit" class="pull-right btn btn-sm btn-primary">
				</form>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					USERNAME: {{Auth::user()->name}}
					<br>
					E-mail: {{Auth::user()->email}}
                   <br>
					Registered since: {{Auth::user()->created_at}}		
					<br>
					Profile description: {{Auth::user()->Description}}
					<br>
					Add a description:
					
					<!--<input id="Description" type="text" class="form-control{{ $errors->has('Description') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>-->
					<br>
					<button type="submit" class="btn btn-primary">
                                    {{ __('Save description') }}
                                </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
