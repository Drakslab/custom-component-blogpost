# Blog Post Slider for WordPress

## Description
This function provides a custom blog post slider for WordPress using the Swiper.js library. The slider dynamically fetches WordPress blog posts and displays them in a visually appealing carousel format.

## Features
- Fetches up to 1000 posts (can be modified as needed)
- Uses Swiper.js for a smooth sliding experience
- Displays a short excerpt and featured image for each post
- Includes "More Information" and "Contact" buttons for user interaction
- Fully responsive design

## Installation
1. Add the function to your WordPress theme's `functions.php` file.
2. Ensure that you have posts with featured images to be displayed properly.
3. Add the shortcode `[blog_post_slider]` to any post or page where you want the slider to appear.
4. Add the CSS styles to your theme’s `style.css` file for proper styling.

## Usage
Simply add the following shortcode to any post or page:

```
[blog_post_slider]
```

This will generate a Swiper-based slider with all available blog posts.

## Styles
To ensure proper styling, add the following CSS to your theme's `style.css` file:

```css
.swiper-container {
    width: 100%;
    overflow: hidden;
}

.swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background: #f8f8f8;
    padding: 20px;
    border-radius: 8px;
}

.property-slide {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.property-info p {
    font-size: 16px;
    color: #333;
}

.property-buttons {
    margin-top: 10px;
}

.property-buttons .btn {
    display: inline-block;
    padding: 10px 15px;
    margin: 5px;
    text-decoration: none;
    border-radius: 5px;
}

.btn.black {
    background: #333;
    color: white;
}

.btn.outline {
    border: 2px solid #333;
    color: #333;
    background: transparent;
}

.property-image {
    margin-top: 15px;
}

.image-frame img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}
```

## Dependencies
- WordPress
- Swiper.js (included via CDN)

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Credits
Developed by Drak.

