@extends('layouts.masterAdmin')
@section('admin_pages')


<div class="wrapper bg-white">
    <div class="row  ">
        <div class="col-12 ">
        <div class="card bg-white m-5">

            <div class="card-header d-flex justify-content-between">
                <a href="/_admin/add_Phars"><i class="fas fa-plus"></i></a>
                <h3>الصيدليات</h3>
            </div>
            <div class="card-content">
                <table class="table">

                        <thead>
                           
                        <tr>
                            <th> اسم الصيدلية</th>
                            <th> المدينة</th>
                            <th>  المربع السكني</th>
                            <th>  العنوان</th>
                            <th> البريد الالكتروني</th>
                            <th>رقم الهاتف</th>
                            <th> الصورة</th>
                            <th> الرخصة</th>
                            <th>الحالة</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($phars as $phar)
                           
                        
                        <tr>

                          
                         
                        
                            <td>{{ $phar->name }}</td>
                         <td>{{  $phar->Cname }}</td>
                         <td>{{  $phar->Zname}}</td>
                         <td>{{  $phar->address}}</td>
                         <td>{{  $phar->email}}</td>
                         <td>{{  $phar->phone}}</td>
                         {{-- <td>{{  $phar->$phone}}</td>
                         <td>{{  $phar->$phone}}</td> --}}
                         
                        

                            
                               

                            


                           
                            <td>  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 50px;">
                            </td>


                            <td>  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 50px;">
                            </td>
                           
                          @if ($phar->is_active==1)
                        
                          <td>   <button class="btn btn-success text-white" >مفعل</button></td>
                           
                                
                            @else
                          
                              <td> <button class="btn btn-danger text-white" >موقف</button></td>
                         
                            @endif

                            <td>
                            <a href="/_admin/edit_Phars">  <button class="btn badge bg-primary">تعديل</button></a>
                            <button class="btn badge bg-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">حذف</button>
                                <!-- <button class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">حذف</button> -->


                                <div class="modal"  id="exampleModal"  tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">حذف </h5>
                                            </div>
                                            <div class="modal-body">
                                                </p> هل تريد حقا حذف الاعلان ؟</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">لا</button>
                                                <button type="button" class="btn btn-primary">نعم</button>
                                            </div>
                                            </div>
                                        </div>
                                </div>

                            </td>


                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
</div>



@endsection
