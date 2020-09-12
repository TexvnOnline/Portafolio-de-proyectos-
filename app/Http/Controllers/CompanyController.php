<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyUpdateRequest;
 
class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:companies.edit')->only(['edit','update']);
    }
    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.company.edit', compact('company'));
    }
    public function update(CompanyUpdateRequest $request, $id)
    {
        $company = Company::find($id);
        $company->fill($request->all())->save();
        return back()->with('info','Empresa actualizada con exito.');
    }
}
