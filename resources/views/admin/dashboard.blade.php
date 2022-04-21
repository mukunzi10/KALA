@include('header1');

<div class="row" style="padding-top:5em ">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-account-network float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">System Citizen</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                 <span class="ml-2 text-muted">All Citizen list hire</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        {{-- <p class="m-0">Tatal : {{$count}}</p> --}}
                    </div>
                    <h6 class="m-0"><span class="badge badge-info"> <a class="text-white" href="{{'citizn'}}">View More..</a></span><i class="mdi mdi-arrow-up text-success ml-2"></i></h6>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-briefcase float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Testmony</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                        <span class="ml-2 text-muted">Testmonys published</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">

                        <h6 class="m-0"><span class="badge badge-info"> <a class='text-white' href="{{'testmony'}}">View More...</a></span><i class="mdi mdi-arrow-up text-success ml-2"></i></h6>
                    </div>
                    {{-- <h7 class="m-0">Total:{{$count1}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h7> --}}

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Our loyals</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="ml-2 text-muted"><a href="#"> All Loyals Registered</a></span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">

                        <h6 class="m-0  text-white"><span class="badge badge-info"> <a a href="{{'report'}}"  class="text-white">View More...</a></span><i class="mdi mdi-arrow-up text-success ml-2"></i></h6>
                    </div>
                    {{-- <h7 class="m-0">Tatal Loyals:{{$loyal1}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h7> --}}

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cart-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Money donations</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class="badge badge-secondary"> <?php echo date('Y-M-D')?> </span> <span class="ml-2 text-muted">All Donations </span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">

                        <h6 class="m-0"><span class="badge badge-success"> <a href="#">View More...</a></span><i class="mdi mdi-arrow-up text-success ml-2"></i></h6>
                    </div>
                    <h7 class="m-0">3567<i class="mdi mdi-arrow-up text-success ml-2"></i></h7>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@include('footer1');




