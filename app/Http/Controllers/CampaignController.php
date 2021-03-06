<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaign',['campaigns'=>$campaigns,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campaigns = Campaign::all();
        return view('campaign',['campaigns'=>$campaigns,'layout'=>'create']);
         }

    /**
     * Store a newly created resource in stordob.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $campaign = new campaign();
        $campaign->cne =$request->input('cne');
        $campaign->firstName =$request->input('firstName');
        $campaign->secondName =$request->input('secondName');
        $campaign->dob =$request->input('dob');
        $campaign->speciality =$request->input('speciality');
        $campaign->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
            $campaign = Campaign::find($id);
        $campaigns = Campaign::all();
         return view('campaign',['campaigns'=>$campaigns,'campaign'=>$campaign,'layout'=>'show']);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                 $campaign = Campaign::find($id);
        $campaigns = Campaign::all();
          return view('campaign',['campaigns'=>$campaigns,'campaign'=>$campaign,'layout'=>'edit']);
       
    }

    /**
     * Update the specified resource in stordob.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campaign = Campaign::find($id);
        $campaign->cne =$request->input('cne');
        $campaign->firstName =$request->input('firstName');
        $campaign->secondName =$request->input('secondName');
        $campaign->dob =$request->input('dob');
        $campaign->speciality =$request->input('speciality');
        $campaign->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from stordob.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::find($id);
        $campaign->delete();
        return redirect('/');
    }
}
