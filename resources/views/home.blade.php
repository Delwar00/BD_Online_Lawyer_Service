@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
            <br><br>
            <h1>Dashboard</h1>
        <br><br><br>
              <section class="dashboard-counts section-padding">
          <div class="container-fluid">
            <div class="row" >


              <!-- Count item widget-->
              <div class="col-md-3 card card-header bg-primary" >
                <div class="wrapper count-title d-flex" style="color:black;text-align:center;font-size:13px;padding:30px">
                  <div class="icon"><i class="icon-padnote"></i></div>
                  <span class="fa fa-users" style="color:#85C1E9;font-size:60px;"></span>
                  <div class="name"><strong class="text-uppercase pull-right">Total Cases Win</strong>
                    <div class="count-number">100</div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">

              </div>

              <!-- Count item widget-->
              <div class="col-md-3 card card-header bg-danger">
                <div class="wrapper count-title d-flex" style="color:black;text-align:center;font-size:13px;padding:30px">
                  <div class="icon"><i class="icon-bill"></i></div>
                  <span class="fa fa-ticket" style="color:#F1948A;font-size:60px"></span>
                  <div class="name"><strong class="text-uppercase pull-right">Total Lose Cases</strong>
                    <div class="count-number">123</div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">

              </div>
              <!-- Count item widget-->
              <div class="col-md-3 card-header bg-warning">
                <div class="wrapper count-title d-flex" style="color:black;text-align:center;font-size:13px;padding:30px">
                  <div class="icon"><i class="icon-list-1"></i></div>
                  <span class="fa fa-bank" style="color:#F8C471;font-size:60px"></span>
                  <div class="name"><strong class="text-uppercase pull-right">Total Satisfied Clients</strong>
                    <div class="count-number">70</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
          </div>
      </div>
  </div>
@endsection
