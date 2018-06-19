@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fingerprints</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>
You are locked in a room with a door that has a keypad with 10 keys corresponding to digits from 0 to 9. To escape from the room, you need to enter a correct code. You also have a sequence of digits.

Some keys on the keypad have fingerprints. You believe the correct code is the longest not necessarily contiguous subsequence of the sequence you have that only contains digits with fingerprints on the corresponding keys. Find such code.</p>
<h4>Input</h4>
<p>The first line contains two integers 
n
 and 
m
 (
1
≤
n
,
m
≤
10
) representing the number of digits in the sequence you have and the number of keys on the keypad that have fingerprints.

The next line contains 
n
 distinct space-separated integers 
x
1
,
x
2
,
…
,
x
n
 (
0
≤
x
i
≤
9
) representing the sequence.

The next line contains 
m
 distinct space-separated integers 
y
1
,
y
2
,
…
,
y
m
 (
0
≤
y
i
≤
9
) — the keys with fingerprints.</p>		
<h4>Output</h4> 
<p>In a single line print a space-separated sequence of integers representing the code. If the resulting sequence is empty, both printing nothing and printing a single line break is acceptable.</p>
 <h4>Example</h4>
 <h5>Input</h5>
 <p>7 3<br>
3 5 7 1 6 2 8<br>
1 2 7<br></p>
<h5>Output</h5>
<p>7 1 2</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
