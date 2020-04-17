<?php

use Illuminate\Database\Seeder;
use App\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $task = new Task(['name of task' => 'Title 1']);
        $task->save();

        $task = new Task(['name of task' => 'Title 2']);
        $task->save();

        $task = new Task(['name of task' => 'Title 3']);
        $task->save();
    }
}
