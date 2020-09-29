<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pos-min</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<!--heading_area start-->
<section id="section-1">
    <header class="heading_area">
        <div class="banner_area pb-16" style="background-image: url(src/img/people_service_1.jpg)">
            <!--nav section-->
            <nav class="desktop-nav invisible lg:visible md:visible">
                <div class="flex nav_section pt-5">
                    <div class="logo_area w-1/4 mt-2">
                        <a class="pt-10"><img src="src/img/pos.png" class="w-1/2" alt=""></a>
                    </div>
                    <div id="acitve_feature" class="menu_area w-2/4 text-casablanca-500  capitalize pt-5">
                        <ul class="inline-block flex justify-center">
                            <li><a href="#section-1" class="flex mb-2">home</a></li>
                            <li><a href="#section-2" class="flex mb-2  ">features</a></li>
                            <li><a href="#section-3" class="flex mb-2  ">Docs</a></li>
                            <li><a href="#section-4" class="flex mb-2 uppercase">faq</a></li>
                        </ul>
                    </div>
                    <div class="logIn_area w-1/4 flex justify-end ">
                        <div class="login_button mt-2">
                            <a href="{{route('login')}}" title="Login"
                               class="bg-casablanca-500 stic block border-2 border-transparent duration-500 ease-in-out hover:bg-transparent hover:border-casablanca-500 hover:text-casablanca-500 lg:px-5 lg:py-4 md:px-5 md:py-4 rounded sm:px-4 sm:py-3 text-casablanca-900 transition uppercase sm:text-xs md:text-sm lg:text-lg"
                               style="margin-right: 44px;">login</a>
                        </div>
                    </div>
                </div>
            </nav>
            {{--            humburger menu--}}
            <div class="nav-container visible lg:invisible md:invisible" tabindex="0">
                <div class="nav-toggle animate-bounce"></div>
                <nav class="nav-items">
                    <a class="nav-item" href="#section-1">Home</a>
                    <a class="nav-item" href="#section-2">Features</a>
                    <a class="nav-item" href="#section-3">Docs</a>
                    <a class="nav-item uppercase" href="#section-4">faq</a>
                    <div class="login_button mt-2">
                        <a href="{{route('login')}}"
                           class="bg-casablanca-500 block flex justify-center py-4 rounded stic text-casablanca-900 transition uppercase w-full"
                           style="margin-right: 44px;">login</a>
                    </div>
                </nav>
            </div>
            {{--            for responsive--}}
            <div class="responsive-img md:invisible lg:invisible visible">
                <a href="http://localhost:63342/laravelmix/index.html" class="pt-10"><img src="src/img/pos.png"
                                                                                          class="w-1/2" alt=""></a>
            </div>

            <div class="container mx-auto">
                <div class="banner_wrapper lg:pt-40 md:pt-24">
                    <!--heading section-->
                    <div class="heading_section">
                        <h1 class="lg:pt-0 lg:text-6xl md:pt-0 md:text-3xl pt-16 sm:text-3xl text-2xl text-casablanca-500 text-center">
                            Point Of Sale (POS)<br/>
                            <span class="text-center block">Minimal Version</span>
                        </h1>
                        <p class="lg:text-sm md:text-sm sm:text-sm text-casablanca-600 text-center text-sm text-xs">
                            Kodeeo-POS-Min is a PHP(Laravel) based web application that allows you to manage your stock
                            and sales. Application has Easy POS system for faster billing.</p>
                    </div>
                    <!--section button-->
                    <div class="section_button  mt-10 justify-center flex">
                        <a href="{{route('register')}}"
                           class="bg-transparent block border-2 border-casablanca-500 duration-500 hover:bg-casablanca-500 hover:text-casablanca-900 lg:mt-5 lg:px-5 lg:py-5 md:mt-3 md:px-3 md:py-3 mt-5 px-5 py-3 rounded sm:mt-2 sm:px-2 sm:py-2 text-casablanca-500 transition uppercase">Register
                            for free</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>
<!--heading_area end-->
<!--  features section start-->
<section id="section-2">
    <div class="features_section pb-20">
        <div class="container mx-auto">
            <div class="features_heading lg:pt-20 lg:px-0 md:pt-20 md:px-0 pt-5 px-8">
                <h1 class="flex font-bold justify-center lg:text-4xl md:text-4xl text-2xl text-whiteblue">Whats
                    included? </h1>
                <p class="flex justify-center lg:ml-0 md:ml-0 ml-4 text-seagull-700 text-sm">Everything you need to
                    schedule and monitor your background jobs without writing any code.</p><span
                    class="flex justify-center text-sm text-seagull-700">  Focus on your application, and we will handle the scheduling part.</span>
            </div>
            <div class="features flex grid lg:grid-cols-3 md:grid-cols-2 mt-10 sm:grid-cols-1">
                <div class="features_item px-5 py-5">
                    <div class="features_ico">
                        <svg class="bg-whiteblue float-left lg:mt-0 md:mt-0 mt-3 px-3 py-3 rounded-lg text-seagull-100"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="30%"
                             width="30%">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="flex">
                        <div class="f_item_article pl-5">
                            <h1 class="text-whiteblue text-2xl font-bold">Job scheduling</h1>
                            <p class="text-seagull-700">Schedule jobs by using any time interval or cron expression.</p>
                        </div>
                    </div>
                </div>
                <div class="features_item px-5 py-5">
                    <div class="features_ico">
                        <svg class="bg-whiteblue float-left lg:mt-0 md:mt-0 mt-3 px-3 py-3 rounded-lg text-seagull-100"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="30%"
                             width="30%">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="flex">
                        <div class="f_item_article pl-5">
                            <h1 class="text-whiteblue text-2xl font-bold">Job scheduling</h1>
                            <p class="text-seagull-700">Schedule jobs by using any time interval or cron expression.</p>
                        </div>
                    </div>
                </div>
                <div class="features_item px-5 py-5">
                    <div class="features_ico">
                        <svg class="bg-whiteblue float-left lg:mt-0 md:mt-0 mt-3 px-3 py-3 rounded-lg text-seagull-100"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="30%"
                             width="30%">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="flex">
                        <div class="f_item_article pl-5">
                            <h1 class="text-whiteblue text-2xl font-bold">Job scheduling</h1>
                            <p class="text-seagull-700">Schedule jobs by using any time interval or cron expression.</p>
                        </div>
                    </div>
                </div>
                <div class="features_item px-5 py-5">
                    <div class="features_ico">
                        <svg class="bg-whiteblue float-left lg:mt-0 md:mt-0 mt-3 px-3 py-3 rounded-lg text-seagull-100"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="30%"
                             width="30%">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="flex">
                        <div class="f_item_article pl-5">
                            <h1 class="text-whiteblue text-2xl font-bold">Job scheduling</h1>
                            <p class="text-seagull-700">Schedule jobs by using any time interval or cron expression.</p>
                        </div>
                    </div>
                </div>
                <div class="features_item px-5 py-5">
                    <div class="features_ico">
                        <svg class="bg-whiteblue float-left lg:mt-0 md:mt-0 mt-3 px-3 py-3 rounded-lg text-seagull-100"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="30%"
                             width="30%">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="flex">
                        <div class="f_item_article pl-5">
                            <h1 class="text-whiteblue text-2xl font-bold">Job scheduling</h1>
                            <p class="text-seagull-700">Schedule jobs by using any time interval or cron expression.</p>
                        </div>
                    </div>
                </div>
                <div class="features_item px-5 py-5">
                    <div class="features_ico">
                        <svg class="bg-whiteblue float-left lg:mt-0 md:mt-0 mt-3 px-3 py-3 rounded-lg text-seagull-100"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="30%"
                             width="30%">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="flex">
                        <div class="f_item_article pl-5">
                            <h1 class="text-whiteblue text-2xl font-bold">Job scheduling</h1>
                            <p class="text-seagull-700">Schedule jobs by using any time interval or cron expression.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--features_section end-->
</section>
<!--work_section start-->
<section id="section-3">
    <div class="work_section pt-5 " style="background-image: url(src/img/work_section_2.jpg);">
        <div class="container mx-auto">
            <div class="work_wrapper">
                <div class="work_heading">
                    <h1 class="flex font-bold justify-center lg:pb-1 lg:text-4xl mb-5 md:pb-1 md:text-2xl text-2xl text-atlantis-500 text-seagull-500">
                        How does it work?</h1>
                </div>
                <div class=" work_section_1 overflow-hidden ">
                    <div
                        class="lg:float-left lg:pb-0 lg:pl-20 lg:w-1/2 md:pb-0 md:pl-20 md:w-1/2 pb-4 pl-10 sm:float-none work_article">
                        <div class="article_part lg:py-10 md:py-4">
                            <h1 class="bold lg:py-2 lg:text-3xl md:text-2xl text-atlantis-500">Job Scheduler</h1>
                            <p class="text-atlantis-700">Do you want to automate tasks but don't want to handle all
                                the</p>
                            <span class="text-atlantis-700">complicated job scheduling part?</span>
                        </div>
                        <div class="article_items lg:pb-10 md:pb-3">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     height="50px" width="50px">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="article_items lg:pb-10 md:pb-3">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     height="50px" width="50px">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="article_items lg:pb-10 md:pb-3">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     height="50px" width="50px">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:w-1/2 work_img">
                        <div class="flex lg:pt-16 lg:w-3/4 pt-5 pb-5 w-3/4 work_img_wrapper">
                            <img class="rounded-lg" src="src/img/sample.png" alt="">
                        </div>
                    </div>
                </div>
                <!--            ===================================work_section_2=========-->
                <div class=" work_section_2 overflow-hidden ">
                    <div
                        class="lg:float-right lg:pb-0 lg:pl-20 lg:w-1/2 md:pb-0 md:pl-20 md:w-1/2 pb-4 pl-10 sm:float-none work_article">
                        <div class="article_part lg:py-10 md:py-4">
                            <h1 class="bold lg:py-2 lg:text-3xl md:text-2xl text-atlantis-500">Job Scheduler</h1>
                            <p class="text-atlantis-700">Do you want to automate tasks but don't want to handle all
                                the</p>
                            <span class="text-atlantis-700">complicated job scheduling part?</span>
                        </div>
                        <div class="article_items lg:pb-10 md:pb-3">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     height="50px" width="50px">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="article_items lg:pb-10 md:pb-3">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     height="50px" width="50px">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="article_items lg:pb-10 md:pb-3">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     height="50px" width="50px">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex lg:float-left justify-center lg:w-1/2 work_img">
                        <div class="flex lg:pt-16 lg:w-3/4 pt-5 w-3/4 pb-5 work_img_wrapper">
                            <img class="rounded-lg" src="src/img/sample.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--work_section end-->
</section>
<!--question_section start-->
<section id="section-4">
    <div class="question_section" style="background-color: #F8FCFB">
        <div class="question_area">
            <div class="container mx-auto pt-5 pb-5 ">
                <div class="lg:pb-10 md:pb-10 pb-4 question_heading">
                    <h1 class="flex font-bold justify-center lg:text-4xl md:text-2xl sm:text-2xl text-downy-700">
                        Frequently asked questions ?</h1>
                </div>
                <div class="question_articles w-auto">
                    <div class="question_item">
                        <div class="tab overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
                            <label
                                class="block border-2 border-downy-700 cursor-pointer leading-normal lg:text-2xl md:text-2xl pl-2 text-1xl text-downy-700"
                                for="tab-multi-one">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200">
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo
                                    perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                                    molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-three" type="checkbox" name="tabs">
                            <label
                                class="block border-2 border-downy-700 cursor-pointer leading-normal lg:text-2xl md:text-2xl pl-2 text-1xl text-downy-700"
                                for="tab-multi-three">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200">
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo
                                    perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                                    molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-four" type="checkbox" name="tabs">
                            <label
                                class="block border-2 border-downy-700 cursor-pointer leading-normal lg:text-2xl md:text-2xl pl-2 text-1xl text-downy-700"
                                for="tab-multi-four">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200">
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo
                                    perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                                    molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-five" type="checkbox" name="tabs">
                            <label
                                class="block border-2 border-downy-700 cursor-pointer leading-normal lg:text-2xl md:text-2xl pl-2 text-1xl text-downy-700"
                                for="tab-multi-five">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200">
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo
                                    perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                                    molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-two" type="checkbox" name="tabs">
                            <label
                                class="block border-2 border-downy-700 cursor-pointer leading-normal lg:text-2xl md:text-2xl pl-2 text-1xl text-downy-700"
                                for="tab-multi-two">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200">
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo
                                    perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta
                                    molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--question_section end-->
</section>
<!--footer_area start-->
<footer class="footer_area" style="background-image: url(src/img/footer_end.jpg);">
    <div class="container lg:px-5 lg:py-5 md:px-5 md:py-5 mx-auto px-3 py-3 rounded text-white">
        <div class="flex gap-5 grid lg:grid-cols-3 md:grid-cols-3">
            <div class="footer-services text-center">
                <h5 class="font-bold lg:text-xl md:text-xl mb-5 capitalize text-downy-200">Services</h5>
                <ul class="capitalize text-downy-300  ">
                    <li class="mb-2">point of sale</li>
                    <li class="mb-2">point of sale</li>
                    <li class="mb-2">point of sale</li>
                    <li class="mb-2">point of sale</li>
                </ul>
            </div>
            <div class="footer-support text-center">
                <h5 class="font-bold lg:text-xl md:text-xl mb-5 text-downy-200">Support</h5>
                <ul class=" capitalize text-downy-300 ">
                    <li class="mb-2">FQA</li>
                    <li class="mb-2">Pricing</li>
                    <li class="mb-2">Guides</li>
                </ul>
            </div>
            <div class="social-area text-center relative z-10">
                <h5 class="font-bold lg:text-xl md:text-xl   mb-5 text-downy-200 ">Our Social media</h5>
                <div class="s_icon">
                    <a class="" href="#"><span class="text-2xl"><i
                                class="fab  fa-facebook hover:text-facebook"></i></span></a>
                    <a href="#"><span class="text-2xl"><i class="fab  fa-linkedin hover:text-linkedin"></i></span></a>
                    <a href="#"><span class="text-2xl"><i class="fab  fa-twitter hover:text-twitter"></i></span></a>
                    {{--                    <a href="#"><span class="ml-5" ><i class="fa--f fab lg:px-3 lg:py-2 lg:text-2xl md:px-3 md:py-2 md:text-2xl px-3 py-2 rounded-full text-xs" style="background: #409DF6"></i></span></a>--}}
                </div>
            </div>
        </div>
    </div>
    <!--    <div class="border-b border-flame-pea-700  h-2 mt-4"></div>-->
    <div class="lg:text-xl md:text-xl text-center  text-xs text-downy-900"> © Copyright 2020 Kodeeo - All Rights
        reserved
    </div>
    <div class="wave">
        <img src="src/img/footer_1.png" alt="">
    </div>
</footer>
<!--footer_area end-->
<!--javascript-->
<script type="text/javascript" src="{{mix('js/app.js')}}"></script>
</body>
</html>
