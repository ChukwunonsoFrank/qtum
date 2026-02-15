@extends('theme.user')

@section('content')
    <div class="wrap">
        <div class="wg-send-request">
            <div class="top-page-send-request send mb-20">
                <div class="header-2 header-fix style-bg-1">
                    <div class="tf-container">
                        <div class="header-content">
                            <a href="{{ url('app/index') }}" class="tf-btn-arrow">
                                <i class="icon-arrow-narrow-left"></i>
                            </a>
                            <h5 class="title fw-5">
                                Referral
                            </h5>
                            <a href="{{ url('app/index') }}" class="btn-right">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-page-send-request">
                <div class="tf-container" style="margin-top: 5rem;">
                    <div class="alert alert-success mb-16">
                        <p class="mb-0">
                            Invite new users with your referral link and earn rewards.
                        </p>
                    </div>

                    <div class="optional-box mb-16">
                        <p class="title mb-8">Referral Link</p>
                        <div class="textarea-optional">
                            <input type="text" id="wallet"
                                value="https://qtumweb3.net/register?i={{ $user->id * 56789 }}"
                                class="style-border" readonly>
                        </div>
                    </div>
                </div>
                <div class="fixed-bottom-btn">
                    <div class="tf-container">
                        <button type="button" id="copy_" class="tf-btn primary">Copy link</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="copyToast" class="toast align-items-center border-0" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-body alert alert-success d-flex align-items-start mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check-circle-fill me-2 flex-shrink-0" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                <div class="fs-6">Referral link copied!</div>
            </div>
        </div>
    </div>

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
            document.getElementById("wallet").select();
            document.execCommand('copy');

            var toastEl = document.getElementById('copyToast');
            var toast = new bootstrap.Toast(toastEl, {
                delay: 3000
            });
            toast.show();
        }
    </script>
@endsection
