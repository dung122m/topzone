<div class="col-12 col-md-3">
    <div class="card">
        <div class="card-header">
            {{ __('Đăng') }}
        </div>
        <div class="card-body p-2 d-flex justify-content-between">
            <x-button.submit :title="__('Cập nhật')" />
            <x-button.modal-delete data-route="{{ route('admin.post.delete', $post->id) }}" :title="__('Xóa')" />
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            @lang('avatar')
        </div>

        <div class="card-body p-2">
            <x-input.image-ckfinder :value="$post->image" name="image" showImage="image" />
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <div class="mb-3">
            <label class="control-label">{{ __('Status') }}:</label>
            <x-select name="status" :required="true">
                <x-option value="" :title="__('Chọn status')" />
                @foreach ($status as $key => $value)
                    <x-option :option="$post->status->value" :value="$key" :title="__($value)" />
                @endforeach
            </x-select>
        </div>
        <div class="mb-3">
            <label class="control-label">{{ __('Feature') }}:</label>
            <x-select name="is_featured" :required="true">
                <x-option value="" :title="__('Feature')" />
                @foreach ($feature as $key => $value)
                    <x-option :option="$post->is_featured->value" :value="$key" :title="__($value)" />
                @endforeach
            </x-select>
        </div>

    </div>
</div>
