## SPF Slideshow
Add   
```
{{ 'jquery.flexslider-min.js' | asset_url | script_tag }}      to theme.liquid
```
Add to theme index in required position :
```
<!-- Begin slider -->
<div class="span12">
  <div class="flexslider-container">
    <div class="flexslider">
      <ul class="slides">
        {% for i in (1..10) %}
          {% capture show_slide %}display_slide_{{ i }}{% endcapture %}
          {% capture image %}slideshow_{{ i }}.jpg{% endcapture %}
          {% capture link %}slide_{{ i }}_link{% endcapture %}
          {% capture alt %}slide_{{ i }}_alt{% endcapture %}
          {% if settings[show_slide] %}
          <li>
            <a href="{{ settings[link] }}">
              <img src="{{ image | asset_url }}" alt="{{ settings[alt] | escape }}" />
            </a>
          </li>
          {% endif %}
        {% endfor %}
      </ul>
      <div class="flex-controls"></div>
    </div>
  </div>
</div>
<!-- End slider -->
  
```

Add settings to settings_schema.json
```

 {
    "name": "Home page",
    "settings": [
      {
        "type": "header",
        "content": "Slideshow"
      },
      {
        "type": "checkbox",
        "id": "display_slideshow",
        "label": "Enable slideshow",
        "info": "If disabled, only the first image in the slideshow will appear"
      },
      {
        "type": "select",
        "id": "slideshow_speed",
        "label": "Slideshow rotation",
        "options": [
          {
            "value": "8000",
            "label": "8 seconds"
          },
          {
            "value": "7000",
            "label": "7 seconds"
          },
          {
            "value": "6000",
            "label": "6 seconds"
          },
          {
            "value": "5000",
            "label": "5 seconds"
          },
          {
            "value": "4000",
            "label": "4 seconds"
          },
          {
            "value": "3000",
            "label": "3 seconds"
          },
          {
            "value": "2000",
            "label": "2 seconds"
          }
        ],
        "default": "4000"
      },
      {
        "type": "select",
        "id": "slideshow_transition",
        "label": "Transition effect",
        "options": [
          {
            "value": "slide",
            "label": "Slide"
          },
          {
            "value": "fade",
            "label": "Fade"
          }
        ],
        "default": "fade"
      },
      {
        "type": "radio",
        "id": "slideshow_arrows",
        "label": "Arrow",
        "options": [
          {
            "value": "none",
            "label": "None"
          },
          {
            "value": "light",
            "label": "Light"
          },
          {
            "value": "dark",
            "label": "Dark"
          }
        ]
      },
      {
        "type": "select",
        "id": "slider_nav_opacity",
        "label": "Arrow opacity:",
        "options": [
          {
            "value": "9",
            "label": "90%"
          },
          {
            "value": "8",
            "label": "80%"
          },
          {
            "value": "7",
            "label": "70%"
          },
          {
            "value": "6",
            "label": "60%"
          },
          {
            "value": "5",
            "label": "50%"
          },
          {
            "value": "4",
            "label": "40%"
          },
          {
            "value": "3",
            "label": "30%"
          },
          {
            "value": "2",
            "label": "20%"
          },
          {
            "value": "1",
            "label": "10%"
          }
        ],
        "default": "9"
      },
      {
        "type": "paragraph",
        "content": "Slide 1"
      },
      {
        "type": "checkbox",
        "id": "display_slide_1",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_1.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1920 x 650px recommended"
      },
      {
        "type": "text",
        "id": "slide_1_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_1_alt",
        "label": "Alt text"
      },
      {
        "type": "paragraph",
        "content": "Slide 2"
      },
      {
        "type": "checkbox",
        "id": "display_slide_2",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_2.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1278 x 460px recommended"
      },
      {
        "type": "text",
        "id": "slide_2_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_2_alt",
        "label": "Alt text"
      },
      {
        "type": "paragraph",
        "content": "Slide 3"
      },
      {
        "type": "checkbox",
        "id": "display_slide_3",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_3.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1278 x 460px recommended"
      },
      {
        "type": "text",
        "id": "slide_3_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_3_alt",
        "label": "Alt text"
      },
      {
        "type": "paragraph",
        "content": "Slide 4"
      },
      {
        "type": "checkbox",
        "id": "display_slide_4",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_4.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1278 x 460px recommended"
      },
      {
        "type": "text",
        "id": "slide_4_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_4_alt",
        "label": "Alt text"
      },
      {
        "type": "paragraph",
        "content": "Slide 5"
      },
      {
        "type": "checkbox",
        "id": "display_slide_5",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_5.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1278 x 460px recommended"
      },
      {
        "type": "text",
        "id": "slide_5_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_5_alt",
        "label": "Alt text"
      },
      {
        "type": "paragraph",
        "content": "Slide 6"
      },
      {
        "type": "checkbox",
        "id": "display_slide_6",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_6.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1278 x 460px recommended"
      },
      {
        "type": "text",
        "id": "slide_6_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_6_alt",
        "label": "Alt text"
      },
      {
        "type": "paragraph",
        "content": "Slide 7"
      },
      {
        "type": "checkbox",
        "id": "display_slide_7",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_7.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1278 x 460px recommended"
      },
      {
        "type": "text",
        "id": "slide_7_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_7_alt",
        "label": "Alt text"
      },
      {
        "type": "paragraph",
        "content": "Slide 8"
      },
      {
        "type": "checkbox",
        "id": "display_slide_8",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_8.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1278 x 460px recommended"
      },
      {
        "type": "text",
        "id": "slide_8_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_8_alt",
        "label": "Alt text"
      },
      {
        "type": "paragraph",
        "content": "Slide 9"
      },
      {
        "type": "checkbox",
        "id": "display_slide_9",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_9.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1278 x 460px recommended"
      },
      {
        "type": "text",
        "id": "slide_9_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_9_alt",
        "label": "Alt text"
      },
      {
        "type": "paragraph",
        "content": "Slide 10"
      },
      {
        "type": "checkbox",
        "id": "display_slide_10",
        "label": "Show"
      },
      {
        "type": "image",
        "id": "slideshow_10.jpg",
        "label": "Image",
        "max-width": 1920,
        "info": "1278 x 460px recommended"
      },
      {
        "type": "text",
        "id": "slide_10_link",
        "label": "Image URL"
      },
      {
        "type": "text",
        "id": "slide_10_alt",
        "label": "Alt text"
      }
    ]
  },
  {
  
 ```
  
