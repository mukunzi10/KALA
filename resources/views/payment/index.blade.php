<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>KIVU LITERACY LEGAL ADVOCACY</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/icon.png" '>

        <!--Morris Chart CSS -->

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">

        <link href="assets/css/style.css" rel="stylesheet" type="text/css">


    </head>


    <body class="fixed-left">
        <div class="container">
            <div class="row">
                <div class="card">
                <div class="card-title  ">
                    <h4 text-capitalized>
                        payment Page
                    </h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST" id='paymentform'>
                       <script src="https://checkout.flutterwave.com/v3.js"></script>
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                            <label> Names</label>
                            <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                            <div class="form-group">
                                <label>Emaile</label>
                                <input type="email" placeholder="Type email " name="email" id='email' class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" name="amount" id="amount" placeholder="Type amount">

                            </div>
                            <div class="form-group">
                                <label>phone</label>
                                <input type="number"  class="form-control" name="phone" id="phone" placeholder="Type phone">

                            </div>

                                <div class="form-group">
                                    <button type="submit"  class="btn btn-block btn-info">Pay Now</button>
                                </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
{{-- <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<script src="{{asset('js/jquery.js')}}"></script>
<script >
    $(function(){
        $('#paymentform').submit(function(e){
            e.preventDefault();
            console.log('hello');
            var name=$('#name').val();
            var phone=$('#phone').val();
            var email=$('#email').val();
            var amount=$('#amount').val();
            makePayment(amount,email,phone,name);


        });


    });
    function makePayment(amount,email,phone_number,name)

{
  FlutterwaveCheckout({
    public_key: "FLWPUBK-9fa08612b8ff23a1793cad4c3460dcf7-X",
    tx_ref: "{{substr(rand(0,time()),0,7)}}",
    amount,
    currency: "RWF",
    payment_options: "card, mobilerwanda, ussd",
    redirect_url: "",
    customer: {
      email,
      phone_number,
      name,
    },
    customizations: {
      title: "The Titanic Store",
      description: "Payment for an awesome cruise",
      logo: "",
    },
    callback: function(data) {
       // Send AJAX verification request to backend
      var transaction_id=data.transaction_id;
      var _token=$("input[name='_token']").val();
           $.ajax({
               type:"POST",
               url:"",
               data:{
                   _token,
                   transaction_id

               }
               success:function(response)
               {
                   console.log(response);
               }
           });
     },
     onclose: function(incomplete) {

            // Record event in analytics

      },
      customizations: {
      title: "The Titanic Store",
      description: "Payment for an awesome cruise",
      logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
    },
  });
 }
</script>

