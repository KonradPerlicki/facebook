<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/games.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Aug 2021 22:04:16 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Socialite Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- CSS 
    ================================================== --> 
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/tailwind.css">  


</head> 
<body>
   
    


    <div id="wrapper">

        <!-- Header -->
        <header>
            <div class="header_wrap">
                <div class="header_inner mcontainer">
                    <div class="left_side">
                        
                        <span class="slide_menu" uk-toggle="target: #wrapper ; cls: is-collapse is-active">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z" fill="currentColor"></path></svg>
                        </span>

                        <div id="logo">
                            <a href="homepage.html"> 
                                <img src="assets/images/logo.png" alt="">
                                <img src="assets/images/logo-mobile.png" class="logo_mobile" alt="">
                            </a>
                        </div>
                    </div>
                     
                    <!-- search icon for mobile -->
                    <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
                    <div class="header_search">
                        <input value="" type="text" class="form-control" placeholder="Search for Friends , Videos and more.." autocomplete="off">
                        <i class="uil-search-alt"></i>
                    </div>
                    <div uk-drop="mode: click" class="hidden md:w-1/3 w-11/12 shadow-lg rounded-md -mt-2 bg-white">
                        <div class="-mt-2 p-3">
                            <h4 class="font-semibold mb-1 mt-2 px-2.5 text-lg"> Recently  </h4>
                            <ul>
                                <li>
                                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded-md"> 
                                        <img src="assets/images/games/img-4.jpg" alt="" class="border mr-3 rounded-full shadow-sm w-8">
                                        Erica Jones
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded-md"> 
                                        <img src="assets/images/group/group-2.jpg" alt="" class="border mr-3 rounded-full shadow-sm w-8">
                                        Coffee  Addicts
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded-md"> 
                                        <img src="assets/images/group/group-4.jpg" alt="" class="border mr-3 rounded-full shadow-sm w-8">
                                         Mountain Riders
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded-md"> 
                                        <img src="assets/images/group/group-5.jpg" alt="" class="border mr-3 rounded-full shadow-sm w-8">
                                        Property Rent And Sale 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="right_side">
    
                        <div class="header_widgets">
                            <a href="#" class="is_link">  Upgrade </a>   
                            <a href="#" class="is_icon" uk-tooltip="title: Cart">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                            </a>
                            <div uk-drop="mode: click" class="header_dropdown dropdown_cart">
                             
                                <div class="drop_headline">
                                    <h4>  My Cart </h4>
                                    <a href="#" class="btn_action hover:bg-gray-100 mr-2 px-2 py-1 rounded-md underline"> Checkout </a>
                                </div>

                                <ul class="dropdown_cart_scrollbar" data-simplebar>
                                    <li>
                                        <div class="cart_avatar">
                                            <img src="assets/images/product/2.jpg" alt="">
                                        </div>
                                        <div class="cart_text">
                                            <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Wireless headphones </div>
                                            <p class="text-sm">Type Accessories  </p>
                                        </div>
                                        <div class="cart_price">
                                            <span> $14.99 </span>
                                            <button class="type"> Remove</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_avatar">
                                            <img src="assets/images/product/13.jpg" alt="">
                                        </div>
                                        <div class="cart_text">
                                            <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Parfum Spray</div>
                                            <p class="text-sm">Type Parfums  </p>
                                        </div>
                                        <div class="cart_price">
                                            <span> $16.99 </span>
                                            <button class="type"> Remove</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_avatar">
                                            <img src="assets/images/product/15.jpg" alt="">
                                        </div>
                                        <div class="cart_text">
                                            <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Herbal Shampoo </div>
                                            <p class="text-sm">Type Herbel  </p>
                                        </div>
                                        <div class="cart_price">
                                            <span> $12.99 </span>
                                            <button class="type"> Remove</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_avatar">
                                            <img src="assets/images/product/14.jpg" alt="">
                                        </div>
                                        <div class="cart_text">
                                            <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Wood Chair </div>
                                            <p class="text-sm">Type Furniture  </p>
                                        </div>
                                        <div class="cart_price">
                                            <span> $19.99 </span>
                                            <button class="type"> Remove</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_avatar">
                                            <img src="assets/images/product/9.jpg" alt="">
                                        </div>
                                        <div class="cart_text">
                                            <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Strawberries FreshRipe </div>
                                            <p class="text-sm">Type Fruit  </p>
                                        </div>
                                        <div class="cart_price">
                                            <span> $12.99 </span>
                                            <button class="type"> Remove</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_avatar">
                                            <img src="assets/images/product/2.jpg" alt="">
                                        </div>
                                        <div class="cart_text">
                                            <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Wireless headphones </div>
                                            <p class="text-sm">Type Accessories  </p>
                                        </div>
                                        <div class="cart_price">
                                            <span> $14.99 </span>
                                            <button class="type"> Remove</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_avatar">
                                            <img src="assets/images/product/13.jpg" alt="">
                                        </div>
                                        <div class="cart_text">
                                            <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Parfum Spray</div>
                                            <p class="text-sm">Type Parfums  </p>
                                        </div>
                                        <div class="cart_price">
                                            <span> $16.99 </span>
                                            <button class="type"> Remove</button>
                                        </div>
                                    </li>
                                </ul>
        
                                <div class="cart_footer">
                                    <p> Subtotal : $ 320 </p>
                                    <h1> Total :  <strong> $ 320</strong> </h1>
                                </div>
                            </div>

                            <a href="#" class="is_icon" uk-tooltip="title: Notifications">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                                <span>3</span>
                            </a>
                            <div uk-drop="mode: click" class="header_dropdown">
                                 <div  class="dropdown_scrollbar" data-simplebar>
                                     <div class="drop_headline">
                                         <h4>Notifications </h4>
                                         <div class="btn_action">
                                            <a href="#" data-tippy-placement="left" title="Notifications">
                                                <ion-icon name="settings-outline"></ion-icon>
                                            </a>
                                            <a href="#" data-tippy-placement="left" title="Mark as read all">
                                                <ion-icon name="checkbox-outline"></ion-icon>
                                            </a>
                                        </div>
                                     </div>
                                     <ul>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar"> 
                                                     <img src="assets/images/games/img-1.jpg" alt="">
                                                 </div>
                                                 <span class="drop_icon bg-gradient-primary">
                                                     <i class="icon-feather-thumbs-up"></i>
                                                 </span>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Adrian Mohani</strong> Like Your Comment On Video
                                                        <span class="text-link">Learn Prototype Faster </span>
                                                     </p>
                                                     <time> 2 hours ago </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li class="not-read">
                                             <a href="#">
                                                 <div class="drop_avatar status-online"> <img src="assets/images/games/img-2.jpg" alt="">
                                                 </div>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Stella Johnson</strong> Replay Your Comments in
                                                        <span class="text-link">Adobe XD Tutorial</span>
                                                     </p>
                                                     <time> 9 hours ago </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar"> <img src="assets/images/games/img-3.jpg" alt="">
                                                 </div>
                                                 <span class="drop_icon bg-gradient-primary">
                                                    <i class="icon-feather-thumbs-up"></i>
                                                </span>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Alex Dolgove</strong> Added New Review In Video
                                                        <span class="text-link">Full Stack PHP Developer</span>
                                                     </p>
                                                     <time> 12 hours ago </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar"> <img src="assets/images/games/img-1.jpg" alt="">
                                                 </div>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Jonathan Madano</strong> Shared Your Discussion On Video
                                                        <span class="text-link">Css Flex Box </span>
                                                     </p>
                                                     <time> Yesterday </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar"> <img src="assets/images/games/img-1.jpg" alt="">
                                                 </div>
                                                 <span class="drop_icon bg-gradient-primary">
                                                    <i class="icon-feather-thumbs-up"></i>
                                                </span>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                        <span class="text-link">Javascript Introduction </span>
                                                     </p>
                                                     <time> 2 hours ago </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar status-online"> <img src="assets/images/games/img-2.jpg" alt="">
                                                 </div>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Stella Johnson</strong> Replay Your Comments in
                                                        <span class="text-link">Programming for Games</span>
                                                     </p>
                                                     <time> 9 hours ago </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar"> <img src="assets/images/games/img-2.jpg" alt="">
                                                 </div>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Stella Johnson</strong> Replay Your Comments in
                                                        <span class="text-link">Programming for Games</span>
                                                     </p>
                                                     <time> 9 hours ago </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar"> <img src="assets/images/games/img-3.jpg" alt="">
                                                 </div>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Alex Dolgove</strong> Added New Review In Course
                                                        <span class="text-link">Full Stack PHP Developer</span>
                                                     </p>
                                                     <time> 12 hours ago </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar"> <img src="assets/images/games/img-1.jpg" alt="">
                                                 </div>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                        <span class="text-link">Css Flex Box </span>
                                                     </p>
                                                     <time> Yesterday </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar"> <img src="assets/images/games/img-1.jpg" alt="">
                                                 </div>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                        <span class="text-link">Javascript Introduction </span>
                                                     </p>
                                                     <time> 2 hours ago </time>
                                                 </div>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <div class="drop_avatar"> <img src="assets/images/games/img-2.jpg" alt="">
                                                 </div>
                                                 <div class="drop_text">
                                                     <p>
                                                        <strong>Stella Johnson</strong> Replay Your Comments in
                                                        <span class="text-link">Programming for Games</span>
                                                     </p>
                                                     <time> 9 hours ago </time>
                                                 </div>
                                             </a>
                                         </li>
                                     </ul> 
                                 </div>
                            </div> 

                            <!-- Message -->
                            <a href="#" class="is_icon" uk-tooltip="title: Message">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                <span>4</span>
                            </a>
                            <div uk-drop="mode: click" class="header_dropdown is_message">
                                <div  class="dropdown_scrollbar" data-simplebar>
                                    <div class="drop_headline">
                                         <h4>Messages </h4>
                                        <div class="btn_action">
                                            <a href="#" data-tippy-placement="left" title="Notifications">
                                                <ion-icon name="settings-outline" uk-tooltip="title: Message settings ; pos: left"></ion-icon>
                                            </a>
                                            <a href="#" data-tippy-placement="left" title="Mark as read all">
                                                <ion-icon name="checkbox-outline"></ion-icon>
                                            </a>
                                        </div>
                                    </div>
                                    <input type="text" class="uk-input" placeholder="Search in Messages">
                                    <ul>
                                        <li class="un-read">
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/games/img-7.html" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Stella Johnson </strong> <time>12:43 PM</time>
                                                    <p>  Alex will explain you how ...  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/games/img-1.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Adrian Mohani </strong> <time> 6:43 PM</time>
                                                    <p> Thanks for The Answer sit amet...  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/games/img-6.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong>Alia Dolgove </strong> <time> Wed </time>
                                                    <p>  Alia just joined Messenger!  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/games/img-5.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Jonathan Madano </strong> <time> Sun</time>
                                                    <p>  Replay Your Comments insit amet consectetur </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="un-read">
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/games/img-2.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Stella Johnson </strong> <time>12:43 PM</time>
                                                    <p>  Alex will explain you how ...  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/games/img-1.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Adrian Mohani </strong> <time> 6:43 PM</time>
                                                    <p> Thanks for The Answer sit amet...  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/games/img-3.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong>Alia Dolgove </strong> <time> Wed </time>
                                                    <p>  Alia just joined Messenger!  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/games/img-4.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Jonathan Madano </strong> <time> Sun</time>
                                                    <p>  Replay Your Comments insit amet consectetur </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="see-all"> See all in Messages</a>
                            </div>
         
        
                            <a href="#">
                                <img src="assets/images/games/img-2.jpg" class="is_avatar" alt="">
                            </a>
                            <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">

                                <a href="timeline.html" class="user">
                                    <div class="user_avatar">
                                        <img src="assets/images/games/img-2.jpg" alt="">
                                    </div>
                                    <div class="user_name">
                                        <div> Stella Johnson </div>
                                        <span> @johnson</span>
                                    </div>
                                </a>
                                <hr>
                                <a href="#" class="is-link" uk-toggle="target: #create-post-modal">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                                    Upgrade To Premium  </span>
                                </a> 
                                <hr>
                                <a href="page-setting.html">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                                    My Account 
                                </a>
                                <a href="group-feed.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"  clip-rule="evenodd" />
                                    </svg>
                                    Manage Pages 
                                </a>
                                <a href="group-feed.html">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
                                    My Billing 
                                </a>
                                <a href="#" id="night-mode" class="btn-night-mode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                      </svg>
                                     Night mode
                                    <span class="btn-night-mode-switch">
                                        <span class="uk-switch-button"></span>
                                    </span>
                                </a>
                                <a href="group-feed.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Log Out 
                                </a>

                                
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </header>

        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar_header"> 
                <img src="assets/images/logo.png" alt="">
                <img src="assets/images/logo-icon.html" class="logo-icon" alt="">

                <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></span>

            </div>
        
            <div class="sidebar_inner" data-simplebar>
        
                <ul>
                    <li><a href="feed.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-600"> 
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        <span> Feed </span> </a> 
                    </li>
                    <li><a href="pages.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500">
                          <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path>
                        </svg> 
                        <span> Pages </span> </a> 
                    </li>
                    <li><a href="videos.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H7v4h6v-4zm2 0h1V9h-1v2zm1-4V5h-1v2h1zM5 5v2H4V5h1zm0 4H4v2h1V9zm-1 4h1v2H4v-2z" clip-rule="evenodd" />
                        </svg>
                        <span> Video</span></a> 
                    </li> 
                    <li><a href="groups.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg><span> Groups </span></a> 
                    </li>
                    <li><a href="courses.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-green-500">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                        <span> Course</span></a> 
                    </li>
                    <li><a href="jobs.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-pink-500">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                        </svg> <span> Jobs</span> </a> 
                    </li> 
                    <li><a href="blogs.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">
                            <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                        </svg>
                        <span> Blog</span></a> 
                    </li> 
                    <li id="more-veiw" hidden><a href="products.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-green-500">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                        </svg>
                        <span> Products</span></a> 
                    </li>
                    <li id="more-veiw" hidden><a href="events.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                          </svg><span>  Events </span></a> 
                    </li> 
                    <li id="more-veiw" hidden><a href="albums.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                        </svg>  <span>  Photos </span></a> 
                    </li>
                    <li class="active" id="more-veiw" hidden><a href="games.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">
                            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                        </svg>  <span>  Games </span></a> 
                    </li>
                    <li id="more-veiw" hidden><a href="forums.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                        </svg>
                       <span> forum</span> </a> 
                    </li>
                </ul>

                <a href="#" class="see-mover h-10 flex my-1 pl-2 rounded-xl text-gray-600" uk-toggle="target: #more-veiw; animation: uk-animation-fade"> 
                    <span class="w-full flex items-center" id="more-veiw">
                        <svg class="  bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        See More  
                    </span>
                    <span class="w-full flex items-center" id="more-veiw" hidden>
                        <svg  class="bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg> 
                        See Less 
                    </span>
                </a> 

                <hr>

                
                <h3 class="text-lg mt-3 font-semibold ml-2 is-title"> Contacts </h3>

                <div class="contact-list mt-2 ml-1">
                
                  
                    <a href="feed.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="feed.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="feed.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-7.html" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    <a href="feed.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-4.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
    
    
                </div>

                <br>
                <br>
                
 
            </div>
        
        </div> 

        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">

                <div class="lg:flex lg:space-x-10">

                    <div class="lg:w-2/3">
                        <div class="md:mb-4 mb-3">
                            <h2 class="text-2xl font-semibold"> Games </h2>
                            <nav class="responsive-nav border-b md:m-0 -mx-4">
                                <ul>
                                    <li class="active"><a href="#" class="lg:px-2">   Suggestions </a></li>
                                    <li><a href="#" class="lg:px-2"> Newest </a></li>
                                    <li><a href="#" class="lg:px-2"> My games</a></li>
                                </ul>
                            </nav>
                        </div>
    
                        <!-- Game slider -->
                        <div class="relative" uk-slider="finite: true">
                            <div class="uk-slider-container px-1 py-3">
                                <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">
                                
                                    <li>
                                
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/images/games/img-1.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                            </a>
                                            <div class="p-3">
                                                <h4 class="text-base font-semibold mb-0.5"> Larion TV </h4>
                                                <p class="font-medium text-sm">365K Viewers </p>
                                                <a href="#" class="block py-1.5 mt-2 text-sm font-semibold text-center bg-gray-200 rounded-md">Play  now</a>
                                            </div>
                                        </div>
                                
                                    </li>
                                    <li>
                                        <a href="timeline-page.html">
                                            <div class="card">
                                                <img src="assets/images/games/img-3.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                                <div class="p-3">
                                                    <h4 class="text-base font-semibold mb-0.5"> ChooxTv </h4>
                                                    <p class="font-medium text-sm">843K Viewers </p>
                                                    <a href="#" class="block py-1.5 mt-2 text-sm font-semibold text-center bg-gray-200 rounded-md">Play now</a>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/images/games/img-4.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                            </a>
                                            <div class="p-3">
                                                <h4 class="text-base font-semibold mb-0.5"> Mobile Legends </h4>
                                                <p class="font-medium text-sm">203k Viewers </p>
                                                <a href="#" class="block py-1.5 mt-2 text-sm font-semibold text-center bg-gray-200 rounded-md">Play now</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/images/games/img-2.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                            </a>
                                            <div class="p-3">
                                                <h4 class="text-base font-semibold mb-0.5"> Minecraft </h4>
                                                <p class="font-medium text-sm">423K Viewers </p>
                                                <a href="#" class="block py-1.5 mt-2 text-sm font-semibold text-center bg-gray-200 rounded-md">Play now</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/images/games/img-1.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                            </a>
                                            <div class="p-3">
                                                <h4 class="text-base font-semibold mb-0.5"> Larion TV </h4>
                                                <p class="font-medium text-sm">248K Viewers </p>
                                                <a href="#" class="block py-1.5 mt-2 text-sm font-semibold text-center bg-gray-200 rounded-md">Play now</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                                    href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                                    href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                            </div>
                        </div>
    
                        <br>
                        
                        <!-- Clips -->
    
                        <div class="my-5 flex justify-between pb-3">
                            <h2 class="text-2xl font-semibold"> Top Clips </h2>
                            <a href="#" class="text-blue-500"> See all </a>
                        </div>
    
                        <div class="divide-y -mt-3 card px-5 py-2 ">
    
                            <div class="flex lg:flex-row flex-col lg:space-x-4 py-4 relative w-full">
                                <div class="lg:w-56 w-full h-32 overflow-hidden rounded-lg relative shadow-sm flex-shrink-0"> 
                                     <img src="assets/images/games/img-lg-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                     <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                </div>
                                <div class="flex-1 relative"> 
                                    <h2 class="text-xl font-semibold leading-6 lg:mt-0 mt-4">Strike Force Heroes 2</h2>
                                    <p class="leading-6 line-clamp-2 mt-2"> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>
                                    <div class="font-semibold mt-2"> Johnson Smath </div>
                                    <div class="flex space-x-2 items-center text-sm pt-1 text-sm">
                                        <div> 27 weeks ago</div>
                                        <div>·</div>
                                        <div> 156.9K views</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-4 py-4 relative w-full">
                                <div class="w-56 h-32 overflow-hidden rounded-lg relative shadow-sm flex-shrink-0"> 
                                     <img src="assets/images/games/img-lg-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                     <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                </div>
                                <div class="flex-1 relative"> 
                                    <h2 class="text-xl font-semibold leading-6">Free Fire - Battlegrounds</h2>
                                    <p class="leading-6 line-clamp-2 mt-2"> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>
                                    <div class="font-semibold mt-2"> Johnson Smath </div>
                                    <div class="flex space-x-2 items-center text-sm pt-1 text-sm">
                                        <div> 27 weeks ago</div>
                                        <div>·</div>
                                        <div> 156.9K views</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-4 py-4 relative w-full">
                                <div class="w-56 h-32 overflow-hidden rounded-lg relative shadow-sm flex-shrink-0"> 
                                     <img src="assets/images/games/img-lg-3.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                     <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                </div>
                                <div class="flex-1 relative"> 
                                    <h2 class="text-xl font-semibold leading-6">Clip Of Wolv Gamers Playing</h2>
                                  <p class="leading-6 line-clamp-2 mt-2"> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>
                                    <div class="font-semibold mt-2"> Johnson Smath </div>
                                    <div class="flex space-x-2 items-center text-sm pt-1 text-sm">
                                        <div> 27 weeks ago</div>
                                        <div>·</div>
                                        <div> 156.9K views</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    
                    </div>

                     <!-- Sidebar -->
                     <div class="lg:w-1/3 w-full">
                        <div uk-sticky="media @m ; offset:80 ; bottom : true" class="card">
                        
                        
                            <div class="border-b flex items-center justify-between  p-4">
                                <div>
                                    <h2 class="text-lg font-semibold">Top Games</h2>
                                </div>
                                <a href="#" class="text-blue-500"> See all </a>
                            </div>
                        
                            <div class="p-3">
                        
                                <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                    <a href="timeline-page.html" href="timeline-page.html"iv class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/games/img-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mobile Legends </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                                    </div>
                                    <a href="timeline-page.html"
                                        class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Play
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                    <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/games/img-2.jpg" class="absolute w-full h-full inset-0 " alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-page.html" class="text-base font-semibold capitalize"> Minecraft </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 356k Following </div>
                                    </div>
                                    <a href="timeline-page.html"
                                        class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Play
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                    <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/games/img-3.jpg" class="absolute w-full h-full inset-0" alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-page.html" class="text-base font-semibold capitalize"> ChooxTv </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                                    </div>
                                    <a href="timeline-page.html"
                                        class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Play
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                    <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/games/img-1.jpg" class="absolute w-full h-full inset-0" alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-page.html" class="text-base font-semibold capitalize"> Larion TV </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                                    </div>
                                    <a href="timeline-page.html"
                                        class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Play
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                    <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/games/img-4.jpg" class="absolute w-full h-full inset-0" alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mobile Legends </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                                    </div>
                                    <a href="timeline-page.html"
                                        class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Play
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                    <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/games/img-3.jpg" class="absolute w-full h-full inset-0" alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-page.html" class="text-base  font-semibold capitalize"> ChooxTv </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                                    </div>
                                    <a href="timeline-page.html"
                                        class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Play
                                    </a>
                                </div>
                        
                            </div>
                        
                            <a href="#" class="border-t block text-center py-2"> See all </a>
                        
                        </div>
                    </div>

 
                </div>

        
            </div>
        </div>
        
    </div>



    <!-- open chat box -->
    <div uk-toggle="target: #offcanvas-chat" class="start-chat">
        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
        </svg>
    </div>
    
    <div id="offcanvas-chat" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar bg-white p-0 w-full lg:w-80 shadow-2xl">
    
    
            <div class="relative pt-5 px-4">
    
                <h3 class="text-2xl font-bold mb-2"> Chats </h3>
    
                <div class="absolute right-3 top-4 flex items-center">
    
                    <button class="uk-offcanvas-close  px-2 -mt-1 relative rounded-full inset-0 lg:hidden blcok"
                        type="button" uk-close></button>
    
                    <a href="#" uk-toggle="target: #search;animation: uk-animation-slide-top-small">
                        <ion-icon name="search" class="text-2xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="cog" class="text-2xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="ellipsis-vertical" class="text-2xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
    
                </div>
    
    
            </div>
    
            <div class="absolute bg-white z-10 w-full -mt-5 lg:-mt-2 transform translate-y-1.5 py-2 border-b items-center flex"
                id="search" hidden>
                <input type="text" placeholder="Search.." class="flex-1">
                <ion-icon name="close-outline" class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-4 cursor-pointer"
                    uk-toggle="target: #search;animation: uk-animation-slide-top-small"></ion-icon>
            </div>
    
            <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                <ul uk-switcher="connect: #chats-tab; animation: uk-animation-fade">
                    <li class="uk-active"><a class="active" href="#0"> Friends </a></li>
                    <li><a href="#0">Groups <span> 10 </span> </a></li>
                </ul>
            </nav>
    
            <div class="contact-list px-2 uk-switcher" id="chats-tab">
    
                <div>
    
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-3.jpg" alt="">
    
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-4.jpg" alt="">
    
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
    
                </div>
                <div>
    
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-3.jpg" alt="">
    
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/games/img-4.jpg" alt="">
    
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
    
                </div>
    
            </div>
        </div>
    </div>

    
    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);
    
        (function (window, document, undefined) {
    
            'use strict';
    
            // Feature test
            if (!('localStorage' in window)) return;
    
            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;
    
            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);
    
        })(window, document);
    </script>
  
    <!-- Javascript
    ================================================== -->
    <script src="assets/js/jquery-3.3.1.min.js"></script> 
    <script src="assets/js/tippy.all.min.js"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="../../unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/games.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Aug 2021 22:05:13 GMT -->
</html>