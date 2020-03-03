<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ivan de Wolf</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title">
                    Ivan&nbsp;<span class="bold">de&nbsp;Wolf</span>
                </div>
                <div class="position">
                    Computer Science
                </div>
                <div class="address">
                    Veenendaal, The Netherlands
                </div>

                <div class="links">
                    <a href="tel:+31622419027">
                        <i class="fas fa-mobile"></i>
                        06 22419027
                    </a>
                    <a href="mailto:ivan.dewolf1997@gmail.com">
                        <i class="fas fa-envelope"></i>
                        ivan.dewolf1997@gmail.com
                    </a>
                    <a href="https://github.com/IvandeWolf" target="_blank">
                        <i class="fab fa-github"></i>
                        IvandeWolf
                    </a>
                    <a href="https://www.linkedin.com/in/IvandeWolf" target="_blank">
                        <i class="fab fa-linkedin"></i>
                        IvandeWolf
                    </a>
                </div>

                <div class="quote">
                    "All our dreams can come true, if we have the courage to pursue them." - Walt Disney
                </div>

                <!-- <div class="see_more"><i class="fas fa-chevron-down"></i></div> -->
            </div>
        </div>

        <div class="flex-center position-ref" style="background-color: light-grey;">
            <div class="section">
                <div class="section_title">
                    <span>Edu</span>cation<div class="section_title--bar"></div>
                </div>

                <div class="item">
                    <div class="item_header">
                        <div class="item_title">
                            University of Amsterdam
                            <div class="location">Amsterdam, The Netherlands</div>
                        </div>
                        
                        <div class="item_subtitle">
                            BSc Computer Science
                            <div class="datetime">sep. 2018 - PRESENT</div>
                        </div>
                    </div>

                    <ul>
                        <li>Currently enrolled in honours program with interest in physics courses.</li>
                        <li>Working at the university as a Teaching assistant and a Tutor.</li>
                    </ul>
                </div>

                <div class="item">
                    <div class="item_header">
                        <div class="item_title">Hogeschool van Arnhem en Nijmegen</div>
                        <div class="item_subtitle">HBO-ICT</div>
                    </div>
                    <div class="datetime">sep. 2017 - aug. 2018</div>

                    <ul>
                        <li>Propedeuse achieved</li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <div class="section_title">
                    <span>Cer</span>tificates<div class="section_title--bar"></div>
                </div>

                <div class="item">
                    <div class="item_header">
                        <div class="item_title">
                            Korteweg-de Vries Instituut voor Wiskunde
                            <div class="location">Amsterdam, The Netherlands</div>
                        </div>
                        
                        <div class="item_subtitle">
                            Mathematics
                            <div class="datetime">jul. 2018</div>
                        </div>
                    </div>

                    <ul>
                        <li>Certificate for Mathematics obtained by following a summer course.</li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <div class="section_title">
                    <span>Exp</span>erience<div class="section_title--bar"></div>
                </div>

                <div class="item">
                    <div class="item_header">
                        <div class="item_title">
                            University of Amsterdam
                            <div class="location">Amsterdam, The Netherlands</div>
                        </div>
                        
                        <div class="item_subtitle">
                            Tutor and Teaching Assistant
                            <div class="datetime">aug. 2019 - PRESENT</div>
                        </div>
                    </div>

                    <ul>
                        <li>Mentoring a group of 15 students in their academic skills.</li>
                        <li>Teaching Assistant for different courses as Computer Architecture, Linear Algebra and Web Technology.</li>
                    </ul>
                </div>

                <div class="item">
                    <div class="item_header">
                        <div class="item_title">
                            Circle Leisure Development
                            <div class="location">Veenendaal, The Netherlands</div>
                        </div>
                        
                        <div class="item_subtitle">
                            Software Developer
                            <div class="datetime">jan. 2017 - aug. 2019</div>
                        </div>
                    </div>

                    <ul>
                        <li>Programmed several escaperooms. (IJmuiden, Zandvoort, Veenendaal)</li>
                        <li>Worked with a lot of Raspberry Pi, Arduino and different sensors.</li>
                    </ul>
                </div>

                <div class="item">
                    <div class="item_header">
                        <div class="item_title">
                            Landwinkel De Eekhoeve and Theehuis bij Kees & Sien
                            <div class="location">Veenendaal, The Netherlands</div>
                        </div>
                        
                        <div class="item_subtitle">
                            Employee country shop and teahouse
                            <div class="datetime">feb. 2013 - dec. 2016</div>
                        </div>
                    </div>

                    <ul>
                        <li>Responsible for the production of Christmas packaging for companies and individuals.</li>
                        <li>Allround employee in the country shop.</li>
                        <li>Teahouse employee with various functions such as: Host, Bartender and Service.</li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <div class="section_title">
                    <span>Ext</span>racurricular<div class="section_title--bar"></div>
                </div>

                <div class="item">
                    <div class="item_header">
                        <div class="item_title">
                            Time registration system
                            <div class="location">Veenendaal, The Netherlands</div>
                        </div>
                        
                        <div class="item_subtitle">
                            Inventor & Programmer
                            <div class="datetime">nov. 2015 - dec. 2016</div>
                        </div>
                    </div>

                    <ul>
                        <li>Check in/out system made for staff. A web interface on which staff can keep track of the hours they worked. Employer can see the availability of employees and schedule them based on that. An overview of each employee per month is also available.</li>
                    </ul>
                </div>
            </div>

        </div>
    </body>
</html>
