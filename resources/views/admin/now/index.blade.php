@extends('admin.base')

@section('title')
    <h1>Now</h1>
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th class="controls"><a href="{{ route('admin.now.create') }}">create</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($nows as $now)
                <tr>
                    <td>{{$now->id}}</td>
                    <td>{{$now->created_at->format('Y-m-d')}}</td>
                    <td class="controls">
                        <a href="{{ route('admin.now.edit', ['now' => $now->id]) }}">edit</a>
                        <form action={{ route('admin.now.delete', ['now' => $now->id]) }} method="post">
                            @csrf
                            <input type="submit" value="delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
