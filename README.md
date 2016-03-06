# WPsB Post Thumbnails

It is a wrapper of the procedure for use of the Post Thumbnail

## Usage

``` PHP
$WPsB_Post_Thumbnails = new WPsB_Post_Thumbnails( array(
  "options"        => array(
	'post'
  ),
  "add_image_size" => array(
	array(
	  "name"   => "your_image_size",
	  "width"  => 900,
	  "height" => 500,
	  "crop"   => true
	)
  )
) );
$WPsB_Post_Thumbnails->register();
```
`["options"]`, See [Function Reference/add theme support « WordPress Codex](http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails)
`["add_image_size"]`, See [add_image_size() | Function | WordPress Developer Resources](https://developer.wordpress.org/reference/functions/add_image_size/)

## Feature

* Unit Test

## License

GPLv2 or later
