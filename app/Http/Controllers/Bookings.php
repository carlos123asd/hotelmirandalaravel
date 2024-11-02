<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Bookings extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->merge([
            "guest" => $user->name,
            "specialrequest" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae tempora animi modi nisi, quos asperiores maxime molestiae similique, cum eum exercitationem veritatis. Facilis est alias soluta ut distinctio reprehenderit quae"
        ]);
        //EVALUAR DISPONIBLIDAD OTRA VEZ
        Booking::create($request->all());
        Session::flash('message', '¡Thank you for your request!\n Wehave received it correctly.\n
                        Someone from our Team will get\n
                        back to you very soon.\nThe Miranda Hotel');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
