<div class="nav-menu-mobile">
    <div class="nav-menu-mobile-content">
        <button class="close-nav-btn">
            <svg aria-hidden="true" class="pre-close-icon" focusable="false" viewbox="0 0 24 24" role="img" width="24px"
                 height="24px" fill="none">
                <path stroke="#000" stroke-width="1.5" d="M18.973 5.027L5.028 18.972M5.027 5.027l13.945 13.945"></path>
            </svg>
        </button>

        <ul class="wrapper-category">
            <li class="menu-search">

                <form class="search-form" role="search" method="get" action="{{route('products.search')}}">
                    <label for="s" class="screen-reader-text">Hit enter to Search...</label>
                    <input class="search-form__field" type="search" value="" name="query" id="s"
                           placeholder="Search name or ref. no">
                    <button type="submit" class="search-form__button" aria-label="toggle search">
                        <svg class="search-form__icon" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.98 18.344l-5.276-5.276a7.162 7.162 0 0 0 1.808-4.755c0-3.97-3.23-7.2-7.2-7.2s-7.2 3.23-7.2 7.2 3.23 7.2 7.2 7.2a7.16 7.16 0 0 0 4.755-1.809l5.277 5.277.637-.637zM8.313 14.612a6.307 6.307 0 0 1-6.3-6.3c0-3.473 2.827-6.3 6.3-6.3 3.474 0 6.3 2.827 6.3 6.3 0 3.474-2.826 6.3-6.3 6.3z"
                                fill="#333" stroke="#333" stroke-width=".6"></path>
                        </svg>
                    </button>
                </form>
            </li>
            @foreach($parentCategories as $parentCategory)
                <li class="cat-item cat-item-1418 has-child-items">
                    <a href="{{route('parent_category.products',['name' => $parentCategory->name])}}"
                       class="nav__link">{{$parentCategory->name}}<i
                            class="fas fa-chevron-right"></i></a>
                    <ul class='children'>
                        @php
                            $categories = $parentCategory->categories;
                        @endphp
                        <li class="back-item"><a href="#" class="sub__close">Back</a></li>
                        <li class="title-parent-menu"><a href="{{route('parent_category.products',['name' => $parentCategory->name])}}">{{$parentCategory->name}}</a></li>
                        @foreach($categories as $category)
                        <li class="cat-item cat-item-1419 has-child-items">
                            <a
                                href="{{route('category.products',['name' => $category->name])}}" class="nav__link">{{$category->name}}<i
                                    class="fas fa-chevron-right"></i></a>
                            <ul class='children'>
                                <li class="back-item"><a href="#" class="sub__close">Back</a></li>
                                <li class="title-parent-menu"><a href="{{route('category.products',['name' => $category->name])}}">{{$category->name}}</a></li>
                                @php
                                    $subCategories = $category->subCategories;
                                @endphp
                                @foreach($subCategories as $subCategory)
                                <li class="cat-item cat-item-1421 has-child-items"><a
                                        href="{{route('sub_category.products',['name' => $subCategory->name])}}" class="nav__link">{{$subCategory->name}}<i
                                            class="fas fa-chevron-right"></i></a>
                                    <ul class='children'>
                                        <li class="back-item"><a href="#" class="sub__close">Back</a></li>
                                        <li class="title-parent-menu"><a
                                                href="{{route('sub_category.products',['name' => $subCategory->name])}}">{{$subCategory->name}}</a></li>
                                        @php
                                            $subCategoryItems = $subCategory->subCategoryItems
                                        @endphp
                                        @foreach($subCategoryItems as $subCategoryItem)
                                        <li class="cat-item cat-item-1422"><a
                                                href="{{route('sub_category_item.products',['name' => $subCategoryItem->name])}}">{{$subCategoryItem->name}}</a>
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
        </ul>
    </div>
</div>

