@extends('layouts.app')
@section('title', 'List of contacts')

@section('content')
    <a href="{{route('contacts.create')}}" class="btn btn-primary">Create contact</a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone number</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                    <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-info">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <form method="post" action="{{ route('contacts.destroy', $contact) }}" style="display: contents">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
@endsection
<style>
    .w-5{
        display: none;
    }
</style>
