@extends('layouts.app')
@section('title','Dashboard')
@section('content')

            <!-- main wrapper -->
            <main class="main-content-wrapper">
               <section class="container">
                  <!-- row -->
                  <div class="row mb-8">
                     <div class="col-md-12">
                        <!-- card -->
                        <div
                           class="card bg-light border-0 rounded-4"
                           style="background-image: url(../assets/images/slider/slider-image-1.jpg); background-repeat: no-repeat; background-size: cover; background-position: right">
                           <div class="card-body p-lg-12">
                              <h1>Welcome back! FreshCart</h1>
                              <p>FreshCart is simple & clean design for developer and designer.</p>
                              <a href="#" class="btn btn-primary">Create Product</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- table -->
                  <div class="table-responsive-xl mb-6 mb-lg-0">
                     <div class="row flex-nowrap pb-3 pb-lg-0">
                        <div class="col-lg-4 col-12 mb-6">
                           <!-- card -->
                           <div class="card h-100 card-lg">
                              <!-- card body -->
                              <div class="card-body p-6">
                                 <!-- heading -->
                                 <div class="d-flex justify-content-between align-items-center mb-6">
                                    <div>
                                       <h4 class="mb-0 fs-5">Earnings</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-danger text-dark-danger rounded-circle">
                                       <i class="bi bi-currency-dollar fs-5"></i>
                                    </div>
                                 </div>
                                 <!-- project number -->
                                 <div class="lh-1">
                                    <h1 class="mb-2 fw-bold fs-2">$93,438.78</h1>
                                    <span>Monthly revenue</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-12 mb-6">
                           <!-- card -->
                           <div class="card h-100 card-lg">
                              <!-- card body -->
                              <div class="card-body p-6">
                                 <!-- heading -->
                                 <div class="d-flex justify-content-between align-items-center mb-6">
                                    <div>
                                       <h4 class="mb-0 fs-5">Orders</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-warning text-dark-warning rounded-circle">
                                       <i class="bi bi-cart fs-5"></i>
                                    </div>
                                 </div>
                                 <!-- project number -->
                                 <div class="lh-1">
                                    <h1 class="mb-2 fw-bold fs-2">42,339</h1>
                                    <span>
                                       <span class="text-dark me-1">35+</span>
                                       New Sales
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-12 mb-6">
                           <!-- card -->
                           <div class="card h-100 card-lg">
                              <!-- card body -->
                              <div class="card-body p-6">
                                 <!-- heading -->
                                 <div class="d-flex justify-content-between align-items-center mb-6">
                                    <div>
                                       <h4 class="mb-0 fs-5">Customer</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-info text-dark-info rounded-circle">
                                       <i class="bi bi-people fs-5"></i>
                                    </div>
                                 </div>
                                 <!-- project number -->
                                 <div class="lh-1">
                                    <h1 class="mb-2 fw-bold fs-2">39,354</h1>
                                    <span>
                                       <span class="text-dark me-1">30+</span>
                                       new in 2 days
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </main>
         </div>
      </div>
@endsection
