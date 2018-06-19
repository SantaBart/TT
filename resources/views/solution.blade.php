@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload your solution</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
Exercise:					
<select>
  <option value="task1">Knights of a Polygonal Table</option>
  <option value="task2">Fingerprints</option>
  <option value="task3">The Moral Dilemma</option>
</select>
                   <form style="float:right" enctype="multipart/form-data" action="/profile" method="POST" >
				<label >Add  file (.cpp)</label>
				<br>
				<input type="file" name="pic">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<br>
				<br>
				<input type= "submit" class="pull-right btn btn-sm btn-primary">
				</form>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
