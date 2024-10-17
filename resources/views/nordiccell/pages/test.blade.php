<div class="content-wrapper">

    <div class="post-header">
    </div>


    <div class="content-main">
        <main>
            <div class="storefront-breadcrumb">
                <div class="col-full">
                    <nav class="woocommerce-breadcrumb">
                        <span class="breadcrumb-content"><a
                                href="{{route('parent_category.products',['name' => $product->parentCategory->name])}}">{{$product->parentCategory->name}}</a></span><span
                            class="breadcrumb-separator"> &gt; </span>
                        <span class="breadcrumb-content"><a
                                href="{{route('category.products',['name' => $product->category->name])}}">{{$product->category->name}}</a></span><span
                            class="breadcrumb-separator"> &gt; </span>
                        <span class="breadcrumb-content"><a
                                href="{{route('sub_category.products',['name' => $product->subCategory->name])}}">{{$product->subCategory->name}}</a></span><span
                            class="breadcrumb-separator"> &gt; </span>
                        @if(isset($product->subCategoryItem->name))
                            <span class="breadcrumb-content"><a
                                    href="{{route('sub_category_item.products',['name' => $product->subCategoryItem->name])}}">{{$product->subCategoryItem->name}}</a></span>
                            <span
                                class="breadcrumb-separator"> &gt; </span>
                        @endif
                        <span
                            class="breadcrumb-content">Beta Stool 360/45</span></nav>
                </div>
            </div>

            <div class="woocommerce-notices-wrapper"></div>
            <div id="product-9176"
                 class="product type-product post-9176 status-publish first onbackorder product_cat-stools has-post-thumbnail taxable shipping-taxable product-type-grouped">

                <div class="visuals">
                    <div class="images">
                        <div class="slider wpgis-slider-for">
                            <div class="zoom"><img src=""><img
                                    src="{{$product_image->getImageUrl()}}"><a
                                    href="{{$product_image->getImageUrl()}}"
                                    class="wpgis-popup fa fa-expand" data-fancybox="product-gallery"></a>
                            </div>
                        </div>
                        <div id="wpgis-gallery" class="slider wpgis-slider-nav">
                            @foreach($product->product_images as $image)
                                <li title="">
                                    <img width="150" height="150"
                                         src="{{$image->getImageUrl()}}"
                                         class="attachment-thumbnail size-thumbnail" alt="" decoding="async"
                                         srcset="{{$image->getImageUrl('150x150')}} 150w,
                                             {{$image->getImageUrl('300x300')}} 300w,
                                             {{$image->getImageUrl('1024x1024')}} 1024w,
                                             {{$image->getImageUrl('768x768')}} 768w,
                                             {{$image->getImageUrl('1536x1536')}} 1536w,
                                             {{$image->getImageUrl('2048x2048')}} 2048w,
                                             {{$image->getImageUrl('125x125')}} 125w,
                                             {{$image->getImageUrl('721x721')}} 721w,
                                             {{$image->getImageUrl('100x100')}} 100w"
                                         sizes="(max-width: 150px) 100vw, 150px">
                                </li>
                            @endforeach

                        </div>
                    </div>
                    @if(isset($product->bulk) && $product->bulk_part)
                        <div class="product_description">
                            {{$product->definition}}
                        </div>
                    @endif
                </div>

                <div class="summary entry-summary">
                    @if(isset($product->sub_products) && $product->sub_products->count() > 0)
                        <span class="product-ref-no">{{$product->sub_products->count()}} variants</span>
                    @else
                        <span class="product-ref-no">{{$product->ref_number}}</span>
                    @endif
                    <h1 class="product_title entry-title">{{$product->title}}</h1>
                    <div class="woocommerce-product-details__short-description">
                        <span>{{$product->description}}</span>
                    </div>
                    {{--                    <form class="cart grouped_form" action="" method="post" enctype='multipart/form-data'>--}}
                    @if(isset($product->bulk) && $product->bulk_part)
                        <div class="product-info">
                            <div class="product-info-price-units">
                                <div class="unit-data not-login">{{$product->bulk}} / {{$product->bulk_part}}</div>
                            </div>
                        </div>
                    @endif
                    @if(isset($product->sub_products) && $product->sub_products->count() > 0)
                        <table cellspacing="0" class="woocommerce-grouped-product-list group_table">
                            <tbody>
                            @foreach($product->sub_products as $detail)
                                <tr id="product-9180"
                                    class="woocommerce-grouped-product-list-item product type-product post-9180 status-publish instock product_cat-stools has-post-thumbnail taxable shipping-taxable purchasable product-type-simple active ">
                                    <td class="woocommerce-grouped-product-list-item__label">
                                        <div class="item-product-children" data-id="9180">
                                            <div class="image-product"><img
                                                    src="{{$detail->getImageUrl()}}"
                                                    alt="image-product"></div>
                                            <div class="col-product-title"><label
                                                    for="product-9180">{{$detail->color->name}}</label><span
                                                    class="product-ref-no">{{$detail->ref_number}}</span></div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="btn-show-all-variants">
                            <span>Show all variants +</span>
                        </div>
                    @endif
                    @if(auth()->user())
                        <div>
                            <form class="cart grouped_form" action="{{route('add_cart',['product' => $product->id])}}"
                                  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="product-info">
                                    <div class="product-info-price-units">

                                        <p class="price">
                                                <span class="woocommerce-Price-amount amount"><bdi>{{$product->price}}&nbsp;<span
                                                            class="woocommerce-Price-currencySymbol">EUR</span></bdi></span>
                                        </p>

                                        <div class="unit-data">per box of 4 procedures</div>


                                    </div>
                                    <div class="product-info-stock">
                                        <p class="stock in-stock">
                                            <span class="stock-explainer"> In stock</span>
                                            <i title="In stock" class="fas fa-circle"></i>
                                        </p>
                                    </div>
                                </div>


                                <div class="quantity buttons_added"><input type="button" value="-" class="minus">
                                    <label class="screen-reader-text" for="quantity_66fbdc99a6fda">VitriFreeze ES
                                        Kit quantity</label>
                                    <input type="number" id="quantity_66fbdc99a6fda" class="input-text qty text"
                                           name="quantity" value="1" aria-label="Product quantity" size="4" min="1"
                                           max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                    <input type="button" value="+" class="plus"></div>
                                <button type="submit"
                                        class="button alt">Add to
                                    cart<img
                                        class="add-to-cart-button-icon-small"
                                        src="https://nordiccell.com/wp-content/themes/nordiccell/assets/dist/icons/cart-white.svg">
                                </button>
                            </form>
                        </div>
                    @else
                        <input type="hidden" name="add-to-cart" value="9201">
                        <a href="{{route('login')}}"
                           class="single_add_to_cart_button button alt button-login-to-shop">Login to shop</a>
                        <a href="../../register/index.htm" class="new-customer">New customer?</a>
                    @endif
                    {{--                    </form>--}}
                    <div class="product-data-list__wrap">
                        <h3>Specifications</h3>
                        <div class="product-data-list__col col">
                            @if(isset($product->testing))
                                <div class="product-data-list__item" data-id="pa_toxicity-test">
                                    <div class="product-data-list__label">Testing:</div>
                                    <div class="product-data-list__value">{{$product->testing}}</div>
                                </div>
                            @endif
                            @if(isset($product->sterility))
                                <div class="product-data-list__item" data-id="pa_sterile">
                                    <div class="product-data-list__label">Sterility:</div>
                                    <div class="product-data-list__value">{{$product->sterility}}</div>
                                </div>
                            @endif
                            @if(isset($product->latex_material))
                                <div class="product-data-list__item" data-id="pa_latex-content">
                                    <div class="product-data-list__label">Latex/Materials:</div>
                                    <div class="product-data-list__value">{{$product->latex_material}}</div>
                                </div>
                            @endif
                            @if(isset($product->ce_marking))
                                <div class="product-data-list__item" data-id="pa_ce-marking">
                                    <div class="product-data-list__label">CE Marking:</div>
                                    <div class="product-data-list__value">{{$product->ce_marking}}</div>
                                </div>
                            @endif
                            @if(isset($product->intended_use))
                                <div class="product-data-list__item" data-id="pa_intended-use">
                                    <div class="product-data-list__label">Intended Use:</div>
                                    <div class="product-data-list__value">{{$product->intended_use}}</div>
                                </div>
                            @endif
                            @if(isset($product->available_in))
                                <div class="product-data-list__item" data-id="pa_available">
                                    <div class="product-data-list__label">Available in:</div>
                                    <div class="product-data-list__value">{{$product->available_in}}</div>
                                </div>
                            @endif
                        </div>
                    </div>


                    <div class="product_meta">
                        <span class="posted_in">Category: <a
                                href="../../product-category/equipment/lab-furniture/stools/index.htm"
                                rel="tag">Stools</a></span>
                    </div>
                </div>

                <div class="woocommerce-tabs-outer"></div>
                <div class="product_description">
                    <p>The Beta Stool 360/60 has a 60 mm cold foam upholstered seat, ensuring optimal sitting comfort.
                        The stool is equipped with a 50 cm alu base and easy rolling castors.</p>
                    <p>The seat diameter is 36 cm.</p>
                </div>
            </div>


        </main>
    </div>
</div>
