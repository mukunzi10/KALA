@include('header1');

<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="row" >
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                @if ($message = Session::get('success'))

                        <div class="alert alert-danger">

                            <p>{{ $message }}</p>

                        </div>

                    @endif

                <h1 class="mt-0 header-title">Citizen Registration</h1>


                @if ($errors->any())

    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>
            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>
@endif
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-20">
                            <form action="{{'registe'}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Frist Name</label>
                                    <input type="text" class="form-control" name='fname' required placeholder="First name"/>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" required placeholder="Last Name"/>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                   <select class="form-control" name="gender">
                                       <option disabled selected> choose Gender...</option>
                                       <option> Male</option>
                                       <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input type="number" placeholder="phone Number" name="phone" class="form-control">
                                    </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-20">
                                <div class="form-group">
                                    <label>Province</label>
                                    <input type="text" placeholder="Province"  name="province" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>District</label>
                                    <input type="text" placeholder="district"  name="district" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Sector</label>
                                    <input type="text" placeholder="sector"  name="sector" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" style="background-color:#af794b">Save Data</button>
                                    </div>
                            </form>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@include('footer1');
<!-- Parsley js -->



<script>
    $(document).ready(function() {
        $('form').parsley();
    });
</script>

</body>
</html>
