<?php

class TeamTableSeeder extends Seeder {

  public function run()
  {
    DB::table('teams')->delete();
    Team::create($this->team('Sparta Bound', 'Fred Williams'));
  }

  private function team($name, $owner) 
  {
    return array('name' => $name, 'owner' => $owner);
  }

}
