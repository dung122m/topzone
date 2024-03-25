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
                    <x-input-email name="title" :value="old('title')" :required="true" 
                    placeholder="{{ __('Title') }}"/>
                </div>
            </div>
            <!-- Fullname -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Slug') }}:</label>
                    <x-input name="slug" :value="old('slug')" :required="true"
                        placeholder="{{ __('Slug') }}" />
                </div>
            </div>
            <!-- new password -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Excerpt') }}:</label>
                    <x-input name="excerpt" :required="true" 
                    placeholder="{{ __('Excerpt') }}"/>
                </div>
            </div>
            <!-- new password confirmation-->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Xác nhận mật khẩu') }}:</label>
                    <x-input-password name="password_confirmation" :required="true"
                        data-parsley-equalto="input[name='password']"
                        data-parsley-equalto-message="{{ __('Mật khẩu không khớp.') }}" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Số điện thoại') }}:</label>
                    <x-input-phone name="phone" :value="old('phone')" :required="true" />
                </div>
            </div>
            <!-- Role -->
            <div class="col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Roles') }}:</label>
                    <x-select name="roles" :required="true">
                        <x-option value="" :title="__('Chọn roles')" />
                        @foreach ($roles as $key => $value)
                            <x-option :value="$key" :title="__($value)" />
                        @endforeach
                    </x-select>
                </div>
            </div>
        </div>
    </div>
</div>