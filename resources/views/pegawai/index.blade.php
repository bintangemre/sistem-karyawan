<!-- resources/views/pegawai/index.blade.php -->
@extends('layouts.app')

@section('title', 'Daftar Pegawai') <!-- Set title untuk halaman ini -->

@section('content')
    <h1>Daftar Kehadiran Pegawai</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>Tanggal</th>
                <th>Kehadiran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kehadirans as $kehadiran)
            <tr>
                <td>{{ $kehadiran->pegawai->nama }}</td>
                <td>{{ $kehadiran->pegawai->email }}</td>
                <td>{{ $kehadiran->pegawai->jabatan }}</td>
                <td>{{ $kehadiran->tanggal }}</td>
                <td>{{ $kehadiran->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
