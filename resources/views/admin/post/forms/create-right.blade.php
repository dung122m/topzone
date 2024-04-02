<div class="col-12 col-md-3">
    <div class="card mb-3">
        <div class="card-header">
            {{ __('Đăng') }}
        </div>
        <div class="card-body p-2">
            <x-button.submit :title="__('Thêm')" />
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <label class="control-label">{{ __('Is Featured ?') }}</label>
            <x-select name="is_featured" :required="true">
                <x-option value="" :title="__('Chọn')" />
                @foreach ($feature as $key => $value)
                    <x-option :value="$key" :title="__($value)" />
                @endforeach
            </x-select>
        </div>
    </div>
    <!-- Role -->
    <div class="mb-3">
        <div class="mb-3">
            <label class="control-label">{{ __('Status') }}:</label>
            <x-select name="status" :required="true">
                <x-option value="" :title="__('Chọn status')" />
                @foreach ($status as $key => $value)
                    <x-option :value="$key" :title="__($value)" />
                @endforeach
            </x-select>
        </div>
    </div>
</div>

{{-- <div class="card mb-3">
    <div class="card-header">
        @lang('category')
    </div>
    <div class="card-body p-2 wrap-list-checkbox">
        @foreach ($categories as $category)
            <x-input-checkbox :depth="$category->depth" name="categories_id[]" :label="$category->name" :value="$category->id" />
        @endforeach
    </div>
</div> --}}
