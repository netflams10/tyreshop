@extends('layouts.rest')



@section('content')
    <div class="container mt-2">
        @foreach($datas as $data)

        <!-- <h3 class="h3">shopping Demo-1 </h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
                    <div class="price">$16.00
                        <span>$20.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div> -->


        <!-- <div class="card-body d-flex flex-row">

<img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

<div>

  <h4 class="card-title font-weight-bold mb-2">New spicy meals</h4>
  <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>

</div>

</div> -->

            <!-- Card content -->
  <div class="card-body d-flex flex-row">

<!-- Avatar -->
<img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

<!-- Content -->
<div>

  <!-- Title -->
  <h4 class="card-title font-weight-bold mb-2">New spicy meals</h4>
  <!-- Subtitle -->
  <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>

</div>

</div>

<!-- Card image -->
<div class="view overlay">
<img class="card-img-top rounded-0" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg" alt="Card image cap">
<a href="#!">
  <div class="mask rgba-white-slight"></div>
</a>
</div>

<!-- Card content -->
<div class="card-body">

<div class="collapse-content">

  <!-- Text -->
  <p class="card-text collapse" id="collapseContent">Recently, we added several exotic new dishes to our restaurant menu. They come from countries such as Mexico, Argentina, and Spain. Come to us, have some delicious wine and enjoy our juicy meals from around the world.</p>
  <!-- Button -->
  <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent"></a>
  <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
  <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>

</div>

</div>
            
        @endforeach
    </div>
@endsection