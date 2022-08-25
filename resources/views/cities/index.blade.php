@extends('layouts.app')

@section('title','Car | index')

@section('content')

    <div class="container">

        <div class="cow">
            <h3>cities</h3>
            <h5><a href="{{  route('cities.create') }}">Create a city</a></h5>
        </div>
        <div class="table-responsive ">
    <table class="table table-vcenter table-nowrap">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Country</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($cities as $city)




          <tr>
            <td>{{ $city->id }}</td>
            <td>{{ $city->name }}</a></td>
            <td>{{ $city->country->name }}</a></td>

            <td><a href="{{ route('cities.edit', $city) }}"> edit</a> |  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal{{ $city->id }}">
                Delete
              </button> </td>




          </tr>

          <div class="modal" tabindex="-1" id="Modal{{ $city->id }}">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                  <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                  <!-- SVG icon code with class="mb-2 text-danger icon-lg" -->
                  <h3>Are you sure?</h3>
                  <div class="text-muted">Do you really want to remove this city?</div>
                </div>
                <div class="modal-footer">
                  <div class="w-100">
                    <div class="row">
                      <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                          Cancel
                        </a></div>
                      <div class="col">
                        <form action="{{ route('cities.destroy',$city) }}" method="POST">@csrf @method('Delete')<input type="submit" class="btn btn-danger w-100" data-toggle="modal" data-target="#exampleModal" value="Delete item"></form>

                        {{-- <a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                          Delete item
                        </a> --}}
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="modal fade" id="Modal{{ $city->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Do you want to delete this item
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <form action="{{ route('cities.destroy',$city) }}" method="POST">@csrf @method('Delete')<input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" value="delete"></form>
                </div>
              </div>
            </div>
          </div> --}}

    @endforeach
    {{ $cities->links() }}
    </tbody>
    </table>
    </div>
</div>
@endsection