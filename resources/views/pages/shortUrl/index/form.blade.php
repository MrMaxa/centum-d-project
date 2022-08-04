@extends('layouts.default')

@section('content')
    <form
            method="post"
            action=""
            class="col-sm-12 col-md-6">
        @csrf

        <fieldset>
            <legend>Short URL generation:</legend>

            @include('pages.shortUrl.index.partials.inputs.fullUrl')

            @include('pages.shortUrl.index.partials.inputs.transitionLimit')

            @include('pages.shortUrl.index.partials.inputs.lifetime')

            <div class="btn-wrapper text-center my-3">
                <button
                        type="submit"
                        class="btn btn-primary">
                    Submit
                </button>
            </div>

        </fieldset>
    </form>
@endsection
