<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Str;

class EmployeeController extends Controller
{
    //
    public function employeeList() {
        $data = [];
        $data['title'] = 'Register Employee List';
        $data['menu_active_tab'] = 'user-list';
        $data['employee'] = Employee::join('department','department.id','=','employee.department_id')
        ->join('designation','designation.id','=','employee.designation_id')
        ->orderBy('id', 'DESC')
        ->get(['employee.*','department.department_name','designation.designation_name']);
 

        return view('admin.employee.list')->with($data);
    }
    public function addEmployee(Request $request) {
        $data = [];
        $data['title'] = 'Add Employee';
        $data['menu_active_tab'] = 'add-employee';
        $data['department'] = Department::where('is_deleted', '0')->orderBy('id', 'ASC')->get();
        $data['designation'] = Designation::where('is_deleted', '0')->orderBy('id', 'ASC')->get();

        return view('admin.employee.add')->with($data);
    }
    public function storeEmployee(Request $request) {
        //dd($request);
        $rules = [
            'first_name' => 'required|string|min:1|max:255',
//            'city_name' => 'required|string|min:3|max:255',
//            'email' => 'required|string|email|max:255'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('insert')
                            ->withInput()
                            ->withErrors($validator);
        } else {
            // $data = $request->input();
         
            try {
                $data = new Employee();
        
                        if ($request->file("image") && $request->file('image')->isValid()) {

                            $image = $request->file("image");

                            $extension = $image->getClientOriginalExtension();
                            $fileName = Str::uuid() . '.' . $extension;
                            $image->move('uploads/employee', $fileName);
                            $item_url = 'uploads/employee/' . $fileName;
                //dd($item_url);
                            @unlink($data->profile_photo);
                            $data->profile_photo = $item_url;
                            //dd($data->profile_photo);
                        }
                        
                        //dd($userid);
                        $data->first_name = $request->input('first_name');
                        $data->last_name = $request->input('last_name');
                        $data->gender = $request->input('gender');
                        $data->birthdate = $request->input('birthdate');
                        $data->contact_number = $request->input('contact_number');
                        $data->email = $request->input('email');
                        $data->address = $request->input('address');
                        $data->employee_code = $request->input('employee_code');
                        $data->joining_date = $request->input('joining_date');
                        $data->salary = $request->input('salary');
                        $data->employee_status = $request->input('employee_status');
                        $data->department_id = $request->input('department_id');
                        $data->designation_id = $request->input('designation_id');
                        
                        //dd($data);
                        $data->save();
                        //dd("success");
                return redirect()->route('employee-list')->with('success', 'Record added successfully.');
            } catch (Exception $e) {
               // dd($e);
                return redirect()->route('employee-list')->with('failed', 'Record not added.');
            }
        }
    }
    public function editEmployee(Request $request, $id) {
        $data = [];
        $data['title'] = 'Edit Employee';
        $data['menu_active_tab'] = 'employee-list';
        if ($id) {
            $employee = Employee::find($id);
            
            $data['department'] = Department::where('is_deleted', '0')->orderBy('id', 'ASC')->get();
            $data['designation'] = Designation::where('is_deleted', '0')->orderBy('id', 'ASC')->get();

            if ($employee) {
                $data['employee'] = $employee;
                return view('admin.employee.edit')->with($data);
            } else {
                return redirect()->route('employee-list')->with('failed', 'Record not found.');
            }
        } else {
            return redirect()->route('employee-list')->with('failed', 'Record not found.');
        }
    }

    public function updateEmployee(Request $request, $id) {
        if ($id) {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
//                'email' => 'required',
            ]);
            $employee = Employee::find($id);
            if ($employee) {
                $employee->first_name = $request->input('first_name');
                $employee->last_name = $request->input('last_name');
                $employee->gender = $request->input('gender');
                $employee->birthdate = $request->input('birthdate');
                $employee->contact_number = $request->input('contact_number');
                $employee->email = $request->input('email');
                $employee->address = $request->input('address');
                $employee->joining_date = $request->input('joining_date');
                $employee->salary = $request->input('salary');
                $employee->employee_code = $request->input('employee_code');
                $employee->employee_status = $request->input('employee_status');
                $employee->department_id = $request->input('department_id');
                $employee->designation_id = $request->input('designation_id');
                // $employee->modified_by_id = \Auth::user()->id ? \Auth::user()->id : null;
                $employee->save();
            }
            return redirect()->route('employee-list')->with('success', 'Record Updated.');
        } else {
            return redirect()->route('employee-list')->with('failed', 'Record not found.');
        }
    }

    public function deleteEmployee($id) {
        if ($id) {
            $emp = Employee::find($id);
            if ($emp) {
                $emp->is_deleted = '1';
                //  $user->modified_by_id = \Auth::user()->id ? \Auth::user()->id : null;
                $emp->save();
            }

            return redirect()->route('employee-list')->with('success', 'Record deleted.');
        } else {
            return redirect()->route('employee-list')->with('failed', 'Record not found.');
        }
    
    }


}
