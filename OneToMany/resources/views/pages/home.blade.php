@extends('layouts.main-layout')

@section('content')
     <main>
          <ul>
               @foreach ($employees as $employee)
                   <li>
                        <h3>Employee: {{$employee -> firstname}} {{$employee -> lastname}}</h3>
                        <br>
                        @foreach ($employee -> tasks as $task)
                            <p>Task: {{ $task -> title}}</p>
                            <br>
                            <p>Description: {{ $task -> description }}</p>
                            <br>
                        @endforeach
                   </li>
               @endforeach
          </ul>
     </main>
@endsection
