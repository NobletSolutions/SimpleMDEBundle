# SimpleMDEBundle
This bundle provides the simplemde markdown editor

Installation
============

Add the bundle to your `composer.json` file:

```javascript
require: {
    // ...
    "ns/simplemde-bundle": "dev-master" // or use a tag from packagist.org
    // ...
}
```

Register the bundle with your kernel:

```php
<?php
// in AppKernel::registerBundles()
$bundles = array(
    // ...
    new NS\SimpleMDEBundle\NSSimpleMDEBundle(),
    // ...
);
```

Add the JS and CSS links to relevant pages

```twig
{% block stylesheets %}
    {{ parent() }}
    <link rel="stylesheet" type="text/css" id="'+ssId+'" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css" crossorigin="anonymous" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type="text/javascript" id="'+jsId+'" src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js" crossorigin="anonymous"></script>
{% endblock %}
```

Then you can use it as a form type with MarkdownEditorType::class type hint.
