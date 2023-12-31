@extends('admin.layouts.template')

@section('title')
<title>สูตรบาคาร่า5ดาว -สูตรบาร์ที่ดีที่สุดและแม่นยำที่สุดในไทย อันดับ 1</title>
    <meta name="description" content=" สูตรบาคาร่า5ดาว -สูตรบาร์ที่ดีที่สุดและแม่นยำที่สุดในไทย อันดับ 1">
@stop
@section('stylesheet')

@stop('stylesheet')

@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            แก้ไข User</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">จัดการ</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">แก้ไข User</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    
                    
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <form id="kt_account_profile_details_form" class="form" method="POST" action="{{$url}}" enctype="multipart/form-data">
                        {{ method_field($method) }}
                        {{ csrf_field() }}
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            
                            <div class="card-body border-top p-9">

                                <!--begin::Row-->
                                <div class="row mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-3">
                                        <label class="form-check-image 
                                        @if ($objs->avatar == '300-2.jpg')
                                        active
                                                @endif
                                                ">
                                            <div class="form-check-wrapper">
                                                <img src="{{ url('admin/assets/media/avatars/300-2.jpg') }}"/>
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" 
                                                @if ($objs->avatar == '300-2.jpg')
                                                    checked
                                                @endif
                                                value="300-2.jpg" name="option2"/>
                                                <div class="form-check-label">
                                                    Avatar 1
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-3">
                                        <label class="form-check-image @if ($objs->avatar == '300-1.jpg')
                                            active
                                                    @endif">
                                            <div class="form-check-wrapper">
                                                <img src="{{ url('admin/assets/media/avatars/300-1.jpg') }}"/>
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" value="300-1.jpg" 
                                                @if ($objs->avatar == '300-1.jpg')
                                                    checked
                                                @endif
                                                 name="option2" id="text_wow"/>
                                                <div class="form-check-label">
                                                    Avatar 2
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-3">
                                        <label class="form-check-image @if ($objs->avatar == '300-16.jpg')
                                            active
                                                    @endif">
                                            <div class="form-check-wrapper">
                                                <img src="{{ url('admin/assets/media/avatars/300-16.jpg') }}"/>
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" 
                                                @if ($objs->avatar == '300-16.jpg')
                                                    checked
                                                @endif
                                                 value="300-16.jpg" name="option2"/>
                                                <div class="form-check-label">
                                                    Avatar 3
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-3">
                                        <label class="form-check-image @if ($objs->avatar == '300-9.jpg')
                                            active
                                                    @endif">
                                            <div class="form-check-wrapper">
                                                <img src="{{ url('admin/assets/media/avatars/300-9.jpg') }}"/>
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" 
                                                @if ($objs->avatar == '300-9.jpg')
                                                    checked
                                                @endif
                                                value="300-9.jpg" name="option2"/>
                                                <div class="form-check-label">
                                                    Avatar 4
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">UserName </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="text" name="name" class="form-control form-control-lg form-control-solid" placeholder="Sangsom, Hongthong" value="{{ $objs->name }}">
                                    
                                        @if ($errors->has('name'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>{{ $errors->first('name') }}</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">เลือกวันหมดอายุ</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">

                                        <div class="position-relative d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span class="svg-icon position-absolute ms-4 mb-1 svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
                                                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
                                                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input class="form-control form-control-solid ps-12" name="startdate" placeholder="เลือกวันหมดอายุ" id="kt_datepicker_1" value="{{ $objs->birthday }}" />
                                        </div>
                                    
                                        @if ($errors->has('startdate'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>กรุณาเลือกวันหมดอายุ</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>


                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">เบอร์ติดต่อ</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="text" name="phone" class="form-control form-control-lg form-control-solid" placeholder="0958254752" value="{{ $objs->phone }}">
                                    
                                    </div>
                                    <!--end::Col-->
                                </div>


                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Role User</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <select class="form-select" name="role" aria-label="Select example">
                                            <option> -- กำหนด Role User -- </option>
                                            @isset($Role)
                                                @foreach ($Role as $item)
                                                    <option value="{{ $item->id }}" 
                                                        @if($get_role)
                                                        @if( $get_role->role_id == $item->id)
                                                        selected='selected'
                                                        @endif
                                                        @endif
                                                        >{{ $item->name }}</option>
                                                @endforeach
                                            @endisset
                                            
                                        </select>
                                        @if ($errors->has('email'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>กรุณากำหนด Role User</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>


                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">password</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <div class="input-group">
                                            <!--begin::Input-->
                                            <input id="kt_clipboard_1" type="text" class="form-control" placeholder="name@example.com" value="{{ $objs->code_user }}" />
                                            <!--end::Input-->
                                
                                            <!--begin::Button-->
                                            <a class="btn btn-light-primary" data-clipboard-target="#kt_clipboard_1">
                                                Copy
                                            </a>
                                            <!--end::Button-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">กรอกเมื่อจะเปลี่ยน password</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="password" name="password" class="form-control form-control-lg form-control-solid" placeholder="password กำหนด 8 ตัวขึ้นไป" value="{{old('password') ? old('password') : ''}}">
                                        @if ($errors->has('password'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>{{ $errors->first('password') }}</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>


                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6"> ยืนยัน password</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="password" name="password_confirmation" class="form-control form-control-lg form-control-solid" placeholder="password กำหนด 8 ตัวขึ้นไป" >
                                        @if ($errors->has('password_confirmation'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>{{ $errors->first('password_confirmation') }}</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>
                            

                            </div>
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">ยกเลิก</button>
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">บันทึกข้อมูล</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>

@endsection

@section('scripts')


<script src="{{ url('admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>

<script src="{{ url('admin/assets/js/custom/apps/projects/settings/settings.js') }}"></script>

<script>
    
ClassicEditor
    .create(document.querySelector('#kt_docs_ckeditor_classic'),{
        ckfinder: {
                    uploadUrl: '{{ url('api/upload_img').'?_token='.csrf_token()}}',
        }
    })
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });


    const target = document.getElementById('kt_clipboard_1');
const button = target.nextElementSibling;

// Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
var clipboard = new ClipboardJS(button, {
    target: target,
    text: function() {
        return target.value;
    }
});

// Success action handler
clipboard.on('success', function(e) {
    const currentLabel = button.innerHTML;

    // Exit label update when already in progress
    if(button.innerHTML === 'Copied!'){
        return;
    }

    // Update button label
    button.innerHTML = 'Copied!';

    // Revert button label after 3 seconds
    setTimeout(function(){
        button.innerHTML = currentLabel;
    }, 3000)
});
</script>


@stop('scripts')
