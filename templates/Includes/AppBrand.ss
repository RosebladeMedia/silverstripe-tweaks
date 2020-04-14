<% if $SiteConfig.Logo %>
    <img src="{$SiteConfig.Logo.ScaleMaxHeight(150).URL}" alt="{$SiteConfig.Title}" class="img-fluid app-brand__logo">
<% else %>
    {$SiteConfig.Title}
<% end_if %>