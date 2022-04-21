@include('header1')

<div class="page-content-wrapper ">

    <div class="container-fluid">
        <!-- end row -->

<link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
<meta name="csrf-token" content="{{ csrf_token() }}" />
     <div class="container">
<div class="col-lg-12" style="width:100%;">
             <a class="btn btn-info" href="javascript:void(0)" id="loyal"  width='60'> <span class="mdi mdi-plus-circle"> Add Loyal</span>  </a>
    <div class="card col-lg-12" >
          <table class="table table-bordered data-table  dt-responsive nowrap "  id="datatable-buttons" style="width:86em;" >
                  <thead>
                        <tr>
                            <th>No</th>
                            <th>fname</th>
                            <th>lname</th>
                            <th>Gender</th>
                            <th width='300px'>Data of Birth</th>
                            <th>Phone</th>
                            <th>Nation Id</th>
                            <th>Email</th>
                            <th>Qulification</th>
                            <th style="width:16em;">Action</th>
                      </tr>
                    </thead>
                <tbody>
                  </tbody>
            </table>
      </div>
    </div>
</div>

<div class=" col-lg-6" style="height: 10%">

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
                        <label>Gender</label>
                        <div class="col-sm-12 control-label">
                       <select class="form-control" name="gender" id="gender">
                           <option disabled selected> choose Gender...</option>
                           <option> Male</option>
                           <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-12 control-label">Date of birth</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="date" name="date"  maxlength="50" required="">
                            <span class="text-danger">@error('lname'){{$message}}@enderror</span>
                        </div>
                        <div>

                        <div class="form-group">
                            <label for="name" class="col-sm-12 control-label">Nation Identity</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="idno" name="idno"  placeholder="Enter last Nation Identity"  maxlength="50" required="">
                                <span class="text-danger">@error('lname'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class='col-sm-12 control-label'>Phone</label>
                          <div class="col-sm-12">
                            <input type="interger" placeholder="Phone number" id="phone" name="phone" class="form-control">
                        </div>

                      </div>

                        <div class="form-group">

                            <label class='col-sm-12 control-label'>Email</label>
                          <div class="col-sm-12">
                            <input type="email" placeholder="Email Address" id="email" name="email" class="form-control">
                        </div>

                      </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                           <label  class='col-sm-12 control-label'>qualification</label>
                             <select class="form-control" name="qualification" id="qualification">
                            <option disabled selected> ...Select degree...</option>
                            <option>A2</option>
                            <option>A1</option>
                            <option>A0</option>
                            <option>Masters Degree</option>
                          </select>
                         </div>
                    </div>


                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                        </button>
                       </div>
                </form>
            </div>
            <br>

            </div>
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
              ajax: "{{ route('loyalss.index') }}",
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'fname', name: 'fname'},
                  {data: 'lname', name: 'lname'},
                  {data: 'gender', name: 'gender'},
                  {data: 'date', name: 'date'},
                  {data: 'phone', name: 'phone'},
                  {data: 'idno', name: 'idno'},
                  {data:'email',name:'email'},
                  {data: 'qualification', name: 'qualification'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });
          $('#loyal').click(function () {
              $('#saveBtn').val("create");
              $('#id').val('');
              $('#formcitizen').trigger("reset");
              $('#modelHeading').html("Create New Loyal");
              $('#ajaxModel').modal('show');
          });
          $('body').on('click', '.edit', function () {
            var id = $(this).data('id');
            $.get("{{ route('loyalss.index') }}" +'/' + id +'/edit', function (data) {
                $('#modelHeading').html("Edit Loyal");
                $('#saveBtn').val("edit");
                $('#ajaxModel').modal('show');
                $('#id').val(data.id);
                $('#fname').val(data.fname);
                $('#lname').val(data.lname);
                $('#gender').val(data.gender);
                $('#phone').val(data.phone);
                $('#email').val(data.email);
                $('#qualification').val(data.qualification);
                $('#idno').val(data.idno);
                $('#date').val(data.date);
            })
         });
          $('#saveBtn').click(function (e) {
              e.preventDefault();
              $(this).html('Save');

              $.ajax({
                data: $('#formcitizen').serialize(),
                url: "{{ route('loyalss.store') }}",
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
              confirm("Are You sure want to delete selected Loyal! ");

              $.ajax({
                  type: "DELETE",

                  url: "{{ route('loyalss.store') }}"+'/'+id,
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


