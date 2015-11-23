<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Telephon;

class UserController extends Controller {

    public function save(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'address'    => 'required'
        ]);

        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->address    = $request->address;

        $user->save();

	if (!empty($request->telephones)) {
            foreach ($request->telephones as $telephone) {
                $tel = new Telephon();
                $tel->telephone = $telephone;
                $tel->User_id = $user->id;
                $tel->save();
            }
        }
        return redirect()->back();
    }

    public function index (Request $request) {
        $users = User::all();

        return view('index', ['users' => $users]);
    }

    public function show($id) {
        $user = User::findOrFail($id);

        return view('show', ['user' => $user]);
    }

    public function edit($id) {
        $user = User::findOrFail($id);

        return view('edit', ['user' => $user]);
    }

    public function update($id, Request $request) {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'first_name' => 'required',
             'last_name' => 'required',
             'address'   => 'required'
        ]);

        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->address    = $request->address;

        $user->save();
        if (!empty($request->telephones)) {
            $telephones = $request->telephones;
            $i = 0;
            foreach( $user->telephones as $telephone ) {
                $telephone->telephone = $telephones[$i];
                $i++;
                $telephone->save();
            }
        }

        $request->session()->flash('flash_message', 'User successfully updated!');

        return redirect()->back();
    }

    public function destroy($id, Request $request) {
        $user = User::findOrFail($id);

        $user->delete();

        $request->session()->flash('flash_message', 'User successfully deleted!');

        return redirect()->route('user.index');
    }
}
?>
