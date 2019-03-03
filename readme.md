<p align="center"><img src="https://s3.eu-west-3.amazonaws.com/tomjamon/medias/TailwindLaravel.png"></p>

<p align="center">
<a href="https://packagist.org/packages/TiDJ/TailwindLaravel"><img src="https://poser.pugx.org/tomjamon/TailwindLaravel/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/TiDJ/TailwindLaravel"><img src="https://poser.pugx.org/tomjamon/TailwindLaravel/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/TiDJ/TailwindLaravel"><img src="https://poser.pugx.org/tomjamon/TailwindLaravel/license.svg" alt="License"></a>
</p>

## Tailwind for Laravel Collective 

You want to use both [HTML and Form Builders](https://github.com/LaravelCollective/html "Github Project LaravelCollective/html") from [Laravelcollective](https://laravelcollective.com/ "Laravel Collective's Homepage")
 and [Tailwind](http://tailwindcss.com/ "Tailwind's Homepage") ?
 
Here is a package allowing you to easily use both. 

TailwindLaravel offer 14 components publishable, with some default Tailwind classes.

A new component "**control()**" allow you to have an input and his label, within a parent flex block sized at your convenance, in one call.
 
The easiest way to install this library is to simply replace LC/HTML by this tool.

## Installation

Install with composer :
```shell
composer require tomjamon/tailwindlaravel
```

Edit your ``config/app.php`` and add thoses lines :

##### providers
```php
TomJamon\TailwindLaravel\TailwindLaravelServiceProvider::class,
```

##### aliases
```php
'Form' => TomJamon\TailwindLaravel\FormFacade::class,
'Html' => TomJamon\TailwindLaravel\HtmlFacade::class,
```    
        
## Custom components

Publish vendor views : ``php artisan vendor:publish``

Choose : ``Provider: TomJamon\TailwindLaravel\TailwindLaravelServiceProvider``

A new folder ``resources/views/vendor/tailwindlaravel`` will be created with every components.

You can now change every components classes and stuff.

## Components list

- button
- checkbox
- close
- control
- datalist
- form
- input
- label
- link
- optgroup
- option
- select
- submit
- textarea

## Examples

##### Simple text input 

```php
{!! Form::control('text', 'name', $errors, [
    'label' => 'Nom Prenom',
    'placeholder' => 'John Doe',
    'md' => '1/2'
]) !!}
```
___
![Input Medium](https://s3.eu-west-3.amazonaws.com/tomjamon/medias/tl-inputmd.png)
___
##### Select

```php
{!! Form::control('select', 'type', $errors, [
    'label' => 'Type',
    'message' => 'Choose wisely the type of object',
    'data' => [
        'one' => 'First choice', 
        'two' => 'Second choice', 
        'three' => 'Third choice'
    ]
]) !!}
```

##### Textarea with an overrided rows number (Second array arguments)

```php
{!! Form::control('textarea', 'content', $errors, [
    'label' => 'Content',
    'placeholder' => 'Post content',
], [
    'rows' => '25'
]) !!}
```

## Why use : Clarity and simplicity

Here is how a form can look like

##### Login form

```php
{!! Form::open(['route' => 'login']) !!}
    {!! Form::control('text', 'email', $errors, [...],  [...]) !!}
    {!! Form::control('password', 'password', $errors, [...]) !!}
    {!! Form::control('checkbox', 'remember', $errors, [...], [...]) !!}
    {!! Form::submit('Sign in') !!}
{!! Form::close() !!}
```
___
![Login Form](https://s3.eu-west-3.amazonaws.com/tomjamon/medias/tl-loginform.png)
___
