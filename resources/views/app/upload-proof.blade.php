@extends('theme.user')

@section('content')
    <div class="wrap">
        <div class="header-2 header-fix">
            <div class="tf-container">
                <div class="header-content">
                    <a href="{{ url('app/profile') }}" class="tf-btn-arrow">
                        <i class="icon-arrow-narrow-left"></i>
                    </a>
                    <h4 class="title fw-5">
                        Proof of Residency
                    </h4>
                </div>
            </div>
        </div>
        <div class="tf-container">
            <div class="wg-proof-of-residency">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger mb-12"
                            style="background: #f8d7da; color: #721c24; padding: 12px; border-radius: 8px; display: flex; align-items: center; gap: 8px;">
                            <i class="icon-warning" style="flex-shrink: 0;"></i>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('app.upload_proof.post') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="proof_document" id="proof_document" accept=".jpg,.jpeg,.png,.pdf"
                        style="display: none;">

                    <div class="content">
                        <ul>
                            <li>
                                <div class="mb-16 proof-item text-start">
                                    <input type="radio" id="passport" class="tf-check-rounded" name="proof_type"
                                        value="passport">
                                    <label for="passport">
                                        <img loading="lazy" alt="img" width="40" height="40"
                                            src="{{ asset('assets/images/icons/icon-globe-outline.jpg') }}">
                                        <img loading="lazy" alt="img" width="40" height="40"
                                            src="{{ asset('assets/images/icons/icon-globe-outline-hover.jpg') }}"
                                            class="img-hover">
                                        <span class="text">Passport(front and back)</span>
                                    </label>
                                    <span class="file-name" id="passport-file"
                                        style="font-size: 12px; font-style: italic; display: block; min-height: 18px; margin-top: 4px;"></span>
                                </div>
                            </li>
                            <li>
                                <div class="mb-16 proof-item text-start">
                                    <input type="radio" id="id-card" class="tf-check-rounded" name="proof_type"
                                        value="id-card">
                                    <label for="id-card">
                                        <img loading="lazy" alt="img" width="40" height="40"
                                            src="{{ asset('assets/images/icons/icon-user.jpg') }}">
                                        <img loading="lazy" alt="img" width="40" height="40"
                                            src="{{ asset('assets/images/icons/icon-user-hover.jpg') }}" class="img-hover">
                                        <span class="text">ID Card(front and back)</span>
                                    </label>
                                    <span class="file-name" id="id-card-file"
                                        style="font-size: 12px; font-style: italic; display: block; min-height: 18px; margin-top: 4px;"></span>
                                </div>
                            </li>
                            <li>
                                <div class="mb-16 proof-item text-start">
                                    <input type="radio" id="driver-license" class="tf-check-rounded" name="proof_type"
                                        value="driver-license">
                                    <label for="driver-license">
                                        <img loading="lazy" alt="img" width="40" height="40"
                                            src="{{ asset('assets/images/icons/icon-user.jpg') }}">
                                        <img loading="lazy" alt="img" width="40" height="40"
                                            src="{{ asset('assets/images/icons/icon-user-hover.jpg') }}" class="img-hover">
                                        <span class="text">Driver License(front and back)</span>
                                    </label>
                                    <span class="file-name" id="driver-license-file"
                                        style="font-size: 12px; font-style: italic; display: block; min-height: 18px; margin-top: 4px;"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom-content fixed-bottom-btn">
                        <div class="tf-container">
                            <button type="submit" class="tf-btn primary mb-16">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let selectedType = null;
        const fileInput = document.getElementById('proof_document');

        document.querySelectorAll('.proof-item label').forEach(function(label) {
            label.addEventListener('click', function(e) {
                e.preventDefault();

                const item = this.closest('.proof-item');
                const radio = item.querySelector('input[type="radio"]');
                selectedType = radio.value;
                radio.checked = true;

                document.querySelectorAll('.proof-item').forEach(el => el.classList.remove('active'));
                item.classList.add('active');

                setTimeout(function() {
                    fileInput.click();
                }, 0);
            });
        });

        fileInput.addEventListener('change', function() {
            if (this.files.length > 0 && selectedType) {
                document.querySelectorAll('.file-name').forEach(el => el.textContent = '');
                document.getElementById(selectedType + '-file').textContent = this.files[0].name;
            }
        });
    </script>
@endsection
