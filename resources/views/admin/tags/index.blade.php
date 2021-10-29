@extends('layouts.template')

@section('title', 'Tags')

@section('main')
    <h1>Tags</h1>
    @include('shared.alert')
    <p>
        <a href="/admin/tags/create" class="btn btn-outline-success">
            <i class="fas fa-plus-circle mr-1"></i>Create new tag
        </a>
    </p>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Tag</th>
                <th>Records for this tag</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->records_count }}</td>
                    <td>
                        <form action="/admin/genres/{{ $tag->id }}" method="post">
                            @method('delete')
                            @csrf
                            <div class="btn-group btn-group-sm">
                                <a href="/admin/genres/{{ $tag->id }}/edit" class="btn btn-outline-success"
                                   data-toggle="tooltip"
                                   title="Edit {{ $tag->name }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-outline-danger"
                                        data-toggle="tooltip"
                                        title="Delete {{ $tag->name }}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
