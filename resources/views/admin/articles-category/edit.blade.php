@extends('admin.layouts.main_dashboard')
@section('title', 'Create Employee')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('เพิ่มประเภทข่าวสาร') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.articlescategory.update',[array_get($data,'id')]) }}" style="padding: 40px" >
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-form-label text-md-right">{{ __('ชื่อประเภทข่าวสาร :') }}</label>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ $data->name }}"  autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        เพิ่ม
                                    </button>
                                    <a class="btn btn-danger" href="{{ route('admin.articlescategory.index') }}">ยกเลิก</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
