@extends('admin.layouts.main_dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a class="fas fa-users" href="{{ route('admin.employee.create') }}">  เพิ่มพนักงาน</a>

                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(session()->has('deleted'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 20px">
                        {{ session()->get('deleted') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(session()->has('edit'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px">
                        {{ session()->get('edit') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="card" style="margin-top: 10px">

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td scope="row">{{ $admin->id }}</td>
                                <td>{{ $admin->first_name." ".$admin->last_name }}</td>
                                <td class="row">
                                    <form method="post" action="{{ route('admin.employee.delete', $admin->id) }}">
                                        @csrf
                                        <a class="fas fa-user-edit" href="{{ route('admin.employee.edit', $admin->id) }}"> edit</a>
                                        <button type="submit" class="fas fa-trash-alt">  Delete</button>
                                        {{ method_field('DELETE') }}
                                    </form>
{{--                                    <a class="btn-block" href="{{ route('admin.employee.edit', $admin->id) }}">edit</a>--}}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection