<!DOCTYPE html>
<html lang="en">
<head>
    <!-- The purpose of this document is to provide a template for you to follow.
    Your resume will be two files, this one resume_template.html to help you to
    define the CONTENT for your resume and resume.css to help you to define the
    LOOK of your resume. I will try to put a comment tag pointing out the places
    you should fill out with your own content. Most should seem obvious.
    -->

    <!-- **** you need to put in y our own title below -->
    <title>Matt Halligan</title>

    <meta http-equiv="Content-Type" content="charset=utf-8" >

    <!-- **** you need to in your own description in the content below -->
    <meta name="description" content="Student Web developer with an interest in protecting your digital assets" >

    <!-- **** you need to in your name in the content below -->
    <meta name="author" content="Matthew Halligan" >

    <!-- **** the href below is the name of your style sheet that will define the
    look for your resume. -->


    <link href='resume.css' rel='stylesheet' type='text/css' media='screen' />

    <link href='css/rerickso/print.css' rel='stylesheet' type='text/css' media='print' />
</head>
<body id="resume">
<main>
    <!-- *************   Your personal information ***************************  -->
    <!-- **** change the id here and in the style sheet to  your name -->
    <section id="hcard-Robert-Erickson" class="vcard">

        <!-- ****  Of course link to your photo and change the alt description -->
        <p id="myImage"> </p>

        <!-- ****  put in  your name and your url -->
        <h1 id="name"><a class="url fn" href="http://www.mjhallig.w3.uvm.edu">Matt Halligan</a></h1>


        <!-- ****  in all the following span tags put in your address info -->
        <p class="adr">
            <span class="street-address">486 South Prospect Street</span>,
            <span class="locality">Burlington</span>,
            <span class="region">Vermont</span>,
            <span class="postal-code">05405</span>
            <span class="country-name">USA</span>
        </p>

        <p class="email">
            <span class="type">Email: </span>

            <!-- ****  notice you need to put your address in twice, once for the link and
            once to display -->
            <span class="value"><a class="email" href="mailto:Matthew.Halligan@uvm.edu">Matthew.Halligan@uvm.edu</a></span>
        </p>

        <!-- ****  type in your contact numbers, delete extra, copy if you need more -->
        <p class="tel">
            <span class="type">Cell: </span>
            <span class="value">1.203.626.1748</span>
        </p>

        <p class="tel">
            <span class="type">Work: </span>
            <span class="value">1.203.626.1748</span>
        </p>

    </section>  <!-- ends vcard -->

    <!--
    the main code above was modified from the generator found below.
    This <a href="http://microformats.org/wiki/hcard">hCard</a> created with
    the <a href="http://microformats.org/code/hcard/creator">hCard creator</a>.
    ***********  end of personal information ********************************** -->


    <!-- This section is for work that you do that is directly related to your
    career. Internships, projects etc.  if you do not have any GET some, till then
    just comment this section out ********************* -->
    <section id="profExperience">
        <h2>Professional Experience</h2>

        <!-- **** notice the comments for a job, to have more than one copy from Begin
        job  to end of job and replace the text as needed. They list the most recent first

        change the id coName to the name of the	company HERE and in the
        STYLE SHEET if you want to style it.

        use google maps, yahoo maps or anyone you like. its neat to click on it to
        see the building.
        -->

        <!-- Begin job -->
        <ol>
            <li class="job" id="coName">
                <span class="dates">2015-2017</span>
                <a href="http://www.uvm.edu" class="company">Powder Ridge Ski Resort</a>,

                <!-- notice i change the google maps url. everyplace it has a & made it &amp; so it would
                validate -->
                <a href="http://maps.google.com/maps?q=+colchester+ave%2C+Burlington%2C+VT+05401%2C+United+States&amp;l=explore&amp;utm_campaign=en&amp;utm_medium=ha&amp;utm_source=en-ha-na-us-gns-lt&amp;utm_term=searchbox&amp;submit.x=116&amp;submit.y=23&amp;submit=Explore+this+place"
                   class="location">Middletown, CT</a>

                <span class="jobtitle">Rental Technician</span>

                <p class="description">As a rental technician I was responsible for communicating the process of fitting rental
                equiptment, fixing or tuning skis to the customer.  After a piece of equipment went on the mountain 5 times it was
                in need of being checked and tuned to the standards set by manufacturers. I was tasked with being sure that
                equipment was being properly tuned and in working condition.</p>
            </li><!-- end of this job -->


            <!-- past other jobs here, descending by dates -->



            <!-- list web sites and projects here -->
            <li class="job" id="workExamples"><span class="dates">2018-Present</span>
                Websites and Projects
                <ul class="websites">
                    <li><a href="https://www.halliganwebdevelopment.com">Halligan Web Development</a> My side business of building websites.</li>
                    <li><a href="https://www.thesuperiorbarbershop.com">The Superior Barbershop</a> A project for the Superior Barbershop located in Wallingford,CT.</li>
                </ul>
            </li>
            <!-- end web sites and projects -->

        </ol>
    </section> <!-- end of your Experience-->


    <!-- Skill set section *********************************************-->
    <section id="skills">
        <h2>Skills</h2>
        <ul>
            <li>Customer Relations</li>
            <li>Python</li>
            <li>PHP</li>
            <li>CSS</li>
            <li>JavaScript</li>
        </ul>
    </section> <!-- ends skill sets -->

    <!-- Education section *********************************************

    only list college education (high school education is not needed.
    Always list most recent first

    change the id to the abbreviation for the school.

    -->

    <section id="education">
        <h2>Education</h2>

        <ol>
            <li class="school" id="uvm">
                <span class="dates">2017-Present</span>
                <a href="http://www.uvm.edu" class="institution">University of Vermont</a>,
                <a href="http://maps.google.com/maps?q=+colchester+ave%2C+Burlington%2C+VT+05401%2C+United+States&amp;l=explore&amp;utm_campaign=en&amp;utm_medium=ha&amp;utm_source=en-ha-na-us-gns-lt&amp;utm_term=searchbox&amp;submit.x=116&amp;submit.y=23&amp;submit=Explore+this+place"
                   class="location">Burlington, VT</a>

                <span class="MajorDegree">Computer Science</span>
                <span class="MinorDegree">Mathematics</span>
                <span class="gpa">Cumulative GPA 3.8 (3.8)</span>

                <!-- List the most important courses for your major that you have taken (or will take). This gives you some common ground when interviewing and something to talk about. list the NAME not the number. If there is a link for your course put it in but be sure the link will always
                be available. -->
                <h3 class="subtitle">Course of Study </h3>
                <ul class="courses major">
                    <li><a  href="http://giraffe.uvm.edu/rg-bin/rg_section_data.cgi?200801+10783">MS Office Beyond the Basics</a></li>
                    <li>Advanced Web Design</li>
                    <li>Linear Algebra</li>
                    <li>Discreet Structures</li>
                    <li>Applied Probability</li>
                </ul>


                <ul class="courses minor">
                    <li>Calculus 1</li>
                    <li>Calculus 2</li>
                    <li>Linear Algebra</li>
                </ul>
            </li> <!-- end school  -->

            <!-- add another school here if you attended more than one. Same as with Experience
            just copy and paste the code changing the relevant info. -->



        </ol>
    </section> <!-- end education -->


    <!-- Work History ***************************************************
    This is just what you have been doing to make money, if it is related to your profession then it belongs up above in professional Experience.

    Your work history goes here with the most recent first. However, if the work is related to your major then it belongs above in Professional Experience, if they were just jobs to help pay your way, list them here as Work Experience. this is the same as professional
    experience only the work is not related to your career but shows that you can work  -->

    <section id="experience">
        <h2>Work Experience</h2>
        <!-- Begin job -->

        <ol>
            <li class="job">
                <span class="dates">2018-Present</span>
                <a href="http://www.uvm.edu" class="company">University Of Vermont</a>,
                <a href="http://maps.google.com/" class="location">Burlington, VT</a>

                <span class="jobtitle">TA for Cybersecurity Defence</span>

                <p class="description">As a TA I am responsible for helping students through challenging portions of the class.
                </p>
            </li><!-- end of this job -->

            <!-- past other jobs here descending by dates -->


        </ol>
    </section> <!-- end of your Experience-->

    <!-- Interests section *************************************************
    You have to have something that interests you. This is to let everyone know that you have a life beyond working. -->
    <section id="interests">
        <h2>Interests</h2>
        <ol>
            <li class="int">In my free time I enjoy hiking or running my business.</li>
        </ol>
    </section> <!-- ends interests -->

</main>
</body>
</html>