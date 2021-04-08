@extends('layouts.app')
@section('title', isset($contact) ? 'Update ' . $contact->name : 'Create contact')

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form method="POST"
                  @if(isset($contact))
                  action="{{ route('contacts.update', $contact) }}"
                  @else
                  action="{{ route('contacts.store') }}"
                  @endif
                  class="mt-3">
                @csrf
                @isset($contact)
                    @method('PUT')
                @endisset
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name"
                           value="{{isset($contact) ? $contact->name : null}}"
                           type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email"
                           value="{{isset($contact) ? $contact->email : null}}"
                           type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input name="phone"
                           value="{{isset($contact) ? $contact->phone   : null}}"
                           type="tel" class="form-control" id="phone" placeholder="Phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
