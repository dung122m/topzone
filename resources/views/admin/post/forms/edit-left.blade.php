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
                    <x-input name="title" :value="$post->title" :required="true" 
                    placeholder="{{ __('Title') }}"/>
                </div>
            </div>
            <!-- Fullname -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Slug') }}:</label>
                    <x-input name="slug" :value="$post->slug" :required="true"
                        placeholder="{{ __('Slug') }}" />
                </div>
            </div>
            <!-- new password -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Excerpt') }}:</label>
                    <x-input name="excerpt" :required="true" :value="$post->excerpt"
                    placeholder="{{ __('Excerpt') }}"/>
                </div>
            </div>
            <!-- new password confirmation-->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Content') }}:</label>
                    <x-textarea name="content" :required="true" 

                    > {{ $post->content  }}</x-textarea>
                </div>
            <div class="mb-3">
                <label class="control-label">{{ __('Feature') }}:</label>
                    <x-select name="roles" :required="true">
                                <x-option value="" :title="__('Feature')" />
                                @foreach ($feature as $key => $value)
                                    <x-option :value="$key" :title="__($value)" :selected="$key == $post->is_featured" />
                                @endforeach
                    </x-select>
                </div>

            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Posted at') }}:</label>
                    <x-input name="posted_at" :value="$post->posted_at" :required="true" />
                </div>
            </div>
            <!-- Role -->
            <div class="col-md-6 col-sm-12">
            <div class="mb-3">
                <label class="control-label">{{ __('Status') }}:</label>
                    <x-select name="roles" :required="true">
                                <x-option value="" :title="__('Chọn status')" />
                                @foreach ($status as $key => $value)
                                    <x-option :value="$key" :title="__($value)" :selected="$key == $post->status" />
                                @endforeach
                    </x-select>
                </div>

            </div>
        </div>
    </div>
</div>