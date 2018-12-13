<?php

namespace App\Http\Controllers;

use App\Notifications\CreateNewUser;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Auth;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
   {
       $this->middleware(['auth', 'isUser'])->except(['ResetPasswordIndex','ResetPassword']);
   }

   public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();



//admin_roles = $user->hasRoles('Backend Developer')->get();
     //  return dd($user);

      return view('users.create', ['roles'=>$roles]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required|max:120',
            'email' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::create($request->only('email', 'name', 'password'));

        $roles = $request['roles']; //Retrieving the roles field
        //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r); //Assigning role to user
            }
        }

        $admin_users = user::role('Backend Developer')->get();

        foreach ($admin_users as $admin_user ) {

            $admin_user->notify(new CreateNewUser($user));

        }
        //Redirect to the users.index view and display message
        flash()->success('User created successfully');
        return redirect(url('/users'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
       // $user = User::findOrFail($user);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {

      //  $user = User::findOrFail($user); //Get user with specified id
        $roles = Role::get(); //Get all roles

        return view('users.edit', compact('user', 'roles'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
     $this->validate($request,[
         'name' => 'required|max:120',
          'email' => 'required|email|unique:users,email,'.$user->id

     ]);



     //  $user = User::findOrFail($); //Get role specified by id
        $input = $request->only(['name', 'email']); //Retreive the name, email and password fields
        $roles = $request['roles']; //Retreive all roles
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
        }
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        flash()->success('User updated successfully');
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
       // $user = User::findOrFail($id);

        if ($user->hasRole('Backend Developer')){

            flash()->warning("You cant delete a user with administrative role");
            return redirect()->route('users.index');
        }

        $user->delete();
        flash()->success('User deleted successfully');
        return redirect()->route('users.index');

    }

  public function ResetPasswordIndex(){

        return view('users.reset');

   }

    public function ResetPassword(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',

        ]);

        $email = $request->email;
        $user = User::where('email','=',$email)->first();
        $input = $request->only([ 'email', 'password']);

        if($user == NULL){

            abort('401');

        }
else{

    $user->fill($input)->save();


}
        flash()->success('password reset successfully');
            return back();

    }
}
