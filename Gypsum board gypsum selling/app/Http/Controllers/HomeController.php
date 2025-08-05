<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        $slides = [
            [
                'image' => 'Assets/slide1.jpg',
                'title' => 'Welcome to FAJ Technical Services',
                'subtitle' => 'Your trusted partner since 2010',
            ],
            [
                'image' => 'Assets/slide2.jpg',
                'title' => 'Reliable Technical Expertise',
                'subtitle' => 'Meeting global quality standards',
            ],
            [
                'image' => 'Assets/slide3.jpg',
                'title' => 'Contact Us Anytime',
                'subtitle' => 'Call us at +971507464712',
            ],
        ];

       return view('pages.about', compact('slides'));
    }
}
