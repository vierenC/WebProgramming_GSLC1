@extends('main')
        
    @section('content')
        <div class="about_section bg-gray-900 flex">
            <div class="about_section_content text-white flex items-center justify-center">
                <div class="text_content">
                    <h1 class="text1 font-bold font-serif">Hello,</h1>
                    <h2 class="text2 font-serif font-light">I'm Vika Valencia</h2>
                </div>
            </div>
            <div class="foto">
                <img src="{{url('/images/fotovika.jpg')}}" alt="">
            </div>
        </div>
        <div class="about_me_section">
            <div class="bg-gray-700 sm:py-24 py-10">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto">
                        <h2 class="text2 font-bold font-serif text-white text-center">About Me</h2>
                        <p class="text3 font-serif font-light py-6 text-lg text-white text-center">You can call me Vika. I have great interest in programming and statistics. I'm responsible and accountable, also great at teamwork and have excellent communication skill. Quite fluent in English and Indonesian. I'm striving for oppotunities and new experience.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="profile_section bg-gray-500">
            <div class="profile_section_content">
                <div class="overflow-hidden shadow flex sm:p-10 p-5">
                    <div class="detail text3 items-center">
                        <div class="bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6 rounded-t-2xl">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">Full name</dt>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">Vika Valencia Susanto</dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">Gender</dt>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">Female</dd>
                        </div>
                        <div class="bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">Date of birth</dt>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">13 April 2003</dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">Place of birth</dt>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">Belitung, Indonesia</dd>
                        </div>
                        <div class="bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">Email address</dt>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">valenciavika1@gmail.com</dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6 rounded-b-2xl">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">Phone number</dt>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">+62 821 7834 8389</dd>
                        </div>
                    </div>
                    <div class="text3 skills_hobbies sm:pl-10 h-full pl-5 self-center">
                        <div class="bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-4 sm:gap-4 sm:px-6 rounded-t-2xl">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">Soft Skills</dt>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">
                                <p>Time management</p>
                            </dd>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">
                                <p>Responsible</p>
                            </dd>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">
                                <p>Accountable</p>
                            </dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-4 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">Hard Skills</dt>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">
                                <p>C</p>
                            </dd>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">
                                <p>Python</p>
                            </dd>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">
                                <p>HTML</p>
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-4 sm:gap-4 sm:px-6 rounded-b-2xl">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">Hobbies</dt>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">
                                <p>Read</p>                              
                            </dd>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">
                                <p>Eat</p> 
                            </dd>
                            <dd class="font-serif text-gray-900 sm:mt-0 flex items-center">
                                <p>Sleep</p>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="education_section bg-white">
            <h2 class="text2 py-5 font-bold font-serif text-gray-900 text-center">Education</h2>
            <div class="flex justify-center mb-10">
                <div class="education text3 overflow-hidden bg-white shadow rounded-2xl">
                    <div class="border-t">
                        <dl>
                            <div class="education bg-white px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6 text-gray-900">
                                <dt class=" font-serif"><p>Binus University</p>
                                <p>Computer Science & Statistics</p></dt>
                                <dd class="font-serif flex justify-end items-center">2020 - 2024</dd>
                            </div>
                        </dl>
                    </div>
    
                    <div class="px-4 sm:py-5 py-3 sm:px-6">
                        <h3 class="font-semibold font-serif leading-6 text-gray-900 text-lg text3">Favourite Course</h3>
                    </div>
                    <div class="border-t">
                        <dl>
                            <div class="education bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                                <dt class="font-serif font-medium text-gray-500 flex items-center">2020, Odd Semester</dt>
                                <dd class="font-serif text-gray-900 flex item-center">Algorithm and Programming</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                                <dt class="font-serif font-medium text-gray-500 flex items-center">2020, Even Semester</dt>
                                <dd class="font-serif text-gray-900 flex item-center ">Data Structure</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">2021, Odd Semester</dt>
                                <dd class="font-serif text-gray-900 flex item-center ">Object Oriented Programming</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">2021, Even Semester</dt>
                                <dd class="font-serif text-gray-900 flex item-center ">Database System</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">2022, Odd Semester</dt>
                                <dd class="font-serif text-gray-900 flex item-center ">Computer Network</dd>
                            </div>
                            <div class="education bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-gray-500 flex items-center">2022, Even Semester</dt>
                                <dd class="font-serif text-gray-900 flex item-center">Web Programming</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </body>
    @endsection
