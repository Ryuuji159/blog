@extends('admin.base')

@section('title')
    <h1>Projects</h1>
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th class="controls"><a href="{{ route('admin.project.create') }}">create</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->title}}</td>
                    <td class="controls">
                        <a href="{{ route('admin.project.edit', ['project' => $project->id]) }}">edit</a>
                        <form action={{ route('admin.project.delete', ['project' => $project->id]) }} method="post">
                            @csrf
                            <input type="submit" value="delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
