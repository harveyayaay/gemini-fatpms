<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
  <div class="d-flex" id="wrapper">
    <div id="sidebar-wrapper">
      <div class="sidebar-heading">
      </div>
      <div class="list-group list-group-flush p-3">
        <a class="bg-light list-group-item list-group-item-action border-bottom-0 mb-1">Home</a>
      </div>
    </div>
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand navbar-light bg-light border-bottom">
        <button class="btn btn-light" id="menu-toggle">
          <span class="navbar-toggler-iconn"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ml-auto">
            <form class="form-inline">
              <input type="hidden" name="_token" value="wUH0jAOLcXCgfWxh2N3ErcCMWGnHuyEUjTrYhmaB">
              <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit">Logout</button>
            </form>
          </div>
        </div> 
      </nav>
      <div class="container-fluid py-3 m-0">
        <div class="row mb-4">
          <div class="col-9">
            <h3>Dashboard</h3>
          </div>
        </div>
        <div class="card">
          
        </div>
        <!-- <div class="modal fade bd-example-modal-sm" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-body container">
                <div class="pb-2">
                  <span class="modal-title h5" id="exampleModalCenterTitle">Delete</span>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <h6>Do you want to delete this?</h6>

                <div class="float-right">
                  <form action="" id="delete-form" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="wUH0jAOLcXCgfWxh2N3ErcCMWGnHuyEUjTrYhmaB">
                    <button class="btn btn-transparent text-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-transparent text-primary" type="submit">Yes</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>






    
</body>
</html>








