<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all()->toArray();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'admin_id' => 'required',
            'name' => 'required',
            'contact' => 'required|numeric',
            'email' => 'required|email|unique:users',
        ]);
        $profiles = new Profile([
            'admin_id' => $request->get('admin_id'),
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'email' => $request->get('email'),
        ]);
        $profiles->save();
        return redirect()->route('profiles.index')->with('Successful','Profile Details Added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profiles.profile', compact('profile','id'));
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
        $this->validate($request, [
            'admin_id' => 'required',
            'name' => 'required',
            'contact' => 'required|numeric',
            'email' => 'required|email|unique:users',
        ]);
        $profile = Profile::find($id);
        $profile->admin_id = $request->get('admin_id');
        $profile->name = $request->get('name');
        $profile->contact = $request->get('contact');
        $profile->email = $request->get('email');
        $profile->save();
        return redirect()->route('profiles.index')->with('Successful','Profile Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('profiles.index')->with('Successful','Profile Details Deleted');
    }
}
