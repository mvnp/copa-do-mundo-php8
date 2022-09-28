<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $obj['page'] }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach($obj['breadcrumbItems'] as $key => $item)
                        <li class="breadcrumb-item">
                            <a href="{{ $item }}">{{ $key }}</a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>
