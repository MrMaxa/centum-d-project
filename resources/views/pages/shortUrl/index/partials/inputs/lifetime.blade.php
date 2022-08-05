<div class="form-group my-3">
    <div class="form-group__content d-flex align-items-center">
        <label
                class="text-nowrap pe-3"
                for="lifetimeInput">
            Short URL lifetime:
        </label>

        <input
                name="lifetime"
                type="number"
                min="1"
                max="86400"
                value="1"
                required="required"
                class="form-control"
                aria-describedby="lifetimeHelp"
                id="lifetimeInput">
    </div>
    <small
            id="lifetimeHelp"
            class="form-text text-muted">
        Short URL lifetime — specified in seconds, but no more than 24 hours (86400 seconds)
    </small>

    @if($errors->has('lifetime'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('lifetime') }}
        </div>
    @endif
</div>