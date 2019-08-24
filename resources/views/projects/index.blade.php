@extends('layouts.layout')

@section('title')
        Projects
@endsection

@section('content')
   <div class="container-fluid">
    <h1>Projects</h1>

      <ul>

        @foreach ($projects as $project)

          <li>

              <a href="/projects/{{ $project->id }}">

                  {{ $project->title }}

              </a>

          </li>

        @endforeach

      </ul>

 </div>
@endsection
