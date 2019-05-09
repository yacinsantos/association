@extends('layouts.dashboard')

@section('content')
  <!-- Page Wrapper -->
  <div id="wrapper">

       @include('includes.sidebar-dash')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
    
          <!-- Main Content -->
          <div id="content">
            
              <!-- Topbar -->
                @include('includes.nav-dash')
              <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
    
              <!-- Page Heading -->

              <!-- Loading the form with AJAX-->
                <section id="ajax-form">
                  @include('admin/messages/formation-message')
                </section>
            </div>
            <!-- /.container-fluid -->
    
          </div>
          <!-- End of Main Content -->
    
        </div>
        <!-- End of Content Wrapper -->
    
      </div>
      <!-- End of Page Wrapper -->
    
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
@endsection
