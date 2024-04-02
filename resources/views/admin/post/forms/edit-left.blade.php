<div class="col-12 col-md-9">
    <div class="card">
        <div class="card-header justify-content-center">
            <h2 class="mb-0">{{ __('Thông tin Post') }}</h2>
        </div>
        <div class="row card-body">
            <!-- Email Address -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Title') }}:</label>
                    <x-input name="title" :value="$post->title" :required="true" placeholder="{{ __('Title') }}" />
                </div>
            </div>
            <!-- Fullname -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Slug') }}:</label>
                    <x-input readonly name="slug" :value="$post->slug" :required="true"
                        placeholder="{{ __('Slug') }}" />
                </div>
            </div>
            <!-- new password -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Excerpt') }}:</label>
                    <x-input name="excerpt" :required="true" :value="$post->excerpt" placeholder="{{ __('Excerpt') }}" />
                </div>

            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Posted at') }}:</label>
                    <x-input name="posted_at" :value="$post->posted_at" :required="true" />
                </div>
            </div>
            <!-- new password confirmation-->


            <!-- Role -->
            <div class="col-md-12 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Content') }}:</label>
                    <textarea class="ckeditor vissally-hidden" name="content" :required="true" rows="10"> {{ $post->content }}</textarea>
                </div>

            </div>


        </div>

    </div>
</div>
@push('libs-js')
    <script src="{{ asset('/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/libs/ckeditor/adapters/jquery.js') }}"></script>
    @include('ckfinder::setup')
    <script src="{{ asset('/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('/libs/select2/dist/js/i18n/' . trans()->getLocale() . '.js') }}"></script>
@endpush
