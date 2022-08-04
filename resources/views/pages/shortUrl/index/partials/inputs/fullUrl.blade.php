<div class="form-group my-3">
    <div class="form-group__content d-flex align-items-center">
        <label
                class="text-nowrap pe-3"
                for="fullUrlInput">
            Enter Full URL:
        </label>

        <input
                type="url"
                name="fullUrl"
                required="required"
                class="form-control"
                id="fullUrlInput">
    </div>

    @if($errors->has('fullUrl'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fullUrl') }}
        </div>
    @endif

</div>