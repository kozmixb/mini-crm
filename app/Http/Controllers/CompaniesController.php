<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //\DB::enableQueryLog();
        $companies = Company::latest()->paginate(10);
        //dd(\DB::getQueryLog());
        return view('companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = new Company;
        return view('companies.create',compact('company'));
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
            'name' => 'required',
            'address' => 'required',
            'email' => 'email|required',
            'website' => 'nullable|url',
            'logo' => 'nullable|image|dimensions:min_width=100,min_height=100'
        ]);

        // $company = new Company;
        // $company->name = $request->name;
        // $company->address = $request->address;
        // $company->email = $request->email;
        // $company->website = $request->website;
        // $company->logo = 'default.jpg';
        // $company->save();
        $company = new Company;
        $company->create($request->only('name','address','email','website'));

        return redirect('/companies')->with('success',"The <strong>$request->name</strong> company has created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'email|required',
            'website' => 'url|required',
            'logo' => 'nullable|image|dimensions:min_width=100,min_height=100'
        ]);
        $company->update($request->only('name','address','email','website','logo'));
        return redirect('/companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->back()->with('success','We removed your company successfully');
    }
}
