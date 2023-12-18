@extends('layouts.app')
@section('content')

        <section class="UsecaseHead padding48h fullwidth" style="margin-top: 0px;margin-bottom: 0px; z-index: 20;" >
            <img src="{{route('file','assets/image/white-pixel-background 5.webp')}}" style="z-index: 21;" class="image_background" alt="">
            <div class="row padding32h fullheight justify-content-start align-items-center mb-4" >
                <div class="col-auto align-middle">
                    <h2 class="text-PrimaryColor">Assets & Inventory</h2>
                    <div class="containerText">
                        <p class="body-3">
                            IoT technology is used to display asset data related to the type, number, position, etc. It can also update the company's inventory data automatically and in real-time through a personal dashboard.
                        </p>
                    </div>
                </div>
            </div>
            <img src="{{route('file','assets/image/AssetProtectionBG.webp')}}" class="image_usecaseHead lazy" alt="">
        </section>

        <section style="margin-top: 64px; ">
            <div class="row mb-5">
                <h2 class="text-PrimaryColor text-center">
                    Use Cases
                </h2>
            </div>
            <div class="row p-5 g-3 mb-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h3 class="text-PrimaryColor">1. Optical Distribution Cabinet Monitoring</h3>
                    <p class="body-3">
                        <b class="text-PrimaryLightColor"> Optical Distribution Cabinet (ODC)</b> monitoring is an Internet of Things (IoT)-based technology to monitor the door open/close status, temperature, and humidity of the ODC(s). <b> This monitoring system will help to reduce interruption of IndiHome service </b> and in the end will improve IndiHome’s customer experience (CX).
                    </p>

                    <button type="button" class="btn btn-ReqDemo mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Request Demo</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content Radius20">
                                        <button type="button" class="btn btnX fit-content"  data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
                                        <div class="CustomModalHead">
                                            <h3 class="text-white text-center mt-4">Request Demo</h3>
                                        </div>
                                        <div class="row padding48h mt-4">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Use Cases</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Optical Distribution Cabinet Monitoring" disabled>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label for="Message" class="form-label">Messages</label>
                                                        <div class="form-floating mb-3">
                                                            <textarea class="form-control" rows="20" placeholder="Leave a comment here" id="Message" name="Message"></textarea>
                                                            <label for="floatingTextarea">Leave a message</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row  justify-content-end mb-3 align-self-end">
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-SendMessage">Send Request</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{route('file','assets/image/Living Lab Journey_ODC_isometric no backgrd.webp')}}" class="imgLL" alt="">
                </div>
            </div>

            <div class="row p-5 mb-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{route('file','assets/image/Living Lab Journey_DAP_isometric rev typo no backgrd.webp')}}" class="imgLL" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h3 class="text-PrimaryColor">2. Safety Systems Digitalization  </h3>
                    <p class="body-3">
                        <b class="text-PrimaryLightColor">Safety Systems Digitalization</b> is part of <b>smart building</b> systems which role is to monitor fire alarms, fire suppression, hydrant, CCTV, and door access. SSD is delivered to enhance the safety system of Telkom buildings nationwide.
                    </p>
                    <button type="button" class="btn btn-ReqDemo"  data-bs-toggle="modal" data-bs-target="#exampleModal1">Request Demo</button>
                    
                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content Radius20"><div class="CustomModalHead">
                                <div class="row justify-content-end padding32h">
                                    <button type="button" class="btn fit-content color-white"  data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
                                </div>
                                <div class="row padding32h">
                                    <h3 class="text-white text-center">Request Demo</h3>
                                </div>
                            </div>
                            <div class="row padding48h mt-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Use Cases</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Safety Systems Digitalization" disabled>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="Message" class="form-label">Messages</label>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" rows="20" placeholder="Leave a comment here" id="Message" name="Message"></textarea>
                                                <label for="floatingTextarea">Leave a message</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  justify-content-end mb-3 align-self-end">
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-SendMessage">Send Request</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row p-5 mb-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h3 class="text-PrimaryColor">3. Digital Inventory Management</h3>
                    <p class="body-3">
                        <b class="text-PrimaryLightColor">Digital Inventory Management (DIM)</b> Digital Inventory Management (DIM) is an Internet of Things (IoT)-based technology asset tracking, live system by RFID tag and reader. The purpose is to automate asset registration, tracking and monitoring asset details such as asset name, asset category, asset location, asset insertion (asset in), and asset out. The asset management Living Lab is implemented in Telkom Corporate University Center-Bandung.
                    </p>
                    <button type="button" class="btn btn-ReqDemo"  data-bs-toggle="modal" data-bs-target="#exampleModal33">Request Demo</button>
                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content Radius20">
                                    <div class="CustomModalHead">
                                        <div class="row justify-content-end padding32h">
                                            <button type="button" class="btn fit-content color-white"  data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
                                        </div>
                                        <div class="row padding32h">
                                            <h3 class="text-white text-center">Request Demo</h3>
                                        </div>
                                    </div>
                                    <div class="row padding48h mt-4">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Use Cases</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Digital Inventory Management" disabled>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label for="Message" class="form-label">Messages</label>
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" rows="20" placeholder="Leave a comment here" id="Message" name="Message"></textarea>
                                                        <label for="floatingTextarea">Leave a message</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row  justify-content-end mb-3 align-self-end">
                                                <div class="col-auto">
                                                    <button type="button" class="btn btn-SendMessage">Send Request</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{route('file','assets/image/Living Lab Journey_DIM_isometric no backgrd.webp')}}" class="imgLL" alt="">
                </div>
            </div>

            
        </section>
        @endsection