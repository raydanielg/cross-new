<div class="p-3 border rounded shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="font-weight-bold mb-0">
            <i class="fas {{ $category['icon'] }} text-primary mr-2"></i> {{ $category['name'] }}
        </h6>
        <button class="btn btn-xs btn-link p-0">Expand All</button>
    </div>
    <div class="row">
        @foreach($category['perms'] as $perm)
        <div class="col-md-6">
            <div class="custom-control custom-checkbox mb-2">
                <input class="custom-control-input" type="checkbox" id="{{ $perm }}" checked>
                <label for="{{ $perm }}" class="custom-control-label font-weight-normal small">{{ str_replace('_', ' ', $perm) }}</label>
            </div>
        </div>
        @endforeach
    </div>
</div>