@extends('layouts.app')

@section('title','Car | index')

@section('content')
    <h3>Cities</h3>
    <div class="container">

        <div class="cow">

            <h5><a href="">Create a city</a></h5>
        </div>
        <div class="table-responsive"></div>
    <table class="table table-vcenter table-nowrap">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($cities as $city)




          <tr>
            <td>{{ $city->id }}</td>
            <td>{{ $city->name }}</a></td>

            <td><a href="{{ route('admin.cities.edit', $city) }}"> edit</a> |  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal{{ $city->id }}">
                Delete
              </button> </td>




          </tr>

          <div class="modal fade" id="Modal{{ $city->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <form action="{{ route('admin.cities.destroy',$city) }}" method="POST">@csrf @method('Delete')<input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" value="delete"></form>
                </div>
              </div>
            </div>
          </div>

    @endforeach
    {{ $cities->links() }}
    </tbody>
    </table>
    </div>

