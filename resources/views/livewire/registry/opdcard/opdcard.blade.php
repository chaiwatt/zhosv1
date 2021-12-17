   <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">ทะเบียนผู้ป่วย</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">ทะเบียนผู้ป่วย</a></li>
            <li class="breadcrumb-item active">ทะเบียนผู้ป่วย</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    <a href="{{ route('dashboard.registry.opdcard-detail') }}">
                        <button class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i>เพิ่มผู้ป่วยใหม่</button>
                    </a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">ทำรายการ</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">ส่งตรวจ</a>
                            <a class="dropdown-item" href="#">ลบรายการ</a>
                            <a class="dropdown-item" href="#">Excel</a>
                        </div>
                    </div>
                    <span>เลือก จำนวน x รายการ</span>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default">
                        <span class="mr-1">All</span>
                        <span class="badge badge-pill badge-info">11</span>
                    </button>
    
                    <button type="button" class="btn btn-secondary">
                        <span class="mr-1">Scheduled</span>
                        <span class="badge badge-pill badge-primary">22</span>
                    </button>
    
                    <button type="button" class="btn btn-secondary">
                        <span class="mr-1">Closed</span>
                        <span class="badge badge-pill badge-success">33</span>
                    </button>
                </div>
            </div>


          <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">ชื่อ-สกุล</th>
                        <th scope="col">HN</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">เพิ่มเติม</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Thornton</td>
                        <td>
                            <a href="" ><i class="fa fa-eye text-info mr-2"></i> </a>
                            <a href="" ><i class="fa fa-edit mr-2"></i> </a>
                            <a href=""><i class="fa fa-trash text-danger"></i> </a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                            <a href="" ><i class="fa fa-eye text-info mr-2"></i> </a>
                            <a href="" ><i class="fa fa-edit mr-2"></i> </a>
                            <a href=""><i class="fa fa-trash text-danger"></i> </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->