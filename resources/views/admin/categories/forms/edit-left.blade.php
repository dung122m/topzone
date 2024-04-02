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
                    <x-input name="slug" :value="$post->slug" :required="true" placeholder="{{ __('Slug') }}" />
                </div>
            </div>
            <!-- new password -->



            <!-- Role -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Status') }}:</label>
                    <x-select name="status" :required="true">
                        <x-option value="" :title="__('Chọn status')" />
                        @foreach ($status as $key => $value)
                            <x-option :option="$post->status->value" :value="$key" :title="__($value)" />
                        @endforeach
                    </x-select>
                </div>


            </div>


        </div>
    </div>
</div>
