<div class="col-12 col-md-9">
    <div class="card mb-3">
        <div class="card-header justify-content-center">
            <h2 class="mb-0">{{ __('Thông tin Post') }}</h2>
        </div>
        <div class="row card-body ">
            <!-- Email Address -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Title') }}:</label>
                    <x-input name="title" :value="old('title')" :required="true" placeholder="{{ __('Title') }}" />
                </div>
            </div>
            <!-- Fullname -->

            <!-- new password -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Excerpt') }}:</label>
                    <x-input name="excerpt" :required="true" placeholder="{{ __('Excerpt') }}" />
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    @lang('avatar')
                </div>
                <div class="card-body p-2">
                    <x-input.image-ckfinder :value="old('image')" name="image" showImage="image" />
                </div>
            </div>
            <!-- new password confirmation-->
            <div class="col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Content') }}:</label>
                    <textarea name="content" :required="true" class="ckeditor vissally-hidden"></textarea>
                </div>
            </div>

        </div>
    </div>
</div>
