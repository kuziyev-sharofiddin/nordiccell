@extends('nordiccell.layouts.app')
@section( 'title', 'Dashboard')
@section('content')
    <div class="content-wrapper content-wrapper--archive">

        <div class="post-header">
            <header class="archive-header">
            </header>

            <div class="archive-hero-wrap">
                <div class="archive-hero_title">
                    <div class="hero-title"> Equipment</div>
                </div>
                <div class="archive-hero_description">
                </div>
                <div class="archive-hero_childs-lists">
                    <ul class="category-product_cat-list">
                        <li class="cat-item cat-item-3221"><a href="heating-devices/index.htm">Heating Devices (14)</a>
                        </li>
                        <li class="cat-item cat-item-3220">
                            <a href="lab-furniture/index.htm">Lab Furniture (57)</a></li>
                        <li class="cat-item cat-item-1514">
                            <a href="cryo-lab-equipment/index.htm">Cryo Lab Equipment
                                (41)</a></li>
                        <li class="cat-item cat-item-1390">
                            <a href="aspiration-pumps/index.htm">Aspiration Pumps (3)</a>
                        </li>
                        <li class="cat-item cat-item-3226">
                            <a href="centrifuges/index.htm">Centrifuges (5)</a></li>
                        <li class="cat-item cat-item-3232">
                            <a href="changeover-systems/index.htm">Changeover Systems
                                (4)</a></li>
                        <li class="cat-item cat-item-4011">
                            <a href="workstation-accessories/index.htm">Workstation
                                Accessories (4)</a></li>
                    </ul>
                </div>


            </div>
        </div>

        <div class="content-main">
            <main>
                <header class="woocommerce-products-header">

                    <h1 class="woocommerce-products-header__title page-title" style="display: none;"> Equipment</h1>


                </header>
                <div class="woocommerce-notices-wrapper"></div>
                <ul class="product-categories">
                    @foreach($parentCategories as $category)
                        <li class="product-category">
                            <a href="{{route('parent_category.products', ['name'=>$category->name])}}" class="heating-devices">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
                <ul class="products columns-4">
                    @if($products->isEmpty())
                        <div class="post-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="wc-empty-cart-message">
                                    <div class="cart-empty woocommerce-info">
                                        Your products are currently empty.
                                    </div>
                                </div>
                                <p class="return-to-shop">
                                    <a class="button wc-backward" href="{{ url('shop') }}">
                                        Return to shop
                                    </a>
                                </p>
                            </div>
                        </div>
                    @else
                        @foreach($products as $product)
                            <li class="product type-product post-9201 status-publish onbackorder product_cat-stools has-post-thumbnail taxable shipping-taxable product-type-grouped">
                                <a href="{{ route('product.details', ['product' => $product->id]) }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">

                                    @if($product->product_images->isNotEmpty())
                                        <div class="super-img" style="background-image: url('{{ $product->product_images->sortBy('created_at')->first()->getImageUrl() }}')">
                                            <img src="{{ $product->product_images->sortBy('created_at')->first()->getImageUrl() }}" alt="{{ $product->title }}">
                                        </div>
                                    @else
                                        <div class="super-img" style="background-image: url('../../wp-content/uploads/2024/01/Beta45-med-farvekort-768x768.jpg')">
                                            <img src="../../wp-content/uploads/2024/01/Beta45-med-farvekort-768x768.jpg" alt="Default Image">
                                        </div>
                                    @endif

                                    @if(isset($product->sub_products) && $product->sub_products->count() > 0)
                                        <span class="price sku">{{ $product->sub_products->count() }} variants</span>
                                    @else
                                        <span class="price sku">{{ $product->ref_number }}</span>
                                    @endif

                                    <h2 class="woocommerce-loop-product__title">{{ $product->title }}</h2>
                                </a>

                                <form class="cart" action="#" method="post" enctype="multipart/form-data">
                                    <div class="unit-data not-login">1 unit</div>
                                    <div class="quantity">
                                        <label class="screen-reader-text" for="quantity_{{ $product->id }}">Quantity</label>
                                        <input type="number" id="quantity_{{ $product->id }}" class="input-text qty text" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" step="1" inputmode="numeric" autocomplete="off">
                                    </div>

                                    <a href="{{ url('my-account') }}" class="single_add_to_cart_button button alt">Login to shop</a>
                                </form>
                            </li>
                        @endforeach
                    @endif
                </ul>
                @if($products->isNotEmpty())
                    <nav class="woocommerce-pagination">
                        <ul class='page-numbers'>
                            {{ $products->links() }}
                        </ul>
                    </nav>
                @endif
            </main>
            <!-- <section class="sidebar">


</section> -->
        </div>
    </div>
@endsection
