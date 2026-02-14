@extends('theme.user')

@section('content')
    <div class="wrap">
        <div class="wg-edit-setting">
            <div class="header-2 mb-12 header-fix">
                <div class="tf-container">
                    <div class="header-content">
                        <a href="{{ url('app/index') }}" class="tf-btn-arrow">
                            <i class="icon-arrow-narrow-left"></i>
                        </a>
                        <h6 class="title fw-5">
                            Settings
                        </h6>
                        <a href="{{ url('app/index') }}" class="btn-right">
                            <i class="icon-home"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tf-container">
                <div class="wg-profile-settings">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger mb-12"
                                style="background: #f8d7da; color: #721c24; padding: 12px; border-radius: 8px; display: flex; align-items: center; gap: 8px;">
                                <i class="icon-warning" style="flex-shrink: 0;"></i>
                                <span>{{ $error }}</span>
                            </div>
                        @endforeach
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success mb-12"
                            style="background: #d4edda; color: #155724; padding: 12px; border-radius: 8px; display: flex; align-items: center; gap: 8px;">
                            <i class="icon-check" style="flex-shrink: 0;"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('app.settings.post') }}" class="form-edit-profile">
                        @csrf
                        <fieldset class="mb-12">
                            <label class="text-medium">Active Wallets</label>
                            <div style="margin-top: 8px;">
                                @foreach ($assets as $asset)
                                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                                        <input type="radio" id="reg-enable_{{ $asset->id }}"
                                            name="asset_{{ $asset->id }}"
                                            @if (in_array($asset->id, $user_assets)) checked @endif>
                                        <label for="reg-enable_{{ $asset->id }}" class="text-medium"
                                            style="margin: 0;">{{ $asset->symbol }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </fieldset>

                        <fieldset class="mb-12">
                            <label class="text-medium" for="currentPassword">Enter password to authorize changes</label>
                            <input type="password" class="text-medium" placeholder="" id="currentPassword" name="password">
                        </fieldset>

                        <div class="fixed-bottom-btn">
                            <div class="tf-container">
                                <button type="submit" class="tf-btn primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
