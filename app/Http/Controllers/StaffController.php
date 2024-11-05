<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use LDAP\Result;

class StaffController extends Controller
{
    public function getStaff(){
        // return view('index');
        $objStaff = DB::table('staff')
                    -> orderBy('id','DESC')
                    -> get();
        return view('index',['objStaff'=>$objStaff]);
    }
    public function add_NewStaff(){
        return view('add_new');
    }
    public function handleInsertStaff(Request $request){
        $name = $request -> input('name');
        $gender = $request -> input('gender');
        $position = $request -> input('position');
        $number_phone = $request -> input('phone');
        $address = $request -> input('address');
        $profile = $request->file('profile');
            $path = 'upload/';
            $image = time() .'-'.$profile -> getClientOriginalName();
            $profile->move($path, $image);

        $result = DB::table('staff')
                ->insert(['name'=>$name,'gender'=>$gender,'position'=>$position,
                'phone'=>$number_phone,'address'=>$address,'profile'=>$path.$image]);
        // return $result;
        return redirect('/');
    }
    public function getDetail($id){
        $objStaff = DB::table('staff')
                    ->where('id',$id)
                    ->get();
        // return $objProduct;
        return view('detail',['objStaff'=>$objStaff]);
    }
    public function updateStaff($id){
        $objStaff = DB::table('staff')
                ->where('id',$id)
                ->get();
        return view('update',['objStaff'=>$objStaff]);
    } 
    public function handleUpdateStaff(Request $request)
    {
        $edit_id = $request->input('edit_id');
        $name = $request->input('edit_name');
        $gender = $request->input('edit_gender');
        $position = $request->input('edit_position');
        $phone = $request->input('edit_phone');
        $address = $request->input('edit_address');
        $currentProfilePath = $request->input('current_profile');

        if ($request->hasFile('profile')) {
            $profileFile = $request->file('profile');
            $imageName = time() . '-' . $profileFile->getClientOriginalName();
            $path = 'upload/' . $imageName;
            $profileFile->move('upload', $imageName);
            $profilePath = $path;
        } else {
            $profilePath = $currentProfilePath;
        }

        $result = DB::table('staff')
                ->where('id', $edit_id)
                ->update([
                'name' => $name,
                'gender' => $gender,
                'position' => $position,
                'phone' => $phone,
                'address' => $address,
                'profile' => $profilePath,
        ]);
        return redirect('/');
    }
    public function delete($id)
    {
        return view('delete',['id'=>$id]);
    }
    public function handleDelete(Request $request){
        $remove_id = $request -> input('remove_id');
        $result = DB::table('staff')
            ->where('id',$remove_id)
            ->delete();
        if($result){
        return redirect('/');
        }
    }
    public function dashboard(){
        return view('dashboard');
    }
}   
