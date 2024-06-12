@extends('admin.layouts.app')
@section('title')
    @lang('Add a Product')
@endsection
@section('content')

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">
            <div class="media mb-4 justify-content-end">
                <a href="{{route('admin.product-list')}}" class="btn btn-sm  btn-primary mr-2">
                    <span><i class="fas fa-arrow-left"></i> @lang('Back')</span>
                </a>
            </div>

            <form method="post" action="{{route('admin.product-store')}}" class="form-row justify-content-center">
                @csrf
                <div class="col-md-8">

                <div class="row ">
                    <div class=" col-md-6">
                        <div class="form-group">
                            <label>@lang('Name')</label>
                            <input type="text" name="name" value="{{old('name')}}" placeholder="@lang('Product Name')" class="form-control" >
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label>@lang('Description')</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category_id">
                              <option value="1">Electronics</option>
                              <option value="2">Food</option>
                              <option value="3">Vehicle</option>
                            </select>
                            @error('badge')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label for="subcategory">Sub Category</label>
                            <select class="form-control" id="subcategory" name="subcategory_id">
                              <option value="1">Gents</option>
                              <option value="2">Womens</option>
                              <option value="3">Baby</option>
                            </select>
                            @error('badge')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label>@lang('Price')</label>
                            <input type="number" name="price" value="{{old('price')}}" placeholder="@lang('Product Price')" class="form-control" >
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label>@lang('Discount Percentage')</label>
                            <input type="number" name="discount" value="{{old('discount')}}" min="0" max="100" placeholder="@lang('eg, 5%, 25%')" class="form-control" >
                            @error('discount')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    
                    <div class=" col-md-6">
                        <div class="form-group">
                            <label>@lang('Point')</label>
                            <input type="number" name="point" value="{{old('point')}}" placeholder="@lang('Points for the Product')" class="form-control" >
                            @error('point')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <div class="form-group">
                            <label>@lang('Stock')</label>
                            <input type="number" name="stock" value="{{old('stock')}}" placeholder="@lang('Stock')" class="form-control" >
                            @error('stock')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>







                </div>


                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary btn-block mt-3"><span><i
                            class="fas fa-save pr-2"></i> @lang('Save')</span></button>

                </div>
            </form>
        </div>
    </div>
@endsection


@push('js')
    <script>
        "use strict";
        $(document).on('change','#plan_price_type', function () {
            var isCheck = $(this).prop('checked');
            if (isCheck == false) {
                $('.rangeAmount').addClass('d-block');
                $('.fixedAmount').removeClass('d-block');
                $('.fixedAmount').addClass('d-none');
            } else {
                $('.rangeAmount').removeClass('d-block');
                $('.fixedAmount').addClass('d-block');
            }
        });

        $(document).on('change','#is_lifetime', function () {
            var isCheck = $(this).prop('checked');

            if(isCheck == false){
                $('.repeatable').removeClass('d-block');
                $('.repeatable').addClass('d-none');
            }else {
                $('.repeatable').removeClass('d-none');
                $('.repeatable').addClass('d-block');
            }

        });

        $(document).ready(function () {
            $('select[name=schedule]').select2({
                selectOnClose: true
            });
        });


    </script>

    @if ($errors->any())
        @php
            $collection = collect($errors->all());
            $errors = $collection->unique();
        @endphp
        <script>
            "use strict";
            @foreach ($errors as $error)
            Notiflix.Notify.Failure("{{trans($error)}}");
            @endforeach
        </script>
    @endif
@endpush
