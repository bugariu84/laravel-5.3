<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.index', ['companies' => Company::all()]);
    }

    public function show(Company $company)
    {
        return view('company.show', ['company' => $company]);
    }

    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->save();
        return back();
    }

    public function remove(Company $company)
    {
        $company->delete();

        return back();
    }
}
