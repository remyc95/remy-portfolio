<!DOCTYPE html>
<html ng-app="myModule">

<head>
    <meta charset="utf-8">
    <meta/>
    <title>Rémy Chaurand</title>
    <link rel="icon" href="images/riolu2.png" type="image/jpeg">
    <link rel="stylesheet" href="Styles/jssor_stylesheet.css" type="text/css">
    <link rel="stylesheet" href="Styles/stylesheet.css" type="text/css">
    <link rel="stylesheet" href="Styles/animate.css" type="text/css">

    <!--Let browser know website is optimized for mobile (which it isn't)-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>-->

    <script type="text/javascript" src="Scripts/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="Scripts/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="Scripts/slider_init.js"></script>
    <script type="text/javascript" src="Scripts/anchor.js"></script>
    <script type="text/javascript" src="Scripts/angular.min.js"></script>
    <script type="text/javascript" src="Scripts/angular-animate.min.js"></script>
    <script type="text/javascript" src="Scripts/angular-scroll-animate.js"></script>
    <script type="text/javascript" src="Scripts/Script.js"></script>


    <!-- GTFO OUT OF MY CODE YOU CHEEKY NOODLECAKE -->

</head>

<body ng-controller="myController">
    <?php include_once("analyticstracking.php") ?>
    
    <header>
        
        <div id="nav_bar" ng-show="nav_show" class="animate-show">
            <nav>
                <ul>
                    <li><a href="#top">Home</a></li>
                    <li><a href="#about_me_title">About Me</a></li>
                    <li><a href="#skills_title">Skills</a></li>
                    <li><a href="#langs_title">Languages</a></li>
                    <li><a href="#projects_title">Projects</a></li>
                    <li><a href="#future_title">Future</a></li>
                    <li><a href="#contact_title">Contact</a></li>
                </ul>
            </nav>
        </div>
        
    </header>
    
    <button id="nav_button" data-ng-click="navToggle()">Hide</button>

    <div id="top">
    
    <div when-visible="animateFrontIn" when-not-visible="animateFrontOut" class="hidden">
        <h1 class="center">Hi, I'm <span style="color: #FF3075">Rémy Chaurand.</span></h1>
        <h4 class="center"><code><span style="color: #E7FF61">document.write</span>(<span style="color: #73DCFF">'I am a programmer.'</span>);</code></h4>
    </div>

    </div>

    <div class="nav_point" id="about_me_title"></div>

    <div when-visible="animateElementIn" when-not-visible="animateElementOut" class="hidden">

        <div class="card_title">
            <h2>About Me</h2>
        </div>

        <div id="about_me" class="panel_border">
            
            
            <div id="me">
        
                <div id="me_img_div">
                    <center><img id="me_img" src="images/Prof_Square.jpg" alt="image of remy" /></center>

                    <div id="code_snippet">
                        <blockquote id="me_code">
                            <code><span style="color: #FF6A00">echo</span> <span style="color: #2E2E2E">"<span style="color: #4F2100">This is me.</span>";</span></code>
                        </blockquote>
                    </div>
                
                </div>
            
            </div>

            
            <div id="list_me_div" class="div_bg">
                <ul id="me_list" style="list-style-image: url('images/check.png');">
                    <li>20 years old</li>
                    <li>French and Canadian</li>
                    <li>Montréal, Québec</li>
                    <li>Champlain College Saint-Lambert</li>
                    <li>Computer Science</li>
                    <li>Web Developer at heart ♥</li>
                </ul>
            </div>
        
        </div>

    </div>

    <!-- I simply imagine that my skeleton is me and my body is my house. That way I'm always home. -->

    <div class="nav_point" id="skills_title"></div>

    <div when-visible="animateElementIn" when-not-visible="animateElementOut" class="hidden">

        <div class="card_title">
            <h2>Skills</h2>
        </div>

        <div id="skills" class="panel_border">

            <div id="hire_me">
                
                <div>
                    
                    <div id="skills_list">
                        <ul id="double" class="div_bg">
                            <li>Fast and effective learner</li>
                            <li>Dynamic and flexible</li>
                            <li>Strong communication</li>
                            <li>Enthusiatic attitude</li>
                            <li>Methodical</li>
                            <li>Determined and reliable</li>
                            <li>Envision success</li>
                            <li>Embrace challenges</li>
                            <li>Consistency</li>
                            <li>I'm awesome.</li>
                        </ul>
                        
                        <blockquote>I absolutely love designing systems and coding them into action. I bring creativity, contemporary ideas, and motivation to the table!</blockquote>
                    </div>
                        
                                    
                    <div id="android_me_div">
                        <img id="android_img" src="images/remy_android.png" alt="android me" />
                    </div>
                    
                </div>
                
            </div>
            
            <!--

            <div id="code_in">

                <h3>What can I code in?</h3>

                <ul id="triple" class="div_bg">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JavaScript</li>
                    <li>AngularJS</li>
                    <li>PHP</li>
                    <li>C#</li>
                    <li>ASP.NET</li>
                    <li>jQuery</li>
                    <li>Java</li>
                    <li>JSP</li>
                    <li>Microsoft SQL Server</li>
                    <li>MySQL</li>
                    <li>Oracle SQL</li>
                    <li>COBOL</li>
                    <li>RPG</li>
                </ul>

                <br>

                <ul id="tech_images">
                    <li><img src="images/programming_tech/html5_logo.png" alt="html5 logo" /></li>
                    <li><img src="images/programming_tech/css3_logo.png" alt="css3 logo" /></li>
                    <li><img src="images/programming_tech/js_logo.png" alt="html5 logo" /></li>
                    <li><img src="images/programming_tech/angularjs_logo.png" alt="angularjs logo" /></li>
                    <li><img src="images/programming_tech/php_logo.png" alt="php logo" /></li>
                    <li><img src="images/programming_tech/asp.net_logo.png" alt="asp.net logo" /></li>
                    <li><img src="images/programming_tech/csharp_logo2.png" alt="csharp logo" /></li>
                    <li><img src="images/programming_tech/jquery.gif" alt="jquery logo" /></li>
                    <li><img src="images/programming_tech/java_logo.png" alt="java logo" /></li>
                    <li><img src="images/programming_tech/jsp_logo.png" alt="jsp logo" /></li>
                    <li><img src="images/programming_tech/android_logo.png" alt="android logo" /></li>
                    <li><img src="images/programming_tech/ms_sql_server_logo.png" alt="sql server logo" /></li>
                    <li><img src="images/programming_tech/mysql_logo.png" alt="mysql logo" /></li>
                    <li><img src="images/programming_tech/oracle_db_logo.png" alt="oracle logo" /></li>
                    <li><img src="images/programming_tech/cobol_logo.png" alt="cobol logo" /></li>
                    <li><img src="images/programming_tech/rpg_logo.jpg" alt="as/400 logo" /></li>
                </ul>

            </div>
            -->
        </div>

    </div>
    
    <div class="nav_point" id="langs_title"></div>

    <div when-visible="animateElementIn" when-not-visible="animateElementOut" class="hidden">

        <div class="card_title">
            <h2>Languages</h2>
        </div>

        <div id="languages" class="panel_border">
             <div id="tech_grid">
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/html5_logo.png" alt="html5 logo" />
                </div>
                    
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/css3_logo.png" alt="css3 logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/js_logo.png" alt="html5 logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/angularjs_logo.png" alt="angularjs logo" />
                </div>   
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/php_logo.png" alt="php logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/asp.net_logo.png" alt="asp.net logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/csharp_logo2.png" alt="csharp logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/jquery.gif" alt="jquery logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/java_logo.png" alt="java logo" />
                </div>
            
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/jsp_logo.png" alt="jsp logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/android_logo.png" alt="android logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/ms_sql_server_logo.png" alt="sql server logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/mysql_logo.png" alt="mysql logo" />
                </div>  
            
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/oracle_db_logo.png" alt="oracle logo" />
                </div>
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/cobol_logo.png" alt="cobol logo" />
                </div> 
                
                <div when-visible="fadeIn" when-not-visible="fadeOut" class="tech_grid_layout hidden">
                    <img src="images/programming_tech/rpg_logo.jpg" alt="as/400 logo" />
                </div> 
                
            </div>
        </div>
            
    </div>

    <div class="nav_point" id="projects_title"></div>

    <div when-visible="animateElementIn" when-not-visible="animateElementOut" class="hidden">

        <div class="card_title">
            <h2>Projects</h2>
        </div>

        <div id="projects" class="panel_border">

            <blockquote id="project_bq" class="center">
                <code><p class="center" id="project_inst"><span style="color: #FF6B6B">System.out.println</span>(<span style="color: #2CBF31">'Click a button to open/close a project!'</span>);</p></code>
            </blockquote>

            <br />

            <div class="outer">
                <button id="ga_button" data-ng-click="project_1_show = !project_1_show">GodlyAesthetics</button>
            </div>

            <div id="project_1" class="animate-show" data-ng-show="project_1_show">

                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 500px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 400px; overflow: hidden;">
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga1.png" />
                            <img data-u="thumb" src="images/ga1.png" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga2.png" />
                            <img data-u="thumb" src="images/ga2.png" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga3.png" />
                            <img data-u="thumb" src="images/ga3.png" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga4.png" />
                            <img data-u="thumb" src="images/ga4.png" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga5.png" />
                            <img data-u="thumb" src="images/ga5.png" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga6.png" />
                            <img data-u="thumb" src="images/ga6.png" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga7.png" />
                            <img data-u="thumb" src="images/ga7.png" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga8.png" />
                            <img data-u="thumb" src="images/ga8.png" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga9.png" />
                            <img data-u="thumb" src="images/ga9.png" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="images/ga10.png" />
                            <img data-u="thumb" src="images/ga10.png" />
                        </div>
                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
                        <!-- Thumbnail Item Skin Begin -->
                        <div data-u="slides" style="cursor: default;">
                            <div data-u="prototype" class="p">
                                <div class="w">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                </div>
                                <div class="c"></div>
                            </div>
                        </div>
                        <!-- Thumbnail Item Skin End -->
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                    <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
                    <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
                </div>
                <script>
                    jssor_1_slider_init();
                </script>

                <!-- #endregion Jssor Slider End -->

                <div id="project_desc">
                    <blockquote class="project_desc">GodlyAesthetics is a new emerging clothing retail company. Its e-commerce website and system is the project that I and fellow student Domenic Seccareccia were tasked to design and develop during our final year at college. I developed the back-end of the system, working with mostly <strong>PHP</strong> and <strong>MySQL</strong>. The site is still in development to this day. It currently has working PayPal and emailing functionality, along with new features to be added over time before official launch.</blockquote>
                </div>

            </div>

            <div class="outer">
                <button id="jc_button" data-ng-click="cena()">
                    <strong id = "mystery">
                        <span>?</span><span>?</span><span>?</span><span>?</span><span>?</span>
                    </strong>
                </button>
            </div>

        </div>

    </div>
    
    <div class="nav_point" id="future_title"></div>

    <div when-visible="animateElementIn" when-not-visible="animateElementOut" class="hidden">

        <div class="card_title">
            <h2>Future</h2>
        </div>

        <div id="future" class="panel_border">

            <img class="center" src="images/concordia2.png" id="concordia" alt="concordia university logo" align="middle">
            
            <div id="future_content">
           
                <div id="future_img_div">
                    <img src="images/me_grad.jpg" id="me_grad" alt="me in grad clothes">
                </div>
                
                <div id="future_desc">
                    <blockquote id="uni_bq">
                        I have been accepted at <strong>Concordia University</strong> to study more computer science at a greater level. I am excited to chase my future <strong>Bachelor of Computer Science</strong> degree. While not studying in school, I teach myself new technologies, frameworks and programming languages to further expand my knowledge.
                    </blockquote>
                </div>
            
            </div>
            
        </div>
        
    </div>


    <div class="nav_point" id="contact_title"></div>

    <div when-visible="animateElementIn" when-not-visible="animateElementOut" class="hidden">

        <div class="card_title">
            <h2>Want to reach me?</h2>
        </div>

        <div id="contact" class="panel_border">

            <br />

            <div id="button_contact_div">

                <form id="email_form">
                    
                    <a href="https://github.com/remyc95" target="_blank" style="text-decoration: none">
                        <img id="github_logo" src="images/github2.png" alt="github">
                    </a>
                    
                    <div class="divider"></div>
                    
                    <button id="mail_button" type="submit" value="click"><a id="mail_href" href="mailto:remy.chaurand@gmail.com">Contact Me!</a><img id="email_icon" src="images/email.png" alt="email icon"></button>

                    <div class="divider"></div>

                    <a href="https://ca.linkedin.com/pub/r%C3%A9my-chaurand/94/a6a/114" target="_blank">
                        <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_myprofile_160x33.png" width="160" height="33" border="0" alt="View Rémy Chaurand's profile on LinkedIn">
                    </a>

                </form>
            </div>

        </div>

    </div>

    <div class="nav_point"></div>

</body>

</html>