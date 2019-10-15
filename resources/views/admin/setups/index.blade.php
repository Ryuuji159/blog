@extends('admin.base')

@section('content')

    <div class="table-heading">
        <h1>Setups</h1>
        <a class="pure-button button-black-white" href="{{ route('admin.setup.create') }}">Add Setup</a>
    </div>

    <table class="pure-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($setups as $setup)
                <tr>
                    <td>{{$setup->id}}</td>
                    <td>{{ Str::limit($setup->title, 30, "...") }}</td>
                    <td>{{$setup->created_at->format('Y-m-d')}}</td>
                    <td class="controls">
                        <a href="{{ route('admin.setup.edit', ['setup' => $setup->id]) }}" class="pure-button button-black-white">Edit</a>
                        <form action={{ route('admin.setup.delete', ['setup' => $setup->id]) }} method="post">
                            @csrf
                            <button type="submit" class="pure-button button-black-white" onclick="return confirm('Estas seguro?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
