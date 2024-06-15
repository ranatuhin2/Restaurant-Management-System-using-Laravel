<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\People;

class DashboardController extends Controller
{
    /*** Dashboard ***/
    public function dashboard()
    {
        $book = new Booking();
        $book = Booking::count('id');
        $people = new People();
        $people = People::count('id');
        return view('admin.pages.dashboard.index')->with(['book'=>$book,'people'=>$people]);
    }
}
