@extends('layouts.admin')

@section('admin-content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Cover Link</th>
        <th scope="col">Slug</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->cover_image}}</td>
                <td>{{$project->slug}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.projects.show', $project->slug)}}">Show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection