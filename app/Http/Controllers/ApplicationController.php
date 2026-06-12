<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::latest()->get();
        return view('applications', compact('applications'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'company_name' => 'required',
            'position' => 'required',
            'application_date' => 'required|date',
            'status' => 'required',
            'notes' => 'nullable'
        ]);

        Application::create($data);

        return redirect()->route('applications.index');
    }

    public function destroy($id)
    {
        Application::findOrFail($id)->delete();
        return back();
    }
}