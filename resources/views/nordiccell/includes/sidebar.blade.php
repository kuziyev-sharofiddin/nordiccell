<div class="wrap-nav-content">
    <ul class="wrap-category">
        @foreach($parentCategories as $parentCategory)
        <li class="cat-item cat-item-1418"><a href="{{route('parent_category.products',['name' => $parentCategory->name])}}">{{$parentCategory->name}}</a>
            <ul class='children'>
                @php
                    $categories = $parentCategory->categories;
                @endphp
                @foreach($categories as $category)
                <li class="cat-item cat-item-1419"><a href="{{route('category.products',['name' => $category->name])}}">{{$category->name}}</a>
                    <ul class='children'>
                        @php
                            $subCategories = $category->subCategories;
                        @endphp
                        @foreach($subCategories as $subCategory)
                        <li class="cat-item cat-item-1421"><a href="{{route('sub_category.products',['name' => $subCategory->name])}}">{{$subCategory->name}}</a>
                            <ul class='children'>
                                @php
                                    $subCategoryItems = $subCategory->subCategoryItems
                                @endphp
                                @foreach($subCategoryItems as $subCategoryItem)
                                <li class="cat-item cat-item-1422"><a href="{{route('sub_category_item.products',['name' => $subCategoryItem->name])}}">{{$subCategoryItem->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach
        <li class="menu-search">

            <form class="search-form" role="search" method="get" action="{{route('products.search')}}">
                <label for="s" class="screen-reader-text">Hit enter to Search...</label>
                <input class="search-form__field" type="search" value="" name="query" id="s" placeholder="Search name or ref. no">
                <button type="submit" class="search-form__button" aria-label="toggle search">
                    <svg class="search-form__icon" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M18.98 18.344l-5.276-5.276a7.162 7.162 0 0 0 1.808-4.755c0-3.97-3.23-7.2-7.2-7.2s-7.2 3.23-7.2 7.2 3.23 7.2 7.2 7.2a7.16 7.16 0 0 0 4.755-1.809l5.277 5.277.637-.637zM8.313 14.612a6.307 6.307 0 0 1-6.3-6.3c0-3.473 2.827-6.3 6.3-6.3 3.474 0 6.3 2.827 6.3 6.3 0 3.474-2.826 6.3-6.3 6.3z" fill="#333" stroke="#333" stroke-width=".6"></path></svg>
                </button>
            </form>
        </li>
    </ul>
</div>


{{--<div class="content-wrapper">--}}

{{--    <div class="post-header">--}}

{{--        <header class="hero hero--size-small hero--align-left">--}}


{{--            <div class="hero__text-wrap ">--}}

{{--                <h1 class="hero__title">Cart</h1>--}}


{{--            </div>--}}


{{--        </header>--}}
{{--    </div>--}}


{{--    <div class="content-main">--}}

{{--        <main>--}}


{{--            <article id="article-7" class="post-wrapper post-7 page type-page status-publish hentry">--}}


{{--                <div class="post-content">--}}

{{--                    <div class="woocommerce">--}}
{{--                        <div class="woocommerce-notices-wrapper"></div>--}}
{{--                        <div class="wc-empty-cart-message">--}}
{{--                            <div class="cart-empty woocommerce-info">--}}
{{--                                Your basket is currently empty.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="return-to-shop">--}}
{{--                            <a class="button wc-backward"--}}
{{--                               href="../product/m510-label-printer-eu/index.htm?page_id=6">--}}
{{--                                Return to shop </a>--}}
{{--                        </p>--}}
{{--                    </div>--}}

{{--                </div>--}}


{{--            </article>--}}


{{--        </main>--}}


{{--    </div>--}}

{{--</div>--}}
