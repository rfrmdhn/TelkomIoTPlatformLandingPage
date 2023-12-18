@extends('layouts.app')
@section('content')
<section style="margin-top: 164px;margin-bottom: 48px; z-index: 20;"></section>
        <section class="padding64h" style="margin-top: 164px;margin-bottom: 64px; z-index: 20;" >
            <div class="row mb-5">
                <div class="col-6">
                    <div class="row">
                        <h2 class="text-PrimaryColor">
                            What is Telkom IoT Platform?
                        </h2>
                    </div>
                    <div class="row">
                        <p class="text-PrimaryColor">
                            Telkom IoT Platform is an IoT technology service that can easily connect, manage, automate various devices or sensors, and visualize stored device data in a personal dashboard which can be customized to customer needs. With Research, Innovation, and Collaboration business model, Telkom IoT Platform has wide coverage target market such as academics, B2B to large institutions as users. 
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{route('file','/assets/image/About Us Illustration.webp')}}" class="about_usImg" alt="">
                </div>
            </div>
        </section>


        <section class="padding64h" style="margin-top: 164px;margin-bottom: 64px; z-index: 20;">
            <div class="row justify-content-center mb-4">
                <h2 class="text-center text-PrimaryColor">About ITDRI</h2>
            </div>
            <div class="row">
                <img src="{{route('file','/assets/image/ITDRI Image.png')}}" alt="">
            </div>
            <div class="row padding24h">
                <p class="body-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt vulputate eros non convallis. Pellentesque et dignissim felis. Sed vitae posuere dolor, feugiat rutrum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec dolor tortor. Curabitur magna elit, hendrerit sed ligula at, lobortis lacinia nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    <br><br>
                    Nam quis sapien ac nisl hendrerit ultrices sit amet ac nibh. Phasellus bibendum dui at ante consequat, eget fringilla arcu pulvinar. Cras lectus ex, tristique varius nisl id, malesuada vehicula orci. Sed posuere libero a felis pretium sollicitudin. Morbi et ligula sodales, egestas lectus eu, dapibus neque. Aliquam erat volutpat. Donec mollis odio in dui finibus sollicitudin. Integer porttitor felis lobortis, tempus lacus quis, luctus urna. Nullam eu nisl nec dolor pellentesque aliquet. Sed ac varius eros. Fusce tempus posuere turpis, eu scelerisque lectus finibus et.
                </p>
            </div>
        </section>

        <section class="padding64h" style="margin-top: 164px;margin-bottom: 64px; z-index: 20;" >
            <div class="row justify-content-center mb-5">
                <h2 class="text-center text-PrimaryColor">About Telkomgroup</h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <img src="{{route('file','/assets/image/Telkomgroup Image.webp')}}" class="telkom_GroupImg" alt="">
                </div>
                <div class="col-6">
                    <p class="body-1">
                        PT Telkom Indonesia (Persero) Tbk (Telkom) is a state-owned information and communications technology enterprise and telecommunications network in Indonesia. The Government of Indonesia is the majority shareholder with 52.09 percent shares while the remaining 47.91 percent shares belong to public shareholders. Telkom’s shares are traded on the Indonesian Stock Exchange (IDX) where it is listed as “TLKM” and on the New York Stock Exchange (NYSE), which lists it as “TLK”.
                        <br> <br>
                        As it transforms to become a digital telecommunication company, TelkomGroup implements a customer-oriented business and company operational strategy. The transformation aims to trim down TelkomGroup’s organization to be leaner and more agile in adapting the fast-changing nature of telecommunications industry. The new organization is expected to be able to improve efficiency and be more effective in producing a quality customer experience.
                        <br> <br>
                        TelkomGroup’s activities grow and change in accordance to the development of new technology, information and digitalization, but still within the corridor of telecommunications and information technology. This is evident in the newly developed business lines, which complements the company’s existing legacy business.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{route('file','/assets/image/DigitalConnectivity.webp')}}" class="AboutIcon" alt="">
                                </div>
                                <div class="col-6">
                                    <h6>Digital Connectivity</h6>
                                    <p class="tinyText">
                                        Fiber to the x (FTTx), 5G, Software Defined Networking (SDN)/ Network Function Virtualization (NFV)/ Satellite.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{route('file','/assets/image/DigitalPlatform.webp')}}" class="AboutIcon" alt="">
                                </div>
                                <div class="col-6">
                                    <h6>Digital Platform</h6>
                                    <p class="tinyText">
                                        Data Center, Cloud, Internet of Things (IoT), Big Data/ Artificial Intelligence (AI), Cybersecurity.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{route('file','/assets/image/DigitalServices.png')}}" class="AboutIcon" alt="">
                                </div>
                                <div class="col-6">
                                    <h6>Digital Connectivity</h6>
                                    <p class="tinyText">
                                        Enterprise, Consumer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection