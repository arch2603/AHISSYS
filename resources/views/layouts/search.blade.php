<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">{{isset($title) ? $title : 'Search'}}</h3>
      @php
            //echo $title;
      @endphp
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {{ $slot }}
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" class="btn btn-primary">
      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      Search
    </button>
  </div>
</div>