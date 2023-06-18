<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('landing-page/index');
    }

    public function dashboardPage()
    {
        return view('dashboard/animais/index');
    }

    public function schedulesPage()
    {
        return view('dashboard/agendamentos/index', [
            'currentPage' => 'schedules',
        ]);
    }

    public function prescriptionPage()
    {
        return view('dashboard/receituario/index', [
            'currentPage' => 'prescription',
        ]);
    }
}
