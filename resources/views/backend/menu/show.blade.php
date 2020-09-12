@extends('layouts.app')
@section('title', 'Menu')
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
                <li class="breadcrumb-item active">Menues</li>
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
            <a href="{{ url('/resturant-user/menu/add') }}" class="btn btn-block btn-primary ">Add Menu</a>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Descriptions</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Recipe</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($menu_items as $menu_item)
                  <tr>
                     <td>{{ ucwords($menu_item->name) }}</td>
                     <td>{{ ucfirst($menu_item->description) }}</td>
                     <td>{{ ucfirst($menu_item->category->name) }}</td>
                     <td>{{ $menu_item->price}}</td>
                     <td>{{ ucfirst($menu_item->recipe) }}</td>
                     <td>@if($menu_item)<span class="badge bg-success">active</span> @else <span class="badge bg-danger">deactive</span>@endif</td>
                     <td>
                        <a class="btn btn-info btn-sm" href="{{ route('menu.edit',['id' => $menu_item->id]) }}">
                            <i class="fas fa-pencil-alt"></i>Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{ route('menu.delete',['id' => $menu_item->id]) }}">
                              <i class="fas fa-trash"></i>Delete
                          </a>
                     </td>
                  </tr>
                @endforeach
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