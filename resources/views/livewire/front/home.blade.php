<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Home</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>

            </div>
            <div class="page-body">
                <div class="card">
                    <div class="card-body">
                        <span>Hai guys !, Sabar ya websitenya masih proses</span>
                        <br>
                        <div class="fw-bold" wire:poll.1s>
                            @if ($time)
                                <h2>{{ $time->desc }}</h2>
                                <h1>{{ $time->created_at }}</h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
</div>
