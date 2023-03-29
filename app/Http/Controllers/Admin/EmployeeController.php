<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index(){	
		$data['employees'] = Employee::orderBy('id', 'ASC')->paginate(10);
		return view('admin.employees.index', $data);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/

   	public function create(){
		return view('admin.employees.create');
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/

    public function store(Request $request){
		$request->validate([
		'employee_id' => 'required',
		'name' => 'required',
        'job_profile' => 'required',
        'total_exp' => 'required',
		'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'joining_date' => 'required',
		'salary' => 'required',
        'description' => 'required',
		'dob' => 'required',
		'status' => 'required'
		]);
		$employees = new Employee;
		$employees->employee_id = $request->employee_id;
		$employees->name = $request->name;
		$employees->job_profile = $request->job_profile;
		$employees->total_exp = $request->total_exp;
		$fileName = time() . '.' . $request->photo->getClientOriginalExtension();
		$request->photo->move(public_path('/uploads/employees'), $fileName);
		$employees->photo = $fileName;
        $employees->joining_date = $request->joining_date;
        $employees->salary = $request->salary;
        $employees->description = $request->description;
        $employees->dob = $request->dob;
		$employees->status = $request->status;
		$employees->save();
		return redirect()->route('employeesList')->with('success', 'Employee has been created successfully.');
	}

		/**
		 * Display the specified resource.
		 *
		 * @param  \App\Category  $product
		 * @return \Illuminate\Http\Response
		 */

		public function edit($id){
			$employees = Employee::find($id);
			return view('admin.employees.edit', compact('employees'));
		}

			/**
			 * Update the specified resource in storage.
			 *
			 * @param  \Illuminate\Http\Request  $request
			 * @param  \App\Category  $product
			 * @return \Illuminate\Http\Response
			 */	
				
		public function update($id ,Request $request){
			$request->validate([
				'employee_id' => 'required',
                'name' => 'required',
                'job_profile' => 'required',
                'total_exp' => 'required',
                'joining_date' => 'required',
                'salary' => 'required',
                'description' => 'required',
                'dob' => 'required',
                'status' => 'required'
				]);
                $employees = Employee::find($id);
				if ($request->photo != '') {
                    $path = public_path() . '/uploads/employees/';
                    //code for remove old file
                    if ($employees->photo != '' && $employees->photo != null) {
                    $file_old = $path . $employees->photo;
                    if (file_exists($file_old)) {
                    unlink($file_old);
                    }}
                    //upload new file
                    if(!empty( $request->photo)){
                    $fileName = time() . '.' . $request->photo->getClientOriginalExtension();
                    $request->photo->move(public_path('uploads/employees'), $fileName);
                    $employees->photo = $fileName;
                    }}
                $employees->employee_id = $request->employee_id;
                $employees->name = $request->name;
                $employees->job_profile = $request->job_profile;
                $employees->total_exp = $request->total_exp;
                $employees->joining_date = $request->joining_date;
                $employees->salary = $request->salary;
                $employees->description = $request->description;
                $employees->dob = $request->dob;
                $employees->save();		
				return redirect()->route('employeesList')->with('success', 'Employee Has Been updated successfully');
		}
			/**
			* Remove the specified resource from storage.
			*
			* @param  \App\Category  $product
			* @return \Illuminate\Http\Response
			*/

		public function destroy($id){
			$employees = Employee::find($id);
			$employees->delete();
			return redirect()->route('employeesList')->with('success', 'Employee has been deleted successfully');
		}

   		 public function employee_status($id){
			$employees = Employee::find($id);
			if ($employees->status == 1) {
				$employees->status = 0;
			} else {
				$employees->status = 1;
			}
			$employees->save();
			return redirect()->route('employeesList')->with('success', 'Employee has been Status successfully');
		}

}
