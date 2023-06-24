@extends('layouts.app') {{-- kế thừa giao diện view --}}

@section('content') {{-- truyền nội dung --}}
<h1>This is Foods Page Create</h1>
<br>
<h3>Insert information food</h3>
<form method="POST" action="/foods">
    @csrf
    <div class="mb-3 col-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" value="">
    </div>
    <div class="mb-3 col-3">
      <label for="exampleInputPassword1" class="form-label">Count</label>
      <input type="number" class="form-control" name="count" value="">
    </div>
    <div class="mb-3 col-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <textarea name="des" id="" cols="30" rows="3"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection



