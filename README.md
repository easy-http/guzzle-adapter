<p align="center"><img src="https://blog.pleets.org/img/articles/easy-http-logo-320.png"></p>

<p align="center">
<a href="https://github.com/easy-http/guzzle-adapter/actions/workflows/tests.yml"><img src="https://github.com/easy-http/guzzle-adapter/actions/workflows/tests.yml/badge.svg?branch=2.x" alt="Build Status"></a>
<a href="https://scrutinizer-ci.com/g/easy-http/guzzle-adapter"><img src="https://img.shields.io/scrutinizer/g/easy-http/guzzle-adapter.svg" alt="Code Quality"></a>
<a href="https://scrutinizer-ci.com/g/easy-http/guzzle-adapter/?branch=master"><img src="https://scrutinizer-ci.com/g/easy-http/guzzle-adapter/badges/coverage.png?b=master" alt="Code Coverage"></a>
</p>
<p align="center">
    <a href="#tada-php-support" title="PHP Versions Supported"><img alt="PHP Versions Supported" src="https://img.shields.io/badge/php-7.4%20to%208.3-777bb3.svg?logo=php&logoColor=white&labelColor=555555"></a>
</p>

<p align="center">
    :bookmark: Standardized HTTP client interface
</p>

<p align="center">
    :rocket: Seamlessly switch between HTTP clients using the adapter pattern
</p>

# Guzzle HTTP Adapter

<a href="https://sonarcloud.io/component_measures?metric=security_rating&branch=2.x&id=easy-http_guzzle-adapter"><img src="https://sonarcloud.io/api/project_badges/measure?project=easy-http_guzzle-adapter&metric=security_rating&branch=2.x" alt="Bugs"></a>
<a href="https://sonarcloud.io/component_measures?metric=bugs&branch=2.x&id=easy-http_guzzle-adapter"><img src="https://sonarcloud.io/api/project_badges/measure?project=easy-http_guzzle-adapter&metric=bugs&branch=2.x" alt="Bugs"></a>
<a href="https://sonarcloud.io/component_measures?metric=code_smells&branch=2.x&id=easy-http_guzzle-adapter"><img src="https://sonarcloud.io/api/project_badges/measure?project=easy-http_guzzle-adapter&metric=code_smells&branch=2.x" alt="Bugs"></a>

This is an HTTP adapter for Guzzle Client that implements the [HTTP client contracts](https://github.com/easy-http/layer-contracts).
These contracts standardize the way you consume HTTP clients like Guzzle, Symfony, and others by providing a consistent interface. The adapter pattern ensures that regardless of which HTTP client you're using,
the methods and behavior remain consistent across all implementations.

:books: Check out the [Documentation](https://easy-http.com/docs) to learn how to use any adapter that implements these contracts.

This adapter supports the following versions of Guzzle HTTP Client:

<a href="#tada-php-support" title="Guzzle Version Supported"><img alt="PHP Versions Supported" src="https://img.shields.io/badge/guzzle-6.x-blue"></a>
<a href="#tada-php-support" title="Guzzle Version Supported"><img alt="PHP Versions Supported" src="https://img.shields.io/badge/guzzle-7.x-blue"></a>

# Installation

Use following command to install this library:

```bash
composer require easy-http/guzzle-adapter
```

# Usage

This adapter implements the [HTTP Client Contracts](https://github.com/easy-http/layer-contracts).
You can check all available features and behavior for the current version at [Easy Http Documentation](https://easy-http.com/docs).
