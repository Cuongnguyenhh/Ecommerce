@extends('dashboard')
@section('dashboard_content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Create Product</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Thêm các trường chỉnh sửa ở đây -->
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" id="product_name" name="product_name" class="form-control" value="" placeholder="Enter Product Name" required>
                        </div>

                        

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" id="price" name="price" class="form-control" placeholder="Enter Product Price"  required>
                        </div>

                        <div class="form-group">
                            <label for="product_visible">Product Category</label>
                            <select id="product_visible" name="category_id" class="form-control" required>
                                @foreach ($cate as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_visible">Product Visible</label>
                            <select id="product_visible" name="product_visible" class="form-control" required>
                                <option value="0">Selling</option>
                                <option value="1">Stop</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control" placeholder="Enter Product Description" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="product_images">Product Images (Max 3 images)</label>
                            <input type="file" id="product_images" name="product_images[]" class="form-control-file" multiple accept="image/*">
                        </div>

                        {{-- <div class="form-group">
                            <label for="product_images">Product Images (Max 3 images)</label>
                            <input type="file" id="product_images" name="product_images[]" class="form-control-file" multiple accept="image/*">
                        </div> --}}
       

                        <!-- Thêm các trường dữ liệu khác vào đây -->

                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
