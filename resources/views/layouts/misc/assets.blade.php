<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/now-ui-kit.css') }}" rel="stylesheet">
    <style type="text/css">
    #login-menu .dropdown-toggle::after {
    display:none
    }
    </style>


      <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/core/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/core/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/now-ui-kit.js') }}"></script>