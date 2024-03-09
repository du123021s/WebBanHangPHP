<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request){
        // === search keyword
        $customers = new CustomerModel();
        if($request->search){
            // search customer by first name or last name
            $customers = $customers->where('first_name', 'LIKE', "%{$request->search}%")
                        ->orWhere('last_name', 'LIKE', "%{$request->search}%");
        }

        // === paginate
        $customers = $customers->latest()->paginate(10);
        return view('Customers.index')->with('customers', $customers);
    }


    public function store(Request $request){
        $validateData = $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'email' => 'required|email|unique:Customers',
            'phone' => 'required|numeric',
            'address' => 'required|max:50',
            'avatar' => 'image|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public');
            $validateData['avatar'] = $avatarPath;
        }

        CustomerModel::create($validateData);

        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    public function create(){
        return view('Customers.create');
    }

    public function show($id){
        $customers = CustomerModel::findOrFail($id);
        return view('Customers.show')->with('customer', $customers);
    }

    public function update(Request $request, CustomerModel $customer){
        $validateData = $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'email' => 'required|email|unique:Customers',
            'phone' => 'required|numeric',
            'address' => 'required|max:50',
            'avatar' => 'image|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public');
            $validateData['avatar'] = $avatarPath;
        }

        CustomerModel::create($validateData);
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    public function edit(CustomerModel $customer){
        return view('Customers.edit', compact('customer'));
    }

    public function destroyConfirmed($id){
        $customer = CustomerModel::findOrFail($id);
        $customer->delete();

        // Set a flash message to indicate successful deletion
        session()->flash('success', 'Customer delted successfully');
        return redirect()->route('customers.index');
    }

    public function destroy($id){
        $customer = CustomerModel::findOrFail($id);
        return view('Customers.delete', compact('customer'));
    }

}
