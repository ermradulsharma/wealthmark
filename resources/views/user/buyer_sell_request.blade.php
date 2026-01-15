<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> Buyer Sell Request </title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <link href="https://wealthmark.io/assets/css/style_main.css" rel="stylesheet">
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    </head>
    <body>


            <h5 style="margin-top:20px;text-align:center;padding:10px;">  Buyer Sell Request </h5>



            <div class="table-responsive" style="padding:20px;max-width:1500px;overflow:auto;margin:auto">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Buyer ID </th>
                        <th> Buyer Country </th>
                        <th> Crypto Type </th>
                        <th> Total Crypto Value </th>
                        <th> Domestic Currency Value </th>
                        <th> Domestic Currency Type </th>
                        <th> Payment Method Id </th>
                        <th> Payment Method Type </th>
                        <th> Crypto Current Value </th>
                        <th> Order Status </th>
                        <th> Action </th>
                        <!--<th>  </th>-->
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_sell_request as $sell_req)
                    <tr>
                        <td> {{ $sell_req->id }} </td>
                        <td> {{ $sell_req->buyer_id }} </td>
                        <td> {{ $sell_req->buyer_country }} </td>
                        <td> {{ $sell_req->crypto_type }} </td>
                        <td> {{ $sell_req->total_crypto_value }} </td>
                        <td> {{ $sell_req->domestic_currency_value }} </td>
                        <td> {{ $sell_req->domestic_currency_type }}</td>
                        <td> {{ $sell_req->payment_method_id }} </td>
                        <td> {{ $sell_req->payment_method_type }} </td>
                        <td> {{ $sell_req->crypto_current_value }} </td>
                        <td> {{ $sell_req->order_status }} </td>
                        <td>
                            <button class="edit-modal btn btn-yellow confirmPay accept_by_buyer" id='{{ $sell_req->id }}'  data-id="{{$sell_req->id}}" data-name="{{$sell_req->id}}">
                                <span class="glyphicon glyphicon-edit"></span> Accept
                            </button>

                            <button class="delete-modal btn btn-danger cancelPay cancel_by_buyer" id='{{ $sell_req->id }}' data-id="{{$sell_req->id}}" data-name="{{$sell_req->id}}">
                                <span class="glyphicon glyphicon-trash"></span> cancel
                            </button>

                        </td>
                        <!--<td>  </td> -->
                    </tr>
                     @endforeach
                </tbody>
            </table>
       </div>
    </body>
</html>
<script>

    $(".confirmPay").click(function(){

      const id =  this.id;
      console.log(id);
 //alert(id);die;
      $.ajax({

            type: 'POST',
            url: '{{  url(app()->getLocale()."/buyer_sell_request_accept") }}',
            data: {

              '_token': "{{ csrf_token() }}",

              'id' : id,

            },
            success: function (data) {
                 location.href = '{{  url(app()->getLocale()."/users/seller-confirm-order") }}';
                //alert();
              // window.location.reload();
                const p = 'https://wealthmark.io/en/user/confirmed-order-info';
                    $("#my-div").load(p + " #my-div");

            },
            error: function(xhr, status, error) {

                        var erroJson = JSON.parse(xhr.responseText);

                        console.log(erroJson);

                    }
          });
          //location.reload();
});

 $(".cancelPay").click(function(){


 const cancel_id = this.id;
     alert(cancel_id);
    $.ajax({

        type: 'POST',
        url: '{{  url(app()->getLocale()."/buyer_sell_request_accept") }}',
        data: {

            '_token': "{{ csrf_token() }}",

             'cancel_id' : cancel_id,
            },
            success: function (data) {
                   alert();
                //window.location.reload();
                  const p = 'https://wealthmark.io/beta-dlp/en/user/confirmed-order-info';
        $("#my-div").load(p + " #my-div");

            },
            error: function(xhr, status, error) {

                var erroJson = JSON.parse(xhr.responseText);
                console.log(erroJson);

            }
    });
   // location.reload();
});


//     $(".accept_by_buyer").click(function(){

//     const id = $('.accept_by_buyer').attr('data-id');
//     //console.log(id);
//       $.ajax({

//             type: 'GET',
//             url: '{{  url(app()->getLocale()."/user/confirmed-order-info") }}',
//             data: {

//               '_token': "{{ csrf_token() }}",

//               'accept_by_buyer_orderid' : id,

//             },
//             success: function (data) {
//              window.location.reload('{{  url(app()->getLocale()."/user/confirmed-order-info") }}')

//             },
//             error: function(xhr, status, error) {

//                         var erroJson = JSON.parse(xhr.responseText);

//                         console.log(erroJson);

//                     }
//           });

//     });

//  $(".cancel_by_buyer").click(function(){


//  const cancel_id = $('.cancel_by_buyer').attr('data-id');
//      // console.log(cancel_id);
//     $.ajax({

//         type: 'GET',
//         url: '{{  url(app()->getLocale()."/user/confirmed-order-info") }}',
//         data: {

//             '_token': "{{ csrf_token() }}",

//              'cancel_by_buyer_orderid' : cancel_id,
//             },
//             success: function (data) {
//                 window.location.reload();

//             },
//             error: function(xhr, status, error) {

//                 var erroJson = JSON.parse(xhr.responseText);
//                 console.log(erroJson);

//             }
//     });

// });

</script>
