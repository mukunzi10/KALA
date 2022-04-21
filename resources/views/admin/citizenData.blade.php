@include('header1')

<div class="page-content-wrapper ">

    <div class="container-fluid">


        <!-- end row -->

<link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="container">
    <div class="col-lg-12">


    <a class="btn btn-info" href="javascript:void(0)" id="citizen"  width='60'> <span class="mdi mdi-plus-circle"> Add Citizen</span>  </a>
    <div class="card col-12">
    <table class="table table-bordered data-table  dt-responsive nowrap " id="datatable-buttons" style="border-collapse: collapse; border-spacing: 0;">
        <thead>
            <tr>
                <th>No</th>
                <th>fname</th>
                <th>lname</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Province</th>
                <th>District</th>
                <th>Sector</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
    </div>

</div>
<a href='{{route('loyalss.index')}}'></a>
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form action="" id="formcitizen" name="formcitizen">
                    @csrf
                    <input type="hidden" id='id' name="id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">fname</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="fname"  name="fname" placeholder="Enter First Name" value="" maxlength="50" required="">
                            <span class="text-danger">@error('fname'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">lname</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="lname" name="lname"  placeholder="Enter last Name"  maxlength="50" required="">
                            <span class="text-danger">@error('lname'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="gender" name="gender"  placeholder="Enter  gender"  maxlength="50" required="">
                            <span class="text-danger">@error('gender'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone"  maxlength="50" required="">
                            <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Province</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="province" name="province"  placeholder="Enter province" maxlength="50" required="">
                            <span class="text-danger">@error('province'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Disttrict</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="district" name="district" placeholder="Enter district"  maxlength="50" required="">
                            <span class="text-danger">@error('district'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Sector</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="sector" name="sector" placeholder="Enter sector" value="{{old('sector')}}" maxlength="50" required="">
                            <span class="text-danger">@error('sector'){{$message}}@enderror</span>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                        </button>
                       </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->

<footer class="footer">
© <b><?php echo date('Y')?></b> <span class="d-none d-sm-inline-block"> - Crafted   by<i class="mdi mdi-heart text-primary"></i> Cloud9</span>
</footer>
</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- skycons -->
<script src="assets/plugins/skycons/skycons.min.js"></script>

<!-- skycons -->
<script src="assets/plugins/peity/jquery.peity.min.js"></script>

<!--Morris Chart-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>

<!-- dashboard -->
<script src="assets/pages/dashboard.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
 <!-- Sweet-Alert  -->
 <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
 <script src="assets/pages/sweet-alert.init.js"></script>

</body>
</html>

   {{-- <script src="js/jquery.js"></script> --}}
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
          });
          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('citizena.index') }}",
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'fname', name: 'fname'},
                  {data: 'lname', name: 'lname'},
                  {data: 'gender', name: 'gender'},
                  {data: 'phone', name: 'phone'},
                  {data: 'province', name: 'province'},
                  {data: 'district', name: 'district'},
                  {data: 'sector', name: 'sector'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });
          $('#citizen').click(function () {
              $('#saveBtn').val("create");
              $('#id').val('');
              $('#formcitizen').trigger("reset");
              $('#modelHeading').html("Create New Citizen");
              $('#ajaxModel').modal('show');
          });
          $('body').on('click', '.edit', function () {
            var id = $(this).data('id');
            $.get("{{ route('citizena.index') }}" +'/' + id +'/edit', function (data) {
                $('#modelHeading').html("Edit Citizen");
                $('#saveBtn').val("edit");
                $('#ajaxModel').modal('show');
                $('#id').val(data.id);
                $('#fname').val(data.fname);
                $('#lname').val(data.lname);
                $('#gender').val(data.gender);
                $('#phone').val(data.phone);
                $('#province').val(data.province);
                $('#district').val(data.district);
                $('#sector').val(data.sector);
            })
         });
          $('#saveBtn').click(function (e) {
              e.preventDefault();
              $(this).html('Save');

              $.ajax({
                data: $('#formcitizen').serialize(),
                url: "{{ route('citizena.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {

                    $('#formcitizen').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                    // showData();
                    // clear();
                    // console.log('Data added mach');
                    // const Toast=Swal.mixin({
                    //     toast:true,
                    //     position:'top-end',
                    //     showConfirmButton:false,
                    //     timer:3000,
                    //     timerProgressBar:true,
                    //     didOpen:(toast)=>{
                    //         toast.addEventListener('mouseenter',Swal.stopTimer)
                    //         toast.addEventListener('mouseenter',Swal.resumeTimer)
                    //     }
                    // })
                    // Toast.fire({
                    //     icon:'success',
                    //     title:'SuccessFully'
                    // })


                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
          });

          $('body').on('click', '.delete', function () {

              var id = $(this).data("id");
              confirm("Are You sure want to delete selected people!");

              $.ajax({
                  type: "DELETE",

                  url: "{{ route('citizena.store') }}"+'/'+id,
                  success: function (data) {
                      table.draw();
                  },
                  error: function (data) {
                      console.log('Error:', data);
                  }
              });
          });

        });
        </script>


