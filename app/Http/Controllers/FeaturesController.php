<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function alrets()
    {
        return view('alerts', [
            "title" => "Alrets",
            "menu" => "Bootui"
        ]);
    }
    public function buttons()
    {
        return view('buttons', [
            "title" => "Buttons",
            "menu" => "Bootui"
        ]);
    }
    public function dropdowns()
    {
        return view('dropdowns', [
            "title" => "Dropdowns",
            "menu" => "Bootui"
        ]);
    }
    public function modals()
    {
        return view('modals', [
            "title" => "Modals",
            "menu" => "Bootui"
        ]);
    }
    public function popovers()
    {
        return view('popovers', [
            "title" => "Pepovers",
            "menu" => "Bootui"
        ]);
    }
    public function progresbars()
    {
        return view('progress-bar', [
            "title" => "Progres Bars",
            "menu" => "Bootui"
        ]);
    }
}
