<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>View Products</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg  " style="background-color: #19242D;">
        <div class="container-fluid">
            <a class="navbar-brand">
                <svg class=" ms-5 me-3" xmlns="http://www.w3.org/2000/svg" width="218" height="36" viewBox="0 0 218 36"
                fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M13.8994 0.738486C15.1057 0.477408 16.3561 0.339355 17.64 0.339355C19.0683 0.339355 20.4575 0.510903 21.7867 0.830834V3.23501C23.0662 3.59376 24.2779 4.11403 25.3972 4.77424L27.0867 3.08318C29.3311 4.51097 31.2315 6.43306 32.6345 8.69605L30.9411 10.3918C31.578 11.5056 32.0801 12.7058 32.4222 13.9724H34.818C35.1194 15.2656 35.2798 16.6145 35.2798 17.9997C35.2798 19.3292 35.1319 20.6233 34.8545 21.8689H32.4685C32.1339 23.1558 31.6346 24.3758 30.998 25.5074L32.6946 27.2066C31.3066 29.4799 29.4186 31.413 27.1826 32.8549L25.4967 31.1672C24.3485 31.855 23.1041 32.3944 21.7867 32.765V35.1683C20.4575 35.4894 19.0683 35.6607 17.64 35.6607C16.3561 35.6607 15.1057 35.5217 13.8994 35.2606V32.8762C13.2469 32.7118 12.6131 32.5046 11.9965 32.2591L14.7402 29.5128C15.6689 29.7457 16.64 29.8716 17.64 29.8716C24.1884 29.8716 29.498 24.5567 29.498 17.9997C29.498 11.443 24.1884 6.12816 17.64 6.12816C11.09 6.12816 5.78133 11.443 5.78133 17.9997C5.78133 19.0656 5.92485 20.0977 6.18656 21.08L3.46 23.8107C3.20298 23.1834 2.98441 22.5354 2.81181 21.8689H0.426071C0.147785 20.6233 -0.000110626 19.3292 -0.000110626 17.9997C-0.000110626 16.6145 0.159981 15.2656 0.46109 13.9724H2.85621C3.22674 12.6078 3.77862 11.3187 4.48871 10.1332L2.80149 8.44562C4.2417 6.20829 6.17218 4.31783 8.44348 2.92666L10.1395 4.62586C11.3076 3.96847 12.5687 3.45758 13.8994 3.12388V0.738486Z"
                    fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M18.0108 10.5525C18.7256 10.5525 19.4404 10.6586 20.1295 10.8709L15.5963 15.4084L16.6009 19.1615L20.3506 20.1673L24.8829 15.6301C25.0595 16.2053 25.1626 16.7981 25.192 17.3942L25.2008 17.7522C25.2008 19.4909 24.5755 21.2297 23.3236 22.601L23.0962 22.8392C21.2108 24.7258 18.5402 25.3454 16.1387 24.6984L15.873 24.6213L6.73996 33.7547C4.95569 32.6447 3.42228 31.168 2.24447 29.4298L1.99756 29.0534L11.1484 19.8909C10.4091 17.5077 10.9337 14.8162 12.7249 12.8719L12.9291 12.659C14.2542 11.3327 15.9686 10.633 17.7043 10.5591L18.0108 10.5525ZM94.3489 2.50854L94.7485 2.51068C98.2857 2.54884 100.24 3.09488 101.582 3.75414L98.6808 10.0282L98.4429 9.92791C97.3866 9.50712 95.9986 9.26528 94.3108 9.26528L94.1773 9.26588C91.5378 9.29082 90.7345 10.113 89.7463 17.6279L89.6832 18.0763C89.3342 20.5753 89.1272 22.3703 89.1272 23.659L89.1293 23.8794C89.1687 25.8951 89.7699 26.7569 91.5251 26.7569L91.6904 26.7535C93.4152 26.682 93.936 25.4554 94.3108 22.4137L94.5422 20.564H91.4094L92.2602 14.4117H101.582L100.615 21.3284L100.562 21.7071C99.3331 30.3293 97.7362 32.8694 91.1778 32.8694L90.8413 32.8667C84.3021 32.7602 82.3577 29.5193 82.3577 24.0231L82.3618 23.5617C82.3941 21.6906 82.6168 19.5123 82.9377 17.0244C84.1372 7.89727 85.8782 2.50854 94.3489 2.50854ZM50.5632 2.87011L51.2214 13.446L51.4528 18.5126L53.04 13.446L56.6358 2.87011H65.1075L61.0849 32.6706H54.5865L56.83 16.1798L55.5142 20.5242L51.4528 32.6706H47.1604L46.3865 20.564L46.2695 16.1798L44.0261 32.6706H38.0686L42.0925 2.87011H50.5632ZM83.5574 2.87011L82.6679 9.46625H74.1577L73.4998 14.4117H81.6229L80.7349 20.9659H72.6109L71.8761 26.2338H80.3863L79.5345 32.6706H64.1779L68.2008 2.87011H83.5574ZM117.248 2.78966L120.072 32.6706H112.915L112.645 29.1301H107.114L105.953 32.6706H99.1064L109.744 2.78966H117.248ZM111.717 14.5319L110.558 18.4331L109.087 22.9775H112.18L111.91 18.4728L111.717 14.5319Z"
                    fill="#008AEE" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M133.57 2.87036C140.611 2.87036 142.739 5.32274 142.739 10.2294C142.739 11.3147 142.661 12.4817 142.468 13.7683C141.462 21.0062 139.334 23.8224 132.837 23.8224H129.626L128.426 32.6702H121.658L125.68 2.87036H133.57ZM133.184 9.18382H131.599L130.477 17.5477H132.99C134.617 17.5477 135.35 17.0246 135.815 13.5273C135.932 12.7228 135.969 12.0801 135.969 11.5567C135.969 9.62741 135.196 9.18382 133.184 9.18382Z"
                    fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M156.354 2.78979L159.177 32.6707H152.022L151.75 29.1299H146.22L145.059 32.6707H138.212L148.85 2.78979H156.354ZM150.822 14.5317L149.662 18.4329L148.192 22.9773H151.287L151.016 18.4726L150.822 14.5317Z"
                    fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M172.716 2.87061C179.602 2.87061 181.612 5.20247 181.612 9.78761C181.612 10.7925 181.496 11.839 181.342 13.0439C180.838 16.905 179.677 20.042 176.623 21.7712L178.517 32.6708H171.709L170.163 23.0582H168.693L167.417 32.6708H160.763L164.786 2.87061H172.716ZM172.135 9.18407H170.588L169.583 16.7838H171.709C173.489 16.7838 174.146 16.3819 174.61 13.1654C174.689 12.5217 174.766 11.9595 174.766 11.4752C174.766 9.5857 174.069 9.18407 172.135 9.18407Z"
                    fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M188.071 9.46643H182.423L183.312 2.87061H201.571L200.681 9.46643H194.995L191.862 32.6708H184.938L188.071 9.46643Z"
                    fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M197.663 30.859L201.145 24.9466C202.189 25.5501 204.084 26.395 206.174 26.395C207.992 26.395 208.571 25.5501 208.571 23.983C208.571 22.8961 207.992 22.0919 205.167 19.3572C202.886 17.1465 201.183 14.8944 201.183 11.435C201.183 6.61004 203.738 2.50854 210.389 2.50854C213.485 2.50854 214.955 2.78966 217.237 3.67526L214.452 10.2294C213.523 9.78743 211.975 9.30472 210.236 9.30472C208.997 9.30472 208.185 10.0282 208.185 11.3148C208.185 12.442 208.997 13.3652 211.202 15.5371C213.794 18.0706 215.495 20.4027 215.495 23.9016C215.495 28.6877 213.291 32.8694 206.097 32.8694C201.763 32.8694 199.173 31.7045 197.663 30.859Z"
                    fill="white" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link " style="color:white" href="{{ url('/') }}">Начална страница</a>
                    </li>
                    
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="form_product.php" style="color:white">+ Добави продукт</a>
                    </li> -->
                    

                </ul>
                
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        
        <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct">Create new product</a>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>description</th>
                    <th>price</th>
                    <th>image</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
        
    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="productForm" name="productForm" class="form-horizontal">
                    <input type="hidden" name="product_id" id="product_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price" class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value="" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="image" name="image" placeholder="Enter Image" value="" maxlength="50" required="">
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
      
</body>
      
<script type="text/javascript">
  $(function () {
      
    /*------------------------------------------
     --------------------------------------------
     Pass Header Token
     --------------------------------------------
     --------------------------------------------*/ 
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
      
    /*------------------------------------------
    --------------------------------------------
    Render DataTable
    --------------------------------------------
    --------------------------------------------*/
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('products-ajax-crud.index') }}",
        columns: [
            {data: 'id', name: 'ids'},
            {data: 'name', name: 'name'},
            {data: 'description', name: 'description'},
            {data: 'price', name: 'price'},
            {data: 'image', name: 'image'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
      
    /*------------------------------------------
    --------------------------------------------
    Click to Button
    --------------------------------------------
    --------------------------------------------*/
    $('#createNewProduct').click(function () {
        $('#saveBtn').val("create-product");
        $('#product_id').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Create New Product");
        $('#ajaxModel').modal('show');
    });
      
    /*------------------------------------------
    --------------------------------------------
    Click to Edit Button
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.editProduct', function () {
      var product_id = $(this).data('id');
      $.get("{{ route('products-ajax-crud.index') }}" +'/' + product_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Product");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#product_id').val(data.id);
          $('#name').val(data.name);
          $('#description').val(data.description);
          $('#price').val(data.price);
          $('#image').val(data.image);
          
      })
    });
      
    /*------------------------------------------
    --------------------------------------------
    Create Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
      
        $.ajax({
          data: $('#productForm').serialize(),
          url: "{{ route('products-ajax-crud.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#productForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
           
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
      
    /*------------------------------------------
    --------------------------------------------
    Delete Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.deleteProduct', function () {
     
        var product_id = $(this).data("id");
        confirm("Are You sure want to delete !");
        
        $.ajax({
            type: "DELETE",
            url: "{{ route('products-ajax-crud.store') }}"+'/'+product_id,
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
</html>