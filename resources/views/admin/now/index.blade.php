@extends('admin.base')

@section('content')
    <div class="pure-g">
        <div class="pure-u-1-5">
            <h1>Now</h1>
        </div>
        <div class="pure-u-4-5">
            <a class="pure-button u-align-right" href="{{ route('admin.now.create') }}">Create</a>
        </div>
    </div>
    <table class="pure-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($nows as $now)
                <tr>
                    <td>{{$now->id}}</td>
                    <td>{{$now->created_at->format('Y-m-d')}}</td>
                    <td>
                        <a class="pure-button" href="{{ route('admin.now.edit', ['now' => $now->id]) }}">Edit</a>
                    </td>
                    <td>
                        <form action={{ route('admin.now.delete', ['now' => $now->id]) }} method="post">
                            @csrf
                            <button type="submit" class="pure-button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
