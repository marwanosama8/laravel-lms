@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        {{-- add new student byn --}}
        <div class="m-5 text-right">
            <a class="btn-primary" href="/student-create">Add New Student</a>
        </div>
        {{-- component --}}
        <student-table></student-table>
    </div>
@endsection
