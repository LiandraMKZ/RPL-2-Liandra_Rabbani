@extends('layout')

@section('content')
<h1 class="mb-4">{{ isset($contact) ? 'Edit' : 'Tambah' }} Kontak</h1>

<form action="{{ isset($contact) ? route('contacts.update', $contact->id) : route('contacts.store') }}" method="POST">
    @csrf
    @if(isset($contact))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Nama:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $contact->name ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $contact->email ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Telepon:</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $contact->phone ?? '') }}" required>
    </div>

    <button type="submit" class="btn btn-success">{{ isset($contact) ? 'Update' : 'Tambah' }}</button>
    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
