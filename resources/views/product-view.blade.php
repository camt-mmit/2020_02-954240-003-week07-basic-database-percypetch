@extends('layouts.main')
@section('title',$title)

@section('content')
<main>
<div class="frame">
<table class="table3">
     <tr>
         <td><b>Code</b><span class="blue"> ::</span></td>
         <td><span>{{ $product->code }}</span></td>
     </tr>
     <tr>
         <td><b>Name</b><span class="blue"> ::</span></td>
         <td><span>{{ $product->name }}</span></td>
     </tr>
     <tr>
         <td><b>Price</b><span class="blue"> ::</span></td>
         <td><span>{{ $product->price }}</span></td>
     </tr>
</table>
<pre>{{ $product->description }}</pre>
</div>
</main>
@endsection