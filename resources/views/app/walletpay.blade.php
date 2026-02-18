@extends('theme.user')

@section('content')
    <div class="wrap">
        <div class="wg-send-request">
            <div class="top-page-send-request send mb-20">
                <div class="header-2 header-fix style-bg-1">
                    <div class="tf-container">
                        <div class="header-content">
                            <a href="{{ url('app/deposit') }}" class="tf-btn-arrow">
                                <i class="icon-arrow-narrow-left"></i>
                            </a>
                            <h5 class="title fw-5">
                                Receive
                            </h5>
                            <a href="{{ url('app/index') }}" class="btn-right">
                                <i class="icon-home"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-page-send-request">
                <div class="tf-container" style="margin-top: 5rem;">
                    <div class="alert alert-success mb-16">
                        <p class="mb-0">
                            Deposit exactly <span class="fw-bold">{{ Session::get('deposit_amount') }}
                                {{ strtoupper(Session::get('name')) }}</span> to
                            your wallet address shown below before it can be displayed on your wallet balance.
                        </p>
                    </div>

                    <div class="optional-box mb-16">
                        <p class="title mb-8">Wallet Address</p>
                        <div class="textarea-optional">
                            <input type="text" id="wallet" value="{{ Session::get('wallet') }}" class="style-border"
                                readonly>
                        </div>
                    </div>
                </div>
                <div class="fixed-bottom-btn">
                    <div class="tf-container">
                        <button type="button" id="copy_" class="tf-btn primary">Copy address</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="copyToast" class="toast align-items-center border-0" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-body alert alert-success d-flex align-items-center mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check-circle-fill me-2 flex-shrink-0" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                <div class="fs-6">Wallet address copied!</div>
            </div>
        </div>
    </div>

    <div class="modal fade modalDown pop-up-more-services" id="confirm-modal" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="wg-more-services">
                    <div class="tf-container">
                        <div class="divider mb-24"></div>
                        <div class="d-flex justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                                fill="none" stroke="#60b05e" stroke-width="1.75" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-circle-check-icon lucide-circle-check">
                                <circle cx="12" cy="12" r="10" />
                                <path d="m9 12 2 2 4-4" />
                            </svg>
                        </div>
                        <p class="mb-12"> Deposit initiated successfully</p>
                        <a href="{{ url('app/index') }}" class="tf-btn primary">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var copyBtn = document.getElementById('copy_');
            var modalEl = document.getElementById('confirm-modal');
            var modal = new bootstrap.Modal(modalEl);

            copyBtn.addEventListener('click', function() {
                modal.show();
            });
        });
    </script>

    <script>
        window.Clipboard = (function(window, document, navigator) {
            var textArea, copy;

            function isOS() {
                return navigator.userAgent.match(/ipad|iphone/i);
            }

            function createTextArea(text) {
                textArea = document.createElement('textArea');
                textArea.value = text;
                document.body.appendChild(textArea);
            }

            function selectText() {
                var range, selection;
                if (isOS()) {
                    range = document.createRange();
                    range.selectNodeContents(textArea);
                    selection = window.getSelection();
                    selection.removeAllRanges();
                    selection.addRange(range);
                    textArea.setSelectionRange(0, 999999);
                } else {
                    textArea.select();
                }
            }

            function copyToClipboard() {
                document.execCommand('copy');
                document.body.removeChild(textArea);
            }

            copy = function(text) {
                createTextArea(text);
                selectText();
                copyToClipboard();
            };

            return {
                copy: copy
            };
        })(window, document, navigator);

        document.getElementById("copy_").onclick = function() {
            Clipboard.copy(document.getElementById("wallet").value);

            var toastEl = document.getElementById('copyToast');
            var toast = new bootstrap.Toast(toastEl, {
                delay: 3000
            });
            toast.show();
        }
    </script>
@endsection
