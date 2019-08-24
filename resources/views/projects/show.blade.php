@extends('layouts.layout')

@section('title')
All Projects

@endsection

@section('content')

  <div class="container-fluid">

    <h1> {{ $project->title }} </h1>

    <div class="content">{{ $project->description }}</div>

     <p>

        <a class="btn btn-primary" href="/projects/{{ $project->id }}/edit">Edit</a>

    </p>




    @if ($project->tasks->count())

    <div>

      @foreach ($project->tasks as $task)

          <div>

            <form method="POST" action="/tasks/{{ $task->id }}">

              @method('PATCH')

               <label class="checkbox" for="completed">

                  <input type="checkbox" name="completed" onChange="this.form.submit()">



               </label>

            </form>

          {{ $task->description }}


        </div>

        @endforeach

    </div>

    @endif

     </div>

@endsection

