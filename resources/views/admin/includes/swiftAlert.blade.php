@if (session('create_message'))
    <div id="kt_docs_toast_stack_container" class="toast-container position-absolute top-0 end-0 p-3 z-index-9999">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-kt-docs-toast="stack">
            <div class="toast-header">

                <strong class="me-auto"></strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="kt_docs_toast_message" style="font-size: 20px">
                {{ session('create_message') }}
            </div>
        </div>
    </div>
@endif

@if (session('update_message'))
    <div id="kt_docs_toast_stack_container" class="toast-container position-absolute top-0 end-0 p-3 z-index-9999">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-kt-docs-toast="stack">
            <div class="toast-header">

                <strong class="me-auto"></strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="kt_docs_toast_message" style="font-size: 20px">
                {{ session('update_message') }}
            </div>
        </div>
    </div>
@endif

@if (session('delete_message'))
    <div id="kt_docs_toast_stack_container" class="toast-container position-absolute top-0 end-0 p-3 z-index-9999">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-kt-docs-toast="stack">
            <div class="toast-header">

                <strong class="me-auto"></strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="kt_docs_toast_message" style="font-size: 20px">
                {{ session('delete_message') }}
            </div>
        </div>
    </div>
@endif
