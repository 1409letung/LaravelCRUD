@extends('layouts.app') {{-- kế thừa giao diện view --}}

@section('content') {{-- truyền nội dung --}}
   <h1>about</h1>
   {{-- {{ $x = 10 }}
   @if ($x > 2)
      <p> x > 2</p>
   @elseif($x == 11)
      <p> x = 10 </p>
   @endif --}}

   {{-- unless = if not --}}
   {{-- @unless (empty($name))
       <p> name isn't empty </p>
   @endunless --}}

   {{-- @if (isset($name))
       {{ $name }}
   @else
      <p> name isn't empty </p>
   @endif --}}

   {{-- kiem tra co trong hay ko
   @empty($name)  
       {{ $name }}
   @endempty --}}

   {{-- @switch($name)
       @case('Tung')
           <h3>This is Tung</h3>
           @break
       @case('Thu')
           <h3>This is my love</h3>
           @break
       @default
           <h3>Name not found </h3>
   @endswitch --}}

   {{-- @for ($i = 0; $i < 20; $i++)
       i = {{ $i }}
       <br>
   @endfor --}}

   {{-- @foreach ($names as $key)
       each name: {{ $key }}
   @endforeach --}}
@endsection

   