@extends('layouts.app')
@section('content')

<!-- BEGIN -->

<div class="container">

    <h1>CONTACT</h1>

    <a href="/contact/create" class="btn btn-primary my-2">Create Data</a>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PHONE</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($data as $row)
            
          <tr>
            <th scope="row">{{$row->id}} </th>
            <td>{{$row->name.' '.$row->lname}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->phone}}</td>
            <td><a href="{{route('contact.edit',$row->id)}}" class="btn btn-success">Edit</a></td>
            <td>
                <form action="{{route('contact.destroy',$row->id)}}" method="post">
                    @csrf @method('DELETE')
                {{-- <input type="submit" value="Delete"  class="btn btn-danger" onclick="return confirm('Are you sure {{$row->name}} ?')"> --}}
                <input type="submit" value="Delete" data-name="{{$row->name}}"  class="btn btn-danger deleteForm">   
            </form>

            </td>
          </tr>
            
        @endforeach


        
        </tbody>
      </table>
    

   

    

    </div>    

    <!-- END -->
@endsection