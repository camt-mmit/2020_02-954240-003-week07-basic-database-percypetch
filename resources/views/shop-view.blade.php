@extends('layouts.main')
@section('title',$title)

@section('content')
<main>
    <table class="table2">
     <tr>
         <td><b>Code</b><span class="blue"> ::</span></td>
         <td><span>{{ $shop->code }}</span></td>
     </tr>
     <tr>
         <td><b>Name</b><span class="blue"> ::</span></td>
         <td><span>{{ $shop->name }}</span></td>
     </tr>
     <tr>
         <td><b>Owner</b><span class="blue"> ::</span></td>
         <td><span>{{ $shop->owner }}</span></td>
     </tr>
     <tr>
         <td><b>Location</b><span class="blue"> ::</span></td>
         <td><span>{{ $shop->latitude }} {{ $shop->longitude }}</span></td>
     </tr>
     <tr>
         <td id="top"><b>Address</b><span class="blue"> ::</span></td>
         <td><pre class="test">{{ $shop->address }}<pre></td>
     </tr>
  
    </table>

</main>
@endsection