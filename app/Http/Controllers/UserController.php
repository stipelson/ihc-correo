<?php

namespace App\Http\Controllers;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DEC')->get();
        return view('user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User($request->all());

        $name = $request->first_name . " " .$request->last_name;
        $user->name= $name;
        $user->password = bcrypt($request->password);

        if($request->admin){
            $user->type="admin";
        }
        else{
            $user->type="default";
        }

        $user->save();

        Flash::success("¡Se ha registrado el usuario de manera exitosa!");
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);

        if ($user->type == "admin") {
            $user->admin = "1";
        } else {
            $user->admin = "0";
        }

        $splitName = explode(" ",$user->name);

        $user->first_name = $splitName[0];
        $user->last_name = $splitName[1];

        return view('user.edit')->with('user',$user);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            Flash::info("¡El usuario " . $user->name . " fue eliminado de manera exitosa!");
        } else {
            Flash::info("¡El usuario " . $user->name . " no fue eliminado!");
        }

        return redirect()->route('user.index');
    }
}
