<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class SubdomainController extends Controller
{
    public function store(Request $request)
    {
        $tenant = Tenant::create(['id', $request->subdomain]);
        $tenant->domains()->create(['domain' => $request->subdomain . '.localhost']);
        return back();
    }
}
