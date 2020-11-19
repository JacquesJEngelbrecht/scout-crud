<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('display', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
            'mobile'=>'required',
            'name'=>'required',
            'surname'=>'required',
            'job_title'=>'required',
            'bio'=>'required'
        ]);
        $user = $request->all();
        $user['username'] = $request->username;
        $user['email'] = $request->email;
        $user['password'] = $request->password;
        $user['mobile'] = $request->mobile;
        $user['name'] = $request->name;
        $user['surname'] = $request->surname;
        $user['job_title'] = $request->job_title;
        $user['bio'] = $request->bio;
        User::create($user);
        return redirect()->route('display.index')->with('message', 'User Information Created Successfully');
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
        $users = User::find($id);
        return view('edit', compact('users'));
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
            'username'=>'required',
            'mobile'=>'required',
            'name'=>'required',
            'surname'=>'required',
            'job_title'=>'required',
            'bio'=>'required'
        ]);
        $user = User::find($id);
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->mobile = $request->get('mobile');
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->job_title = $request->get('job_title');
        $user->bio = $request->get('bio');
        $user->update();
        return redirect()->route('display.index')->with('message', 'User Information Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('display.index')->with('message', 'User Information Deleted');
    }
}
