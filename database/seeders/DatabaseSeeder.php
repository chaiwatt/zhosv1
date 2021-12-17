<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UserPositionsTableSeeder::class);
        $this->call(UserTypesTableSeeder::class);
        $this->call(FunctionTypesTableSeeder::class);
        $this->call(PrefixTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(RoleUsersTableSeeder::class);
        $this->call(RoleModulesTableSeeder::class); 
        $this->call(ModuleTasksTableSeeder::class); 
        $this->call(Icd10sTableSeeder::class);
        $this->call(GeoGraphiesTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(AmphuresTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(OccupationsTableSeeder::class);
        $this->call(ReligionsTableSeeder::class);
        $this->call(BloodRhsTableSeeder::class);
        $this->call(BloodsTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(RoleModuleTasksTableSeeder::class);
    }
}
