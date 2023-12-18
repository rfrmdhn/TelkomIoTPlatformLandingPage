@extends('layouts.app')
@section('content')

<style>
    footer{
        display: none;
    }
    body{
        /* margin-top:10vh !important; */
        height:90vh !important;
        max-height:90vh !important;
        overflow-y:hidden;
    }
    .navbar-nav {
        z-index:900;
    }
</style>

<section ></section>

    <script>
        function jumptosection(id) {
            var target = document.getElementById(id);
            if(document.all){
                document.documentElement.scrollTop = target.offsetTop;
            }else{
                var top = 0;
                do {
                    top += target.offsetTop  || 0;
                    target = target.offsetParent;
                } while(target);

            document.body.scrollTop = top ;
        }
        // $('#article').css.paddingTop = '55px';
        return false;
        }
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
        <section style="">
            <div class="row">
                <script>
                    document.querySelectorAll('#nav-tab>[data-bs-toggle="tab"]').forEach(el => {
                    el.addEventListener('shown.bs.tab', () => {
                        const target = el.getAttribute('data-bs-target')
                        const scrollElem = document.querySelector(`${target} [data-bs-spy="scroll"]`)
                        bootstrap.ScrollSpy.getOrCreateInstance(scrollElem).refresh()
                    })
                    })
                </script>
                <div class="col-4 d-none d-lg-block" >
                    <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end" style="height:90vh !important; max-height:90vh; overflow-y:auto; padding-top:24px;">
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link" href="#item-1">1. What is Telkom IoT Platform?</a>
                            <a class="nav-link" href="#item-2">2. What is the benefit of Telkom IoT Platform?</a>
                            <a class="nav-link" href="#item-3">3. Architecture of Telkom IoT Platform</a>
                            <a class="nav-link" href="#item-4">4. Architecture of Telkom IoT Platform</a>
                            <nav class="nav nav-pills flex-column padding12L">
                                <a class="nav-link  my-1" href="#item-41">4.1 Step 1 : Input fields in Registration Form</a>
                                <nav class="nav nav-pills flex-column padding12L">
                                    <a class="nav-link  my-1" href="#item-411">4.1.1 Regular Account</a>
                                    <a class="nav-link  my-1" href="#item-412">4.1.2 B2B Research & Innovation Collaboration</a>
                                </nav>
                                <a class="nav-link  my-1" href="#item-42">4.2 Step 2 : Verification Email Address</a>
                                <a class="nav-link  my-1" href="#item-43">4.3 Step 3 : Check Email Inbox</a>
                                <a class="nav-link  my-1" href="#item-44">4.4 Step 4 : Account Ready To Use</a>
                            </nav>
                            <a class="nav-link" href="#item-5">5. Sign In</a>
                            <a class="nav-link" href="#item-6">6. Account Dashboard</a>
                            <a class="nav-link" href="#item-7">7. How To Manage Applications</a>
                            <nav class="nav nav-pills flex-column padding12L">
                                <a class="nav-link  my-1" href="#item-71">7.1 Overview</a>
                                <a class="nav-link  my-1" href="#item-72">7.2 Create Application Flow</a>
                                <nav class="nav nav-pills flex-column padding12L">
                                    <a class="nav-link  my-1" href="#item-721">7.2.1 Package Name</a>
                                    <a class="nav-link  my-1" href="#item-722">7.2.2 Application Name</a>
                                    <a class="nav-link  my-1" href="#item-723">7.2.3 Description</a>
                                    <a class="nav-link  my-1" href="#item-724">7.2.4 Application Thumbnail</a>
                                </nav>
                                <a class="nav-link  my-1" href="#item-73">7.3 Edit Application Flow</a>
                                <a class="nav-link  my-1" href="#item-74">7.4 Delete Application Options</a>
                                <nav class="nav nav-pills flex-column padding12L">
                                    <a class="nav-link  my-1" href="#item-741">7.4.1 Package Name</a>
                                    <a class="nav-link  my-1" href="#item-742">7.4.2 Delete Application Selected</a>
                                    <a class="nav-link  my-1" href="#item-743">7.4.3 Delete Application Without Device</a>
                                </nav>
                                <a class="nav-link  my-1" href="#item-75">7.5 How To Create Device</a>
                                <nav class="nav nav-pills flex-column padding12L">
                                    <a class="nav-link  my-1" href="#item-751">7.5.1 Overview</a>
                                    <a class="nav-link  my-1" href="#item-752">7.5.2 Create Device Flow</a>
                                    <nav class="nav nav-pills flex-column padding12L">
                                        <a class="nav-link  my-1" href="#item-75211">Single Device</a>
                                        <nav class="nav nav-pills flex-column padding12L">
                                            <a class="nav-link  my-1" href="#item-752111">Product</a>
                                            <nav class="nav nav-pills flex-column padding12L">
                                                <a class="nav-link  my-1" href="#item-7521111">Create Existing Product Flow</a>
                                                <a class="nav-link  my-1" href="#item-7521112">Create Custom Product Flow</a>
                                            </nav>
                                        </nav>
                                        <a class="nav-link  my-1" href="#item-75212">Multiple Device</a>
                                        <nav class="nav nav-pills flex-column padding12L">
                                            <a class="nav-link  my-1" href="#item-752121">Product</a>
                                            <nav class="nav nav-pills flex-column padding12L">
                                                <a class="nav-link  my-1" href="#item-7521211">Create Existing Product Flow</a>
                                                <a class="nav-link  my-1" href="#item-7521212">Create Custom Product Flow</a>
                                            </nav>
                                        </nav>
                                    </nav>
                                    <a class="nav-link  my-1" href="#item-753">7.5.3 Manage Device Flow</a>
                                    <nav class="nav nav-pills flex-column padding12L">
                                        <a class="nav-link  my-1" href="#item-7531">Choose Button Edit</a>
                                        <a class="nav-link  my-1" href="#item-7532">Choose Button Delete</a>
                                        <a class="nav-link  my-1" href="#item-7533">Choose Button Move</a>
                                    </nav>
                                </nav>
                            </nav>
                            <a class="nav-link" href="#item-8">8. How To Manage Applications</a>
                            <nav class="nav nav-pills flex-column padding12L">
                                <a class="nav-link  my-1" href="#item-81">8.1 Create Access Key</a>
                                <a class="nav-link  my-1" href="#item-82">8.2 Access Key List</a>
                                <a class="nav-link  my-1" href="#item-83">8.3 Edit Access Key</a>
                                <a class="nav-link  my-1" href="#item-84">8.4 Delete Access Key</a>
                                <a class="nav-link  my-1" href="#item-85">8.5 Search Access Key</a>
                            </nav>
                            <a class="nav-link" href="#item-9">9. How to Send Data to Telkom IoT Platform</a>
                            <nav class="nav nav-pills flex-column padding12L">
                                <a class="nav-link  my-1" href="#item-91">9.1 Overview</a>
                                <a class="nav-link  my-1" href="#item-92">9.2 Integration using MQTT</a>
                                <nav class="nav nav-pills flex-column padding12L">
                                    <a class="nav-link  my-1" href="#item-921">9.2.1 Publish Data to IoT Platform using Node Red</a>
                                    <a class="nav-link  my-1" href="#item-922">9.2.2 Subscribe Data to Telkom IoT Platform using Node Red</a>
                                    <nav class="nav nav-pills flex-column padding12L">
                                        <a class="nav-link  my-1" href="#item-9221">9.2.2.1 Running Flow and Data Validation</a>
                                    </nav>
                                </nav>
                                <a class="nav-link  my-1" href="#item-93">9.3 Integration using LoRa</a>
                                <a class="nav-link  my-1" href="#item-94">9.4 Integration using HTTP</a>
                                <nav class="nav nav-pills flex-column padding12L">
                                    <a class="nav-link  my-1" href="#item-941">9.4.1 Push Data to Telkom IoT Platform using Node Red</a>
                                </nav>
                            </nav>
                        </nav>
                    </nav>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" data-bs-offset="164" class="scrollspy-example-2" tabindex="0" style="height:90vh; max-height:90vh; overflow-y:auto; overflow-x:hidden; padding-top:48px;">
                        <div id="item-1" >
                            <h3 class="text-PrimaryColor mb-4">1. What is Telkom IoT Platform?</h3>
                            <p>Telkom IoT Platform is an IoT technology service that can easily connect, manage, automate various devices or sensors, and visualize device data stored on personal dashboards that can be tailored to customer needs. With the Research & Innovation Collaboration business model, Telkom IoT Platform has a broad target market coverage such as academics, B2B to large institutions as users.</p>
                        </div>
                        <div id="item-2" >
                            <h3 class="text-PrimaryColor mb-4">2. What is the benefit of Telkom IoT Platform?</h3>
                            <p>Telkom IoT Platform has several benefits for users:</p>
                            <ul>
                                <li>
                                    <p>
                                    As one of the main components in the Internet of Things (IoT) ecosystem and plays an important role as a bridge between data from sensor devices to dashboard data users.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        From a business perspective to support various types of industry in facilitating IoT technology business processes and support development from conventional business models to digital business through technology evaluation.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div id="item-3" >
                            <h3 class="text-PrimaryColor mb-4">3. Architecture of Telkom IoT Platform</h3>
                            <p>The following is architecture of Telkom IoT Platform:</p>
                            <div class="row justify-content-center align-items-center">
                                <img class="imageDocumentation" src="images/Documentation/3. Architecture of Telkom  IoT Platform.webp" alt="">
                            </div>
                            <p>The picture above explains that Telkom IoT Platform uses three connectivity options such as LoRa, HTTP and MQTT.</p>
                        </div>

                        <div id="item-4" >
                            <h3 class="text-PrimaryColor mb-4">4. How To Register Your Account?</h3>
                            <p>Telkom IoT Platform is an IoT technology service that can easily connect, manage, automate various devices or sensors, and visualize device data stored on personal dashboards that can be tailored to customer needs. With the Research & Innovation Collaboration business model, Telkom IoT Platform has a broad target market coverage such as academics, B2B to large institutions as users.</p>
                        </div>
                            <div id="item-41" class="child-0">
                                <h4 class="text-PrimaryColor">4.1 Step 1 : Input fields in Registration Form</h4>
                                <p>Register your email, contact info, password and choose a category to get an account in Telkom IoT Platform. Every verified account will be given a free trial package and verification email will be sent to the user email address after submitting all data. Registration has two account categories such as Regular Account and B2B (Business to Business) Research and Innovation Collaboration.</p>
                            </div>
                                <div id="item-411" class="child-1">
                                    <h4 class="text-PrimaryColor">4.1.1 Regular Account</h4>
                                    <div class="row align-items-center justify-content-center mb-2 mt-2">
                                        <img class="imageDocumentation" src="images/Documentation/4.1.1. Regular Account.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center mb-2">
                                        <p>
                                        Regular account is an account which is addressed for developers, students, individuals and business. Regular account registration requires some fields to be input, including :
                                            <ol>
                                                <li><b>Full Name</b>, field that contains user full name.</li>
                                                <li><b>Email Address</b>, field that contains user email address.</li>
                                                <li><b>Password</b>, field that contains user password.</li>
                                                <li><b>Confirm Password</b>, field that contains password retype by user.</li>
                                                <li><b>Phone Number</b>, field that contains user phone number.</li>
                                                <li><b>Institution Name</b>, field that contains user institution name.</li>
                                            </ol>
                                        </p>
                                    </div>
                                </div>
                                <div id="item-412" class="child-1">
                                    <h4 class="text-PrimaryColor">4.1.2 B2B Research & Innovation Collaboration</h4>
                                    <div class="row align-items-center justify-content-center mb-2 mt-2">
                                        <img class="imageDocumentation" src="images/Documentation/4.1.2. B2B Research & Innovation Collaboration.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center mb-2">
                                        <p>
                                        In the registration form, user must input data to fields. B2B Research & Innovation Collaboration category addressed for academics, companies, to big institutions that want to create innovation in IoT technology and develop business to digital and collaborate with the IoT Platform team and make their research and innovation as living lab. B2B account registration requires several fields that needs to be input, including :
                                            <ol>
                                                <li><b>Full Name</b>, field that contains user full name.</li>
                                                <li><b>Email Address</b>, field that contains user email address.</li>
                                                <li><b>Password</b>, field that contains user password.</li>
                                                <li><b>Confirm Password</b>, field that contains password retype by user.</li>
                                                <li><b>Phone Number</b>, field that contains user phone number.</li>
                                                <li><b>Select Institution</b>, field that contains B2B institution identity, there are several options such as corporate, government and university. Institution Name, field that contains name of the institution.</li>
                                                <li><b>Let us know how we can help you</b>, field that contains user requirement details.</li>
                                            </ol>
                                        </p>
                                    </div>
                                </div>
                            <div id="item-42" class="child-0">
                                <h4 class="text-PrimaryColor">4.2 Step 2 : Verification Email Address</h4>
                                <div class="row align-items-center justify-content-center mb-2 mt-2">
                                    <img class="imageDocumentation" src="images/Documentation/4.2. Verification Email Address.webp" alt="">
                                </div>
                                <p>After user input and submit fields in registration form, user will receive an email with a verification link for the email address.</p>
                            </div>
                            <div id="item-43" class="child-0">
                                <h4 class="text-PrimaryColor">4.3 Step 3 : Check Email Inbox</h4>
                                <div class="row align-items-center justify-content-center mb-2 mt-2">
                                    <img class="imageDocumentation" src="images/Documentation/4.3. Check Email Inbox.webp" alt="">
                                </div>
                                <p>Verification link will be entered into each user's email inbox, and then  user can click the <b>verification link</b> to continue to the next step.</p>
                            </div>
                            <div id="item-44" class="child-0" >
                                <h4 class="text-PrimaryColor">4.4 Step 4 : Account Ready To Use</h4>
                                <div class="row align-items-center justify-content-center mb-2 mt-2">
                                    <img class="imageDocumentation" src="images/Documentation/4.4. Account Ready To Use.webp" alt="">
                                </div>
                                <p>After the verification link is selected, users can use their account. User can Sign in with the registered email and password. With a verified account, user will get the opportunity to explore IoT Platform services for free by using <b>Free Trial Package</b> with benefits that can be seen in the user account details.</p>
                            </div> 





                        <div id="item-5" >
                            <h3 class="text-PrimaryColor mb-4">5. Sign in</h3>
                            <div class="row mb-2">
                                    <p>User who has successfully register an account on the registration page can Sign in and access the console by filling in the email and password fields.</p>
                            </div>
                            <div class="row align-items-center justify-content-center">
                                <img class="imageDocumentation" src="images/Documentation/5. Sign In.webp" alt="">
                            </div>
                        </div>




                        <div id="item-6" >
                            <h3 class="text-PrimaryColor mb-4">6. Account Dashboard</h3>
                            <div class="row mb-2">
                                    <p>The main view of the Telkom IoT Platform console after user successfully has an account and successfully performs the Sign in process. There is a summary display from the Account in the menu such as Platform Type, Active Until, Category, Application Summary (which includes application in use and device in use numbers) and Connectivity Type (number of devices connected to each connectivity).</p>
                            </div>
                            <div class="row align-items-center justify-content-center">
                                <img class="imageDocumentation" src="images/Documentation/6. Account Dashboard.webp" alt="">
                            </div>
                        </div>






                        <div id="item-7" >
                            <h3 class="text-PrimaryColor mb-4">7. How To Manage Applications</h3>
                            <div class="row mb-2">
                                    <p>User who has successfully register an account on the registration page can Sign in and access the console by filling in the email and password fields.</p>
                            </div>
                            <div class="row align-items-center justify-content-center">
                                <img class="imageDocumentation" src="images/Documentation/5. Sign In.webp" alt="">
                            </div>
                        </div>
                            <div id="item-71" class="child-0">
                                <h4 class="text-PrimaryColor">7.1 Overview</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>Each user in the Telkom IoT Platform has several applications that have functions as device storage space. Each user can have more than one application depending on the package they have.</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/7.1. Overview.webp" alt="">
                                </div>
                            </div>
                            <div id="item-72" class="child-0">
                                <h4 class="text-PrimaryColor">7.2 Create Application Flow</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>Every user who will create a device is required to have an application. User can select Application on Dashboard - Create Application.</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/7.2. Create Application Flow (Dasboard).webp" alt="">
                                </div>
                                <p>The following is a display of the inner field in <b>Create Application:</b></p>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/7.2. Create Application Flow (Form Create).webp" alt="">
                                </div>
                                <p>In application creation has several fields which are required to be entered, include:</p>
                            </div>

                                <div id="item-721" class="child-1">
                                    <h4 class="text-PrimaryColor">7.2.1 Package Name</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>In the package name there is a column containing the package name, it is set automatically by the system after registration it will become a Free Trial Package for the first use for new users.</p>
                                    </div>
                                </div>
                                <div id="item-722" class="child-1">
                                    <h4 class="text-PrimaryColor">7.2.2 Application Name</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Application name is filled with a field containing the name of the application with a minimum number of 3 characters and a maximum of 50 characters.</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/7.2.2. Application Name.webp" alt="">
                                    </div>
                                </div>
                                <div id="item-723" class="child-1">
                                    <h4 class="text-PrimaryColor">7.2.3 Description</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>In the description section, users can fill in a field containing a description of the application with a maximum of 200 characters.</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/7.2.3. Description.webp" alt="">
                                    </div>
                                </div>
                                <div id="item-724" class="child-1">
                                    <h4 class="text-PrimaryColor">7.2.4 Application Thumbnail</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>In the application thumbnail, the user can fill in the field containing the icon/logo with the following customized format: JPG, JPEG, PNG and a maximum size of 2MB icon/logo.</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/7.2.4. Application Thumbnail.webp" alt="">
                                    </div>
                                </div>


                            <div id="item-73" class="child-0">
                                <h4 class="text-PrimaryColor">7.3 Edit Application Flow</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>After the user has successfully created the application and already has the application list, the user can manage their application with the available Edit application. Here is how the Manage Edit application looks like: User can Edit app by following steps:</p>
                                    <p>1. Select an application name to be processed for Update/Edit.</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/7.3. Edit Application Flow (Dashboard).webp" alt="">
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <p>2. Then select the Edit Application Menu.</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/7.3. Edit Application Flow (Detail Application).webp" alt="">
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <p>The user can input the selected field to be changed, then select the Edit Application menu.</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/7.3. Edit Application Flow (Form Edit).webp" alt="">
                                </div>
                            </div>
                            

                            <div id="item-74" class="child-0">
                                <h4 class="text-PrimaryColor">7.4 Delete Application Options</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>There are 3 types of application removal management that users can choose according to their needs, including the following:</p>
                                </div>
                            </div>

                                <div id="item-741" class="child-1">
                                    <h4 class="text-PrimaryColor">7.4.1 Delete Application</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Delete application menu, user can delete applications manually or choose one by one.</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/7.4.1. Delete Application.webp" alt="">
                                    </div>
                                </div>

                                <div id="item-742" class="child-1">
                                    <h4 class="text-PrimaryColor">7.4.2 Delete Application Selected</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>In the delete app menu, the user can delete more than one selected app/all apps.</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/7.4.2. Delete Application Selected.webp" alt="">
                                    </div>
                                </div>

                                <div id="item-743" class="child-1">
                                    <h4 class="text-PrimaryColor">7.4.3 Delete Application Without Device</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>In the delete application menu, users can delete applications without having to own a device.</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/7.4.3. Delete Application Without Device.webp" alt="">
                                    </div>
                                </div>


                            <div id="item-75" class="child-0">
                                <h4 class="text-PrimaryColor">7.5 How To Create Device</h4>
                            </div>
                            
                                <div id="item-751" class="child-1">
                                    <h4 class="text-PrimaryColor">7.5.1 Overview</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>The device is a liaison between the external system and the data on the Telkom IoT Platform account. After the user has successfully created an application on the Telkom IoT Platform, the user can add a device to the application details. When the user wants to create a device, there will be many options in it, such as: number of device, product device, decoder & connectivity.</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/7.5.1. Overview.webp" alt="">
                                    </div>
                                </div>

                                <div id="item-752" class="child-1">
                                    <h4 class="text-PrimaryColor">7.5.2 Create Device Flow</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>In device creation, user who has successfully created an application will be asked to fill in several fields required by the system, including the following:</p>
                                    </div>
                                </div>
                                
                                    <div id="item-7521" class="child-2">
                                        <h4 class="text-PrimaryColor">Number Of Devices</h4>
                                        <div class="row align-items-center justify-content-center">
                                            <p>Number of Devices, is a type that will determine the number of devices and has two options including single and multiple devices. There are numbers of devices including Single and Multiple Devices.</p>
                                        </div>
                                    </div>

                                        <div id="item-75211" class="child-3">
                                            <h4 class="text-PrimaryColor">Single Device</h4>
                                            <div class="row align-items-center justify-content-center">
                                                <p>On Single Device, the user can only enter a field that allows the user to add only one device.</p>
                                            </div>
                                            <div class="row align-items-center justify-content-center">
                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1. Single Device.webp" alt="">
                                            </div>
                                        </div>

                                            <div id="item-752111" class="child-4">
                                                <h4 class="text-PrimaryColor">Product</h4>
                                                <div class="row align-items-center justify-content-center">
                                                    <p>Product, is the type of device that will determine the product to be made, including existing product and custom product:</p>
                                                </div>
                                            </div>

                                                <div id="item-7521111" class="child-5">
                                                    <h4 class="text-PrimaryColor">Create Existing Product Flow</h4>
                                                    <div class="row align-items-center justify-content-center">
                                                        <p>Existing Product, is a type of product that has a decoder that has been recognized by the system/has been created by previous users.</p>
                                                    </div>
                                                    <div class="row align-items-center justify-content-center">
                                                        <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1. Create Existing Product Flow.webp" alt="">
                                                    </div>
                                                </div>

                                                    <div id="item-75211111" class="child-6">
                                                        <h4 class="text-PrimaryColor">Choose Product Name</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>Product name is a selection of products that have been provided by the system to make it easier for users to choose which products are available.</p>
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.1. Choose Prooduct Name.webp" alt="">
                                                        </div>
                                                    </div>

                                                    <div id="item-75211112" class="child-6">
                                                        <h4 class="text-PrimaryColor">Device Name</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>Device name, is the name of the device which will be used and specified by the user.</p>
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.2. Device Name.webp" alt="">
                                                        </div>
                                                    </div>

                                                    <div id="item-75211113" class="child-6">
                                                        <h4 class="text-PrimaryColor">Choose Connectivity</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>Connectivity, the type of connectivity will be used for a device. User can choose the type of connectivity such as LoRa, MQTT, and HTTP. If user’s device use the LoRa connectivity parameter, the configuration is as follows:</p>
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.2. Device Name.webp" alt="">
                                                        </div>
                                                    </div>


                                                        <div id="item-752111131" class="child-7">
                                                            <h4 class="text-PrimaryColor">LoRa Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>LoRa (Long Range) is a low-power long range wireless radio frequency technology.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.3.1. LoRa Connectivity.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111132" class="child-7">
                                                            <h4 class="text-PrimaryColor">MQTT Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>MQTT, if your device uses MQTT, user can select MQTT connectivity then click the Save button. MQTT is a communication protocol that requires small resources and bandwidth. MQTT uses a broker in charge of connecting publishers and subscribers.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.3.2. MQTT Connectivity.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111133" class="child-7">
                                                            <h4 class="text-PrimaryColor">HTTP Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>HTTP, if your device uses HTTP, user can select HTTP connectivity and then click the Save button. HTTP is an application layer network protocol that is used to assist the process of exchanging data on the internet between computers with one another.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.3.3. HTTP Connectivity.webp" alt="">
                                                            </div>
                                                        </div>


                                                    <div id="item-75211114" class="child-6">
                                                        <h4 class="text-PrimaryColor">LoRa Device Class</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>The lora network consists of end devices and gateways and is divided into three classes with definitions as class A, class B, and class C which are two-way communication.</p>
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.4. LoRa Device Class (1).webp" alt="">
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.4. LoRa Device Class (2).webp" alt="">
                                                        </div>
                                                    </div>

                                                        <div id="item-752111141" class="child-7">
                                                            <h4 class="text-PrimaryColor">Class A</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>two-way communication with each device to send data, followed by two downlinks receiving short windows. Transition slots are scheduled by device and have the lowest power consumption.</p>
                                                            </div>
                                                        </div>

                                                        <div id="item-752111142" class="child-7">
                                                            <h4 class="text-PrimaryColor">Class B</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>two-way communication with scheduled slots receive, class B opens more receive windows. Thus allowing the device to synchronize the time from the gateway and notify the server when the device is operating.</p>
                                                            </div>
                                                        </div>

                                                        <div id="item-752111143" class="child-7">
                                                            <h4 class="text-PrimaryColor">Class C</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>two-way communication devices receive a maximum slot and almost have a slot receive window that opens and closes continuously when transmitting data, thus consuming more power, so it has the advantage of being able to communicate in real time.</p>
                                                            </div>
                                                        </div>


                                                    <div id="item-75211115" class="child-6">
                                                        <h4 class="text-PrimaryColor">LoRa Activation Mode</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>LoRa Activation Mode, the type of LoRa Activation Mode that will be used for a device. Users can choose the type of LoRa Activation Mode such as OTAA or ABP. If the user's device uses the LoRa Activation Mode parameter, the configuration is as follows:</p>
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.5. LoRa Activation Mode (1).webp" alt="">
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.5. LoRa Activation Mode (2).webp" alt="">
                                                        </div>
                                                    </div>

                                                        <div id="item-752111151" class="child-7">
                                                            <h4 class="text-PrimaryColor">OTAA</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Over-the-air activation, which involves direct communication between server and end device.</p>
                                                            </div>
                                                        </div>

                                                        <div id="item-752111152" class="child-7">
                                                            <h4 class="text-PrimaryColor">ABP</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Involving new end devices which were added without existing keys, such as AppEUI, devEUI, etc.</p>
                                                            </div>
                                                        </div>

                                                    
                                                    <div id="item-75211116" class="child-6">
                                                        <h4 class="text-PrimaryColor">OTAA Parameter</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>There are 2 options in it, including the following:</p>
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.5. LoRa Activation Mode (1).webp" alt="">
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.5. LoRa Activation Mode (2).webp" alt="">
                                                        </div>
                                                    </div>

                                                        <div id="item-752111161" class="child-7">
                                                            <h4 class="text-PrimaryColor">Inherit</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>make sure the data generated by the system and input into the end device.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.6.1. Inherit.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111162" class="child-7">
                                                            <h4 class="text-PrimaryColor">Custom</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Input end device parameters into the system.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.6.2. Custom.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111163" class="child-7">
                                                            <h4 class="text-PrimaryColor">Application EUI</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Application EUI is a unique ID of the application server, obtained from the IEEE EUI64 standard that identifies the entity to connect to the network, Application EUI is stored on the end-device. Each application server will have a unique Application EUI ID. Application EUI can be generated by the Telkom IoT Platform, commonly called inherit or can also use the manual method, namely custom.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.6.3. Application EUI.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111164" class="child-7">
                                                            <h4 class="text-PrimaryColor">Device EUI</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Device EUI is like a Mac Address, or a unique code of the end device that follows the Lora alliance standard and is used to identify the device.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.6.4. Device EUI.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111165" class="child-7">
                                                            <h4 class="text-PrimaryColor">Application Key</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>The Application Key is the encryption key between the message source behind the Device EUI and the message destination behind the Application EUI. Each key must be unique for each device.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.6.5. Application Key.webp" alt="">
                                                            </div>
                                                        </div>


                                                    <div id="item-75211117" class="child-6">
                                                        <h4 class="text-PrimaryColor">ABP Parameter</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>There are 2 options in it, including the following:</p>
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.7. ABP Parameter.webp" alt="">
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.5. LoRa Activation Mode (2).webp" alt="">
                                                        </div>
                                                    </div>

                                                        <div id="item-752111171" class="child-7">
                                                            <h4 class="text-PrimaryColor">Inherit</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>make sure the data generated by the system and input into the end device.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.7.1. Inherit.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111172" class="child-7">
                                                            <h4 class="text-PrimaryColor">Custom</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Input end device parameters into the system.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.7.2. Custom.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111173" class="child-7">
                                                            <h4 class="text-PrimaryColor">Application EUI</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Application EUI is a unique ID of the application server, obtained from the IEEE EUI64 standard that identifies the entity to connect to the network, Application EUI is stored on the end-device. Each application server will have a unique Application EUI ID. Application EUI can be generated by the Telkom IoT Platform, commonly called inherit or can also use the manual method, namely custom.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.7.3. Application EUI.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111174" class="child-7">
                                                            <h4 class="text-PrimaryColor">Device EUI</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Device EUI is like a Mac Address, or a unique code of the end device that follows the Lora alliance standard and is used to identify the device.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.7.4. Device EUI.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111175" class="child-7">
                                                            <h4 class="text-PrimaryColor">Device Address</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Device Address serves to identify the hardware as an identifier so that each particular device has a unique ID.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.7.5. Device Address.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111176" class="child-7">
                                                            <h4 class="text-PrimaryColor">Network Session Key</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Network Session Key (NwkSKey) is used for interaction between Node and Network Server which is used to validate integrity on each message with integrity code on each message.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.7.6. Network Session Key.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111177" class="child-7">
                                                            <h4 class="text-PrimaryColor">Application Session Key</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>The Application Session Key (AppSKey) is used for encryption and decryption of the payload. Where, Payload is fully encrypted between the Node and the Handler/Application Server component of the Telkom IoT Platform, which means that only users can read the contents of messages that have been sent or received.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.1.7.7. Application Session Key.webp" alt="">
                                                            </div>
                                                        </div>

                                                <div id="item-7521112" class="child-5">
                                                    <h4 class="text-PrimaryColor">Create Custom Product Flow</h4>
                                                    <div class="row align-items-center justify-content-center">
                                                        <p>Custom Product, field that contains user’s settings who have their own devices in the form of decoder.</p>
                                                    </div>
                                                    <div class="row align-items-center justify-content-center">
                                                        <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2. Create Custom Product Flow.webp" alt="">
                                                    </div>
                                                </div>

                                                    <div id="item-75211121" class="child-6">
                                                        <h4 class="text-PrimaryColor">Decoder</h4>
                                                    </div>

                                                        <div id="item-752111211" class="child-7">
                                                            <h4 class="text-PrimaryColor">New Decoder</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>On the new decoder, the user can enter a new decoder that has never been created before. The following are additional data inputs that the user must enter:</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.1.1. New Decoder.webp" alt="">
                                                            </div>
                                                        </div>

                                                            <div id="item-752111211a" class="child-8">
                                                                <h4 class="text-PrimaryColor">a. Decoder Name</h4>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <p>The name of the decoder, is the name of the decoder that will be used and is defined by the user.</p>
                                                                </div>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.1.1.1. Decoder Name.webp" alt="">
                                                                </div>
                                                            </div>

                                                            <div id="item-752111211b" class="child-8">
                                                                <h4 class="text-PrimaryColor">b. Decoder Algorithm</h4>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.1.1.2. Decoder Algorithm.webp" alt="">
                                                                </div>
                                                            </div>

                                                            <div id="item-752111211c" class="child-8">
                                                                <h4 class="text-PrimaryColor">c. Device Name</h4>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <p>Device name, is the name of the device which will be used and specified by the user.</p>
                                                                </div>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.1.1.3. Device Name.webp" alt="">
                                                                </div>
                                                            </div>

                                                        <div id="item-752111212" class="child-7">
                                                            <h4 class="text-PrimaryColor">Existing Decoder</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>On the existing decoder, the user can choose a decoder that has been made previously on the existing decoder, the user can choose a decoder that has been made previously. Device name, is the name of the device which will be used and specified by the user. The following are additional data inputs that the user must enter:</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.1.2 Existing Decoder.webp" alt="">
                                                            </div>
                                                        </div>

                                                            <div id="item-752111212a" class="child-8">
                                                                <h4 class="text-PrimaryColor">a. Decoder Name</h4>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <p>The name of the decoder, is the name of the decoder that will be used and is defined by the user.</p>
                                                                </div>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.1.2.1 Decoder Name.webp" alt="">
                                                                </div>
                                                            </div>
                                                            
                                                            <div id="item-752111212b" class="child-8">
                                                                <h4 class="text-PrimaryColor">b. Device Name</h4>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <p>The name of the decoder, is the name of the decoder that will be used and is defined by the user.</p>
                                                                </div>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.1.2.2 Device Name.webp" alt="">
                                                                </div>
                                                            </div>

                                                        <div id="item-752111213" class="child-7">
                                                            <h4 class="text-PrimaryColor">No Decoder</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>On no decoder, user can create device but no decoder added. The following are additional data inputs that the user must enter:</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.1.3. No Decoder.webp" alt="">
                                                            </div>
                                                        </div>

                                                            <div id="item-752111213a" class="child-8">
                                                                <h4 class="text-PrimaryColor">a. Device Name</h4>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <p>Device name, is the name of the device which will be used and specified by the user.</p>
                                                                </div>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.1.3.1 Device Name.webp" alt="">
                                                                </div>
                                                            </div>

                                                    <div id="item-75211122" class="child-6">
                                                        <h4 class="text-PrimaryColor">Choose Connectivity</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>Connectivity, the type of connectivity will be used for a device. User can choose the type of connectivity such as LoRa, MQTT, and HTTP. If user’s device use the LoRa connectivity parameter, the configuration is as follows:</p>
                                                        </div>
                                                    </div>

                                                        <div id="item-752111221" class="child-7">
                                                            <h4 class="text-PrimaryColor">LoRa Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>LoRa (Long Range) is a low-power long range wireless radio frequency technology.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.2.1. LoRa Connectivity.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111222" class="child-7">
                                                            <h4 class="text-PrimaryColor">MQTT Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>MQTT, if your device uses MQTT, user can select MQTT connectivity then click the Save button. MQTT is a communication protocol that requires small resources and bandwidth. MQTT uses a broker in charge of connecting publishers and subscribers.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.2.2. MQTT Connectivity.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111223" class="child-7">
                                                            <h4 class="text-PrimaryColor">HTTP Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>HTTP, if your device uses HTTP, user can select HTTP connectivity and then click the Save button. HTTP is an application layer network protocol that is used to assist the process of exchanging data on the internet between computers with one another.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.2.3. HTTP Connectivity.webp" alt="">
                                                            </div>
                                                        </div>
                                                    
                                                    <div id="item-75211123" class="child-6">
                                                        <h4 class="text-PrimaryColor">LoRa Device Class</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>The lora network consists of end devices and gateways and is divided into three classes with definitions as class A, class B, and class C which are two-way communication.</p>
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.3. LoRa Device Class.webp" alt="">
                                                        </div>
                                                    </div>

                                                        <div id="item-752111231" class="child-7">
                                                            <h4 class="text-PrimaryColor">Class A</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>two-way communication with each device to send data, followed by two downlinks receiving short windows. Transition slots are scheduled by device and have the lowest power consumption.</p>
                                                            </div>
                                                        </div>

                                                        <div id="item-752111232" class="child-7">
                                                            <h4 class="text-PrimaryColor">Class B</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>two-way communication with scheduled slots receive, class B opens more receive windows. Thus allowing the device to synchronize the time from the gateway and notify the server when the device is operating.</p>
                                                            </div>
                                                        </div>

                                                        <div id="item-752111233" class="child-7">
                                                            <h4 class="text-PrimaryColor">Class C</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>two-way communication devices receive a maximum slot and almost have a slot receive window that opens and closes continuously when transmitting data, thus consuming more power, so it has the advantage of being able to communicate in real time.</p>
                                                            </div>
                                                        </div>

                                                    <div id="item-75211124" class="child-6">
                                                        <h4 class="text-PrimaryColor">LoRa Activation Mode</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.4. LoRa Activation Mode.webp" alt="">
                                                        </div>
                                                    </div>

                                                        <div id="item-752111241" class="child-7">
                                                            <h4 class="text-PrimaryColor">OTAA</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Over-the-air activation, which involves direct communication between server and end device.</p>
                                                            </div>
                                                        </div>

                                                        <div id="item-752111242" class="child-7">
                                                            <h4 class="text-PrimaryColor">ABP</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Involving new end devices which were added without existing keys, such as AppEUI, devEUI, etc.</p>
                                                            </div>
                                                        </div>

                                                    <div id="item-75211125" class="child-6">
                                                        <h4 class="text-PrimaryColor">OTAA Parameter</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>There are 2 options in it, including the following:</p>
                                                        </div>
                                                    </div>

                                                        <div id="item-752111251" class="child-7">
                                                            <h4 class="text-PrimaryColor">Inherit</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Make sure the data generated by the system and input into the end device. Then press the send button.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.5.1. Inherit.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111252" class="child-7">
                                                            <h4 class="text-PrimaryColor">Custom</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>In OTAA Parameter custom, users can manually enter the final device parameters into the system.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.5.2. Custom.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111253" class="child-7">
                                                            <h4 class="text-PrimaryColor">Application EUI</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Application EUI is a unique ID of the application server, obtained from the IEEE EUI64 standard that identifies the entity to connect to the network, Application EUI is stored on the end-device. Each application server will have a unique Application EUI ID. Application EUI can be generated by the Telkom IoT Platform, commonly called inherit or can also use the manual method, namely custom.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.5.3. Application EUI.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111254" class="child-7">
                                                            <h4 class="text-PrimaryColor">Device EUI</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Device EUI is like a Mac Address, or a unique code of the end device that follows the Lora alliance standard and is used to identify the device.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.5.4. Device EUI.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111255" class="child-7">
                                                            <h4 class="text-PrimaryColor">Application Key</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>The Application Key is the encryption key between the message source behind the Device EUI and the message destination behind the Application EUI. Each key must be unique for each device.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.5.5. Application Key.webp" alt="">
                                                            </div>
                                                        </div>

                                                    <div id="item-75211126" class="child-6">
                                                        <h4 class="text-PrimaryColor">ABP Parameter</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>There are 2 options in it, including the following:</p>
                                                        </div>
                                                    </div>

                                                        <div id="item-752111261" class="child-7">
                                                            <h4 class="text-PrimaryColor">Inherit</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Make sure the data generated by the system and input into the end device. Then press the send button.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.6.1. Inherit.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111262" class="child-7">
                                                            <h4 class="text-PrimaryColor">Custom</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>In ABP Parameter custom, users can manually enter the final device parameters into the system.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.6.2. Custom.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111263" class="child-7">
                                                            <h4 class="text-PrimaryColor">Application EUI</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Application EUI is a unique ID of the application server, obtained from the IEEE EUI64 standard that identifies the entity to connect to the network, Application EUI is stored on the end-device. Each application server will have a unique Application EUI ID. Application EUI can be generated by the Telkom IoT Platform, commonly called inherit or can also use the manual method, namely custom.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.6.3. Application EUI.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111264" class="child-7">
                                                            <h4 class="text-PrimaryColor">Device EUI</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Device EUI is like a Mac Address, or a unique code of the end device that follows the Lora alliance standard and is used to identify the device.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.6.4. Device EUI.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111265" class="child-7">
                                                            <h4 class="text-PrimaryColor">Device Address</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Device Address serves to identify the hardware as an identifier so that each particular device has a unique ID.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.6.5. Device Address.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111266" class="child-7">
                                                            <h4 class="text-PrimaryColor">Network Session Key</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Network Session Key (NwkSKey) is used for interaction between Node and Network Server which is used to validate integrity on each message with integrity code on each message.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.6.6. Network Session Key.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752111267" class="child-7">
                                                            <h4 class="text-PrimaryColor">Application Session Key</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Network Session Key (NwkSKey) is used for interaction between Node and Network Server which is used to validate integrity on each message with integrity code on each message.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.1.1.2.6.7. Application Session Key.webp" alt="">
                                                            </div>
                                                        </div>



                                        
                                        <div id="item-75212" class="child-3">
                                            <h4 class="text-PrimaryColor">Multiple Device</h4>
                                            <div class="row align-items-center justify-content-center">
                                                <p>Multiple Device, field that allow user to add more than one device.</p>
                                            </div>
                                            <div class="row align-items-center justify-content-center">
                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2. Multiple Device.webp" alt="">
                                            </div>
                                        </div>

                                            <div id="item-752121" class="child-4">
                                                <h4 class="text-PrimaryColor">Product</h4>
                                                <div class="row align-items-center justify-content-center">
                                                    <p>Product, is the type of device that will determine the product to be made, including existing product and custom product:</p>
                                                </div>
                                                <div class="row align-items-center justify-content-center">
                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2. Multiple Device.webp" alt="">
                                                </div>
                                            </div>

                                                <div id="item-7521211" class="child-5">
                                                    <h4 class="text-PrimaryColor">Create Existing Product Flow</h4>
                                                    <div class="row align-items-center justify-content-center">
                                                        <p>Existing Product, is a type of product which has a decoder that is already recognized by the system.</p>
                                                    </div>
                                                    <div class="row align-items-center justify-content-center">
                                                        <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.1. Create Existing Product Flow.webp" alt="">
                                                    </div>
                                                </div>

                                                    <div id="item-75212111" class="child-6">
                                                        <h4 class="text-PrimaryColor">Choose Product Name</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>Product name is the name of the product that is already available.</p>
                                                        </div>
                                                        <div class="row align-items-center justify-content-center">
                                                            <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.1.1. Choose Product Name.webp" alt="">
                                                        </div>
                                                    </div>

                                                    <div id="item-75212112" class="child-6">
                                                        <h4 class="text-PrimaryColor">Choose Connectivity</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>Connectivity, the type of connectivity will be used for a device. User can choose the type of connectivity such as LoRa, MQTT, and HTTP. If user’s device use the LoRa connectivity parameter, the configuration is as follows:</p>
                                                        </div>
                                                    </div>

                                                        <div id="item-752121121" class="child-7">
                                                            <h4 class="text-PrimaryColor">LoRa Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>LoRa (Long Range) is a low-power long range wireless radio frequency technology.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.1.2.1. LoRa Connectivity.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Download .csv file, fill in the fields according to the list in the .csv file.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step1.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                
                                                            </div>
                                                            <p>After the writing format is arranged correctly, next is to do the following steps: <br>
                                                            First, klik <b>Data</b> menu on the toolbar.</p>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step2.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Choose <b>Text to Columns</b>.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step3.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Next, pop up will appear as below. Choose <b>Delimited</b> and click <b>next</b>.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step5.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Click the check mark in <b>Tab</b> and fill <b>Other</b> field with character “;”, then click <b>next</b>.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step4.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>After click <b>Next</b>, pop up will appear as below. You need to click <b>OK</b> as confirmation that you agree to save your file into CSV format.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step7.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>After you click <b>OK</b>, the data will be saved according to the correct CSV format. Now your data can be uploaded to Telkom IoT Platform. </p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step8.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752121122" class="child-7">
                                                            <h4 class="text-PrimaryColor">MQTT Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>MQTT, if your device uses MQTT, user can select MQTT connectivity then click the Save button. MQTT is a communication protocol that requires small resources and bandwidth. MQTT uses a broker in charge of connecting publishers and subscribers.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/7.5.2.1.2.1.1.2.2. MQTT Connectivity.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752121123" class="child-7">
                                                            <h4 class="text-PrimaryColor">HTTP Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>HTTP, if your device uses HTTP, user can select HTTP connectivity and then click the Save button. HTTP is an application layer network protocol that is used to assist the process of exchanging data on the internet between computers with one another.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/7.5.2.1.2.1.1.2.3. HTTP Connectivity.webp" alt="">
                                                            </div>
                                                        </div>

                                                    <div id="item-75212113" class="child-6">
                                                        <h4 class="text-PrimaryColor">Upload File</h4>
                                                        <div class="row justify-content-center">
                                                            <img class="imageDocumentation lazy" src="images/Documentation/7.5.2.1.2.1.1.3. Upload File.webp" alt="">
                                                        </div>
                                                    </div>

                                                <div id="item-7521212" class="child-5">
                                                    <h4 class="text-PrimaryColor">Create Custom Product Flow</h4>
                                                    <div class="row align-items-center justify-content-center">
                                                        <p>Custom Product, field that contains user’s settings who have their own devices in the form of decoder.</p>
                                                    </div>
                                                    <div class="row align-items-center justify-content-center">
                                                        <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.2. Create Custom Product Flow.webp" alt="">
                                                    </div>
                                                </div>

                                                    <div id="item-75212121" class="child-6">
                                                        <h4 class="text-PrimaryColor">Decoder</h4>
                                                    </div>

                                                        <div id="item-752121211" class="child-7">
                                                            <h4 class="text-PrimaryColor">New Decoder</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>On the new decoder, the user can enter a new decoder that has never been created before. The following are additional data inputs that the user must enter:</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.2.1.1. New Decoder.webp" alt="">
                                                            </div>
                                                        </div>

                                                            <div id="item-752121211a" class="child-8">
                                                                <h4 class="text-PrimaryColor">Decoder Name</h4>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <p>The name of the decoder, is the name of the decoder that will be used and is defined by the user.</p>
                                                                </div>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.2.1.1.1. Decoder Name.webp" alt="">
                                                                </div>
                                                            </div>

                                                            <div id="item-752121211b" class="child-8">
                                                                <h4 class="text-PrimaryColor">Decoder Algorithm</h4>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.2.1.1.2. Decoder Algorithm.webp" alt="">
                                                                </div>
                                                            </div>

                                                        <div id="item-752121212" class="child-7">
                                                            <h4 class="text-PrimaryColor">Existing Decoder</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>On the existing decoder, the user can choose a decoder that has been made previously on the existing decoder, the user can choose a decoder that has been made previously. Device name, is the name of the device which will be used and specified by the user. The following are additional data inputs that the user must enter:</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.2.1.2. Existing Decoder.webp" alt="">
                                                            </div>
                                                        </div>

                                                            <div id="item-752121212a" class="child-8">
                                                                <h4 class="text-PrimaryColor">Decoder Name</h4>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <p>The name of the decoder, is the name of the decoder that will be used and is defined by the user.</p>
                                                                </div>
                                                                <div class="row align-items-center justify-content-center">
                                                                    <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.2.1.2.1. Decoder Name.webp" alt="">
                                                                </div>
                                                            </div>

                                                        <div id="item-752121213" class="child-7">
                                                            <h4 class="text-PrimaryColor">No Decoder</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>On no decoder, user can create device but no decoder added.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.2.1.3. No Decoder.webp" alt="">
                                                            </div>
                                                        </div>

                                                    <div id="item-75212122" class="child-6">
                                                        <h4 class="text-PrimaryColor">Choose Connectivity</h4>
                                                        <div class="row align-items-center justify-content-center">
                                                            <p>Connectivity, the type of connectivity will be used for a device. User can choose the type of connectivity such as LoRa, MQTT, and HTTP. If user’s device use the LoRa connectivity parameter, the configuration is as follows:</p>
                                                        </div>
                                                    </div>

                                                        <div id="item-752121221" class="child-7">
                                                            <h4 class="text-PrimaryColor">LoRa Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>LoRa (Long Range) is a low-power long range wireless radio frequency technology.</p>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <img class="imageDocumentation" src="images/Documentation/7.5.2.1.2.1.1.2.1. LoRa Connectivity.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Download .csv file, fill in the fields according to the list in the .csv file.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step1.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                
                                                            </div>
                                                            <p>After the writing format is arranged correctly, next is to do the following steps: <br>
                                                            First, klik <b>Data</b> menu on the toolbar.</p>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step2.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Choose <b>Text to Columns</b>.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step3.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Next, pop up will appear as below. Choose <b>Delimited</b> and click <b>next</b>.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step5.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>Click the check mark in <b>Tab</b> and fill <b>Other</b> field with character “;”, then click <b>next</b>.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step4.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>After click <b>Next</b>, pop up will appear as below. You need to click <b>OK</b> as confirmation that you agree to save your file into CSV format.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step7.webp" alt="">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>After you click <b>OK</b>, the data will be saved according to the correct CSV format. Now your data can be uploaded to Telkom IoT Platform. </p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/step8.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752121222" class="child-7">
                                                            <h4 class="text-PrimaryColor">MQTT Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>MQTT, if your device uses MQTT, user can select MQTT connectivity then click the Save button. MQTT is a communication protocol that requires small resources and bandwidth. MQTT uses a broker in charge of connecting publishers and subscribers.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/7.5.2.1.2.1.2.2.2. MQTT Connectivity.webp" alt="">
                                                            </div>
                                                        </div>

                                                        <div id="item-752121223" class="child-7">
                                                            <h4 class="text-PrimaryColor">HTTP Connectivity</h4>
                                                            <div class="row align-items-center justify-content-center">
                                                                <p>HTTP, if your device uses HTTP, user can select HTTP connectivity and then click the Save button. HTTP is an application layer network protocol that is used to assist the process of exchanging data on the internet between computers with one another.</p>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <img class="imageDocumentation lazy" src="images/Documentation/7.5.2.1.2.1.2.2.3. HTTP Connectivity.webp" alt="">
                                                            </div>
                                                        </div>

                                                    <div id="item-75212123" class="child-6">
                                                        <h4 class="text-PrimaryColor">Upload File</h4>
                                                        <div class="row justify-content-center">
                                                            <img class="imageDocumentation lazy" src="images/Documentation/7.5.2.1.2.1.2.3. Upload File.webp" alt="">
                                                        </div>
                                                    </div>
                                                    
                                <div id="item-753" class="child-1">
                                    <h4 class="text-PrimaryColor">7.5.3 Manage Device Flow</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Devices that have been created by users can be managed in the form of edit, delete, and move. When a list of devices appears in the app, the user selects one of the devices to select. Device details will show some of the managed devices that can be changed, deleted, and moved.</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/7.5.3. Manage Device Flow (1).webp" alt="">
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/7.5.3. Manage Device Flow (2).webp" alt="">
                                    </div>
                                </div>

                                    <div id="item-7531" class="child-2">
                                        <h4 class="text-PrimaryColor">7.5.3.1 Choose Button Edit</h4>
                                        <div class="row align-items-center justify-content-center">
                                            <p>Users can update/edit a single device within the app by selecting the edit button.</p>
                                        </div>
                                        <div class="row justify-content-center">
                                            <img class="imageDocumentation lazy" src="images/Documentation/7.5.3.1. Choose Button Edit.webp" alt="">
                                        </div>
                                    </div>

                                    <div id="item-7532" class="child-2">
                                        <h4 class="text-PrimaryColor">7.5.3.2 Choose Button Delete</h4>
                                        <div class="row align-items-center justify-content-center">
                                            <p>Users can delete a single device in the application by selecting the delete button.</p>
                                        </div>
                                        <div class="row justify-content-center">
                                            <img class="imageDocumentation lazy" src="images/Documentation/7.5.3.2. Choose Button Delete.webp" alt="">
                                        </div>
                                    </div>

                                    <div id="item-7533" class="child-2">
                                        <h4 class="text-PrimaryColor">7.5.3.3. Choose Button Move</h4>
                                        <div class="row align-items-center justify-content-center">
                                            <p>User can move one device in an application to another application by selecting an application.</p>
                                        </div>
                                        <div class="row justify-content-center">
                                            <img class="imageDocumentation lazy" src="images/Documentation/7.5.3.3. Choose Button Move.webp" alt="">
                                        </div>
                                    </div>




                        <div id="item-8" >
                            <div class="col-12 align-content-center justify-content-center align-items-center">
                                <h3 class="text-PrimaryColor mb-4">8. Access Key Flow</h3>
                            </div>
                            <div class="row align-items-center justify-content-center">
                                <p>Access keys in the Telkom IoT Platform are used as authentication for devices with LoRa, HTTP and MQTT connectivity.</p>
                            </div>
                        </div>

                            <div id="item-81" class="child-0">
                                <h4 class="text-PrimaryColor">8.1 Create Access Key</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>Access key has several fields that the user must input in the form of Key Name, Access key and Access Token. The following is an explanation of the fields required to be input by the user:</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/8.1. Create Access Key (Dashboard).webp" alt="">
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/8.1. Create Access Key (Form Create).webp" alt="">
                                </div>
                                <ol>
                                    <li style="list-style-type:lower-alpha">The access key is used in a combination of access tokens for LoRa config and auto generated by the system on Telkom IoT Platform.</li>
                                    <li style="list-style-type:lower-alpha">The Access Token is used for authentication on the API and the device is auto generated by the system on Telkom IoT Platform.</li>
                                    <li style="list-style-type:lower-alpha">Key names can be input with a name that suits what the user needs.</li>
                                </ol>
                            </div>

                            <div id="item-82" class="child-0">
                                <h4 class="text-PrimaryColor">8.2 Access Key List</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>Access Key List is a list of Access Keys that has been inputted by the user.</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/8.2. Access Key List.webp" alt="">
                                </div>
                            </div>

                            <div id="item-83" class="child-0">
                                <h4 class="text-PrimaryColor">8.3 Edit Access Key</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>In the Edit Access Key, users can select one from the list of access keys that they want to edit/update the previously submitted data by clicking the edit button.</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/8.3. Edit Access Key.webp" alt="">
                                </div>
                            </div>

                            <div id="item-84" class="child-0">
                                <h4 class="text-PrimaryColor">8.4 Delete Access Key</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>In Delete Access Key, users can select one from the list of access keys they want to delete previously submitted data by clicking the delete button.</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/8.4. Delete Access Key.webp" alt="">
                                </div>
                            </div>

                            <div id="item-85" class="child-0">
                                <h4 class="text-PrimaryColor">8.5 Search Access Key</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>In the Access Key Search, users can enter the data keywords they want to search to make it easier for users to search for access key data, if the access key list is large.</p>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/8.5. Search Access Key.webp" alt="">
                                </div>
                            </div>



                        <div id="item-9" >
                            <div class="col-12 align-content-center justify-content-center align-items-center">
                                <h3 class="text-PrimaryColor mb-4">9. How to Send Data to Telkom IoT Platform</h3>
                            </div>
                        </div>

                            <div id="item-91" class="child-0">
                                <h4 class="text-PrimaryColor">9.1 Overview</h4>
                                <div class="row align-items-center justify-content-center">
                                    <p>The Telkom IoT Platform offers several benefits as a liaison for IoT devices and various related sources.</p>
                                </div>
                            </div>

                            <div id="item-92" class="child-0">
                                <h4 class="text-PrimaryColor">9.2 Integration using MQTT</h4>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/9.2. Integration using MQTT.webp" alt="">
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <p>The implementation of MQTT by the Telkom IoT Platform has several benefits, including: </p>
                                    <ol>
                                        <li style="list-style-type:lower-alpha">Each end device has authentication using special credentials (the token of the access key) which is input into the MQTT client id parameter.</li>
                                        <li style="list-style-type:lower-alpha">After connecting, make sure the data is sent by viewing the real time data on the device that the user has made on Telkom IoT Platform.</li>
                                        <li style="list-style-type:lower-alpha">Has a standard payload format that has been determined to support Telkom IoT Platform sensors, alarm management, remote control.</li>
                                    </ol>
                                </div>
                            </div>

                                <div id="item-921" class="child-1">
                                    <h4 class="text-PrimaryColor">9.2.1 Publish Data to IoT Platform using Node Red</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Users are required to have a Telkom IoT Platform account and perform the Sign in process. Go to the Telkom IoT Platform dashboard, create an application and create a device like the example on the following image:</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.1.1.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>On Add Device Page, input parameter number of device (Single), Product (Existing product), Product Name, Device Name, Connectivity (MQTT) and click Save button. Then create Access Key and Access Token with described steps in section Create Access Key with steps described in the Create Access Key section.</p>
                                        <p>Open Node Red and Double click Node inject for configuration node, and set node inject as follow:</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.1.2.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Configuration node inject with type data JSON, then fill in the message as you want (The example in the Picture message contains “{"Message":"Node-Red Send"}”), then fill in the field name as you want (The example in the picture message contains “{"Message":"Node-Red Test"}”) then click Done when the configuration is complete.</p>
                                        <p>Then Double click Node MQTT Out to configure the node, then configure the node as shown below:</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.1.3.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Click the Pencil Icon as shown in the image for the MQTT Broker configuration use, on this stage, prepare the Device that has been created on Telkom IoT Platform.</p>
                                        <p>Open the previously prepared Device, then copy the HOST Broker (mqtt.telkomiot.id) contained on the detailed device as shown in the picture.</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.1.4.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>After Host is copied, Enter the Node-red broker configuration as shown in the picture, select menu Connection, configuration host then configuration  port with value 1883 (port default mqtt).</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.1.5.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>After that, select the Security menu then enter the value Access Keys and Access Token.</p>
                                        <p>Input Access Keys to field User name, and Access Token to field Password, if it’’s already inputted, edit name Broker Host (example on picture above : IoT Telkom), then click Add.</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.1.6.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>If successful, then the display will appear as shown in the image below, then enter the topic from Device Details on the IoT Platform (Note : Edit subs to pubs for publish) input Field name as desired (example : Node_Red Publish), and click Done.</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.1.7.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>When configuration is done, click deploy and make sure the MQTT Node is connected.</p>
                                    </div>
                                </div>

                                <div id="item-922" class="child-1">
                                    <h4 class="text-PrimaryColor">9.2.2 Subscribe Data to Telkom IoT Platform using Node Red</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Open Node-Red in Browser, create a Flow with node MQTT In , and debug as shown in the picture below.</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.2.a.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Create a Flow by connecting each node as shown below:</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.2.b.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Double click node MQTT In, then configure the node according to the broker used, if using the same broker as the previous publish method, the configuration is immediately available and can be selected.</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.2.c.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>After you finish configuring the MQTT broker, then use the Subscribe topic on the IoT Platform, then enter it in the Topic column as shown in Figure:</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.2.d.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>After finishing, deploy the configured flow and make sure the MQTT node is connected as shown in the picture.</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <img class="imageDocumentation lazy" src="images/Documentation/9.2.2.e.webp" alt="">
                                    </div>
                                </div>

                                    <div id="item-9221" class="child-2">
                                        <h4 class="text-PrimaryColor">9.2.2.1 Running Flow and Data Validation</h4>
                                        <div class="row align-items-center justify-content-center">
                                            <p>If the Flow has been configured and deployed, the next step is to validate the data sent from the message publisher to the message subscriber with the Telkom  IoT Platform Broker.</p>
                                            <p>Open Node-Red that has been configured, then prepare the available debug window.</p>
                                            <p>Make sure the publisher sends a message to the Broker. If the publisher sends a message to the IoT platform, a message that is subscribed from the Telkom IoT Platform will appear as shown in Figure.</p>
                                        </div>
                                        <div class="row justify-content-center">
                                            <img class="imageDocumentation lazy" src="images/Documentation/9.2.2.1. Runniing Flow and Validation Data.webp" alt="">
                                        </div>
                                        <div class="row align-items-center justify-content-center">
                                            <p>If the message on debug already appears, make sure the message on the IoT Platform is the same as that shown on debug.</p>
                                        </div>
                                    </div>

                            <div id="item-93" class="child-0">
                                <h4 class="text-PrimaryColor">9.3 Integration using LoRa</h4>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/9.3. Integration using LoRa.webp" alt="">
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <p>Integration using LoRaWAN is a network designed to connect user devices that use LoRa support. After successful integration using LoRa, users can connect, communicate, process and visualize data from devices available on Telkom IoT Platform.</p>
                                </div>
                            </div>

                            <div id="item-94" class="child-0">
                                <h4 class="text-PrimaryColor">9.4 Integration using HTTP</h4>
                                <div class="row align-items-center justify-content-center">
                                    <img class="imageDocumentation" src="images/Documentation/9.4. Integration using HTTP.webp" alt="">
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <p>Integration using HTTP can convert protocols and has a payload format that is in the message format owned by the Telkom IoT Platform and serves as an implementation scenario as follows:</p>
                                    <ol>
                                        <li style="list-style-type:lower-alpha">Connecting existing devices with a special HTTP-based protocol on Telkom IoT Platform.</li>
                                        <li style="list-style-type:lower-alpha">Stream devices in the form of data access from external systems to Telkom IoT Platform.</li>
                                        <li style="list-style-type:lower-alpha">Device streams from custom apps can run in the Cloud.</li>
                                    </ol>
                                </div>
                            </div>

                                <div id="item-941" class="child-1">
                                    <h4 class="text-PrimaryColor">9.4.1 Push Data to Telkom IoT Platform using Node Red</h4>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Users are required to have a Telkom IoT Platform account and perform the Sign in process. Go to the Telkom IoT Platform dashboard, create an application and create a device like the example in the following image:</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/9.4.1.a.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>In Add Device Page, input parameter number of device (Single), Product (Existing product), Product Name, Device Name, Connectivity (HTTP) and click Save button. Then create Access Key and Access Token with described steps in section Create Access Key section.</p>
                                        <p>Open Node Red and Double click Node inject for configuration node, and set node inject as follow:</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/9.4.1.b.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Set configuration Inject, http request and debug 1 match with users. detail.</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/9.4.1.c.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>Click the Inject button to send data</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/9.4.1.d.webp" alt="">
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <p>See the details of device on Telkom IoT Platform account.</p>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <img class="imageDocumentation" src="images/Documentation/9.4.1.e.webp" alt="">
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </section>
@endsection