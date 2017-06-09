## WebRotate 360
All of the things to do with WebRotate 360 will be put in here for future reference 

## Throw this in to theme.liquid for Shopify to activavte the WebRotate360 plugin
```HTML
  
  {{ 'basic.css' | asset_url | stylesheet_tag }}
  
   {{ 'imagerotator.js' | asset_url | script_tag }}

  
 
  
  <script src='https://apps.storeimaging.com/shopify/store/wr360hook-eed46d6d-611a-4b46-ae5e-6b354aa95412-header.js'></script>
