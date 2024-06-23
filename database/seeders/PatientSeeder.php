<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run()
    {
        Patient::create(['name' => 'madun', 'date_of_birth' => '2002-02-01', 'address' => 'Jln mados', 'phone_number' => '0812120091891', 'email' => 'sutula@gmail.com']);
        Patient::create(['name' => 'tutung', 'date_of_birth' => '2003-09-03', 'address' => 'Jln slebew No 03', 'phone_number' => '089812121342', 'email' => 'slekmewa@gmail.com']);
    }
}