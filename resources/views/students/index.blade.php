@extends('students.layouts.templates')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Absensi</h2>
            </div>
            <div class="pull-right">
                <a href="/students/create" class="btn btn-success">Create</a>
            </div>
        </div>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <table class="table tablde-bordered">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = (request()->input('page', 1)-1)*5;
        @endphp
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->rombel }}</td>
            <td>{{ $student->rayon }}</td>
            <td>{{ $student->ket }}</td>
            <td>
                <form action="/students/{{ $student->id }}" method="POST">
                    <a href="/students/{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        @endforeach
        </tr>
    </table>

    {{ $students->links() }}
@endsection