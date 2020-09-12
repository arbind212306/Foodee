@extends('layouts.app')
@section('title', 'Add Menu')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Menu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/resturant-user/menu/add') }}" method="post">
              @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                id="name" placeholder="{{ __('Enter menu name') }}" value="{{ old('name') }}" 
                                autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror" 
                                id="description" name="description" placeholder="{{ __('Enter menu description') }}" value="{{ old('description') }}" 
                                autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ingredients">{{ __('Ingredients') }}</label>
                                <input type="text" name="ingredients" class="form-control @error('ingredients') is-invalid @enderror" 
                                id="ingredients" placeholder="{{ __('Enter menu ingredients') }}" value="{{ old('ingredients') }}" 
                                autocomplete="ingredients" autofocus>

                                @error('ingredients')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">{{ __('Category') }}</label>
                                <select name="category_id" id="category_id" class="form-control custom-select @error('category_id') is-invalid @enderror" required >
                                    <option value="">---Select Food Category--</option>
                                    @isset($categories)
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old("category_id") == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipe">{{ __('Recipe') }}</label>
                                <input type="text" name="recipe" class="form-control @error('recipe') is-invalid @enderror" 
                                id="recipe" placeholder="{{ __('Enter menu recipe') }}" value="{{ old('recipe') }}" 
                                autocomplete="recipe" autofocus>

                                @error('recipe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">{{ __('Price') }}</label>
                                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" 
                                id="price" placeholder="{{ __('Enter menu price') }}" value="{{ old('price') }}" 
                                required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="food_type">{{ __('Food Type') }}</label>
                                <select name="food_type_id" id="food_type_id" class="form-control custom-select @error('food_type_id') is-invalid @enderror" required >
                                    <option value="">---Select Food Category--</option>
                                    @isset($food_types)
                                        @foreach ($food_types as $food_type)
                                        <option value="{{ $food_type->id }}" {{ old("food_type_id") == $food_type->id ? 'selected' : '' }}>{{ ucwords($food_type->name) }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @error('food_type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection