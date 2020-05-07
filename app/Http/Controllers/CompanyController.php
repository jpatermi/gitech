<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = env('ENDPOINT') . '/company';
        $companies = Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => auth()->user()->api_token
        ])->get($url)->json();
        //dd($companies);
        return view('company.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = env('ENDPOINT') . '/company';
        Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => auth()->user()->api_token
        ])->post($url,[
            'social_reason' => $request['social_reason'],
            'tradename'     => $request['tradename']
        ])->json();

        //return view('company.edit')->with('company', $company);
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = env('ENDPOINT') . '/company/' . $id;
        $company = Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => auth()->user()->api_token
        ])->get($url)->json();

        return view('company.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $url = env('ENDPOINT') . '/company/' . $id;
        $company = Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => auth()->user()->api_token
        ])->get($url)->json();

        return view('company.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $url = env('ENDPOINT') . '/company/' . $id;
        Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => auth()->user()->api_token
        ])->put($url,[
            'social_reason' => $request['social_reason'],
            'tradename'     => $request['tradename']
        ])->json();

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $url = env('ENDPOINT') . '/company/' . $id;
        Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => auth()->user()->api_token
        ])->delete($url)->json();

        return redirect()->route('company.index');
    }
}
