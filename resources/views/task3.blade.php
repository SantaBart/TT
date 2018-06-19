@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">The Moral Dilemma</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>
Hibiki and Dita are in love with each other, but belong to communities that are in a long lasting conflict. Hibiki is deeply concerned with the state of affairs, and wants to figure out if his relationship with Dita is an act of love or an act of treason.


Hibiki prepared several binary features his decision will depend on, and built a three layer logical circuit on top of them, each layer consisting of one or more logic gates. Each gate in the circuit is either "or", "and", "nor" (not or) or "nand" (not and). Each gate in the first layer is connected to exactly two features. Each gate in the second layer is connected to exactly two gates in the first layer. The third layer has only one "or" gate, which is connected to all the gates in the second layer (in other words, the entire circuit produces 1 if and only if at least one gate in the second layer produces 1).

The problem is, Hibiki knows very well that when the person is in love, his ability to think logically degrades drastically. In particular, it is well known that when a person in love evaluates a logical circuit in his mind, every gate evaluates to a value that is the opposite of what it was supposed to evaluate to. For example, "or" gates return 1 if and only if both inputs are zero, "t{nand}" gates produce 1 if and only if both inputs are one etc.

In particular, the "or" gate in the last layer also produces opposite results, and as such if Hibiki is in love, the entire circuit produces 1 if and only if all the gates on the second layer produced 0.

Hibiki can’t allow love to affect his decision. He wants to know what is the smallest number of gates that needs to be removed from the second layer so that the output of the circuit for all possible inputs doesn't depend on whether Hibiki is in love or not.</p>
<h4>Input</h4>
<p>The first line contains three integers 
n
, 
m
, 
k
 (
2
≤
n
,
m
≤
50
; 
1
≤
k
≤
50
) — the number of input features, the number of gates in the first layer, and the number of gates in the second layer correspondingly.

The second line contains 
m
 pairs of strings separated by spaces describing the first layer. The first string in each pair describes the gate ("and", "or", "nand" or "nor"), and the second string describes the two input features the gate is connected two as a string consisting of exactly 
n
 characters, with exactly two characters (that correspond to the input features the gate is connected to) equal to 'x' and the remaining characters equal to ".'.

The third line contains 
k
 pairs of strings separated by spaces describing the second layer in the same format, where the strings that describe the input parameters have length 
m
 and correspond to the gates of the first layer.</p>		
<h4>Output</h4> 
<p>Print the number of gates that need to be removed from the second layer so that the output of the remaining circuit doesn't depend on whether Hibiki is in love or not. If no matter how many gates are removed the output of the circuit continues to depend on Hibiki's feelings, print 
−
1
.</p>
 <h4>Example</h4>
 <h5>Input</h5>
 <p>2 2 2<br>
and xx nand xx<br>
and xx or xx<br></p>
<h5>Output</h5>
<p>1</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
