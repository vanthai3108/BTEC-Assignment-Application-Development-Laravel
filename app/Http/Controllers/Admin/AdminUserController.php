<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\AppConst;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::where('id', '!=', auth()->user()->id)
                                ->with('roles')
                                ->paginate(AppConst::DEFAULT_ADMIN_USER_PER_PAGE);
        $data['roles'] = Role::all();
        return view('admin.user.list')->with('usersData', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {

        $request->file('avatar')->store('public/avatars');
        $filename = $request->file('avatar')->hashName();
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->avatar = 'storage/avatars/'.$filename;
        $user->save();
        foreach($request->roles as $role)
        {
            $user->roles()->attach($role);
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data['user'] = $user;
        $data['roles'] = Role::all();
        return view('admin.user.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $request->file('avatar')->store('public/avatars');
        $filename = $request->file('avatar')->hashName();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->avatar = 'storage/avatars/'.$filename;
        $user->save();
        foreach($request->roles as $role)
        {
            $user->roles()->attach($role);
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }

    public function blockUser(Request $request, User $user)
    {
        $user->blocked = true;
        $user->save();
        return redirect()->route('admin.users.index');
    }

    public function unblockUser(Request $request, User $user)
    {
        $user->blocked = false;
        $user->save();
        return redirect()->route('admin.users.index');
    }
}
