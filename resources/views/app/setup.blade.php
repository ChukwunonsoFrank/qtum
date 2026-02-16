@extends('theme.user')

@section('content')
    <div class="wrap">
        <div class="wg-send-request">
            <div class="bottom-page-send-request">
                <div class="tf-container" style="margin-top: 2rem;">
                    <p class="text-center" style="color: #000000; font-size: 15px; line-height: 1.5; margin-bottom: 40px;">
                        Your recovery phrase will allow you to access your wallet if you ever get locked out
                    </p>

                    <div class="mb-12">
                        <label class="d-flex align-items-start p-12"
                            style="background: rgb(0 0 0 / 22%); border-radius: 12px; cursor: pointer; padding: 16px; border: 1px solid rgba(255,255,255,0.1);">
                            <input type="checkbox" class="backup-check flex-shrink-0"
                                style="margin-top: 4px; margin-right: 12px; width: 18px; height: 18px; accent-color: #6c5ce7;">
                            <span style="color: #000000; font-size: 14px; line-height: 1.4;">If I lose my recovery phrase, I
                                will not be able to access my funds</span>
                        </label>
                    </div>
                    <div class="mb-12">
                        <label class="d-flex align-items-start p-12"
                            style="background: rgb(0 0 0 / 22%); border-radius: 12px; cursor: pointer; padding: 16px; border: 1px solid rgba(255,255,255,0.1);">
                            <input type="checkbox" class="backup-check flex-shrink-0"
                                style="margin-top: 4px; margin-right: 12px; width: 18px; height: 18px; accent-color: #6c5ce7;">
                            <span style="color: #000000; font-size: 14px; line-height: 1.4;">If I expose or share my
                                recovery phrase with anyone, my funds are at risk</span>
                        </label>
                    </div>
                    <div class="mb-12">
                        <label class="d-flex align-items-start p-12"
                            style="background: rgb(0 0 0 / 22%); border-radius: 12px; cursor: pointer; padding: 16px; border: 1px solid rgba(255,255,255,0.1);">
                            <input type="checkbox" class="backup-check flex-shrink-0"
                                style="margin-top: 4px; margin-right: 12px; width: 18px; height: 18px; accent-color: #6c5ce7;">
                            <span style="color: #000000; font-size: 14px; line-height: 1.4;">It is my responsibility to
                                write down my recovery phrase and keep it secure</span>
                        </label>
                    </div>

                    <div id="walletPhraseWrap" class="optional-box mb-16" style="margin-top: 4rem; display: none;">
                        <fieldset class="mb-12 icon-absolute">
                            <textarea id="wallet" name="wallet" rows="4" cols="10" wrap="soft" class="form-control"
                                maxlength="400" style="overflow:hidden; resize:none; border-radius: 18px;background:rgb(59 59 59 / 22%);" required
                                readonly>{{ $rando }}</textarea>
                        </fieldset>
                    </div>
                </div>
                <div class="fixed-bottom-btn">
                    <div class="tf-container">
                        <button type="button" id="copy_" class="tf-btn primary" disabled
                            style="opacity: 0.5;">Copy</button>
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
                <div class="fs-6">Copied successfully!</div>
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

        document.querySelectorAll('.backup-check').forEach(function(cb) {
            cb.addEventListener('change', function() {
                var allChecked = document.querySelectorAll('.backup-check:checked').length === 3;
                var btn = document.getElementById('copy_');
                btn.disabled = !allChecked;
                btn.style.opacity = allChecked ? '1' : '0.5';
                document.getElementById('walletPhraseWrap').style.display = allChecked ? '' : 'none';
            });
        });

        document.getElementById("copy_").onclick = function() {
            var text = document.getElementById("wallet").value;

            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(text).then(function() {
                    var toastEl = document.getElementById('copyToast');
                    var toast = new bootstrap.Toast(toastEl, { delay: 3000 });
                    toast.show();

                    setTimeout(function() {
                        window.location.href = '{{ route("user_index") }}';
                    }, 2000);
                });
            } else {
                Clipboard.copy(text);

                var toastEl = document.getElementById('copyToast');
                var toast = new bootstrap.Toast(toastEl, { delay: 3000 });
                toast.show();

                setTimeout(function() {
                    window.location.href = '{{ route("user_index") }}';
                }, 2000);
            }
        }
    </script>
@endsection
