<?php

namespace App\Respositories;

use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    public  function  all(){
        return Customer::orderBy('name')
            ->where('active',1)
            ->with('user')
            ->get()
            ->map->format();
    }

    public function findById($customerId){
        return Customer::where('id',$customerId)
            ->where('active',1)
            ->with('user')
            ->firstOrFail()
            ->format();
    }

    public function update($customerId){
        $customer = Customer::where('id',$customerId)
            ->firstOrFail();

        $customer->update(request()->only('name'));
    }

    public function destroy($customerId){
        Customer::where('id',$customerId)
            ->delete();

    }
//    public function format($customer){
//        return [
//            'customer_id' => $customer->id,
//            'name' => $customer->name,
//            'created_by' => $customer->user->email,
//            'last_updated' => $customer->updated_at->diffForHumans(),
//            'created_at' => $customer->created_at,
//        ];
//    }
}
