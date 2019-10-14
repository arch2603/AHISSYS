<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Illuminate\Support\Facades\DB;

//use App\Title as Title;

class UsersController extends Controller
{
    //

    protected $redirectTo = '/users-mgmnt';

    public function __construct(User $users)
    {
        //storing titles pass as a parameter from the Titles library-class and store in user_controller
        //object variable called titles;
        //$this->titles = $titles->all();
        $this->user = $users;
    }

    public function di()
    {
        //dd("test");
    }

    public function index()
    {
        $data = [];
        $data['users'] = $this->user->all();

        return view('users/index', $data);
    }

    public function newUser(Request $request, User $user)
    {
        $data = [];
        //$data ['title'] = $request->input('title');
        $data ['user_name'] = $request->input('user_name');
        $data ['first_name'] = $request->input('first_name');
        $data ['last_name'] = $request->input('last_name');
        //$data ['mobile'] = $request->input('mobile');
        //$data ['zip_code'] = $request->input('zip_code');
        //$data ['city'] = $request->input('city');
        $data ['email'] = $request->input('email');
        $data ['password'] = $request->input('password');
        //$data ['c_password'] = $request->input('c_password');

        if ($request->isMethod('post')) {
            //dd($data);
            $this->validateUserInput($request);
            $data ['password'] = bcrypt($request->input('password'));
            $user->insert($data);
            return redirect()->intended('/users-mgmnt');
        }

        //$data['titles'] = $this->titles;//from the titles Library define above
        $data['modify'] = 0;
        return view('users/form', $data);
    }


    private function validateUserInput($request)
    {
        $this->validate($request,
            [
                'user_name' => 'required',
                'first_name' => 'required | min:2',
                'last_name' => 'required | min:2',
                'email' => 'required |email| unique:users,email',
                'password' => 'required | min:8 | confirmed',
                //'password_confirmation'=> 'required| min:8',

            ]);

    }

    public function modify(Request $request, User $user, $user_id)
    {
        $data = [];

        $data ['user_name'] = $request->input('user_name');
        $data ['first_name'] = $request->input('first_name');
        $data ['last_name'] = $request->input('last_name');
        $data ['email'] = $request->input('email');
        $data ['password'] = $request->input('password');
        //$data ['c_password'] = $request->input('c_password');

        if ($request->isMethod('post')) {
            //dd("Line 94 test");
            $this->validateUserInput($request);

            $user_data = $this->user->find($user_id);
            //checking for null objects when save button is hit and
            //user already exists
            //dd(var_dump($user_data));
            if (!is_null($user_data) && !(User::where($user_id, Input::get($user_id))->first())) {
                //dd('Line 102 UserController');
                $user_data->user_name = $request->input('user_name');
                $user_data->first_name = $request->input('first_name');
                $user_data->last_name = $request->input('last_name');
                $user_data->email = $request->input('email');
                $user_data->password = bcrypt($request->input('password'));
                $user_data->save();
                //return redirect()->intended('/users-mgmnt');
            } else {
                //dd("Line 114 test");
                return redirect()->intended('/users-mgmnt');
            }
        }

        return view('users/form', $data);
    }

    public function show($user_id)
    {
        $data = [];

        $data['user_id'] = $user_id;
        $data['modify'] = 1;
        $user_data = $this->user->find($user_id);
        $data ['user_name'] = $user_data->user_name;
        $data ['first_name'] = $user_data->first_name;
        $data ['last_name'] = $user_data->last_name;
        $data ['email'] = $user_data->email;
        $data ['password'] = $user_data->password;

        return view('users/form', $data);
    }

    /**
     * Search user from database base on some specific constraints
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $data = [
            'user_name' => $request['user_name'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email']
        ];
        //dd($request['u_fname']);
        $users = $this->doSearchingQuery($data);
//        dd($users);
        return view('users/index', ['users' => $users, 'searchattributes' => $data]);
    }


    private function doSearchingQuery($constraints)
    {
        $query = User::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where($fields[$index], 'like', '%' . $constraint . '%');
            }

            //dd( $constraints);
            //dd($constraint);
            $index++;
        }
        //dd($query);
        return $query->paginate(5);
    }


    public function destroy($user_id)
    {
        User::where('id', $user_id)->delete();
        return redirect()->intended('/users-mgmnt');
    }

//    public function show()
//    {
//        return redirect()->intended('/users-mgmnt');
//
//    }

}
