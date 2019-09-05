@extends('admin.layouts.main_dashboard')
@section('title', 'Create Employee')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('เพิ่มประเภทข่าวสาร') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.articles.store') }}" style="padding: 40px" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group ">
                                    <label>ชื่อข่าวสาร <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="title"
                                           placeholder="Title" value="">
                                </div>
                                <div class="form-group">
                                    <label>รายละเอียดสั้น <span style="color:red">*</span></label>
                                    <textarea class="form-control ckeditor" id="editor" name="short_description"
                                              placeholder="Short Description"
                                              rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>รายละเอียด <span style="color:red">*</span></label>
                                    <textarea class="form-control ckeditor" id="editor" name="description"
                                              placeholder="Short Description"
                                              rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >รูปโปรไฟล์</label>
                                <div class="form-group">
                                    <div id="divShowImg">
                                        <img class="rounded-circle" id="previewProduct" style="width: 160px; height: 160px" src="https://via.placeholder.com/180x120.png?text=No%20Image">
                                    </div>

                                    @if ($errors->has('image'))
                                        <span style="color: rgba(226,20,17,0.77);font-size: 13px">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <input type="file" accept="image/jpeg, image/png"  onchange="readProduct(this);" id="fileProduct"
                                       name="image">
                                <p class="help-block">
                                    ไฟล์ภาพต้องเป็นนามสกุล jpeg,png เท่านั้น <br>
                                    ขนาดไฟล์ไม่เกิน 1 MB <br>
                                </p>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        โพส
                                    </button>
                                    <a class="btn btn-danger" href="{{ route('admin.articles.index') }}">ยกเลิก</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script type="text/javascript">

        function readProduct(input) {
            if (input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewProduct').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

@endpush