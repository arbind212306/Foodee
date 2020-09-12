<div class="container">
    <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
        </div>
    </div>
    <div class="row">
    @isset($categories)
        @foreach ($categories as $category)
        <div class="col-md-6 col-lg-4">
            <div class="menu-wrap">
                <div class="heading-menu text-center ftco-animate">
                    <h3>{{ ucfirst($category->name) }}</h3>
                </div>
                @isset ($category->menu_items)
                    @foreach ($category->menu_items as $menu_item)
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(../assets/images/breakfast-1.jpg);"></div>
                        <div class="text">
                            <a href="{{ route('customer.place.order',['id' => $menu_item->id]) }}">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{ ucfirst($menu_item->name)}}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">{{ __('$').$menu_item->price }}</span>
                                    </div>
                                </div>
                                <p><span>{{ ucwords($menu_item->ingredients) }}</span></p>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @endisset
                <span class="flat flaticon-bread" style="left: 0;"></span>
                <span class="flat flaticon-breakfast" style="right: 0;"></span>
            </div>
        </div>
        @endforeach
    @endisset
    </div>
</div>