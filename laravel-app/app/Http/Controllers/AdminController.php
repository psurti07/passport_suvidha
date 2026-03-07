<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $normalcustlist = Customer::getnormalcustdata()->reverse();
        $normalleadlist = Customer::getnormalleaddata()->reverse();
        $normal36plist = Customer::getnormal36pdata()->reverse();
        $normal60plist = Customer::getnormal60pdata()->reverse();

        $normalcustlabel = $normalcustlist->map(fn($r) => $r->recday.'-'.$r->recmonth);
        $normalcustdata = $normalcustlist->pluck('totaluser');

        $normalleadlabel = $normalleadlist->map(fn($r) => $r->recday.'-'.$r->recmonth);
        $normalleaddata = $normalleadlist->pluck('totaluser');

        $normal36plabel = $normal36plist->map(fn($r) => $r->recday.'-'.$r->recmonth);
        $normal36pdata = $normal36plist->pluck('totaluser');

        $normal60plabel = $normal60plist->map(fn($r) => $r->recday.'-'.$r->recmonth);
        $normal60pdata = $normal60plist->pluck('totaluser');


        return view('admin.dashboard', compact('normalcustlabel', 'normalcustdata', 'normalleadlabel', 'normalleaddata', 'normal36plabel', 'normal36pdata', 'normal60plabel', 'normal60pdata'));
    }

    public function tatkalDashboard()
    {
        $tatkalcustlist = Customer::gettatkalcustdata()->reverse();
        $tatkalleadlist = Customer::gettatkalleaddata()->reverse();
        $tatkal36plist = Customer::gettatkal36pdata()->reverse();
        $tatkal60plist = Customer::gettatkal60pdata()->reverse();

        $tatkalcustlabel = $tatkalcustlist->map(fn($r) => $r->recday.'-'.$r->recmonth);
        $tatkalcustdata = $tatkalcustlist->pluck('totaluser');

        $tatkalleadlabel = $tatkalleadlist->map(fn($r) => $r->recday.'-'.$r->recmonth);
        $tatkalleaddata = $tatkalleadlist->pluck('totaluser');

        $tatkal36plabel = $tatkal36plist->map(fn($r) => $r->recday.'-'.$r->recmonth);
        $tatkal36pdata = $tatkal36plist->pluck('totaluser');

        $tatkal60plabel = $tatkal60plist->map(fn($r) => $r->recday.'-'.$r->recmonth);
        $tatkal60pdata = $tatkal60plist->pluck('totaluser');

        return view('admin.tatkal_dashboard', compact('tatkalcustlabel', 'tatkalcustdata', 'tatkalleadlabel', 'tatkalleaddata', 'tatkal36plabel', 'tatkal36pdata', 'tatkal60plabel', 'tatkal60pdata'));
    }
} 