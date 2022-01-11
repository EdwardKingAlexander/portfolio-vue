<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CRM\CompanyNote;
use Illuminate\Http\Request;

class CompanyNoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'note' => 'required',
            'companyId' => 'required'
        ]);

 

        CompanyNote::create([
            'note' => $request->note,
            'company_id' => $request->companyId
        ]);

        return redirect("/admin/crm/companies/$request->slug");
    }
}
