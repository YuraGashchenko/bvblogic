<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TasksController extends Controller {
    public function store (Request $request) {
        echo ' hello from tasks controller.';
        $input = request->all();

        Task::create($input);

        return redirect()->back();
    }
}
?>
