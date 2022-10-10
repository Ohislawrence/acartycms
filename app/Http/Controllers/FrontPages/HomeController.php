<?php

namespace App\Http\Controllers\FrontPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Coursecat;
use App\Models\Servicerequest;
use App\Models\Serivice;
use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use Illuminate\Contracts\Session\Session;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id','DESC')->paginate(3);
        $courses = Course::orderBy('id','DESC')->paginate(3);
        return view('guests.home', compact('blogs', 'courses'));
    }


    public function services()
    {
        $services = Serivice::all();
        return view('guests.services', compact('services'));
    }

    public function portfolio()
    {
        return view('guests.portfolio');
    }


    public function blogs()
    {
        $blogs = Blog::orderBy('id','DESC')->paginate(9);

        return view('guests.bloglist', compact('blogs'));
    }


    public function blogsingle($slug)
    {
        $blogs = Blog::all();
        $blog = Blog::where('slug', $slug)->first();
        views($blog)->record();
        return view('guests.singleblog', compact('blog', 'blogs'));
    }


    public function learn()
    {
        $coursecat = Coursecat::all();
        $courses = Course::orderBy('id','DESC')->paginate(9);
        return view('guests.learn', compact('courses', 'coursecat'));
    }


    public function servicerequest()
    {
        return view('guests.servicerequest');
    }


    public function servicerequestpost(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'businessname' => 'required',
            'email'=>'required|unique:roles,name',
            'phonenumber'=> 'required',
            'url' => 'required',
            'businesstype' => 'required',
            'budget' => 'required',
            'country' => 'required',
            'details' => 'required',
        ]);

        $name = $request->input('name');

        $service = Servicerequest::create([
            'name' => $request->input('name'),
            'businessname' => $request->input('businessname'),
            'email'=> $request->input('email'),
            'phonenumber'=> $request->input('phonenumber'),
            'url' => $request->input('url'),
            'businesstype' => $request->input('businesstype'),
            'budget' => $request->input('budget'),
            'country' => $request->input('country'),
            'details' => $request->input('details'),
        ]);


        return redirect()->route('thankyou.page', compact('name'));
    }

    public function thankyou()
    {
        $blogs = Blog::orderBy('id','DESC')->paginate(3);
        return view('guests.thankyou', compact('blogs'));
    }

    public function sell()
    {
        return view('guests.sell');
    }


    public function servicesdetails($slug)
    {
        $details = Serivice::where('slug', $slug)->first();
        return view('guests.servicesdetails', compact('details'));
    }

    public function learnsingle($slug)
    {
        $course = Course::where('slug', $slug)->first();
        //views($course)->record();
        return view('guests.singlecourse', compact('course'));
    }
}
