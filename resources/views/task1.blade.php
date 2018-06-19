@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Knights of a Polygonal Table</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>Unlike Knights of a Round Table, Knights of a Polygonal Table deprived of nobility and happy to kill each other. But each knight has some power and a knight can kill another knight if and only if his power is greater than the power of victim. However, even such a knight will torment his conscience, so he can kill no more than 
k
 other knights. Also, each knight has some number of coins. After a kill, a knight can pick up all victim's coins.

Now each knight ponders: how many coins he can have if only he kills other knights?

You should answer this question for each knight.</p>
<h4>Input</h4>
<p>The first line contains two integers 
n
 and 
k
 
(
1
≤
n
≤
10
5
,
0
≤
k
≤
min
(
n
−
1
,
10
)
)
 — the number of knights and the number 
k
 from the statement.

The second line contains 
n
 integers 
p
1
,
p
2
,
…
,
p
n
 
(
1
≤
p
i
≤
10
9
)
 — powers of the knights. All 
p
i
 are distinct.

The third line contains 
n
 integers 
c
1
,
c
2
,
…
,
c
n
 
(
0
≤
c
i
≤
10
9
)
 — the number of coins each knight has.	</p>		
<h4>Output</h4> 
<p>Print 
n
 integers — the maximum number of coins each knight can have it only he kills other knights.</p>
 <h4>Example</h4>
 <h5>Input</h5>
 <p>4 2 <br>
4 5 9 7<br>
1 2 11 33<br></p>
<h5>Output</h5>
<p>1 3 46 36 </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
