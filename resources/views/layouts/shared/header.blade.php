<!-- Navigation -->
<div class="layout-navigation">
    @section("header-inner")

    @show

    @includeWhen(
        config('moonshine.auth.enable', true),
        'moonshine::layouts.shared.notifications'
    )
</div>
<!-- END: Navigation -->