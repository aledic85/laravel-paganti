@extends ('layout.home-layout')

@section('content')


    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Lastname</th>
      </tr>
  @foreach ($paganti as $pagante)
      <tr>
        <td>{{$pagante->id}}</td>
        <td>{{$pagante->name}}</td>
        <td>{{$pagante->lastname}}</td>
      </tr>
  @endforeach
    </table>

@stop
