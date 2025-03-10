<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                @hasSection('page-title')
                    <h3 class="mb-0">@yield('page-title')</h3>
                @endif

                @isset($breadcrumbs)
                    <ol class="breadcrumb float-sm">
                        @foreach ($breadcrumbs as $breadcrumb)
                            <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a></li>
                        @endforeach
                    </ol>
                @endisset
            </div>
        </div>
    </div>
</div>
