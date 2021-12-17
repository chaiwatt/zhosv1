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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  ทะเบียนผู้ป่วย888
                </h3>
            </div>
            <div class="card-body">
                {{-- <form wire:submit.prevent="createPatient" autocomplete="off" > --}}
                    {{$quantity}}
                {{-- <form autocomplete="off"> --}}
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อ</label>
                        <input type="text" class="form-control" id="name"  wire:model="quantity" placeholder="กรอกชื่อ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">นามสกุล</label>
                        <input type="text" class="form-control" id="lastname" placeholder="กรอกนามสกุล">
                      </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                        <button type="button" wire:click="createPatient" class="btn btn-primary"><i class="fa fa-save mr-1"></i> บันทึก</button>
                    </div>
                {{-- </form> --}}
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->