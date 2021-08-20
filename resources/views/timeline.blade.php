<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Aug 2021 22:00:43 GMT -->
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
                    <div class="header_search"><i class="uil-search-alt"></i> 
                        <input value="" type="text" class="form-control" placeholder="Search for Friends , Videos and more.." autocomplete="off">
                        <div uk-drop="mode: click" class="header_search_dropdown">
                               
                            <h4 class="search_title"> Recently </h4>
                            <ul>
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Erica Jones </div>
                                    </a> 
                                </li> 
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Coffee  Addicts </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-3.jpg" alt="" class="list-avatar">
                                        <div class="list-name"> Mountain Riders </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-4.jpg" alt="" class="list-avatar">
                                        <div class="list-name"> Property Rent And Sale  </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Erica Jones </div>
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
                                                     <img src="assets/images/avatars/avatar-1.jpg" alt="">
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
                                                 <div class="drop_avatar status-online"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
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
                                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
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
                                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
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
                                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
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
                                                 <div class="drop_avatar status-online"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
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
                                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
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
                                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
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
                                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
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
                                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
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
                                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
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
                                                <div class="drop_avatar"> <img src="assets/images/avatars/avatar-7.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Stella Johnson </strong> <time>12:43 PM</time>
                                                    <p>  Alex will explain you how ...  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Adrian Mohani </strong> <time> 6:43 PM</time>
                                                    <p> Thanks for The Answer sit amet...  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/avatars/avatar-6.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong>Alia Dolgove </strong> <time> Wed </time>
                                                    <p>  Alia just joined Messenger!  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Jonathan Madano </strong> <time> Sun</time>
                                                    <p>  Replay Your Comments insit amet consectetur </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="un-read">
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Stella Johnson </strong> <time>12:43 PM</time>
                                                    <p>  Alex will explain you how ...  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong> Adrian Mohani </strong> <time> 6:43 PM</time>
                                                    <p> Thanks for The Answer sit amet...  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                                </div>
                                                <div class="drop_text">
                                                    <strong>Alia Dolgove </strong> <time> Wed </time>
                                                    <p>  Alia just joined Messenger!  </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="drop_avatar"> <img src="assets/images/avatars/avatar-4.jpg" alt="">
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
                                <img src="assets/images/avatars/avatar-2.jpg" class="is_avatar" alt="">
                            </a>
                            <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">

                                <a href="timeline.html" class="user">
                                    <div class="user_avatar">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
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
                    <li id="more-veiw" hidden><a href="games.html"> 
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

                <div class="contact-list my-2 ml-1">
                
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-4.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
    
                </div>
  
                <hr>
                <h3 class="text-lg mt-3 font-semibold ml-2 is-title"> Pages </h3>
                <ul class="-space-y-1.5">
                    
                    <li><a href="pages-setting.html"> Setting layout 1 </a> </li>
                    <li><a href="pages-setting2.html"> Setting layout 2 </a> </li>
                    <li><a href="feed.html"> Authentication  </a> 
                        <ul>
                            <li><a href="form-login.html">form login </a></li>
                            <li><a href="form-register.html">form register</a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Create forms  </a> 
                        <ul>
                            <li><a href="create-group.html"> Create Group   </a></li>
                            <li><a href="create-page.html"> Create Page </a></li> 
                        </ul>
                    </li>
                </ul>

                <hr>
                <div class="footer-links">
                    <a href="#">About</a>
                    <a href="#">Blog </a>
                    <a href="#">Careers</a>
                    <a href="#">Support</a>
                    <a href="#">Contact Us </a>
                    <a href="#">Developer</a>
                    <a href="#">Terms of service</a>
                </div>

                
 
            </div>
        
        </div> 

        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">

                <div class="profile user-profile">
  
                    <div class="profiles_banner">
                        <img src="assets/images/avatars/profile-cover.jpg" alt="">
                        <div class="profile_action absolute bottom-0 right-0 space-x-1.5 p-3 text-sm z-50 hidden lg:flex">
                          <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5"> 
                              <ion-icon name="crop-outline" class="text-xl"></ion-icon>
                              <span> Crop  </span>
                          </a>
                          <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5"> 
                              <ion-icon name="create-outline" class="text-xl"></ion-icon>
                              <span> Edit </span>
                          </a>
                      </div>
                    </div>
                    <div class="profiles_content">

                        <div class="profile_avatar">
                            <div class="profile_avatar_holder"> 
                                <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            </div>
                            <div class="user_status status_online"></div>
                            <div class="icon_change_photo" hidden> <ion-icon name="camera" class="text-xl"></ion-icon> </div>
                        </div>

                        <div class="profile_info">
                            <h1> Josephine Williams </h1>
                            <p> Family , Food , Fashion , Fourever <a href="#">Edit </a></p>
                        </div>

                    </div>

                    <div class="flex justify-between lg:border-t flex-col-reverse lg:flex-row">
                        <nav class="responsive-nav pl-2 is_ligh -mb-0.5 border-transparent">
                            <ul  uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                                <li><a href="#"> Timeline</a></li>
                                <li><a href="#">Friend <span>3,243</span> </a></li>
                                <li><a href="#">Photoes </a></li>
                                <li><a href="#">Pages</a></li> 
                                <li><a href="#">Groups</a></li> 
                                <li><a href="#">Videos</a></li> 
                            </ul>
                        </nav>
 
                        <div class="flex items-center space-x-1.5 flex-shrink-0 pr-3  justify-center order-1">
                            <!-- <a href="#" class="text-blue-500"> See all </a> -->
                            <a href="#" class="flex items-center justify-center h-10 px-5 rounded-md bg-blue-600 text-white  space-x-1.5"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                                </svg>
                                <span> Add Your Story </span>
                            </a>
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100"> 
                              <ion-icon name="search" class="text-xl"></ion-icon>
                            </a>
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100"> 
                              <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                            </a>
                            <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"  
                            uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                <ul class="space-y-1">
                                  <li> 
                                      <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                         <ion-icon name="arrow-redo-outline" class="pr-2 text-xl"></ion-icon> Share Profile
                                      </a> 
                                  </li>
                                  <li> 
                                      <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                        <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon>  Account setting 
                                      </a> 
                                  </li>
                                  <li> 
                                      <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                        <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                                      </a> 
                                  </li> 
                                  <li> 
                                      <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                        <ion-icon name="star-outline"  class="pr-2 text-xl"></ion-icon>  Add favorites 
                                      </a> 
                                  </li>
                                  <li>
                                    <hr class="-mx-2 my-2 dark:border-gray-800">
                                  </li>
                                  <li> 
                                      <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                        <ion-icon name="stop-circle-outline" class="pr-2 text-xl"></ion-icon>  Unfriend
                                      </a> 
                                  </li>
                                </ul>
                            </div>
                                      
                        </div>

                    </div>

                </div>

                
                <div class="uk-switcher lg:mt-8 mt-4" id="timeline-tab">
 

                    <!-- Timeline -->
                    <div class="md:flex md:space-x-6 lg:mx-16">
                        <div class="space-y-5 flex-shrink-0 md:w-7/12">
      
                           <!-- Timeline  -->
                           
                           <div class="card lg:mx-0 p-4" uk-toggle="target: #create-post-modal">
                               <div class="flex space-x-3">
                                   <img src="assets/images/avatars/avatar-2.jpg" class="w-10 h-10 rounded-full">
                                   <input placeholder="What's Your Mind ? Hamse!" class="bg-gray-100 hover:bg-gray-200 flex-1 h-10 px-6 rounded-full"> 
                               </div>
                               <div class="grid grid-flow-col pt-3 -mx-1 -mb-1 font-semibold text-sm">
                                   <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer"> 
                                     <svg class="bg-blue-100 h-9 mr-2 p-1.5 rounded-full text-blue-600 w-9 -my-0.5 hidden lg:block" data-tippy-placement="top" title="Tooltip" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                     Photo/Video 
                                   </div>
                                   <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer"> 
                                      <svg class="bg-green-100 h-9 mr-2 p-1.5 rounded-full text-green-600 w-9 -my-0.5 hidden lg:block" uk-tooltip="title: Messages ; pos: bottom ;offset:7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="" aria-expanded="false"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                                      Tag Friend 
                                   </div>
                                   <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer"> 
                                   <svg class="bg-red-100 h-9 mr-2 p-1.5 rounded-full text-red-600 w-9 -my-0.5 hidden lg:block" uk-tooltip="title: Messages ; pos: bottom ;offset:7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="" aria-expanded="false"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                                   Fealing /Activity 
                                   </div>
                               </div> 
                           </div>
                   
                           <div class="card lg:mx-0 uk-animation-slide-bottom-small">
                   
                               <!-- post header-->
                               <div class="flex justify-between items-center lg:p-4 p-2.5">
                                   <div class="flex flex-1 items-center space-x-4">
                                       <a href="#">
                                           <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                                       </a>
                                       <div class="flex-1 font-semibold capitalize">
                                           <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                                           <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                                       </div>
                                   </div>
                                 <div>
                                   <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                   <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" 
                                   uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                                 
                                       <ul class="space-y-1">
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-share-alt mr-1"></i> Share
                                             </a> 
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-edit-alt mr-1"></i>  Edit Post 
                                             </a> 
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-comment-slash mr-1"></i>   Disable comments
                                             </a> 
                                         </li> 
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-favorite mr-1"></i>  Add favorites 
                                             </a> 
                                         </li>
                                         <li>
                                           <hr class="-mx-2 my-2 dark:border-gray-800">
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                              <i class="uil-trash-alt mr-1"></i>  Delete
                                             </a> 
                                         </li>
                                       </ul>
                                   
                                   </div>
                                 </div>
                               </div>
                   
                               <div uk-lightbox>
                                   <a href="assets/images/avatars/avatar-lg-3.jpg">  
                                       <img src="assets/images/avatars/avatar-lg-4.jpg" alt="" class="max-h-96 w-full object-cover">
                                   </a>
                               </div>
                               
                   
                               <div class="p-4 space-y-3"> 
                                  
                                   <div class="flex space-x-4 lg:font-bold">
                                       <a href="#" class="flex items-center space-x-2">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                               </svg>
                                           </div>
                                           <div> Like</div>
                                       </a>
                                       <a href="#" class="flex items-center space-x-2">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                               </svg>
                                           </div>
                                           <div> Comment</div>
                                       </a>
                                       <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                               </svg>
                                           </div>
                                           <div> Share</div>
                                       </a>
                                   </div>
                                   <div class="flex items-center space-x-3 pt-2"> 
                                       <div class="flex items-center">
                                           <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                           <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                           <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                       </div>
                                       <div class="dark:text-gray-100">
                                           Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                       </div>
                                   </div>
                   
                                   <div class="border-t py-4 space-y-4 dark:border-gray-600">
                                       <div class="flex">
                                           <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                           </div>
                                           <div>
                                               <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                                                   <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                                           class="uil-grin-tongue-wink"> </i> </p>
                                                   <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                               </div>
                                               <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                                   <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                   <a href="#"> Replay </a>
                                                   <span> 3d </span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="flex">
                                           <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                           </div>
                                           <div>
                                               <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                                                   <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                                   <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                               </div>
                                               <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                                   <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                   <a href="#"> Replay </a>
                                                   <span> 3d </span>
                                               </div>
                                           </div>
                                       </div>
                                      
                                   </div>
                                   
                                   <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>
                   
                                   <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                                       <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                                       <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                           <a href="#">
                                               <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a>
                                           <a href="#">
                                               <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a>
                                           <a href="#">
                                               <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a> 
                                       </div>
                                   </div>
                   
                               </div>
                   
                           </div>
                           
                           <div class="card lg:mx-0 uk-animation-slide-bottom-small">
                   
                               <!-- post header-->
                               <div class="flex justify-between items-center lg:p-4 p-2.5">
                                   <div class="flex flex-1 items-center space-x-4">
                                       <a href="#">
                                           <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                                       </a>
                                       <div class="flex-1 font-semibold capitalize">
                                           <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                                           <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                                       </div>
                                   </div>
                                 <div>
                                   <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                   <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" 
                                   uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                                 
                                       <ul class="space-y-1">
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-share-alt mr-1"></i> Share
                                             </a> 
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-edit-alt mr-1"></i>  Edit Post 
                                             </a> 
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-comment-slash mr-1"></i>   Disable comments
                                             </a> 
                                         </li> 
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-favorite mr-1"></i>  Add favorites 
                                             </a> 
                                         </li>
                                         <li>
                                           <hr class="-mx-2 my-2 dark:border-gray-800">
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                              <i class="uil-trash-alt mr-1"></i>  Delete
                                             </a> 
                                         </li>
                                       </ul>
                                   
                                   </div>
                                 </div>
                               </div>
                   
                   
                               <div uk-lightbox>
                                   <div class="grid grid-cols-2 gap-2 p-2">
                   
                                       <a href="assets/images/post/img-4.jpg" class="col-span-2">  
                                           <img src="assets/images/post/img-4.jpg" alt="" class="rounded-md w-full lg:h-76 object-cover">
                                       </a>
                                       <a href="assets/images/post/img-4.jpg">  
                                           <img src="assets/images/post/img-2.jpg" alt="" class="rounded-md w-full h-full">
                                       </a>
                                       <a href="assets/images/post/img-4.jpg" class="relative">  
                                           <img src="assets/images/post/img-3.jpg" alt="" class="rounded-md w-full h-full">
                                           <div class="absolute bg-gray-900 bg-opacity-30 flex justify-center items-center text-white rounded-md inset-0 text-2xl"> + 15 more </div>
                                       </a>
                   
                                   </div>
                               </div>
                   
                               <div class="p-4 space-y-3"> 
                                  
                                   <div class="flex space-x-4 lg:font-bold">
                                       <a href="#" class="flex items-center space-x-2">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                               </svg>
                                           </div>
                                           <div> Like</div>
                                       </a>
                                       <a href="#" class="flex items-center space-x-2">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                               </svg>
                                           </div>
                                           <div> Comment</div>
                                       </a>
                                       <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                               </svg>
                                           </div>
                                           <div> Share</div>
                                       </a>
                                   </div>
                                   <div class="flex items-center space-x-3 pt-2"> 
                                       <div class="flex items-center">
                                           <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                           <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                           <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                       </div>
                                       <div class="dark:text-gray-100">
                                           Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                       </div>
                                   </div>
                   
                                   <div class="border-t py-4 space-y-4 dark:border-gray-600">
                                       <div class="flex">
                                           <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                           </div>
                                           <div>
                                               <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                                   <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                                           class="uil-grin-tongue-wink"> </i> </p>
                                                   <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                               </div>
                                               <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                                   <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                   <a href="#"> Replay </a>
                                                   <span> 3d </span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="flex">
                                           <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                           </div>
                                           <div>
                                               <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                                   <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                                   <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                               </div>
                                               <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                                   <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                   <a href="#"> Replay </a>
                                                   <span> 3d </span>
                                               </div>
                                           </div>
                                       </div>
                                      
                                   </div>
                                   
                                   <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>
                   
                                   <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                                       <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                                       <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                           <a href="#">
                                               <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a>
                                           <a href="#">
                                               <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a>
                                           <a href="#">
                                               <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a> 
                                       </div>
                                   </div>
                   
                               </div>
                   
                           </div> 
                   
                           <div class="card lg:mx-0 uk-animation-slide-bottom-small">
                   
                               <!-- post header-->
                               <div class="flex justify-between items-center lg:p-4 p-2.5">
                                   <div class="flex flex-1 items-center space-x-4">
                                       <a href="#">
                                           <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                                       </a>
                                       <div class="flex-1 font-semibold capitalize">
                                           <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                                           <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                                       </div>
                                   </div>
                                 <div>
                                   <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                   <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" 
                                   uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                                 
                                       <ul class="space-y-1">
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-share-alt mr-1"></i> Share
                                             </a> 
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-edit-alt mr-1"></i>  Edit Post 
                                             </a> 
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-comment-slash mr-1"></i>   Disable comments
                                             </a> 
                                         </li> 
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-favorite mr-1"></i>  Add favorites 
                                             </a> 
                                         </li>
                                         <li>
                                           <hr class="-mx-2 my-2 dark:border-gray-800">
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                              <i class="uil-trash-alt mr-1"></i>  Delete
                                             </a> 
                                         </li>
                                       </ul>
                                   
                                   </div>
                                 </div>
                               </div>
                   
                   
                               <div class="p-3 border-b dark:border-gray-700">
                   
                                   Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat
                   
                               </div>
                               
                   
                               <div class="p-4 space-y-3"> 
                                  
                                   <div class="flex space-x-4 lg:font-bold">
                                       <a href="#" class="flex items-center space-x-2">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600 ">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                               </svg>
                                           </div>
                                           <div> Like</div>
                                       </a>
                                       <a href="#" class="flex items-center space-x-2">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                               </svg>
                                           </div>
                                           <div> Comment</div>
                                       </a>
                                       <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                               </svg>
                                           </div>
                                           <div> Share</div>
                                       </a>
                                   </div>
                                   <div class="flex items-center space-x-3 pt-2"> 
                                       <div class="flex items-center">
                                           <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                           <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                           <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                       </div>
                                       <div class="dark:text-gray-100">
                                           Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                       </div>
                                   </div>
                   
                                   <div class="border-t py-4 space-y-4 dark:border-gray-600">
                                       <div class="flex">
                                           <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                           </div>
                                           <div>
                                               <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                                   <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                                           class="uil-grin-tongue-wink"> </i> </p>
                                                   <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                               </div>
                                               <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                                   <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                   <a href="#"> Replay </a>
                                                   <span> 3d </span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="flex">
                                           <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                           </div>
                                           <div>
                                               <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                                   <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                                   <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                               </div>
                                               <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                                   <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                   <a href="#"> Replay </a>
                                                   <span> 3d </span>
                                               </div>
                                           </div>
                                       </div>
                                      
                                   </div>
                                   
                                   <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>
                   
                                   <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                                       <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                                       <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                           <a href="#">
                                               <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a>
                                           <a href="#">
                                               <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a>
                                           <a href="#">
                                               <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a> 
                                       </div>
                                   </div>
                   
                               </div>
                   
                           </div>  
                           
                           <div class="card lg:mx-0 uk-animation-slide-bottom-small">
                   
                               <!-- post header-->
                               <div class="flex justify-between items-center lg:p-4 p-2.5">
                                   <div class="flex flex-1 items-center space-x-4">
                                       <a href="#">
                                           <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                                       </a>
                                       <div class="flex-1 font-semibold capitalize">
                                           <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                                           <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                                       </div>
                                   </div>
                                 <div>
                                   <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                   <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" 
                                   uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                                 
                                       <ul class="space-y-1">
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-share-alt mr-1"></i> Share
                                             </a> 
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-edit-alt mr-1"></i>  Edit Post 
                                             </a> 
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-comment-slash mr-1"></i>   Disable comments
                                             </a> 
                                         </li> 
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <i class="uil-favorite mr-1"></i>  Add favorites 
                                             </a> 
                                         </li>
                                         <li>
                                           <hr class="-mx-2 my-2 dark:border-gray-800">
                                         </li>
                                         <li> 
                                             <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                              <i class="uil-trash-alt mr-1"></i>  Delete
                                             </a> 
                                         </li>
                                       </ul>
                                   
                                   </div>
                                 </div>
                               </div>
                   
                               <div class="w-full h-full">
                                   <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0"
                                       uk-video="automute: true" allowfullscreen uk-responsive class="w-full lg:h-64 h-40"></iframe>
                               </div>
                   
                               <div class="p-4 space-y-3"> 
                                  
                                   <div class="flex space-x-4 lg:font-bold">
                                       <a href="#" class="flex items-center space-x-2">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                               </svg>
                                           </div>
                                           <div> Like</div>
                                       </a>
                                       <a href="#" class="flex items-center space-x-2">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                               </svg>
                                           </div>
                                           <div> Comment</div>
                                       </a>
                                       <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                           <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                   <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                               </svg>
                                           </div>
                                           <div> Share</div>
                                       </a>
                                   </div>
                                   <div class="flex items-center space-x-3 pt-2"> 
                                       <div class="flex items-center">
                                           <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                           <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                           <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                       </div>
                                       <div class="dark:text-gray-100">
                                           Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                       </div>
                                   </div>
                   
                                   <div class="border-t py-4 space-y-4 dark:border-gray-600">
                                       <div class="flex">
                                           <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                           </div>
                                           <div>
                                               <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                                   <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                                           class="uil-grin-tongue-wink"> </i> </p>
                                                   <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                               </div>
                                               <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                                   <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                   <a href="#"> Replay </a>
                                                   <span> 3d </span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="flex">
                                           <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                           </div>
                                           <div>
                                               <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                                   <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                                   <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                               </div>
                                               <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                                   <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                                   <a href="#"> Replay </a>
                                                   <span> 3d </span>
                                               </div>
                                           </div>
                                       </div>
                                      
                                   </div>
                                   
                                   <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>
                   
                                   <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                                       <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                                       <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                           <a href="#">
                                               <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a>
                                           <a href="#">
                                               <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a>
                                           <a href="#">
                                               <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                           </a> 
                                       </div>
                                   </div>
                   
                               </div>
                   
                           </div> 
                   
                           <div class="flex justify-center mt-6">
                               <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                   Load more ..</a>
                           </div>
                       
      
                        </div>

                        <!-- Sidebar -->
                        <div class="w-full space-y-6">
                        
                            <div class="widget card p-5">
                                <h4 class="text-lg font-semibold"> About </h4>
                                <ul class="text-gray-600 space-y-3 mt-3">
                                    <li class="flex items-center space-x-2"> 
                                        <ion-icon name="home-sharp" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                                        Live In <strong> Cairo , Eygept  </strong>
                                    </li>
                                    <li class="flex items-center space-x-2"> 
                                        <ion-icon name="globe" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                                        From <strong> Aden , Yemen  </strong>
                                    </li>
                                    <li class="flex items-center space-x-2"> 
                                        <ion-icon name="heart-sharp" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                                        From <strong> Relationship  </strong>
                                    </li>
                                    <li class="flex items-center space-x-2"> 
                                        <ion-icon name="logo-rss" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                                        Flowwed By <strong> 3,240 Peaple </strong>
                                    </li>                                
                                </ul>
                                <div class="gap-3 grid grid-cols-3 mt-4">
                                  <img src="assets/images/avatars/avatar-lg-2.jpg" alt="" class="object-cover rounded-lg col-span-full">
                                  <img src="assets/images/avatars/avatar-2.jpg" alt="" class="rounded-lg">
                                  <img src="assets/images/avatars/avatar-4.jpg" alt="" class="rounded-lg">
                                  <img src="assets/images/avatars/avatar-5.jpg" alt="" class="rounded-lg"> 
                              </div>
                              <a href="#" class="button gray mt-3 w-full"> Edit </a>
                            </div>
                        
                            <div class="widget card p-5 border-t">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <h4 class="text-lg font-semibold"> Friends </h4>
                                        <p class="text-sm"> 3,4510 Friends</p>
                                    </div>
                                    <a href="#" class="text-blue-600 ">See all</a>
                                </div>
                                <div class="grid grid-cols-3 gap-3 text-gray-600 font-semibold">
                                    <a href="#">  
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Dennis Han </div>
                                    </a>
                                    <a href="#">  
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                            <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Erica Jones </div>
                                    </a>
                                    <a href="#">  
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                            <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Stella Johnson </div>
                                    </a>
                                    <a href="#">  
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                            <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Alex Dolgove</div>
                                    </a>
                                    <a href="#">  
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                            <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Jonathan Ali </div>
                                    </a>
                                    <a href="#">  
                                        <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                            <img src="assets/images/avatars/avatar-6.jpg" alt="" class="w-full h-full object-cover absolute">
                                        </div>
                                        <div class="text-sm truncate"> Erica Han </div>
                                    </a>
                                </div>
                              <a href="#" class="button gray mt-3 w-full">  See all </a>
                            </div>
      
                            <div class="widget card p-5 border-t">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <h4 class="text-lg font-semibold"> Groups </h4>
                                    </div>
                                    <a href="#" class="text-blue-600 "> See all</a>
                                </div>
                                <div>
                              
                                  <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                      <a href="timeline-group.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                          <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
                                      </a>
                                      <div class="flex-1">
                                          <a href="timeline-page.html" class="text-base font-semibold capitalize"> Graphic Design  </a>
                                          <div class="text-sm text-gray-500 mt-0.5"> 345K  Following</div>
                                      </div>
                                      <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                                          Join
                                      </a>
                                  </div>
                                  <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                      <a href="timeline-group.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                          <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                                      </a>
                                      <div class="flex-1">
                                          <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mountain Riders </a>
                                          <div class="text-sm text-gray-500 mt-0.5"> 452k Following </div>
                                      </div>
                                      <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                                          Join
                                      </a>
                                  </div>
                                  <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                      <a href="timeline-group.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                          <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0" alt="">
                                      </a>
                                      <div class="flex-1">
                                          <a href="timeline-page.html" class="text-base font-semibold capitalize">  Coffee Addicts  </a>
                                          <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                                      </div>
                                      <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                                          Join
                                      </a>
                                  </div>
                                  <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                                      <a href="timeline-group.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                                          <img src="assets/images/group/group-1.jpg" class="absolute w-full h-full inset-0" alt="">
                                      </a>
                                      <div class="flex-1">
                                          <a href="timeline-page.html" class="text-base font-semibold capitalize"> Architecture    </a>
                                          <div class="text-sm text-gray-500 mt-0.5"> 237K Following</div>
                                      </div>
                                      <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                                          Join
                                      </a>
                                  </div>
                          
                                </div>
                            </div>
      
                        </div>
                    </div>
                          
                    <!-- Friends  -->
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <h2 class="text-xl font-semibold"> Friends</h2>
 
                        <nav class="responsive-nav border-b">
                            <ul>
                                <li class="active"><a href="#" class="lg:px-2"> All Friends <span> 3,4510 </span> </a></li>
                                <li><a href="#" class="lg:px-2"> Recently added </a></li>
                                <li><a href="#" class="lg:px-2"> Family </a></li>
                                <li><a href="#" class="lg:px-2"> University </a></li> 
                            </ul>
                        </nav>

                        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">

                            <div class="card p-2">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                </a>
                                <div class="pt-3 px-1">
                                    <a href="timeline.html" class="text-base font-semibold mb-0.5">  James Lewis </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card p-2">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                </a>
                                <div class="pt-3 px-1">
                                    <a href="timeline.html" class="text-base font-semibold mb-0.5"> Monroe Parker  </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card p-2">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-4.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                </a>
                                <div class="pt-3 px-1">
                                    <a href="timeline.html" class="text-base font-semibold mb-0.5">  Martin Gray  </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card p-2">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-7.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                </a>
                                <div class="pt-3 px-1">
                                    <a href="timeline.html" class="text-base font-semibold mb-0.5">  Alex Michael </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card p-2">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-5.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                </a>
                                <div class="pt-3 px-1">
                                    <a href="timeline.html" class="text-base font-semibold mb-0.5"> Jesse Stevens  </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card p-2">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-6.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                </a>
                                <div class="pt-3 px-1">
                                    <a href="timeline.html" class="text-base font-semibold mb-0.5"> Erica Jones  </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card p-2">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                </a>
                                <div class="pt-3 px-1">
                                    <a href="timeline.html" class="text-base font-semibold mb-0.5">  James Lewis </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card p-2">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                                </a>
                                <div class="pt-3 px-1">
                                    <a href="timeline.html" class="text-base font-semibold mb-0.5"> Monroe Parker  </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                        Following
                                    </button>
                                </div>
                            </div>

                        </div>
                             
                        <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
                        </div>

                    </div>

                    <!-- Photos  -->
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <div class="flex justify-between items-start relative md:mb-4 mb-3">
                            <div class="flex-1">
                                <h2 class="text-2xl font-semibold"> Photos </h2>
                                <nav class="responsive-nav style-2 md:m-0 -mx-4">
                                    <ul>
                                        <li class="active"><a href="#">  Photos of you  <span> 230</span> </a></li>
                                        <li><a href="#"> Recently added </a></li>
                                        <li><a href="#"> Family </a></li>
                                        <li><a href="#"> University </a></li>
                                        <li><a href="#"> Albums </a></li>
                                    </ul>
                                </nav>
                            </div>
                            <a href="#offcanvas-create" uk-toggle class="flex items-center justify-center z-10 h-10 w-10 rounded-full bg-blue-600 text-white absolute right-0"
                            data-tippy-placement="left" title="Create New Album">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>

                        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-3 mt-5">
                            <div>
                                <div class="bg-green-400 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                    <img src="assets/images/post/img-1.jpg" class="w-full h-full absolute object-cover inset-0">
                                    <!-- overly-->
                                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                    <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                        <div class="text-base"> Image description  </div>
                                        <div class="flex justify-between text-xs">
                                           <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                    <img src="assets/images/post/img-2.jpg" class="w-full h-full absolute object-cover inset-0">
                                    <!-- overly-->
                                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                    <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                        <div class="text-base"> Image description  </div>
                                        <div class="flex justify-between text-xs">
                                           <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="w-full h-full absolute object-cover inset-0">
                                    <!-- overly-->
                                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                    <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                        <div class="text-base"> Image description  </div>
                                        <div class="flex justify-between text-xs">
                                           <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                    <img src="assets/images/post/img-4.jpg" class="w-full h-full absolute object-cover inset-0">
                                    <!-- overly-->
                                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                    <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                        <div class="text-base"> Image description  </div>
                                        <div class="flex justify-between text-xs">
                                           <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                    <img src="assets/images/avatars/avatar-7.jpg" class="w-full h-full absolute object-cover inset-0">
                                    <!-- overly-->
                                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                    <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                        <div class="text-base"> Image description  </div>
                                        <div class="flex justify-between text-xs">
                                           <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                    <img src="assets/images/avatars/avatar-4.jpg" class="w-full h-full absolute object-cover inset-0">
                                    <!-- overly-->
                                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                    <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                        <div class="text-base"> Image description  </div>
                                        <div class="flex justify-between text-xs">
                                           <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                    <img src="assets/images/post/img-1.jpg" class="w-full h-full absolute object-cover inset-0">
                                    <!-- overly-->
                                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                    <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                        <div class="text-base"> Image description  </div>
                                        <div class="flex justify-between text-xs">
                                           <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                    <img src="assets/images/post/img-2.jpg" class="w-full h-full absolute object-cover inset-0">
                                    <!-- overly-->
                                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                    <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                        <div class="text-base"> Image description  </div>
                                        <div class="flex justify-between text-xs">
                                           <a href="#">  Like</a>
                                           <a href="#">  Comment </a>
                                           <a href="#">  Share </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
                        </div>

                    </div>

                    <!-- Pages  -->
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <h2 class="text-2xl font-semibold"> Pages</h2>
                        <nav class="responsive-nav border-b md:m-0 -mx-4">
                            <ul>
                                <li class="active"><a href="#" class="lg:px-2"> Following </a></li>
                                <li><a href="#" class="lg:px-2"> Newest </a></li>
                                <li><a href="#" class="lg:px-2"> My pages</a></li>
                                <li><a href="#" class="lg:px-2"> Suggestions</a></li>
                            </ul>
                        </nav>

                        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4 mt-5">
                            
                            <div class="card">
                                <a href="timeline-page.html">
                                    <img src="assets/images/avatars/avatar-4.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                                </a>
                                <div class="p-3">
                                    <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> John Michael  </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                                        Following
                                    </button>
                                </div>
                            </div>
                           
                            <div class="card">
                                <a href="timeline-page.html">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                                </a>
                                <div class="p-3">
                                    <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> 
                                        Alex Dolgove </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                                        Following
                                    </button>
                                </div>
                            </div>
                            
                            <div class="card">
                                <a href="timeline-page.html">
                                    <img src="assets/images/avatars/avatar-5.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                                </a>
                                <div class="p-3">
                                    <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> Dennis Han  </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <a href="timeline-page.html">
                                    <img src="assets/images/avatars/avatar-7.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                                </a>
                                <div class="p-3">
                                    <a href="timeline-page.html" class="text-base font-semibold mb-0.5">  Monroe Parker   </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <a href="timeline-page.html">
                                    <img src="assets/images/avatars/avatar-6.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                                </a>
                                <div class="p-3">
                                    <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> Erica Jones </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <a href="timeline-page.html">
                                    <img src="assets/images/avatars/avatar-2.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                                </a>
                                <div class="p-3">
                                    <a href="timeline-page.html" class="text-base font-semibold mb-0.5">  Stella Johnson</a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                                        Following
                                    </button>
                                </div>
                            </div>
                            <div class="card">
                                <a href="timeline-page.html">
                                    <img src="assets/images/avatars/avatar-4.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                                </a>
                                <div class="p-3">
                                    <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> John Michael  </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                                        Following
                                    </button>
                                </div>
                            </div>
                           
                            <div class="card">
                                <a href="timeline-page.html">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                                </a>
                                <div class="p-3">
                                    <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> 
                                        Alex Dolgove </a>
                                    <p class="font-medium text-sm">843K Following </p>
                                    <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                                        Following
                                    </button>
                                </div>
                            </div>

                        </div>
                         
                        <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
                        </div>
                        
                    </div>

                    <!-- Groups  -->
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <div class="flex justify-between items-start relative md:mb-4 mb-3">
                            <div class="flex-1">
                                <h2 class="text-2xl font-semibold"> Groups </h2>
                                <nav class="responsive-nav style-2 md:m-0 -mx-4">
                                    <ul>
                                        <li class="active"><a href="#"> Joined <span> 230</span> </a></li>
                                        <li><a href="#"> My Groups </a></li>
                                        <li><a href="#"> Discover </a></li> 
                                    </ul>
                                </nav>
                            </div>
                            <a href="create-group.html" data-tippy-placement="left" data-tippy="" data-original-title="Create New Album" class="bg-blue-100 font-semibold py-2 px-6 rounded-md text-sm md:mt-0 mt-3 text-blue-600">
                                Create       
                            </a>
                        </div>

                        <div class="grid md:grid-cols-2  grid-cols-2 gap-x-2 gap-y-4 mt-3"> 
                             
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">Graphic Design </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mountain Riders  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">  Coffee Addicts  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-5.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">  Property Rent  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-1.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize"> Architecture </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">Graphic Design </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mountain Riders  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">  Coffee Addicts  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            
                        </div>

                        <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
                        </div>

                    </div>

                     <!-- Videos -->
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">  
                        
                        <h2 class="text-xl font-semibold"> Friend</h2>
                        <nav class="responsive-nav border-b">
                            <ul>
                                <li class="active"><a href="#" class="lg:px-2">   Suggestions </a></li>
                                <li><a href="#" class="lg:px-2"> Newest </a></li>
                                <li><a href="#" class="lg:px-2"> My Videos </a></li>
                            </ul>
                        </nav>

                        <div class="grid md:grid-cols-3 grid-cols-2  gap-x-2 gap-y-4 mt-3">  
                            <div>
                                <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                                    <img src="assets/images/video/img-1.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                                    <img src="assets/images/video/img-2.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                                    <img src="assets/images/video/img-3.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                                    <img src="assets/images/video/img-4.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                                    <img src="assets/images/video/img-5.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                                
                            </div>
                            <div>
                                <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                                    <img src="assets/images/video/img-6.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                                    <img src="assets/images/video/img-3.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                                    <img src="assets/images/video/img-2.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                                    <img src="assets/images/video/img-4.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                                    <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
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
                        <ion-icon name="search" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="settings-outline" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="ellipsis-vertical" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"  
                    uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                        <ul class="space-y-1">
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                 <ion-icon name="checkbox-outline" class="pr-2 text-xl"></ion-icon> Mark all as read
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="settings-outline" class="pr-2 text-xl"></ion-icon>  Chat setting 
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                              </a> 
                          </li> 
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="star-outline"  class="pr-2 text-xl"></ion-icon>  Create a group chat 
                              </a> 
                          </li>
                        </ul>
                    </div>
                              

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

                <div class="p-1">
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-3.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="contact-username">Adrian Mohani </div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-6.jpg" alt="">
                        </div>
                        <div class="contact-username"> Jonathan Madano</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                   

                </div>
                <div class="p-1">
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-3.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="contact-username">Adrian Mohani </div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-6.jpg" alt="">
                        </div>
                        <div class="contact-username"> Jonathan Madano</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                   

                </div>

            </div>
        </div>
    </div>

    <!-- Craete post modal -->
    <div id="create-post-modal" class="create-post" uk-modal>
        <div
            class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">
    
            <div class="text-center py-4 border-b">
                <h3 class="text-lg font-semibold"> Create Post </h3>
                <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 m-1 right-2" type="button" uk-close uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
            </div>
            <div class="flex flex-1 items-start space-x-4 p-5">
                <img src="assets/images/avatars/avatar-2.jpg"
                    class="bg-gray-200 border border-white rounded-full w-11 h-11">
                <div class="flex-1 pt-2">
                    <textarea class="uk-textare text-black shadow-none focus:shadow-none text-xl font-medium resize-none" rows="5"
                        placeholder="What's Your Mind ? Stella!"></textarea>
                </div>
    
            </div>
            <div class="bsolute bottom-0 p-4 space-x-4 w-full">
                <div class="flex bg-gray-50 border border-purple-100 rounded-2xl p-3 shadow-sm items-center">
                    <div class="lg:block hidden"> Add to your post </div>
                    <div class="flex flex-1 items-center lg:justify-end justify-center space-x-2">
                    
                        <svg class="bg-blue-100 h-9 p-1.5 rounded-full text-blue-600 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <svg class="text-red-600 h-9 p-1.5 rounded-full bg-red-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"> </path></svg>
                        <svg class="text-green-600 h-9 p-1.5 rounded-full bg-green-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                        <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"> </path></svg>
                        <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"> </path></svg>
                        <svg class="text-pink-600 h-9 p-1.5 rounded-full bg-pink-100 w-9 cursor-pointer" id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        <svg class="text-purple-600 h-9 p-1.5 rounded-full bg-purple-100 w-9 cursor-pointer" id="veiw-more" hidden fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path> </svg>
                       
                        <!-- view more -->
                        <svg class="hover:bg-gray-200 h-9 p-1.5 rounded-full w-9 cursor-pointer" id="veiw-more" uk-toggle="target: #veiw-more; animation: uk-animation-fade" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"> </path></svg>
                    
                    </div>
                </div>
            </div>
            <div class="flex items-center w-full justify-between p-3 border-t">
    
                <select class="selectpicker mt-2 col-4 story">
                    <option>Only me</option>
                    <option>Every one</option>
                    <option>People I Join </option>
                    <optionion>People Join Me</optionion>
                </select>
    
                <div class="flex space-x-2">
                    <a href="#" class="bg-red-100 flex font-medium h-9 items-center justify-center px-5 rounded-md text-red-600 text-sm">
                        <svg class="h-5 pr-1 rounded-full text-red-500 w-6 fill-current" id="veiw-more" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="false" style=""> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        Live </a>
                    <a href="#" class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium">
                      Share </a>    
                </div>

                <a href="#" hidden
                    class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold">
                    Share </a>
            </div>
        </div>
    </div>
    
    <!-- Create new album -->

    <div id="offcanvas-create" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar lg:w-4/12 w-full dark:bg-gray-700 dark:text-gray-300 p-0 bg-white flex flex-col justify-center">
    
            <button class="uk-offcanvas-close absolute" type="button" uk-close></button>

            <!-- notivication header -->
            <div class="-mb-1 border-b font-semibold px-5 py-5 text-lg">
                <h4> Create album </h4>
            </div>

            <div class="p-6 space-y-3 flex-1">
                <div>
                    <label> Album Name  </label>
                    <input type="text" class="with-border" placeholder="">
                </div>
                <div>
                    <label> Visibilty   </label>
                    <select id="" name=""  class="shadow-none selectpicker with-border">
                        <option data-icon="uil-bullseye"> Private </option>
                        <option data-icon="uil-chat-bubble-user">My Following</option>
                        <option data-icon="uil-layer-group-slash">Unlisted</option>
                        <option data-icon="uil-globe" selected>Puplic</option>
                    </select>
                </div>
                <div uk-form-custom class="w-full py-3">
                        <div class="bg-gray-100 border-2 border-dashed flex flex-col h-32 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                            </svg>
                        </div>
                    <input type="file">
                </div>
               
            </div>
            <div class="p-5">
                <button type="button"  class="button w-full">
                    Create Now
                </button>
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

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Aug 2021 22:02:16 GMT -->
</html>