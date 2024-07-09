<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
  private $types = ['customer', 'admin', 'delivery'];
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    foreach ($this->types as $type) {
      $userType = new UserType();
      $userType->type = $type;
      $userType->save();
    }
  }
}
