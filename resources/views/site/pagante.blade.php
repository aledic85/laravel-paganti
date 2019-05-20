@extends ('layout.home-layout')

@section('content')

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Lastname</th>
      </tr>
  @foreach ($pagante as $elem)
      <tr>
        <td>{{$elem->id}}</td>
        <td>{{$elem->name}}</td>
        <td>{{$elem->lastname}}</td>
      </tr>
  @endforeach
    </table>
@stop
