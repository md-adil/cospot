<?php

namespace App\Http\Controllers\Radius;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Radius\User as RadUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = RadUser::where('attribute', 'Password')->paginate();
        return view('radius.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('radius.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RadUser::create([
            'UserName' => $request->username,
            'Attribute' => 'Password',
            'Value' => $request->password
        ]);
        return back()->with('success', 'User has been created');
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
    public function edit(RadUser $user)
    {
        return view('radius.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RadUser $user)
    {
        $user->update([
            'UserName' => $request->username,
            'Value' => $request->password
        ]);
        return back()->with('success', 'User has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RadUser::where('id', $id)->delete();
        return back()->with('success', 'User has been deleted successfully');
    }
}
