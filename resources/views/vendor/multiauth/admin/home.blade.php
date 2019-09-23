@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  {{-- {{ ucfirst(config('multiauth.prefix')) }} --}}
                   Welcome To Our Dashboard</div>
                {{-- <div class="card-body">
                  @admin('super')
                  <button>Super</button>
                  @endadmin
                  @admin('visitor')
                  <button>visitor</button>
                  @endadmin
                  @admin('subscriber')
                  <button>subscriber</button>
                  @endadmin
                  @admin('admin')
                  <button>admin</button>
                  @endadmin
                </div> --}}

            </div>
        <section class="dashboard-counts section-padding">

        <div class="container-fluid" style="width:98%;margin:auto">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-md-3 card card-header">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Total Users</strong><span>in this system</span>
                  <div class="count-number">{{ $user_info }}</div>
                </div>
              </div>
            </div>
            <div class="col-md-1">

            </div>

            <!-- Count item widget-->
            <div class="col-md-3 card card-header">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Total Lawyers</strong><span>in this system</span>
                  <div class="count-number">{{ $lawyer_info }}</div>
                </div>
              </div>
            </div>
            <div class="col-md-1">

            </div>
            <!-- Count item widget-->
            <div class="col-md-3 card card-header">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Total Clients</strong><span>in this system</span>
                  <div class="count-number">{{ $client_info }}</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section><br><br>
      <section class="charts">
       <div class="container-fluid">
         <!-- Page Header-->
         <header>
             <h1 class="h3 display">User Activity Charts</h1>
           </header>
         <div class="row">
           <div class="col-lg-6">
             <div class="card bar-chart-example">
               <div class="card-header d-flex align-items-center">
                 <h4>Lawyer Information</h4>
               </div>
               <div class="card-body">
                 <div id="app">
                      {!! $bar_chart->container() !!}
                  </div>
                  {!! $bar_chart->script() !!}
               </div>
             </div>
           </div>
           <div class="col-lg-6">
             <div class="card bar-chart-example">
               <div class="card-header d-flex align-items-center">
                 <h4>Client Information</h4>
               </div>
               <div class="card-body">
                 <div id="app">
                      {!! $pie_chart->container() !!}
                  </div>
                  {!! $pie_chart->script() !!}
               </div>
             </div>
           </div>
           <div class="col-lg-12">
             <div class="card line-chart-example">
               <div class="card-header d-flex align-items-center">
                 <h4>User Information</h4>
               </div>
               <div class="card-body">
                 <div id="app">
                      {!! $chart->container() !!}
                  </div>
                  {!! $chart->script() !!}
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
