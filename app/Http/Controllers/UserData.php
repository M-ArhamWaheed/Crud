<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserData extends Controller
{
    public function addUser(Request $request)
    {
        $getDataForEmail = DB::table('crud')->where('email', $request->email)->get();

        if (count($getDataForEmail) == 0) {
            if ($request->password == $request->cpassword) {
                $addData = DB::table('crud')
                    ->insert(
                        [
                            'fname' => $request->fname,
                            'lname' => $request->lname,
                            'email' => $request->email,
                            'phone_no' => $request->phone,
                            'password' => md5($request->password),
                            'cpassword' => md5($request->cpassword),
                        ]
                    );
            } else {
                echo "<script> alert('Password Not Match') </script>";
            }
        } else {
            echo "<script> alert('Email Already Exists') </script>";
        }

        if (@$addData) {
            return redirect()->route('signin');
        }

        return view('form');
    }


    public function signIn(Request $req)
    {
        $getData = DB::table('crud')
            ->where('email', '=', $req->email)
            ->where('password', '=', md5($req->password))->get();

        if (count($getData) == 0) {
            echo "<script> alert('Invalid Email or Password') </script>";
        } else {
            if ($getData) {
                $req->session()->put('key', true);
                return redirect()->route('read');
            } else {
                return redirect()->route('signin'); // Redirect to sign-in page if session is not set
            }
        }

        return view ('signin');
    }


    public function readData()
    {
        if (!session()->has('key')) {
            return redirect()->route('signin'); // Redirect to sign-in page if session is not set
        }

        $readData = DB::table('crud')->select('id', 'fname', 'lname', 'email')->get();

        return view('table', compact('readData'));
    }

    public function deleteData(string $id)
    {

        if (!session()->has('key')) {
            return redirect()->route('signin'); // Redirect to sign-in page if session is not set
        }

        $del = DB::table('crud')->where('id', $id)->delete();

        if ($del) {
            return redirect()->route('read');
        } else {
            echo "Data Not Deleted";
        }
    }
    public function view(string $id)
    {
        if (!session()->has('key')) {
            return redirect()->route('signin'); // Redirect to sign-in page if session is not set
        }

        $del = DB::table('crud')->where('id', $id)->get();

        return view('view', compact('del'));
    }


    public function updatePage(string $id)
    {
        if (!session()->has('key')) {
            return redirect()->route('signin'); // Redirect to sign-in page if session is not set
        }

        $user = DB::table('crud')->find($id);

        return view('update', compact('user'));
    }

    public function updateData(Request $request, $id)
    {
        if (!session()->has('key')) {
            return redirect()->route('signin'); // Redirect to sign-in page if session is not set
        }

        if ($request->password == $request->cpassword) {
            $user = DB::table('crud')->where('id', $id)->update(
                [
                    'fname' => $request->fname,
                    'lname' => $request->lname,
                    'email' => $request->email,
                    'phone_no' => $request->phone,
                    'password' => md5($request->password),
                    'cpassword' => md5($request->cpassword),
                ]
            );
        } else {
            echo "<script> alert('Password Not Match') </script>";
        }


        if (@$user) {
            return redirect()->route('read');
        } else {
            'Data Not UPdated';
        }
    }

    public function logout()
    {
        session()->forget('key');

        return redirect()->route('signin');
    }
}
