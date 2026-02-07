<?php

namespace App\Http\Controllers;


class PracticeController extends Controller
{
    public function index()
    {
        $users = [
            'Serik',
            'Aruzhan',
            'Dias',
            'Aigerim'
        ];

        return view('practice', [
            'title' => 'Users List',
            'users' => $users
        ]);
    }
}
