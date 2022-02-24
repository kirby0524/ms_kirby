@extends('layouts.app')
@section('css')
    <link href='{{asset('css/main.css')}}' rel='stylesheet'>
@endsection
@section('content')
<body style="background-color:rgb(255,240,245);">
    <h1>🌹Happy Garden🌹</h1>
        <p class='create'><a href='/posts/create'>日記作成</a></p>
        <div id='calendar'></div>
@endsection
@section('js')
     <script src='{{asset('js/main.js')}}'></script>
        <script>
       document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });


        </script>
@endsection
