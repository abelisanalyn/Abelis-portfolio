<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Analyn Ledonio Abelis',

            'title' => 'Information Technology Student',

            'email' => 'analyn112394@gmail.com',

            'phone' => '+639976853939',

            'location' => '45 Parrot street Brgy. Batasan Hills Quezon City , Metro Manila',

            'bio' => 'I am an IT student passionate about technology and software development, eager to apply my skills in real-world projects and continuously learn in the ever-evolving tech industry.',

            'profile_image' => 'https://scontent.fmnl9-7.fna.fbcdn.net/v/t39.30808-6/475199747_954871633412782_7315118375602430911_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeEuQEXLdrZdTJwlDq3GMRgP0oq4J-wmb-DSirgn7CZv4O_EA_wLmWZa84Tm2FGUgX0ipsNmOpsapdGRvUdwFAmz&_nc_ohc=kv6Jpgd6ZVIQ7kNvwG3Ab7B&_nc_oc=AdmW_5t59Z30CGlPknaHDnivKdFtwQb2a8YHotc2OAmwQMBEqdcanMea_s9oGJpfTAE&_nc_zt=23&_nc_ht=scontent.fmnl9-7.fna&_nc_gid=lJKkPMNpHHGpa_NPKG2fcA&oh=00_AfY1eFN2kKbG8phcqlm1bAxj7GigHb_cF-kOD1Q5Um7IPw&oe=68D42658',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => ['Portfolio'], // Project data

            'experience' => ['Service Crew'],// Experience data

            'education' => ['Global Reciprocal College 2nd Year'],// Education data

            'social_links' => ['itsmenovember23'], // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}