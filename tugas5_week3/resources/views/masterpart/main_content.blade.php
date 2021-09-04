    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">@yield('subtitle')</h3>
            @yield('successnotif')
            @yield('create')              
          </div>
          <div class="card-body">
            
            @yield('content')
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  
      </section>