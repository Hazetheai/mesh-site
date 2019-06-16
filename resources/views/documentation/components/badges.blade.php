@extends('layout.docs')

@push('styles')
<!-- =====================
    Page CSS (Place in <style></style> tags)
    ===================== -->

@endpush

@push('scripts')
<!-- =====================
    Page JS (Place in <script></script> tags)
    ===================== -->
<script src="{{ asset('js/docs/badges.js') }}"></script>
@endpush

@section('docscontent')
<!-- =====================
    Docs Section - Main HTML
    ===================== -->

<!-- Usage -->
<article class="section-scroll" id="usage">
    <h2 class="b-b-light hash">Usage</h2>
    <p class="secondary-lead">
        The mesh badge should be prefixed with the <code class="inline">.badge</code> class which will give you access to all of the classes outlined below.
        <br>They are designed to be used with the <code class="inline">&lt;span&gt;</code> element.
        <br><strong>Note:</strong> You can have <strong>any combination</strong> of the classes listed below.
    </p>
    <div class="d-flex justify-content-center justify-content-desk-start flex-wrap mb-3">
        <span class="badge ml-0">Default</span>
        <span class="badge badge-light">Light</span>
        <span class="badge badge-dark">Dark</span>
        <span class="badge badge-black">Black</span>
    </div>
    <pre class="highlight"><code class="html">&lt;span class="badge"&gt;Default&lt;/span&gt;
&lt;span class="badge badge-light"&gt;Light&lt;/span&gt;
&lt;span class="badge badge-dark"&gt;Dark&lt;/span&gt;
&lt;span class="badge badge-black"&gt;Black&lt;/span&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Colored Badges -->
<article class="section-scroll py-2" id="colored">
    <h2 class="b-b-light hash">Colored</h2>
    <p class="secondary-lead">You can add color classes to brighten up the badges by prefixing it with <code class="inline">.badge-{color}</code> class which will give you access to all of the classes outlined below.</p>
    <div class="d-flex justify-content-center justify-content-desk-start flex-wrap mb-3">
        <span class="badge badge-primary ml-0">Primary</span>
        <span class="badge badge-success">Success</span>
        <span class="badge badge-info">Info</span>
        <span class="badge badge-warning">Warning</span>
        <span class="badge badge-danger">Danger</span>
        <span class="badge badge-link">Link</span>
    </div>
    <pre class="highlight"><code class="html">&lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-danger"&gt;Danger&lt;/span&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Rounded Badges -->
<article class="section-scroll py-2" id="rounded">
    <h2 class="b-b-light hash">Rounded</h2>
    <p class="secondary-lead">You can make badges rounded with the <code class="inline">.badge-rounded</code> class.</p>
    <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap mb-3">
        <span class="badge badge-rounded badge-primary ml-0">Primary</span>
        <span class="badge badge-rounded badge-success">Success</span>
        <span class="badge badge-rounded badge-info">Info</span>
        <span class="badge badge-rounded badge-warning">Warning</span>
        <span class="badge badge-rounded badge-danger">Danger</span>
        <span class="badge badge-rounded badge-link">Link</span>
    </div>
    <pre class="highlight"><code class="html">&lt;span class="badge badge-rounded badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-rounded badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-rounded badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-rounded badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-rounded badge-danger"&gt;Danger&lt;/span&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Notifications Badges -->
<article class="section-scroll py-2" id="notification">
    <h2 class="b-b-light hash">Notifications</h2>
    <p class="mb-3">Mesh badges can be added to buttons as notifications without additional markup.</p>
    <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap">
        <button class="btn btn-primary d-flex align-items-center">
            Notifications
            <span class="badge badge-light ml-1">10</span>
        </button>
    </div>
    <pre class="highlight"><code class="html">&lt;button class="btn btn-primary d-flex align-items-center"&gt;
Notifications
&lt;span class="badge badge-light"&gt;10&lt;/badge&gt;
&lt;/button&gt;</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
</article>

<!-- Close -->
<article class="section-scroll py-2" id="close">
    <h2 class="b-b-light hash">Close</h2>
    <p class="secondary-lead">
        To add a closeable button to the badge, simply add <code class="inline">badge-close</code> class to enable a hover effect. Then add an icon of your choice, we have stuck with font awesome and add the <code class="inline">badge-delete</code> class to the icon.
    </p>
    <div class="d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap mb-3">
        <span class="badge badge-close badge-primary">
            Primary
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-success">
            Success
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-info">
            Info
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-warning">
            Warning
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-danger">
            Danger
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-link">
            Link
            <i class="badge-delete fas fa-times"></i>
        </span>
    </div>
    <pre class="highlight"><code class="html">&lt;span class=&quot;badge badge-close badge-primary&quot;&gt;
    Primary
    &lt;i class=&quot;badge-delete fas fa-times&quot;&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-success&quot;&gt;
    Success
    &lt;i class=&quot;badge-delete fas fa-times&quot;&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-info&quot;&gt;
    Info
    &lt;i class=&quot;badge-delete fas fa-times&quot;&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-warning&quot;&gt;
    Warning
    &lt;i class=&quot;badge-delete fas fa-times&quot;&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-danger&quot;&gt;
    Danger
    &lt;i class=&quot;badge-delete fas fa-times&quot;&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;span class=&quot;badge badge-close badge-link&quot;&gt;
    Link
    &lt;i class=&quot;badge-delete fas fa-times&quot;&gt;&lt;/i&gt;
&lt;/span&gt;</code></code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
    <div class="text-cont">
        <h3>JS close</h3>
        <p>To add close functionality to the closeable badges, use the script below. Go ahead and close the tags!</p>
    </div>
    <div class="js-close d-flex justify-content-center justify-content-desk-start align-items-end flex-wrap mb-3">
        <span class="badge badge-close badge-primary ml-0">
            Primary
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-success">
            Success
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-info">
            Info
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-warning">
            Warning
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-danger">
            Danger
            <i class="badge-delete fas fa-times"></i>
        </span>
        <span class="badge badge-close badge-link">
            Link
            <i class="badge-delete fas fa-times"></i>
        </span>
    </div>
    <pre class="highlight"><code class="javascript">document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.badge-close .badge-delete') || []).forEach(close => {
        close.addEventListener('click', () => {
            close.parentNode.remove();
        });
    });
});</code></code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>

<!-- Variables -->
<article class="section-scroll" id="variables">
    <h2 class="b-b-light hash">Variables</h2>
    <p class="secondary-lead">
        Choose from different badge options and enable/disable classes you require. Customise the font style & padding of the badges too.
    </p>
    <div class="table-scroll">
        <table class="table">
                <thead>
                    <tr>
                        <th>Variable</th>
                        <th class="w-20">Value</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="vertical-align: middle;"><pre class="variables highlight"><code class="scss">$badge-enable-colored: true;</code></pre></td>
                        <td>Boolean</td>
                        <td>Enables/disables coloured badges.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$badge-enable-rounded: true;</code></pre></td>
                        <td>Boolean</td>
                        <td>Enables/disables rounded badges.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$badge-enable-deletable: true;</code></pre></td>
                        <td>Boolean</td>
                        <td>Enables/disables deleteable badges (x with hover).</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$badge-padding: 3px 12px;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Padding amount for badges in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$badge-font-size: 10px;</code></pre></td>
                        <td>Pixel/em/rem</td>
                        <td>Font size for badges in pixels, em's or rem's.</td>
                    </tr>
                    <tr>
                        <td><pre class="variables highlight"><code class="scss">$badge-font-weight: 400;</code></pre></td>
                        <td>CSS font weight</td>
                        <td>Font weight of badges with properties above.</td>
                    </tr>
                </tbody>
            </table>
        </div>
</article>

@endsection