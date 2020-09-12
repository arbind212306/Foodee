@extends('layouts.app')
@section('title', 'Order')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List of Menu</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- <h3 class="card-title">Projects</h3> -->

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>Customer Name</th>
                      <th>Delivery Address</th>
                      <th>Food Type</th>
                      <th>Price</th>
                      <th>Order date</th>
                      <th>Status</th>
                  </tr>
              </thead>
              <tbody>
              @isset($orders)
                @foreach ($orders as $order)
                  <tr>
                     <td>{{ ucfirst($order->customer_user->name) }}</td>
                     <td>{{ ucfirst($order->delivery_address) }}</td>
                     <td>{{ $order->customer_user->food_type->name }}</td>
                     <td>{{ $order->price }}</td>
                     <td>{{ $order->created_at }}</td>
                     <td><span class="badge bg-success">active</span></td>
                  </tr>
                @endforeach
               @endisset 
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content --> 
</div>
@endsection 