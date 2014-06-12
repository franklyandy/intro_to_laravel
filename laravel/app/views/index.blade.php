@extends('layout')

@section('content')
  <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>OCR Connect</h1>
    <p>Obstacle Course Racing (OCR) is all about teamwork and pushing each other to new levels.</p>
    <p>Whether you are a {{ link_to('http://www.spartan.com/', 'Spartan') }}, a {{ link_to('https://www.warriordash.com/', 'Warrior') }}, a {{ link_to('https://toughmudder.com', 'Tough Mudder') }}, or a {{ link_to('http://www.mudninja.com', 'Mud Ninja') }}, OCR Connect is the place to go
       when you want to connect with OCR fanatics!
    </p>
    <p>Check out our {{ link_to('teams', 'teams') }} to find the team that best fits you!</p>
    <p>
      <a class="btn btn-lg btn-primary" href="{{url('teams')}}" role="button">Show me the teams »</a>
    </p>
  </div>
@stop
