<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{asset('style/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="container ">
<div class="row">
<div class="col-sm-4"></div>
    <div class="col-sm-4 br-form">
    <img src="{{asset('images/itbeepC.png')}}" width="40%" height="20%" >
<form class="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Name :</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile :</label>
    <input type="text" class="form-control" id="mobile" aria-describedby="emailHelp" placeholder="Enter mobile">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email :</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-check">
   
  </div>
 <!-- Button trigger modal -->
<button type="button" class="btn " id="send" onclick=save() data-toggle="modal" data-target="#exampleModalCenter">
  Send
</button>
</form>
</div>
<div class="col-sm-4"></div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="model-services">

      </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn" id="nextInt" data-toggle="modal" data-target="#next" data-dismiss="modal">
          Next
       </button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="next" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="model-interest">

       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
<script>
function save(){

    let name=  document.getElementById('name').value; 
    let mobile=  document.getElementById('mobile').value; 
    let email=  document.getElementById('email').value; 

    let info=[
        name,
        mobile,
        email
    ];
    sessionStorage.setItem('req', JSON.stringify(info));
}
</script>

<script>
        // $(document).on("click", "#but_fetchall", function() {
        //     console.log("clicked");
        // });
        // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        // Fetch all records
        $(document).ready(function() {
            $(document).one("click", "#send", function() {
                console.log("clicked");
                // AJAX GET request
                $.ajax({
                    url: 'services',
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        createRows(response);
                        console.log(response);
                        function createRows(response) {
                            var len = 0;
                            $('#empTable tbody').empty(); // Empty <tbody>
                            if (response['data'] != null) {
                                len = response['data'].length;
                            }
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {
                                    var name = response['data'][i].name;
                                    var tr_str =
                                          `<button key="${name}" class="btn m-3 col-3 services-item" >${name}</button>`
                                        
                                    $("#model-services").append(tr_str);
                                }
                            }
                        }
                    }
                });
            });
        });
    </script>

<script>
        // $(document).on("click", "#but_fetchall", function() {
        //     console.log("clicked");
        // });
        // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        // Fetch all records
        $(document).ready(function() {
            $(document).one("click", "#nextInt", function() {
                console.log("clicked");
                // AJAX GET request
                $.ajax({
                    url: 'interest',
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        createRows(response);
                        console.log(response);
                        function createRows(response) {
                            var len = 0;
                            $('#empTable tbody').empty(); // Empty <tbody>
                            if (response['dataInt'] != null) {
                                len = response['dataInt'].length;
                            }
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {
                                    var nameInt = response['dataInt'][i].name;
                                    var tr =
                                          `<button key2="${name}"  class="btn m-3 col-3 services-item2"  style="width:100%">${nameInt}</button>`
                                        // name;
                                    $("#model-interest").append(tr);
                                }
                            }
                        }
                    }
                });
            });
        });
       
        let services =[];
        $(document).on("click",".services-item",function(e){
          
            let item =  e.target.getAttribute("key");
            
            if(services.includes(item)){
            services.splice(services.indexOf(item), 1);
          $(`.services-item[key='${item}']`).removeClass(
          "btn-dark text-light"
          );
   }
   else{
       services.push(item);
       $(`.services-item[key='${item}']`).addClass(
        "btn-dark text-light")
   }
   console.log(services);

          
        });

       
//         let services2 =[];
//         $(document).on("click",".services-item2",function(e){
          
//             let item =  e.target.getAttribute("key2");
            
//             if(services2.includes(item)){
//                 $(`.services-item2[key2='${item}']`).removeClass(
//                  "btn-dark text-light");}

//         else{
       
//        $(`.services-item[key='${item}']`).addClass(
//         "btn-dark text-light")
//    }
              
        
//             });
   

    </script>
</body>

</html>