<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Task extends Controller
{
    public function getIndex()
    {
        echo "Task";
    }
}
