@include('header1');
<div class="row" style="padding-top:1em">
    <div class="col-10">
        <div class="card m-b-30">

            <div class="card-body">
                <h6> <b> You can Publish Testmony</b></h6>
                <br>
                    <form action="{{'cRegistration'}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                            <label>Citizen Name</label>
                            <select class="form-control" name="cit_id">
                            @foreach ($data as $hh )
                                <option value="{{ $hh->id }}" >{{$hh->fname." ".$hh->lname}}</option>
                            @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Problem Title</label>
                                <input type="text" placeholder="Problem Title" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description"  class="form-control" cols='62' rows='3'></textarea>

                            </div>
                            <label>Support Documents </label>
                            <div class="col-12 form-group"   >
                                <input type="file" name="file" placeholder="Choose file" id="file">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                <label>Assign Loyal to the Case </label>
                                <select class="form-control" name="id">
                                    @foreach ($loyal as $mm )
                                            <option value="{{ $mm->id }}" >{{$mm->fname." ".$mm->lname}}</option>
                                        @endforeach
                                </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info"> Publish</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer1');
