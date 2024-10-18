@extends('layouts.app')  <!-- Extend dari layout utama -->

@section('title', 'Contact Page')  <!-- Judul halaman -->

@section('content')  <!-- Konten halaman -->
<h1 class="text-3xl font-bold mb-5">Contact List</h1>

<table class="table-auto w-full">
    <thead>
        <tr>
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Role</th>
            <th class="px-4 py-2">Email</th>
        </tr>
    </thead>
    <tbody>
        @php
            $contacts = [
                ['name' => 'Bella Mey', 'role' => 'Mahasiswa', 'email' => 'bellamey@example.com'],
                ['name' => 'Fiorenza', 'role' => 'Mahasiswa', 'email' => 'fio@example.com'],
                ['name' => 'Thania', 'role' => 'Mahasiswa', 'email' => 'thania@example.com'],
            ];
        @endphp

        @foreach($contacts as $key => $contact)
        <tr>
            <td class="border px-4 py-2">{{ $key + 1 }}</td>
            <td class="border px-4 py-2">{{ $contact['name'] }}</td>
            <td class="border px-4 py-2">{{ $contact['role'] }}</td>
            <td class="border px-4 py-2">{{ $contact['email'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
