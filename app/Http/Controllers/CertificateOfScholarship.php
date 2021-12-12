<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateOfScholarship extends Controller
{
    public function viewForm(){
        return view('forms.certificate-of-scholarship');
    }

    public function store(){
        return view('welcome');
    }
}
