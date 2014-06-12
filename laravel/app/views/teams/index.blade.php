@extends('layout')

@section('content')
  <h1 class="row teams">
    Teams
  </h1>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Owner</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($teams as $team)
      <tr>
        <td>{{{ $team->name }}}</td>
        <td>{{{ $team->owner }}}</td>
      </tr> 
      @endforeach
    </tbody>
  </table>
@stop
