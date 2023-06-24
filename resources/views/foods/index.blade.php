@extends('layouts.app') {{-- kế thừa giao diện view --}}

@section('content') {{-- truyền nội dung --}}
<h1>This is Foods Page </h1>
<br>
<a href="/foods/create" class="btn btn-primary btn-sm" role="button">Add New Food</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Count</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        {{ $i = 0 }}

        @foreach ($foods as $food)

            <tbody>
                <tr>
                  <th scope="row">{{ $i++ }}</th>
                  <td>{{ $food->name }}</td>
                  <td>{{ $food->count }}</td>
                  <td>{{ $food->desciption }}</td>
                  <td>
                    <a href="foods/{{ $food->id }}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                    <form action="foods/{{ $food->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>

                </tr>
              </tbody>
        @endforeach
      </table>
@endsection



