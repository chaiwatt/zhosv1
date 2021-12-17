<div>
    <div class="small-box bg-info">
        <div class="inner">
          <div class="d-flex justify-content-between">
            <h3>10</h3>
            <select style="height: 2rem; outline: 2px solid transparent;" class="px-1 rounded border-0">
              <option value="">วันนี้</option>
              <option value="">30 วัน</option>
              <option value="">60 วัน</option>
              <option value="">เดือนนี้</option>
              <option value="">ปีนี้</option>
            </select>
          </div>
          <p>{{ $taskname }}</p>
        </div>
      <a href="{{ route($taskroute) }}" class="small-box-footer">รายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
