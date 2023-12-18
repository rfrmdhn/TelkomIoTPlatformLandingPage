@extends('layouts.app')
@section('content')



        <section class="UsecaseHead padding48h fullwidth" style="margin-top: 0px;margin-bottom: 0px; z-index: 20;" >
            <img src="{{route('file','assets/image/white-pixel-background 5.webp')}}" style="z-index: 21;" class="image_background" alt="">
            <div class="row padding32h fullheight justify-content-start align-items-center mb-4" >
                <div class="col-auto align-middle">
                    <h2 class="text-PrimaryColor">Poultry</h2>
                    <div class="containerText">
                        <p class="body-3">
                        IoT solutions are implemented in the poultry farming industry to help entrepreneurs and breeders to minimize costs and get the best livestock yields.
                        </p>
                    </div>
                </div>
            </div>
            <img src="{{route('file','assets/image/poultrybg.png')}}" class="image_usecaseHead lazy" alt="">
        </section>




        <section style="margin-top: 64px; ">
            <div class="row mb-5">
                <h2 class="text-PrimaryColor text-center">
                    Use Case
                </h2>
            </div>
            <div class="row p-5 g-3 mb-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h3 class="text-PrimaryColor">Smart Poultry</h3>
                    <p class="body-3">
                        Utilization of IoT to maintain <b>"food security" and "breeder independence"</b> to increase the productivity of Indonesian chicken farms.
                    </p>
                    <button type="button" class="btn btn-ReqDemo" style="z-index: 60;"  data-bs-toggle="modal" data-bs-target="#exampleModal">Request Demo</button>
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
                                                <label for="exampleInputEmail1" class="form-label">Use Cases</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Smart Poultry" disabled>   
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
                    <img src="{{route('file','assets/image/Living Lab Journey_smart poultry_isometric rev typo no backgrd copy 1.png')}}" class="imgLL" alt="">
                </div>
            </div>
        </section>

        
@endsection