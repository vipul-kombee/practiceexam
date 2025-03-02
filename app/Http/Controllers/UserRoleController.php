<?php


namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('users.index', compact('users'));
    }

    public function assignRole(Request $request, User $user)
    {
        $request->validate(['role_id' => 'required|exists:roles,id']);
        $user->assignRole($request->role_id);

        return redirect()->back()->with('success', 'Role assigned successfully.');
    }

    public function removeRole(User $user, Role $role)
    {
        $user->removeRole($role->id);

        return redirect()->back()->with('success', 'Role removed successfully.');
    }
}

//This is user role controller
// namespace App\Http\Controllers;

// use App\Models\Role;
// use App\Models\User;
// use Illuminate\Http\Request;

// class UserRoleController extends Controller
// {
//     public function assignRole(Request $request, User $user)
//     {
//         $request->validate([
//             'role_id' => 'required|exists:roles,id',
//         ]);

//         $user->roles()->attach($request->role_id);

//         return redirect()->back()->with('success', 'Role assigned successfully.');
//     }

//     public function removeRole(User $user, Role $role)
//     {
//         $user->roles()->detach($role->id);

//         return redirect()->back()->with('success', 'Role removed successfully.');
//     }
// }
