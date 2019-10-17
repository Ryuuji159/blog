@extends('admin.base')

@section('title')
    <h1>Projects</h1>
@endsection

@section('content')
    <article>
        <h1>Projects</h1>
        <a class="pure-button button-black-white" href="{{ route('admin.project.create') }}">Add Project</a>

        <table class="pure-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Published</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{ Str::limit($project->title, 30, "...") }}</td>
                        <td>{{$project->is_published ? "Yes" : "No"}}</td>
                        <td>{{$project->created_at->format('Y-m-d')}}</td>
                        <td class="controls">
                            <a href="{{ route('admin.project.edit', ['project' => $project->id]) }}" class="pure-button button-black-white">Edit</a>
                            <form action={{ route('admin.project.delete', ['project' => $project->id]) }} method="post">
                                @csrf
                                <button type="submit" class="pure-button button-black-white" onclick="return confirm('Estas Seguro?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </article>
@endsection
