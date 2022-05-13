@extends('layouts.masterAdmin')
@section('admin_pages')


<div class="wrapper bg-white">
    <div class="row  ">
        <div class="col-12 col-m-12 col-sm-12">
        <div class="card bg-white m-5">

            <div class="card-header d-flex justify-content-between">
                <a href="/_admin/add_Cities"><i class="fas fa-plus"></i></a>
                <h3>المدن</h3>
            </div>
            <div class="card-content">
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
                <table class="table">
                    <thead>
                        <tr>
                            <th> اسم المدينة</th>
                            <th>الحالة</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cities as $city)
                        
                        <tr>
                        <td>{{$city->name}}</td> 
                        @if ($city->is_active==1)

                        <td>  <a href={{route('admin-activity_Cities', ['id' => $city->id , 'state'=>0])}}>   <button class="btn btn-success text-white" >مفعل</button></a></td>


                          @else

                            <td>  <a href={{route('admin-activity_Cities', ['id' => $city->id ,'state'=>1])}}> <button class="btn btn-danger text-white" >موقف</button></a></td>

                          @endif

                            <td>
<<<<<<< HEAD
                            <a href="/_admin/edit_Cities">  <button class="btn " ><i class="fas fa-pen" id="edit"></i></button></a>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" id="delete"><i class="fas fa-trash"></i></button>
=======
                                <a href={{route('admin-edit_Cities', ['id' => $city->id]);}} >  <button class="btn btn-primary text-white" >تعديل</button></a>
                                <button class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">حذف</button>
>>>>>>> admin/v.2
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
