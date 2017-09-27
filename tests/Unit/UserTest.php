<?php

namespace Tests\Unit;

use App\Task;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

//    public function can_get_threads()
//    {
//        // create random threads
//        factory(Task::class, 30)->create();
//        $user = factory(User::class)->create();
//        factory(Task::class, 10)->create([
//            "user_id" => $user->id
//        ]);
//        $tasks = $user->tasks()->count();
//        $this->assertEquals(10, $tasks);
//
//    }
}
