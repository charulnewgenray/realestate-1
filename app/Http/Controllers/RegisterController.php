<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::check()){
			$userId =  Auth::user()->id;
			$personalInformation = DB::table('customer_personal_information as cpi')
				->where('id','=',$userId)
				->first();
			return view('register.register',compact('personalInformation'));
		}else{
			$personalInformation = NULL;
		}
		return view('register.register',compact('personalInformation'));


	}

	public function getUserId($email){
		$user = DB::table('users')->select('id')
				->where('email','=','charultyagi@newgenray.com')
				->first();
		if(count($user)>0){
			$userId = $user->id;
		}else{
			$userId = 0;
		}
		return $userId;
	}
	public function postRegister(){
		parse_str(Input::get('form'),$formdata);
//		var_dump($formdata['personal-information']);
//		die;
//		var_dump(json_decode($formdata['personal-information'], true));
//		die;
//		$personalInformation = DB::table('customer_personal_information')->insert(
//			array('application_no'=>'1','first_name' => $formdata['personal-information']['first_name'], 'middle_name' => $formdata['personal-information']['middle_name'],'last_name'=>$formdata['personal-information']['last_name'],'email'=>$formdata['personal-information']['email']
//		,'dob'=>$formdata['personal-information']['dob'],'social_security'=>$formdata['personal-information']['social_security'],'driver_licence'=>$formdata['personal-information']['driver_licence'],'past_name'=>$formdata['personal-information']['past_name'],
//			'home_phone'=>$formdata['personal-information']['home_phone'],'cell_phone'=>$formdata['personal-information']['cell_phone'])
//		);
		$formdata['personal-information']['application_no'] = 1;
		$personalInformation = DB::table('customer_personal_information')->insert(
			$formdata['personal-information']
		);
//		$occupantsInformation = DB::table('customer_occupants_information')->insert(
//			array('application_no'=>'1','occupant_name' => $formdata['occupants-information']['occupant_name'],'occupant_dob' => $formdata['occupants-information']['occupant_dob'],'occupant_dob' => $formdata['occupants-information']['occupant_relationship'])
//		);


	}

	public function login(){
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')),true))
		{
			$userApplications = DB::table('customer_property_application')->where('user_id','=',Auth::id())->lists('applicant_email','application_no');
			return ['status'=> 'success','message' => 'Successfully logged in','data' => $userApplications];
		}
		return ['status'=> 'failed','message' => 'email not found'];
	}

	public function signup(){
		$userid = User::where('email','=',Input::get('email'))->pluck('id');
		if($userid){
			return ['status'=> 'failed','message' => 'Email already registered.'];
		}
		else{
			$user = User::create(['name'=> Input::get('name'),'email'=> Input::get('email'),'password'=> Hash::make(Input::get('password'))]);
			$roleid = DB::table('roles')->where('name','=','Customer')->pluck('id');
			DB::table('assigned_roles')->insert(
				['user_id' => $user->id , 'role_id' => $roleid]
			);
			if($user->id){
				Auth::loginUsingId($user->id);
				if(Auth::check())
					return ['status'=> 'success','message' => 'Email / Password do not Match'];
				else
					return ['status'=> 'failed','message' => 'Could Not login please try again'];
			}
			else{
				return ['status'=> 'failed','message' => 'email not found'];
			}
		}
	}

	public function show($id){
		if(Auth::check()){
			$userId =  Auth::user()->id;
			$personalInformation = DB::table('customer_personal_information')->where('application_no','=',$id)->first();
			return view('register.register',compact('personalInformation'));
		}else{
			$personalInformation = NULL;
		}
		return view('register.register',compact('personalInformation'));
	}
}
