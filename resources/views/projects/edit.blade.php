@extends('layout')

@section('title')
       Edit Project
@endsection

@section('content')
   <div class="container-fluid">
    <h1>Edit a Project</h1>

      <form method="POST" action="/projects/{{ $project->id }}">

         @method('PATCH')

         @csrf

        <div class="form-group">

            <label for="title">Title</label>


            <div class="control">

                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $project->title }}">

            </div>

        </div>


      <div class="form-group">

          <label for="description">Description</label>

          <textarea name="description" class="form-control">{{ $project->description }}</textarea>

      </div>

      <div class="col">

        <div class="row">

              <button class="btn btn-primary" type="submit">Update Project</button>

        </div>

      </div>

      </form>

      <div class="col" style="margin-top: 20px;">

        <div class="row">

      <form method="POST" action="/projects/{{ $project->id }}">

        @method('DELETE')

        @csrf

             <button class="btn btn-danger" type="submit">Delete Project</button>

      </form>

      </div>

    </div>


 </div>
@endsection
