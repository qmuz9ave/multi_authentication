@extends('layouts.adminapp')

@section('content')
  @include('includes.sidebar')
  <div class="page">
  @include('includes.navbar')

<!-- starts-->

<div class="content">
  <section class="dashboard-counts section-padding">
  <div class="container-fluid">
      <div class="row d-flex align-items-md-stretch">
      <div class="col-lg-3 col-md-6">
          <div class="card project-progress">
            <h2 class="display h4">Project Beta progress</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="pie-chart">
              <canvas id="pieChart" width="300" height="300"> </canvas>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
</div>
  

<!--ends -->  
</div>  
@endsection
