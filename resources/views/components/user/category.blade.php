@foreach ($listCategory as $category)
    <div class="col-lg-3 col-md-3 col-sm-12 categories">
        <div class="category-card border bg-card text-card-foreground shadow-lg overflow-hidden" data-v0-t="card">
            <div class="flex flex-col space-y-1.5 p-0">
                <div class="relative">
                    <a href="{{ route('category', ['slug' => $category->slug]) }}">
                        <img alt="{{ $category->name_category }}" width="100%" height="300px" loading="lazy" decoding="async" data-nimg="fill"
                        class="object-cover" src="{{ $category->image_category  }}" alt="{{ $category->name_category }}"
                        data-src="{{ $category->image_category  }}" alt="{{ $category->name_category }}">
                    </a>
                </div>
            </div>
        </div>
        <div class="p-2 card-title" data-v0-t="card-title">
            <a href="{{ route('category', ['slug' => $category->slug]) }}"
                class="text-sm hover:text-accent-foreground hover:text-accent-foreground">
                <h3 class="text-sm hover:text-accent-foreground hover:text-accent-foreground">{{ $category->name_category }}</h3>
            </a>
            {{-- Count product --}}
            <span class="text-sm text-muted">5 sản phẩm</span>
        </div>
    </div>
@endforeach
