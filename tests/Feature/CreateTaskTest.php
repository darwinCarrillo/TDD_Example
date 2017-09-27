<?php

namespace Tests\Feature;

use App\Task;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreateTaskTest extends TestCase
{
    use DatabaseMigrations;

//    public function user_can_create_task()
//    {
//        $user = factory(User::class)->create();
//        $this->actingAs($user);
//        $task = factory(Task::class)->raw();
//
//        $response = $this->post("/tasks", $task);
//
//        $this->get($response->headers->get("Location"))
//            ->assertSeeText($task["body"]);
//    }
//
//    public function user_can_see_create_task_page()
//    {
//        $this->get("/tasks/create")
//            ->assertStatus(200)
//            ->assertSeeText("Create a new task?");
//    }
//
//    public function user_can_see_task()
//    {
//        $task = factory(Task::class)->create();
//        $this->get("/tasks/" . $task->id)
//            ->assertStatus(200)
//            ->assertSeeText($task->body);
//    }
//
//    public function user_can_see_all_tasks()
//    {
//        $user = factory(User::class)->create();
//        $tasks = factory(Task::class, 30)->create([
//            "user_id" => $user->id
//        ]);
//
//        $this->actingAs($user);
//
//        $this->get("/tasks")
//            ->assertStatus(200)
//            ->assertSee($tasks->first()->body)
//            ->assertSee($tasks->last()->body);
//    }
//
//    public function user_can_delete_task()
//    {
//        $task = factory(Task::class)->create();
//        $response = $this->delete("/tasks/".$task->id)->assertStatus(302);
//        $this->get($response->headers->get("Location"))
//            ->assertDontSee($task->body);
//    }
}
