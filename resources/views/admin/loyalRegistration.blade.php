@include('header1')


<div class="row" style="padding-top:1em">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                @if ($message = Session::get('success'))

                                                <div class="alert alert-danger">

                                                    <p>{{ $message }}</p>

                                                </div>

                                            @endif

                <h1 class="mt-0 header-title">Loyal Registration</h1>
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
                            <form action="{{'registration'}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Frist Name</label>
                                    <input type="text" class="form-control" name='fname' required placeholder="First name"/>
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
                                        <label>Email</label>
                                        <input type="email" placeholder="Email Address" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Birth date</label>
                                        <input type="date"  name="date" class="form-control">
                                    </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-20">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" required placeholder="Last Name"/>
                                </div>
                                <div class="form-group">
                                    <label>ID number</label>
                                    <input type="number" placeholder="Nation Identity No"  name="idno" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input type="number" placeholder="phone Number" name="phone" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label>qualification</label>
                                    <select class="form-control" name="qualification">
                                        <option disabled selected> ...Select degree...</option>
                                        <option>A2</option>
                                        <option>A1</option>
                                        <option>A0</option>
                                        <option>Masters Degree</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" style="background-color:#af794b">Register</button>
                                    </div>

                            </form>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@include('footer1')
