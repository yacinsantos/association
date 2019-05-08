@extends('layouts.dashboard')

@section('content')
  <!-- Page Wrapper -->
  <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
            <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">E-com <sup>v.1</sup></div>
          </a>
    
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
    
          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="/admin">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>My Dashboard</span></a>
          </li>
    
          <!-- Divider -->
          <hr class="sidebar-divider">
    
          <!-- Heading -->
          <div class="sidebar-heading">
            Interact with Database
          </div>
    
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-clipboard-list"></i>
              <span>Categorie</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <!--<h6 class="collapse-header"></h6>-->
                <a class="collapse-item" href="#">Show</a>
                <a class="collapse-item" href="#">Add</a>
                <a class="collapse-item" href="#">Edit</a>
                <a class="collapse-item" href="#">Delete</a>
              </div>
            </div>
          </li>
    
          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-shopping-cart"></i>
              <span>Product</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <!--<h6 class="collapse-header">Custom Utilities:</h6>-->
                <a class="collapse-item" href="#">Show</a>
                <a class="collapse-item" href="#">Add</a>
                <a class="collapse-item" href="#">Edit</a>
                <a class="collapse-item" href="#">Delete</a>
              </div>
            </div>
          </li>
    
          <!-- Divider -->
          <hr class="sidebar-divider">
    
          <!-- Heading -->
          <div class="sidebar-heading">
            Addons
          </div>
    
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{route('admin.login')}}">Login</a>
                <a class="collapse-item" href="{{route('register')}}">Register</a>
                <a class="collapse-item" href="#">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="#">404 Page</a>
                <a class="collapse-item" href="#">Blank Page</a>
              </div>
            </div>
          </li>
    
          <!-- Nav Item - Charts -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Charts</span></a>
          </li>
    
          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="fas fa-fw fa-table"></i>
              <span>Tables</span></a>
          </li>
    
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
    
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
    
        </ul>
        <!-- End of Sidebar -->
    
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
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
              </div>
    
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
