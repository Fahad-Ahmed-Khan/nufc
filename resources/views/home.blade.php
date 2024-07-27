@extends('layouts.index')

@section('content')

    <!-- Slider Section Start -->
    <div id="rs-slider" class="rs-slider home-slider slider-navigation">
        <div class="slider-carousel owl-carousel">
            <div class="single-slider">
                <div class="container">
                    <div class="text-part">
                        <h2 class="sub-title wow fadeInLeft" data-wow-delay="1s">Welcome to</h2>
                        <h1 class="title wow fadeInRight" data-wow-delay="1s"><span class="primary-color">Nilore United<br /></span> Football Club</h1>
                        <div class="desc wow fadeInLeft" data-wow-delay="1s">We denounce with righteous indignation and dislike men who are so beguiled <br> and demoralized by the charms of pleasure of the moment.</div>
                        <div class="slider-btn wow fadeInRight" data-wow-delay="1s">
                            <a class="readon" href="{{route('registration.index')}}">Register Now</a>
                        </div>
                    </div>
                    <div class="fly-layer">
                        <div class="layer-image">
                            <div class="parallax-ball">
                                <img class="animate3" src="images/slider/ball1.png" alt="img">
                            </div>
                            <div class="animate4">
                                <img src="images/slider/h1-layer1.png" alt="Slider Layer Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slide2">
                <div class="container">
                    <div class="image-part common">
                        <div class="image-wrap">
                            <img class="player animate5" src="images/slider/h1-layer2.png" alt="">
                            <img class="ball animate6" src="images/slider/ball2.png" alt="">
                        </div>
                    </div>
                    <div class="text-part common">
                        <h2 class="sub-title">Best Soccer</h2>
                        <h1 class="title"><span class="primary-color">Club</span> In Nilore</h1>
                        <div class="desc">We denounce with righteous indignation and dislike men who are so beguiled <br> and demoralized by the charms of pleasure of the moment.</div>
                        <div class="slider-btn">
                            <a class="readon" href="{{route('registration.index')}}">Register Now !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Upcomming Match & Video Section Start -->
    <div class="couter-and-upcomming pt-100 md-pt-80 mb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pr-0 col-padding-md md-mb-30">
                    <div class="rs-upcoming-match bg1 text-center">
                        <div class="title-style">
                            <h4 class="margin-0 white-color">Upcoming Match</h4>
                            <span class="line-bg pt-18 y-w"></span>
                        </div>
                        <div class="rs-countdown mt-45 md-mt-30">
                            <div id="countdown" class="countdown"></div>
                        </div>
                        <div class="teams mt-25 md-mt-50">
                            <div class="row rs-vertical-middle">
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="team-logo">
                                        <img class="size-80" src="images/team-logo/1.png" alt="Valencia">
                                        <div class="name white-color">Valencia</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="versase">VS</div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="team-logo">
                                        <img class="size-80" src="images/team-logo/2.png" alt="Real Sociedad">
                                        <div class="name white-color">Real Sociedad</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="match-info mt-28">
                            <ul>
                                <li>Mestalla Stadium</li>
                                <li>August 14, 2019</li>
                            </ul>
                            <div class="time pt-15 white-color">19:00:00</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-30 col-padding-md">
                    <div class="rs-video big-space bg2 bdru-4 text-center">
                        <div class="video-contents">
                            <a class="popup-videos play-btn" href="https://www.youtube.com/watch?v=t17O6JoU2Ew"><i class="fa fa-play"></i></a>
                            <h3 class="title white-color mt-18 mb-0">Last Match Highlights</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Upcomming Match & Video Section End -->

    <!-- Match Result Section Start -->
    <div class="rs-match-result style1 nav-style pb-100 md-pb-80">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Camp Nou Stadium</div>
                            <div class="date">April 04, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/8.png" alt="Manchester City">
                                <div class="name">Manchester City</div>
                            </div>
                            <div class="score">1-2</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/9.png" alt="Barcelona">
                                <div class="name">Barcelona</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Stamford Bridge</div>
                            <div class="date">April 04, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/8.png" alt="Manchester City">
                                <div class="name">Manchester City</div>
                            </div>
                            <div class="score">1-0</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/10.png" alt="Chelsea">
                                <div class="name">Chelsea</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Central Olympic Stadium</div>
                            <div class="date">May 17, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/2.png" alt="Real Sociedad">
                                <div class="name">Real Sociedad</div>
                            </div>
                            <div class="score">2-2</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/3.png" alt="Liverpool">
                                <div class="name">Atletico Madrid</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Central Olympic Stadium</div>
                            <div class="date">April 09, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/4.png" alt="Real Madrid">
                                <div class="name">Real Madrid</div>
                            </div>
                            <div class="score">3-3</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/3.png" alt="Liverpool">
                                <div class="name">Manchester City</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Wanda Metropolitano Stadium</div>
                            <div class="date">April 01, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/5.png" alt="Manchester Unt">
                                <div class="name">Manchester Unt</div>
                            </div>
                            <div class="score">2-3</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/6.png" alt="Atletico Madrid">
                                <div class="name">Atletico Madrid</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Mestalla Stadium</div>
                            <div class="date">April 05, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/5.png" alt="Manchester Unt">
                                <div class="name">Manchester Unt</div>
                            </div>
                            <div class="score">3-3</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/1.png" alt="Valencia">
                                <div class="name">Valencia</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Central Olympic Stadium</div>
                            <div class="date">April 02, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/5.png" alt="Manchester Unt">
                                <div class="name">Manchester Unt</div>
                            </div>
                            <div class="score">3-2</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/3.png" alt="Liverpool">
                                <div class="name">Liverpool</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Emirates Stadium</div>
                            <div class="date">April 02, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/5.png" alt="Manchester Unt">
                                <div class="name">Manchester Unt</div>
                            </div>
                            <div class="score">2-1</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/7.png" alt="Arsenal">
                                <div class="name">Arsenal</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Etihad Stadium</div>
                            <div class="date">April 05, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/8.png" alt="Manchester City">
                                <div class="name">Manchester City</div>
                            </div>
                            <div class="score">4-1</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/1.png" alt="Valencia">
                                <div class="name">Valencia</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Wanda Metropolitano Stadium</div>
                            <div class="date">April 04, 2019</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/8.png" alt="Manchester City">
                                <div class="name">Manchester City</div>
                            </div>
                            <div class="score">3-1</div>
                            <div class="logo">
                                <img class="size-80" src="images/team-logo/6.png" alt="Atletico Madrid">
                                <div class="name">Atletico Madrid</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Match Result Section End -->

    <!-- Latest News Section Start -->
    <div class="rs-lates-news sec-bg pt-91 pb-100 md-pt-70 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-72">
                    <div class="title-style mb-50 md-mb-30">
                        <h2 class="margin-0 uppercase">Latest News</h2>
                        <span class="line-bg left-line y-b pt-10"></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-30">
                            <div class="latest-news-grid">
                                <div class="news-img">
                                    <a href="#"><img src="images/latest-news/1.jpg" alt="News Image"></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>May 25, 2019</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="#">Latest Point Table For The Premier League</a>
                                    </h3>
                                    <div class="news-desc mt-10">The snatch is a wide-grip, one-move lift. The clean and jerk is a close-grip...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="latest-news-grid small-grid">
                                <div class="news-img">
                                    <a href="#"><img src="images/latest-news/2.jpg" alt="News Image"></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>May 13, 2019</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="#">Everything In Soccer Starts Premier League</a>
                                    </h3>
                                    <div class="news-desc mt-10">The snatch is a wide-grip, one-move lift. The clean and jerk is a close-grip...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="latest-news-grid small-grid">
                                <div class="news-img">
                                    <a href="#"><img src="images/latest-news/3.jpg" alt="News Image"></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>May 14, 2019</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="#">City Tops Chelsea in Community Shield Here</a>
                                    </h3>
                                    <div class="news-desc mt-10">The snatch is a wide-grip, one-move lift. The clean and jerk is a close-grip...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="latest-news-grid small-grid">
                                <div class="news-img">
                                    <a href="#"><img src="images/latest-news/4.jpg" alt="News Image"></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>May 14, 2019</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="#">Ground Round Meatball  Starts Right Here</a>
                                    </h3>
                                    <div class="news-desc mt-10">The snatch is a wide-grip, one-move lift. The clean and jerk is a close-grip...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="title-style mb-50 md-mb-30">
                        <h2 class="margin-0 uppercase">Point table</h2>
                        <span class="line-bg left-line y-b pt-10"></span>
                    </div>
                    <div class="rs-pointtable no-overflow gaps bg3 bdru-4 mb-48 md-mb-72">
                        <table>
                            <tbody>
                            <tr>
                                <th></th>
                                <th>Team</th>
                                <th>W</th>
                                <th>L</th>
                                <th>PTS</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Manchester Unt</td>
                                <td>26</td>
                                <td>3</td>
                                <td>83</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Real Madrid</td>
                                <td>24</td>
                                <td>4</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Man City</td>
                                <td>24</td>
                                <td>3</td>
                                <td>79</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Barcelona</td>
                                <td>22</td>
                                <td>3</td>
                                <td>75</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Liverpool</td>
                                <td>22</td>
                                <td>4</td>
                                <td>74</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Chelsea</td>
                                <td>20</td>
                                <td>4</td>
                                <td>70</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Atletico Madrid</td>
                                <td>18</td>
                                <td>6</td>
                                <td>64</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Valencia</td>
                                <td>15</td>
                                <td>9</td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Real Sociedad</td>
                                <td>12</td>
                                <td>10</td>
                                <td>48</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Arsenal</td>
                                <td>12</td>
                                <td>12</td>
                                <td>48</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="title-style mb-50 md-mb-30">
                        <h2 class="margin-0 uppercase">Match fixtures</h2>
                        <span class="line-bg left-line y-b pt-10"></span>
                    </div>
                    <div class="rs-match-result style1 modify-style">
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 04, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/8.png" alt="Manchester City">
                                            <div class="name">Manchester City</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">12:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/9.png" alt="Barcelona">
                                            <div class="name">Barcelona</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Camp Nou Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 04, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/8.png" alt="Manchester City">
                                            <div class="name">Manchester City</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">03:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/10.png" alt="Chelsea">
                                            <div class="name">Chelsea</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Stamford Bridge</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">May 17, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/2.png" alt="Real Sociedad">
                                            <div class="name">Real Sociedad</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">02:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/3.png" alt="Liverpool">
                                            <div class="name">Manchester City</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Central Olympic Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 09, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/4.png" alt="Real Madrid">
                                            <div class="name">Real Madrid</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">10:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/3.png" alt="Liverpool">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Central Olympic Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 01, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/5.png" alt="Manchester Unt">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">09:30</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/6.png" alt="Atletico Madrid">
                                            <div class="name">Atletico Madrid</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Wanda Metropolitano Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 05, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/5.png" alt="Manchester Unt">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">08:40</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/1.png" alt="Valencia">
                                            <div class="name">Valencia</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Mestalla Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 02, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/5.png" alt="Manchester Unt">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">12:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/3.png" alt="Liverpool">
                                            <div class="name">Liverpool</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Central Olympic Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 02, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/5.png" alt="Manchester Unt">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">07:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/7.png" alt="Arsenal">
                                            <div class="name">Arsenal</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Emirates Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 05, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/8.png" alt="Manchester City">
                                            <div class="name">Manchester City</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">05:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/1.png" alt="Valencia">
                                            <div class="name">Valencia</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Etihad Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 04, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/8.png" alt="Manchester City">
                                            <div class="name">Manchester City</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">03:30</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="images/team-logo/6.png" alt="Atletico Madrid">
                                            <div class="name">Atletico Madrid</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Wanda Metropolitano Stadium</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest News Section End -->

    <!-- About Us Section Start -->
    <div class="rs-about bg4 pt-92 pb-78 md-pt-72 md-pb-58">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-5 md-mb-30">
                    <div class="contant-part">
                        <div class="title-style mb-50 md-mb-30">
                            <h2 class="margin-0 uppercase white-color">Who We Are</h2>
                            <span class="line-bg left-line y-w pt-10"></span>
                        </div>
                        <div class="description dark-gray-color">
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque.</p>
                            <p class="margin-0">Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                        </div>
                        <div class="read-btn mt-39">
                            <a class="readon" href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 margin-0 pl-40 col-padding-md">
                    <div class="image-part">
                        <img src="images/about/about-home.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Team Pyaler Section Start -->
    <div class="rs-team style1 nav-style pt-92 pb-100 md-pt-72 md-pb-80">
        <div class="container">
            <div class="title-style text-center mb-50 md-mb-30">
                <h2 class="margin-0 uppercase">Team Player</h2>
                <span class="line-bg y-b pt-10"></span>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                <div class="player-item">
                    <div class="player-img">
                        <img src="images/team/1.jpg" alt="">
                    </div>
                    <div class="detail-wrap">
                        <div class="person-details">
                            <h3 class="player-title"><span class="squad-numbers">18</span>
                                <a href="team-single.html">Semus Jemkro</a>
                                <span class="player-position">Forward</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="player-item">
                    <div class="player-img">
                        <img src="images/team/2.jpg" alt="">
                    </div>
                    <div class="detail-wrap">
                        <div class="person-details">
                            <h3 class="player-title"><span class="squad-numbers">03</span>
                                <a href="team-single.html">Venose Ferdon</a>
                                <span class="player-position">Midfielder</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="player-item">
                    <div class="player-img">
                        <img src="images/team/3.jpg" alt="">
                    </div>
                    <div class="detail-wrap">
                        <div class="person-details">
                            <h3 class="player-title"><span class="squad-numbers">11</span>
                                <a href="team-single.html">Debasti Nikor</a>
                                <span class="player-position">Defender</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="player-item">
                    <div class="player-img">
                        <img src="images/team/4.jpg" alt="">
                    </div>
                    <div class="detail-wrap">
                        <div class="person-details">
                            <h3 class="player-title"><span class="squad-numbers">10</span>
                                <a href="team-single.html">Sebasti Nikola</a>
                                <span class="player-position">striker</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="player-item">
                    <div class="player-img">
                        <img src="images/team/5.jpg" alt="">
                    </div>
                    <div class="detail-wrap">
                        <div class="person-details">
                            <h3 class="player-title"><span class="squad-numbers">06</span>
                                <a href="team-single.html">Ores Luperto</a>
                                <span class="player-position">Forward</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="player-item">
                    <div class="player-img">
                        <img src="images/team/6.jpg" alt="">
                    </div>
                    <div class="detail-wrap">
                        <div class="person-details">
                            <h3 class="player-title"><span class="squad-numbers">15</span>
                                <a href="team-single.html">Jores Leperto</a>
                                <span class="player-position">Defender</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Pyaler Section End -->

    <!-- Counter Section Start -->
    <div class="rs-counter bg5 style1 pt-103 pb-92 md-pt-80 md-pb-70 sm-pt-73">
        <div class="container">
            <div class="rs-count">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 md-mb-30">
                        <div class="rs-counter-list text-center">
                            <h2 class="counter-number primary-color">350</h2>
                            <h3 class="counter-text uppercase white-color">Total matches</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 md-mb-30">
                        <div class="rs-counter-list text-center">
                            <h2 class="counter-number primary-color">25</h2>
                            <h3 class="counter-text uppercase white-color">Total trainers</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="rs-counter-list text-center">
                            <h2 class="counter-number primary-color">95</h2>
                            <h3 class="counter-text uppercase white-color">Total players</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="rs-counter-list text-center">
                            <h2 class="counter-number primary-color">26</h2>
                            <h3 class="counter-text uppercase white-color">Total awards</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Match Gallery Start -->
    <div class="rs-gallery style1 pt-92 pb-100 md-pt-72 md-pb-80">
        <div class="container">
            <div class="title-style text-center mb-50 md-mb-30">
                <h2 class="margin-0 uppercase">Match Gallery</h2>
                <span class="line-bg y-b pt-10"></span>
            </div>
            <div class="row pl-15 pr-15">
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="images/gallery/1.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="images/gallery/1.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="images/gallery/2.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="images/gallery/2.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="images/gallery/3.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="images/gallery/3.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="images/gallery/4.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="images/gallery/4.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="images/gallery/5.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="images/gallery/5.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0">
                    <div class="gallery-grid">
                        <img src="images/gallery/6.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="images/gallery/6.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Match Gallery End -->

    <!-- Champion Awards Start -->
    <div class="rs-awards bg6 pt-92 pb-100 md-pt-72 md-pb-80">
        <div class="container">
            <div class="title-style text-center mb-50 md-mb-30">
                <h2 class="margin-0 uppercase white-color">Champion Awards</h2>
                <span class="line-bg y-w pt-10"></span>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                <div class="item">
                    <div class="award-wrap">
                        <div class="champion-logo">
                            <img src="images/award/1.png" alt="">
                        </div>
                        <div class="champion-details">
                            <div class="year-details">
                                <h3>UEFA Champions League</h3>
                            </div>
                            <div class="champion-no">05</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="award-wrap">
                        <div class="champion-logo">
                            <img src="images/award/2.png" alt="">
                        </div>
                        <div class="champion-details">
                            <div class="year-details">
                                <h3>UEFA Europa League</h3>
                            </div>
                            <div class="champion-no">07</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="award-wrap">
                        <div class="champion-logo">
                            <img src="images/award/3.png" alt="">
                        </div>
                        <div class="champion-details">
                            <div class="year-details">
                                <h3>UEFA Super Cup</h3>
                            </div>
                            <div class="champion-no">06</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="award-wrap">
                        <div class="champion-logo">
                            <img src="images/award/4.png" alt="">
                        </div>
                        <div class="champion-details">
                            <div class="year-details">
                                <h3>FIFA Club World Cup</h3>
                            </div>
                            <div class="champion-no">03</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Champion Awards End -->

@endsection
