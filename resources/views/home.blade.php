@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">

                    <table class="responsive-table">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                          	<a href="" class=""><i class="material-icons">mode_edit</i></a>&nbsp;&nbsp;&nbsp;
                          	<a href="/home/delete/{{ $user->id }}" class=""><i class="material-icons">delete</i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
