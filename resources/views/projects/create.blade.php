@extends('layouts.layout')

@section('title')
        Create a New Project
@endsection

@section('content')
   <div class="container-fluid">
    <h1>Create a Project</h1>

        <form method="POST" action="/projects">

          @csrf

          <div class="form-group">

              <label for="title">Project Title</label>

              <input type="text" class="form-control" name="title" required value="{{ old('title') }}">

          </div>

          <div class="form-group">

            <label for="description">Project Description</label>

            <textarea name="description" class="form-control" required>{{ old('description') }}</textarea>

          </div>

            <button class="btn btn-primary" type="submit">Create Project</button>


        @if ($errors->any())

        <div class="notification is danger">

            <ul>

                @foreach ($errors->all() as $error)

                  <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

        @endif


       </form>

 </div>
@endsection
