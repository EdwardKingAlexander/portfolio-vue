<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CRM\Company;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Admin/CRM/Companies/Index', [
            'companies' => Company::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/CRM/Companies/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'companyName' => 'required',
            'about' => 'required|string',
            'slug' => 'required|string',
            'streetAddress' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipCode' => 'required|string',
            'emailAddress' => 'required|string',
            'url' => 'required|string',
            'phone' => 'required|string',
            'fax' => 'required|string'
        ]);

        Company::create([
                'company_name' => $request->companyName,
                'about' => $request->about,
                'slug' => $request->slug,
                'is_customer' => false,
                'last_contact' => $request->lastContact,
                'street_address' => $request->streetAddress,
                'city' => $request->city,
                'state' => $request->state,
                'zip_code' => $request->zipeCode,
                'email_address' => $request->emailAddress,
                'url' => $request->url,
                'phone' => $request->phone,
                'fax' => $request->fax,
                'bill_to_address' => $request->billToAddress
        ]);

        return redirect('/admin/crm/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\CRM\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {

        return Inertia::render('Admin/CRM/Companies/Show', [
            'company' => $company,
            'notes' => $company->showNotes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\CRM\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\CRM\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\CRM\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('/admin/crm/companies');
    }
}
