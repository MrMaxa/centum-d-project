<div class="form-group my-3">
    <div class="form-group__content d-flex align-items-center">
        <label
                class="text-nowrap pe-3"
                for="transitionLimitInput">
            Transition limit:
        </label>

        <input
                name="transitionLimit"
                type="number"
                min="0"
                value="0"
                required="required"
                class="form-control"
                aria-describedby="transitionLimitHelp"
                id="transitionLimitInput">
    </div>
    <small
            id="transitionLimitHelp"
            class="form-text text-muted">
        Transition limit — maximum number of clicks on the link. 0 = unlimited
    </small>

    @if($errors->has('transitionLimit'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('transitionLimit') }}
        </div>
    @endif
</div>