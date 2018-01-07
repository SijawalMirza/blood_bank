<?php


namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Donor;
use App\User;
use Illuminate\Http\Request;
use Validator;

class DonorController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function create()
    {

        return "Create Method of DONOR Model.";
    }

    public function store(Request $request)
    {
        return Donor::create($request->all());
    }

    public function show($id)
    {
        return Donor::find($id);
    }

    public function edit(Donor $donor)
    {
        return "Edit Method of DONOR Model.";
    }

    public function update(Request $request, Donor $donor)
    {
        return "Update Method of DONOR Model.";
    }

    public function destroy(Donor $donor)
    {
        return "Destroy Method of DONOR Model.";
    }
}
