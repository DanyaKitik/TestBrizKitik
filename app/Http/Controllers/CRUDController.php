<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumber;
use App\Models\User;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function show(){
        $users = User::with('phone_number')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return $users;
    }
    public function __invoke(){
        $users = $this->show();
        return view('show', ['users' => $users]);
    }

    public function form(){
        $data = \view('create')->render();
        return $data;
    }

    public function create(){
        $user = new User();
        $user->name = request()->get('name');
        $user->lastname = request()->get('lastname');
        $user->save();

        $phone_number = new PhoneNumber();
        $phone_number->user_id = $user->id;
        $phone_number->number = request()->get('number');
        $phone_number->save();

        $users = $this->show();
        return view('show_ajax', ['users' => $users])->render();
    }

    public function delete($id)
    {
        PhoneNumber::where('user_id',$id)->delete();
        User::where('id', $id)->delete();
        $users = $this->show();
        return view('show_ajax', ['users' => $users])->render();
    }

    public function find($id = null)
    {
        $user = User::find($id);
        $phone = PhoneNumber::find($id);

        $data = [$user, $phone];

        return response($data);
    }

    public function update($id = null)
    {
        $user = User::find($id);
        if ($user->name !== request()->get('name')){
            $user->name = request()->get('name');
            $user->save();
        }
        if ($user->lastname !== request()->get('lastname')){
            $user->lastname = request()->get('lastname');
            $user->save();
        }

        $phone_number = PhoneNumber::find($user->phone_number->id);
        if ($phone_number->number !== request()->get('number')){
            $phone_number->number = request()->get('number');
            $phone_number->save();
        }
        $users = $this->show();
        return view('show_ajax', ['users' => $users])->render();
    }
}
