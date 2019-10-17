@extends('admin.base')

@section('content')
    <article>
        <h1>Now</h1>
        <a class="pure-button button-black-white" href="{{ route('admin.now.create') }}">Create Now</a>

        <table class="pure-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Published</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($nows as $now)
                    <tr>
                        <td>{{$now->id}}</td>
                        <td>{{$now->is_published ? "Yes" : "No"}}</td>
                        <td>{{$now->created_at->format('Y-m-d')}}</td>
                        <td class="controls">
                            <a href="{{ route('admin.now.edit', ['now' => $now->id]) }}" class="pure-button button-black-white">Edit</a>
                            <form action={{ route('admin.now.delete', ['now' => $now->id]) }} method="post">
                                @csrf
                                <button type="submit" class="pure-button button-black-white" onclick="return confirm('Estas seguro?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </article>
@endsection
