<x-app-layout>
      <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1 class="m-0">ไม่พบหน้าที่ต้องการ</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">แดชบอร์ด</a></li>
            <li class="breadcrumb-item active">404</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="d-flex  flex-column justify-content-center align-items-center f">
              <h2 class="headline text-warning" style="font-size: 5em">404</h2>
              <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> ผิดพลาด! ไม่พบหน้าที่ต้องการ.</h3>
              </div>
            </div>
        </section>
    </div>
  </div>
  <!-- /.content -->
</x-app-layout>