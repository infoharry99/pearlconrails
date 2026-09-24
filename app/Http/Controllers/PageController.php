<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the Homepage
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * Display About Pearlcon Rail
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display Services & Solutions
     */
    public function services(): View
    {
        return view('pages.services');
    }

    /**
     * Display Products & Sectors
     */
    public function products(): View
    {
        return view('pages.products');
    }

    /**
     * Display Why Us / Advantages
     */
    public function whyUs(): View
    {
        return view('pages.why-us');
    }

    /**
     * Display Clients & Global Reach
     */
    public function clients(): View
    {
        return view('pages.clients');
    }

    /**
     * Display Contact & Sourcing Enquiry Form
     */
    public function contact(): View
    {
        return view('pages.contact');
    }
}
