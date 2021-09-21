<?php

namespace App\Respositories;

interface CustomerRepositoryInterface
{
    public function all();

    public function findById($customerId);

    public function update($customerId);

    public function destroy($customerId);
}
