@extends('admin.layouts.main_dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit User') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.clothes.update',[array_get($data,'id')]) }}" style="padding: 40px">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-form-label text-md-right">{{ __('ชื่อประเภทเสื้อผ้า :') }}</label>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ $data->name }}"  autofocus>

                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="price" class="col-form-label text-md-right">{{ __('ราคา/ชิ้น :') }}</label>
                                    <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                           name="price" value="{{ $data->price }}"  autofocus>

                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-3 offset-md-0">
                                    <button type="submit" class="btn btn-primary">
                                        บันทึก
                                    </button>
                                    <a class="btn btn-danger" href="{{ route('admin.clothes.index') }}">ยกเลิก</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--@push('script')--}}
{{--<script type="text/javascript">--}}

{{--new Cleave('#tel', {--}}
{{--phone: true,--}}
{{--delimiter: '-',--}}
{{--phoneRegionCode: 'TH'--}}
{{--});--}}

{{--new Cleave('#id_card',{--}}
{{--blocks: [1, 4, 5, 2, 1],--}}
{{--numericOnly: true,--}}
{{--});--}}

{{--//    new Cleave('#salary',{--}}
{{--//        numeral: true,--}}
{{--//        numeralThousandsGroupStyle: 'thousand'--}}
{{--//    });--}}
{{--</script>--}}

{{--@endpush--}}
