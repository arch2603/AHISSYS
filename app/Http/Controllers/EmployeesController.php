<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Employees as Employees;
use App\EmployeeDetails as Emp_Details;

use App\Title as Title;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class EmployeesController extends Controller
{
    //
    protected $redirectTo = '/emps-mgmnt';

    public function __construct(Employees $employees, Emp_Details $emp_type, Emp_Details $emp_mstatus, Emp_Details $gen)
    {
        //storing titles pass as a parameter from the Titles library-class and store in user_controller
        //object variable called titles;
        //$this->titles = $titles->all();
        $this->employees = $employees;
        $this->emp_types = $emp_type->employee_types();
        $this->emp_mstatus = $emp_mstatus->employee_martial_status();
        $this->emp_gender = $gen->employee_gender();
    }

    public function di()
    {
        //dd("test");
        dd($this->emp_mstatus);
    }

    public function index()
    {
        $data = [];
        $data['employees'] = $this->employees->all();
        //dd($data);
        return view('employees/index', $data);

    }

    public function newEmployee(Request $request, Employees $employee)
    {
        $data = [];
        $data ['emp_number'] = $request->input('emp_no');
        $data ['emp_fname'] = $request->input('emp_fname');
        $data ['emp_lname'] = $request->input('emp_lname');
        $data ['emp_onames'] = $request->input('emp_onames');
        $data ['emp_address'] = $request->input('emp_address');
        $data ['emp_npf'] = $request->input('emp_npf');
        $data ['emp_email'] = $request->input('emp_email');
        $data ['emp_type'] = $request->input('emp_type');
        $data ['emp_gender'] = $request->input('emp_gender');
        $data ['emp_dob'] = $request->input('emp_dob');
        $data ['emp_mstatus'] = $request->input('emp_mstatus');
        $data ['emp_division'] = $request->input('emp_division');
        $data ['emp_position'] = $request->input('emp_position');


//        if($request->isMethod('post'))
//        {
//            //dd($data);
//            $this->validate(
//                $request,
//                [
//                    'user_name' => 'required | min:6',
//                    'name' => 'required | min:2',
//                    'email'=> 'required |email| unique:users,email',
//                    'password'=> 'required | confirmed | min:8',
//                    'password_confirmation'=> 'required| min:8',
//
//                ]
//            );
//            $employee->insert($data);
//            return redirect('employees');
//        }

        //$data['titles'] = $this->titles;//from the titles Library define above
        $data['emp_gender'] = $this->emp_gender;
        $data['emp_types'] = $this->emp_types;
        $data['emp_mstatus'] = $this->emp_mstatus;
        $data['modify'] = 0;
        return view('employees/form', $data);
    }
    public function employeeTest( Request $request)
    {
        $data = [];
        $data = $request->all();
//        $data ['emp_number'] = $request->input('emp_no');
//        $data ['emp_fname'] = $request->input('emp_fname');
//        $data ['emp_lname'] = $request->input('emp_lname');
       /* $data ['emp_no'] = $employee->emp_no;
        $data ['emp_fname'] = $employee->emp_fname;
        $data ['emp_lname'] = $employee->emp_lname;*/
       dd($data);
        $data['modify'] = 1;
        $file = $request->file('image');
        $filename = $data ['emp_fname'] . '-' . $data ['emp_lname'] . '.jpg';
        if($file){
            Storage::disk('local')->put($filename, File::get($file));
        }
        //return redirect()->route('employees');
        return view('employees/test', $data);
    }


    public function modify(Request $request, Employees $employee)
    {
        $data = [];

        $data ['emp_number'] = $request->input('emp_no');
        dd($data ['emp_number'] );
        $data ['emp_fname'] = $request->input('emp_fname');
        $data ['emp_lname'] = $request->input('emp_lname');
        $data ['emp_onames'] = $request->input('emp_onames');
        $data ['emp_address'] = $request->input('emp_address');
        $data ['emp_npf'] = $request->input('emp_npf');
        $data ['emp_email'] = $request->input('emp_email');
        $data ['emp_type'] = $request->input('emp_type');
        $data ['emp_gender'] = $request->input('emp_gender');
        $data ['emp_dob'] = $request->input('emp_dob');

        //$data ['emp_mstatus'] = $request->input('emp_mstatus');
        $data ['emp_division'] = $request->input('emp_division');
        $data ['emp_position'] = $request->input('emp_position');
        $file = $request->file('image');
        $filename = $data['emp_fname'] . '-' . $data['emp_number'] . '.jpg';
        if($file){
            Storage::disk('local')->put($filename, File::get($file));
        }


//        if($request->isMethod('post'))
//        {
//            //dd($data);
//            $this->validate(
//                $request,
//                [
//                    'user_name' => 'required | min:6',
//                    'name' => 'required | min:2',
//                    'email'=> 'required |email',
//                    'password'=> 'required | confirmed | min:8',
//                    'password_confirmation'=> 'required| min:8',
//
//                ]
//            );
//
//
//
//            $user_data = $this->user->find('$user_id');
//            //checking for null objects when save button is hit and
//            //user already exists
//            if(!is_null($user_data)){
//
//                $user_data->user_name = $request->input('user_name');
//                $user_data->name = $request->input('name');
//                $user_data->email = $request->input('email');
//                $user_data->password = $request->input('password');
//
//                $user_data->save();
//            }else{
//                return redirect('users');
//            }
            //dd($user_id);
//
//
//            return redirect('users');
//        }

        //$data['titles'] = $this->titles;//from the titles Library define above
        $data['emp_gender'] = $this->emp_gender;
        $data['emp_types'] = $this->emp_types;
        $data['emp_mstatus'] = $this->emp_mstatus;
        return redirect()->route('employees');
        //return view('employees/form', $data);
    }

    public function getEmployeeImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }

    public function show($emp_id)
    {
        $emp_data  = new stdClass();
        $data = []; //$data['emp_id'] = $emp_id;
        $emp_data = $this->employees->find($emp_id);
        $data['employees'][] = $emp_data;
        return view('employees/view', $data);
    }

    /**
     * Search user from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $data = [
            'emp_fname' => $request['emp_fname'],
            'emp_lname' => $request['emp_lname'],
            'emp_email' => $request['emp_email']
        ];
        //dd($data);
        $employees = $this->doSearchingQuery($data);
        return view('employees/index', ['employees' => $employees, 'search_vals' => $data]);
    }


    private function doSearchingQuery($constraints) {
        $query = Employees::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }
            //dd($constraint);
            $index++;
        }
        //dd($query);
        return $query->paginate(5);
    }

}
