@extends('layouts.masterAdmin')
@section('admin_pages')


<div class="wrapper bg-white">
    <div class="row ">
        <div class="col-12 col-m-8 col-sm-8">
        <div class="card bg-white m-5">

            <div class="card-header d-flex justify-content-between">
                <h3>تعديل صيدلية</h3>
            </div>
            <div class="card-content px-5">
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
              @endforeach
                @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{session('error') }}
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                      
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
              @endforeach

    <form method="POST" action={{route('_admin-phar_Updata', ['id' => $phar->id]);}}>


        <div class="row g-3">
            <div class="mb-3 col-8"> 
                    <label for="exampleInputName" class="form-label">اسم الصيدلية</label>
            <input type="text" name="name" value="{{$phar->name}}" class="form-control" id="exampleInputName">
            </div>


            <div class="mb-3 col-4">

                    <div class="d-flex justify-content-start align-items-sm-center gap-4">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                        alt="user-avatar"
                        class="d-block rounded"
                        height="100"
                        width="100"
                        id="uploadedAvatar"/>
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block" >تعديل صورة الصيدلي</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input type="file"
                            id="upload"
                            class="account-file-input"
                            hidden
                            accept="image/png, image/jpeg"
                            name="image"
                        />
                        </label>
                    </div>
                    </div>





        </div>


        </div>

        <div class="row g-3">

            <div class="mb-3 col-3 col-4">
                <label for="exampleInputLink" class="form-label">المدينة</label>
                    <select class="form-select" name="city_id" aria-label="Default select example">
                      @foreach ($city as $c )
                        @if ($c->id ==$phar->Cid)
                    <option value="{{$c->id}}" selected> {{$c->name}} </option>

                        @else
                        <option value="{{$c->id}}" > {{$c->name}} </option>
                        @endif
                      @endforeach  
                        {{-- <option selected> تعز </option>
                        <option value="1">عدن</option>
                        <option value="2">صنعاء</option>
                        <option value="3">حضرموت</option> --}}
                    </select>
                </div>

            <div class="mb-3 col-4">
                <label for="exampleInputLink" class="form-label">المنطقة السكنية</label>
                    <select class="form-select"  name="zone_id" aria-label="Default select example">

                        @foreach ($zone as $c )
                        @if ($c->id ==$phar->Zid)
                    <option value="{{$c->id}}" selected> {{$c->name}} </option>

                        @else
                        <option value="{{$c->id}}" > {{$c->name}} </option>
                        @endif
                      @endforeach 
                        {{-- <option selected> الروضة </option>
                        <option value="1">المسبح</option>
                        <option value="2">بيرباشا</option>
                        <option value="3">صينا</option> --}}
                    </select>
            </div>


        </div>


        <div class="row g-3">

            <div class="mb-3 col-8">
                    <label for="exampleInputLink" class="form-label">العنوان</label>
            <input type="text" name="address" value="{{$phar->address}}" class="form-control" id="exampleInputName">
            </div>



        <div class="mb-3 col-4">
            <!-- <label for="formFile" class="form-label">صورة الرخصة</label>
            <input class="form-control" type="file" id="formFile"> -->


            <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                        alt="user-avatar"
                        class="d-block rounded"
                        height="100"
                        width="100"
                        id="uploadedAvatar"/>
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">تعديل صورة الرخصة</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input
                            type="file"
                            id="upload"
                            class="account-file-input"
                            hidden
                            accept="image/png, image/jpeg"
                            name="image"
                        />
                        </label>
                    </div>
                    </div>







        </div>

        </div>

        <div class="row g-3">
        <div class="mb-3 col-4">
            <label for="formFile" class="form-label">  اوقات الدوام</label>
            <input class="form-control " type="time" id="formFile" >

        </div>

        <div class="mb-3 col-8">
            <label for="formFile" class="form-label"> وصف الصيدلية</label>
        <textarea type="text" name = "description" value="{{$phar->description}}" class = "form-control"></textarea>

        </div>
        </div>


        <div class="row g-3">
            <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label"> البريد الالكتروني</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3 col-4">
                    <label for="exampleFormControlInput1" class="form-label">  رقم الهاتف</label>
                <input type="text" name="phone" value="{{$phar->phone}}" class="form-control" id="exampleFormControlInput1" >
                </div>

                    <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">الموقع الالكتروني</label>
                    <input type="text" name="google"  value="{{$phar->google}}" class="form-control" id="exampleFormControlInput1" >
                </div>


        </div>

            <div class="row g-3">
                <div class="mb-3 col-4">
                    <label for="exampleFormControlInput1" class="form-label">  <i class="fab fa-whatsapp fa-lg" style="color: lightgreen; padding : 0 10px 0 10px;"></i> واتساب</label>
                    <input type="text" name="whatsup" value="{{$phar->whatsup}}"  class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="mb-3 col-4">
                    <label for="exampleFormControlInput1" class="form-label"> <i class="fab fa-twitter fa-lg" style="color: #55acee; padding : 0 10px 0 10px;"></i> تويتر</label>
                    <input type="text" name="twitter" value="{{$phar->twitter}}"  vaclass="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="mb-3 col-4">
                    <label for="exampleFormControlInput1" class="form-label"><i class="fab fa-facebook-f fa-lg" style="color: #3b5998; padding: 0 10px 0 10px ;"></i>فيسبوك</label>
                    <input type="text" name="facebook" value="{{$phar->facebook}}" class="form-control" id="exampleFormControlInput1">
                </div>


        </div>

        <div class="row g-3">
        <div class="mb-3 col-6">
        <a href="" data-bs-toggle= "modal" data-bs-target="#addemail">تعديل البريد الكتروني</a>
        </div>
        <div class="mb-3 col-6">
        <a href="" data-bs-toggle= "modal" data-bs-target="#addpassword"> تعديل كلمة المرور</a>
        </div>

        </div>


            <button  id="submit_button"  type="submit" class="btn btn-primary">تعديل</button>
    </form>

            </div>
        </div>
</div>



@stop




                                <div class="modal"  id="addemail"  tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title ps-5 ms-5">تعديل البريد الالكتروني </h5>
                                            <button type="button" class="btn-close pe-5 me-5" data-bs-dismiss="modal" aria-label="Close"></button>

                                            </div>
                                            <div class="modal-body">
                                            <div class="mb-3 col-12">
                                            <label for="exampleFormControlInput1" class="form-label"> البريد الالكتروني</label>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <button class="btn btn-primary" type="button" id="button-addon1">ارسال</button>

                                            </div>
                                            </div>

                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">  ادخل رقم التأكيد</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" id="submit_button">تعديل الايميل</button>
                                            </div>
                                            </div>
                                        </div>
                                </div>


                                <div class="modal"  id="addpassword"  tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title ps-5 ms-5">تغيير كلمة المرور </h5>
                                            <button type="button" class="btn-close pe-5 me-5" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">  كلمة المرور القديمة</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1">
                                            </div>
                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">  كلمة المرور الجديدة</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1">
                                            </div>
                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">    تأكيد كلمة المرور</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" id="submit_button">اضافة</button>
                                            </div>
                                            </div>
                                        </div>
                                </div>
