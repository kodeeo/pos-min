<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel mix</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<!--heading_area start-->
<section id="section-1">
    <header class="heading_area">
        <div class="banner_area pb-16" style="background-image: url(src/img/people_service_1.jpg)">
            <!--nav section-->
            <nav>
                <div class="nav_section flex pt-5">
                    <div class="logo_area w-1/4 mt-2">
                        <a href="http://localhost:63342/laravelmix/index.html" class="pt-10"><img src="src/img/pos.png" class="w-1/2" alt=""></a>
                    </div>
                    <div  id="acitve_feature" class="menu_area w-2/4 text-casablanca-500  capitalize" >
                        <ul class="inline-block flex justify-center">
                            <li><a href="#section-1" class="flex mb-2">home</a></li>
                            <li><a href="#section-2" class="flex mb-2  ">features</a></li>
                            <li><a href="#section-3" class="flex mb-2  ">Docs</a></li>
                            <li><a href="#section-4" class="flex mb-2 uppercase">faq</a></li>
                        </ul>
                    </div>
                    <div class="logIn_area w-1/4 flex justify-end ">
                        <div class="login_button mt-2">
                            <a href="{{route('login')}}" class="block px-8 py-5 border-2 transition duration-500 hover:bg-transparent hover:border-casablanca-500 hover:text-casablanca-500 ease-in-out border-transparent rounded text-casablanca-900 uppercase bg-casablanca-500" style="margin-right: 44px;">login</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container mx-auto">
                <div class="banner_wrapper pt-40">
                    <!--heading section-->
                    <div class="heading_section">
                        <h1 class=" text-6xl  justify-center font-semibold text-casablanca-500 px-56">
                            Painless cron job scheduler &<br/>
                            <span class="text-center block">monitoring service</span>
                        </h1>
                        <p class="text-sm text-casablanca-600 block text-center m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolores molestias officia reprehenderit veritatis!</p>
                    </div>
                    <!--section button-->
                    <div class="section_button  mt-10 justify-center flex">
                        <a href="#" class="block mt-5 px-5 py-5 rounded uppercase text-casablanca-500 border-2 border-casablanca-500 bg-transparent hover:bg-casablanca-500 hover:text-casablanca-900 transition duration-500">Start your free 7-day trial</a>
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
            <div class="features_heading pt-20">
                <h1 class="flex justify-center text-4xl font-bold text-whiteblue">What's included? </h1>
                <p class="flex justify-center text-sm text-seagull-700">Everything you need to schedule and monitor your background jobs without writing any code.</p><span class="flex justify-center text-sm text-seagull-700">  Focus on your application, and we will handle the scheduling part.</span>
            </div>
            <div class="features flex mt-10 grid grid-cols-3 ">
                <div class="features_item px-5 py-5">
                    <div class="features_ico">
                        <svg class="text-seagull-100 bg-whiteblue px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="100px" width="100px">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
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
                        <svg class="text-seagull-100 bg-whiteblue px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="100px" width="100px">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
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
                        <svg class="text-seagull-100 bg-whiteblue px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="100px" width="100px">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
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
                        <svg class="text-seagull-100 bg-whiteblue px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="100px" width="100px">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
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
                        <svg class="text-seagull-100 bg-whiteblue px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="100px" width="100px">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
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
                        <svg class="text-seagull-100 bg-whiteblue px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="100px" width="100px">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
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
    <div class="work_section pt-5 pb-5 " style="background-image: url(src/img/work_section_2.jpg);">
        <div class="container mx-auto">
            <div class="work_wrapper pb-10">
                <div class="work_heading">
                    <h1 class="flex justify-center text-atlantis-500 text-4xl font-bold text-seagull-500 pb-10">How does it work?</h1>
                </div>
                <div class="work_section_1 pb-20 pr-10 overflow-hidden">
                    <div class="work_article pl-20 w-1/2 float-left">
                        <div class="article_part  pt-10 pb-10">
                            <h1 class="text-3xl bold py-2 text-atlantis-500">Job Scheduler</h1>
                            <p class="text-atlantis-700">Do you want to automate tasks but don't want to handle all the</p>
                            <span class="text-atlantis-700">complicated job scheduling part?</span>
                        </div>
                        <div class="article_items pb-10">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="50px" width="50px">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="article_items pb-10">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="50px" width="50px">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="article_items pb-10">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="50px" width="50px">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
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
                    <div class="work_img  w-1/2 float-left ">
                        <div class="work_img_wrapper pt-10 pl-20">
                            <img class="rounded-lg" src="src/img/sample.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="work_section_2 pb-20 pr-10  overflow-hidden">
                    <div class="work_img w-1/2 float-left ">
                        <div class="work_img_wrapper pt-10 pl-10">
                            <img class="rounded-lg" src="src/img/sample.png" alt="">
                        </div>
                    </div>
                    <div class="work_article  w-1/2 float-left" style="padding-left:120px">
                        <div class="article_part  pt-10 pb-10">
                            <h1 class="text-3xl bold py-2 text-atlantis-600">Job Scheduler</h1>
                            <p class="text-atlantis-700">Do you want to automate tasks but don't want to handle all the</p>
                            <span class="text-atlantis-700">complicated job scheduling part?</span>
                        </div>
                        <div class="article_items pb-10">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="50px" width="50px">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="article_items pb-10">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="50px" width="50px">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex">
                                <div class="article_describe pl-10">
                                    <h1 class="text-atlantis-600">1. Set your schedule</h1>
                                    <p class="text-atlantis-700">We support time intervals and cron expressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="article_items pb-10">
                            <div class="article_ico">
                                <svg class="text-seagull-100 bg-atlantis-600 px-3 py-3 rounded-lg float-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="50px" width="50px">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
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
                <div class="question_heading pb-10">
                    <h1 class="flex justify-center text-4xl font-bold text-downy-700">Frequently asked questions ?</h1>
                </div>
                <div class="question_articles">
                    <div class="question_item">
                        <div class="tab w-full overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
                            <label class="block leading-normal cursor-pointer text-2xl pl-2 text-downy-700 border-2 border-downy-700" for="tab-multi-one">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200" >
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                            </div>
                        </div>
                        <div class="tab w-full overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-three" type="checkbox" name="tabs">
                            <label class="block leading-normal cursor-pointer text-2xl pl-2 text-downy-700 border-2 border-downy-700" for="tab-multi-three">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200" >
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                            </div>
                        </div>
                        <div class="tab w-full overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-four" type="checkbox" name="tabs">
                            <label class="block leading-normal cursor-pointer text-2xl pl-2 text-downy-700 border-2 border-downy-700" for="tab-multi-four">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200" >
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                            </div>
                        </div>
                        <div class="tab w-full overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-five" type="checkbox" name="tabs">
                            <label class="block leading-normal cursor-pointer text-2xl pl-2 text-downy-700 border-2 border-downy-700" for="tab-multi-five">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200" >
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                            </div>
                        </div>
                        <div class="tab w-full overflow-hidden">
                            <input class="absolute opacity-0 " id="tab-multi-two" type="checkbox" name="tabs">
                            <label class="block leading-normal cursor-pointer text-2xl pl-2 text-downy-700 border-2 border-downy-700" for="tab-multi-two">How does Cronhub scheduler work?</label>
                            <div class="tab-content bg-downy-200" >
                                <p class="py-5 pl-8 text-downy-800 border-l-2 border-r-2 border-downy-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
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
    <div class="container mx-auto  py-10 px-5 rounded text-white">
        <div class="flex space-x-10">
            <div class="w-1/2 md:w-4/6 flex justify-between">
                <div class="flex">
                    <div class="w-4/6">
                        <h5 class="font-bold text-xl mb-5 capitalize text-flame-pea-500">Services</h5>
                        <ul class="capitalize text-flame-pea-400">
                            <li class="mb-2">point of sale</li>
                            <li class="mb-2">point of sale</li>
                            <li class="mb-2">point of sale</li>
                            <li class="mb-2">point of sale</li>
                        </ul>
                    </div>
                    <div class="ml-32">
                        <h5 class="font-bold text-xl mb-5 text-flame-pea-500">Support</h5>
                        <ul class="text-flame-pea-400 capitalize">
                            <li class="mb-2">FQA</li>
                            <li class="mb-2">Pricing</li>
                            <li class="mb-2">Guides</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/5">
                <h5 class="font-bold text-xl mb-5 text-flame-pea-500">Our Social media</h5>
                <div class="s_icon pt-4 pb-2 ">
                    <a href="#"><span class=" " ><i class="fab fa-facebook-f px-3 py-2 rounded-full text-2xl" style="background: #409DF6"></i></span></a>
                    <a href="#"><span class="  ml-5" ><i class="fab fa-facebook-f  px-3 py-2 rounded-full text-2xl" style="background: #409DF6"></i></span></a>
                    <a href="#"><span class="  ml-5" ><i class="fab fa-facebook-f px-3 py-2 rounded-full text-2xl" style="background: #409DF6"></i></span></a>
                    <a href="#"><span class="  ml-5" ><i class="fab fa-facebook-f  px-3 py-2 rounded-full text-2xl" style="background: #409DF6"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <!--    <div class="border-b border-flame-pea-700  h-2 mt-4"></div>-->
    <div class="mt-4 text-center text-xl text-flame-pea-50 pb-5"> © Copyright 2020 Kodeeo - All Rights reserved</div>
    <div class="wave">
        <img src="src/img/footer_1.png" alt="">
    </div>
</footer>
<!--footer_area end-->
<!--javascript-->
<script type="text/javascript" src="{{mix('js/app.js')}}"></script>
</body>
</html>
