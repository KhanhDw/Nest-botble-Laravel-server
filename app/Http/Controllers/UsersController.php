<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rules\Uppercase;
use App\Http\Requests\ValidationUserRequest;


class UsersController extends Controller
{
    public function index()
    {
        $name = 'John Doe';

        $phone = [
            'home' => '123-456-7890',
            'work' => '098-765-4321',
        ];
        $lsPhone = [
            [
                'home' => '123-456-7890',
                'work' => '098-765-4321',
            ],
            [
                'home' => '123-456-7890',
                'work' => '098-765-4321',
            ],
        ];

        $users = DB::select('select * from users');

        return view('users.index', compact('users', 'name', 'phone', 'lsPhone'));
    }


   
    public function create(Request $request)    
    {
        // dd($request->file('image_url')->guessExtension());  

        $request->validate([
            'user_name' =>  ['required', new Uppercase],
            'user_email' => 'required|email',
            'user_password' => 'required|min:6|max:100',
            'image_url' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $generatedImageName  = 'image'.time().$request->user_name.'.'.$request->image_url->extension();

        //dd($generatedImageName);

        $request->image_url->move(public_path('image'), $generatedImageName);



        // dd('this is create method');
        $user = new User();
        $user->user_name = $request->input('user_name');
        $user->user_email = $request->input('user_email'); 
        $user->user_password = bcrypt($request->input('user_password')); 
        $user->save();

        return redirect('/user');
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('users.editUser', compact('user'));
    }
    public function update($user_id, ValidationUserRequest $request)
    {

        // can use debug with command: dd('authorize called');
        // comment anything but leave command "dd('authorize called');" for me

        $data = $request->validated();


        $user = User::where('id', $user_id)
        ->update([
            'user_name' => $data->input('user_name'),
            'user_email' => $data->input('user_email'),
            'user_password' => bcrypt($data->input('user_password')),
        ]);
       
        return redirect('/user');
    }

    public function findUserById()
    {
        $users = DB::select('select * from users');

        $userName = 'John Doe1';
        return view('users.userDetail', compact('userName', 'users'));
    }


    public function delete($user_id)
    {
        User::where('user_id', $user_id)->delete();
        return redirect('/user');
    }


    /**
     * Get list of users.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @see https://laravel.com/docs/8.x/queries#retrieving-results
     */
    public function listTestData(){
        $users = DB::select('select * from users');
        // $user = DB::select("select * from users where id = :id;", ['id' => 1]);
        // $user = DB::table('users')->get();
        // $user = DB::table('users')->paginate(10);
        // $user = DB::table('users')->orderBy('id', 'desc')->get();
        // $user = DB::table('users')->where('id', 1)->first();
        // $user = DB::table('users')->where('id', 1)->value('name');
        // $user = DB::table('users')->where('id', 1)->pluck('name');
        // $user = DB::table('users')->where('id', 1)->select('name', 'email')->get();
        // $user = DB::table('users')->where('id', 1)->select('name', 'email')->first();
        // $user = DB::table('users')->where('id', 1)->select('name', 'email')->pluck('name', 'email');
        // $user = DB::table('users')->where('id', 1)->select('name', 'email')->get()->toArray();
        // $user = DB::table('users')->where('id', 1)->select('name', 'email')->get()->toJson();
        // $user = DB::table('users')->where('id', 1)->select('name', 'email')->get()->toJson(JSON_PRETTY_PRINT);
        // $user = DB::table('users')->where('id', 1)->select('name', 'email')->get()->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        // $user = DB::table('users')->where('id', 1)->select('name', 'email')->get()->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        // dd($users);

        return view('components.card', compact('users'));
    }
}
