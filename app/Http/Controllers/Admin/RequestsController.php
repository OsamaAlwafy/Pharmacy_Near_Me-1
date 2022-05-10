<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Request as OrderRequest;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    //

    public function showRequests(){
        return  OrderRequest::with(['details','pharmacy.user','client.user','replies.details'])->first();
        return view('admin.Requests.show_Requests');
    }

    public function showRequestDetails(){
        return view('admin.Requests.show_RequestDetails');
    }

    public function addRequests(){
        return view('admin.Requests.add_Requests');
    }

    public function editRequests(){
        return view('admin.Requests.edit_Requests');
    }


}
