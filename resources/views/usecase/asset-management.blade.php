@extends('layouts.app')
@section('content')
<section style="margin-top: 164px;margin-bottom: 124px; z-index: 20;"></section>
        <section class="padding48h" style="margin-top: 0px;margin-bottom: 124px; z-index: 20;" >
            <img src="{{route('file','assets/image/white-pixel-background 5.webp')}}" style="z-index: 1;" class="image_background" alt="">
            <div class="row padding32h mb-4">
                <h2 class="text-PrimaryColor">Asset Management</h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="containerText">
                        <p class="body-3">
                            Asset management is one of the challenges in many kind of industries. Entering data and keep track the asset status manually is the pain point of traditional asset management which leads in to discrepancies and improper inventory management. 
                        </p>
                    </div>
                </div>
            </div>
            <img src="{{route('file','assets/image/inventory management 1.webp')}}" class="image_LLBG" alt="">
        </section>



        <section style="margin-top: 224px; z-index: 20;">
            <div class="row mb-5">
                <h2 class="text-PrimaryColor text-center">
                    Living Labs
                </h2>
            </div>
            <div class="row  padding48h" style="z-index:99;">
                <div class="col-6">
                    <div class="row mb-4">
                        <h3 class="text-PrimaryLightColor">Digital Inventory Management</h3>
                    </div>
                    <div class="row mb-5">
                        <p class="body-3">
                            Digital Inventory Management (DIM) Digital Inventory Management (DIM) is an Internet of Things (IoT)-based technology asset tracking, live system by RFID tag and reader. The purpose is to automate asset registration, tracking and monitoring asset details such as asset name, asset category, asset location, asset insertion (assset in), and asset out. The asset management Living Lab is impemented in Telkom Corporate University Center-Bandung.
                        </p>
                    </div>
                    <div class="row" style="z-index:99;">
                        <div class="col-auto" style="z-index:99;">
                            <button type="button" style="z-index:99;" class="btn btn-ReqDemo" style="z-index: 60;" data-bs-toggle="modal" data-bs-target="#exampleModal">Request Demo</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <label for="exampleInputEmail1" class="form-label">Living Labs</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Asset Management" disabled>
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
                <div class="col-6">
                    <img src="{{route('file','assets/image/Living Lab Journey_DIM_isometric no backgrd.webp')}}" class="imgLL" alt="">
                </div>
            </div>
        </section>
@endsection
