<!-- CSS START -->

@include('admin.css')

<!-- CSS END -->

<!-- NAVBAR START -->

@include('admin.nav')

<!-- NAVBAR END -->

<!-- MAIN CONTENT START -->

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">ADD PRODUCTS</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="redirect">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="table-responsive">
            <center>
                @if (session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            <i class="mdi mdi-close-circle"></i>
                        </button>
                        {{ session()->get('message') }}

                    </div>
                @endif
            </center>
            <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <center>
                <div class="wrapper">
                    <input type="radio" name="select" value="0" id="option-1" checked>
                    <input type="radio" name="select" value="1" id="option-2">
                      <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                         <span>Active</span>
                         </label>
                      <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                         <span>Inactive</span>
                      </label>
                   </div>
                </center>
                <br>

                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Product Title</span>
                    <input type="text" name="title" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-text">Product Short Description</span>
                    <textarea class="form-control" name="description" aria-label="With textarea" required></textarea>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-text">Product Long Description</span>
                    <textarea class="form-control" name="long_description" aria-label="With textarea" required></textarea>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-text">Product Information</span>
                    <textarea class="form-control" name="information" aria-label="With textarea" required></textarea>
                </div>
                <br>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Product Weight</span>
                    <input type="text" name="weight" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg" required>
                </div>
                <br>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Product Price</span>
                    <span class="input-group-text" id="inputGroup-sizing-lg">INR (₹)</span>
                    <input type="number" step="0.01" name="price" class="form-control"
                        aria-label="Sizing example input">
                </div>
                <br>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Discount Price</span>
                    <span class="input-group-text" id="inputGroup-sizing-lg">INR (₹)</span>
                    <input type="number" step="0.01" name="discount_price" class="form-control"
                        aria-label="Sizing example input">
                </div>
                <br>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Product Quantity</span>
                    <input type="number" name="quantity" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg" min="0" step="1" required>
                </div>
                <br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Product Category</span>
                    <select class="form-control form-control-lg form-control-line" name="category"
                        aria-label="Large select example" required>
                        <option selected>Add Category Here</option>

                        @foreach ($category as $category)
                            <option value="{{ $category->Category_name }}">{{ $category->Category_name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Product Image</span>
                    <input type="file" name="image" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg" required>
                </div>
                <center>
                    <p>Image Size Must Be<mark>270 x 270</mark> pixels.</p>
                </center>
                <br>
                <center>
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">ADD PRODUCT</button>
                </center>
            </form>
        </div>
    </div>

    <!-- MAIN CONTENT END -->

    <!-- FOOTER START -->

    @include('admin.footer')

    <!-- FOOTER END -->

    <!-- JS START -->

    @include('admin.js')

    <!-- JS END -->