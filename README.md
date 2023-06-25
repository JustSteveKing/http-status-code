# Http Status Codes

![run-tests](https://github.com/JustSteveKing/http-status-code/workflows/run-tests/badge.svg)

A simple Enum to return correct status codes for http responses.

All codes (where applicable) have been taken from [Wikipedia](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes)

## Installation

Using composer:

```bash
composer require juststeveking/http-status-code
```

You are then free to use it as needed within your projects.


## Usage

```php
<?php

use JustSteveKing\StatusCode\Http;

Http::CONTINUE(); // returns 100
Http::SWITCHING_PROTOCOLS(); // returns 101
Http::PROCESSING(); // returns 102
Http::EARLY_HINTS(); // returns 103

Http::OK(); // returns 200
Http::CREATED(); // returns 201
Http::ACCEPTED(); // returns 202
Http::NON_AUTHORITATIVE_INFORMATION(); // returns 203
Http::NO_CONTENT(); // returns 204
Http::RESET_CONTENT(); // returns 205
Http::PARTIAL_CONTENT(); // returns 206
Http::MULTI_STATUS(); // returns 207
Http::ALREADY_REPORTED(); // returns 208
Http::THIS_IS_FINE(); // returns 218
Http::IM_USED(); // returns 226

Http::MULTIPLE_CHOICES(); // returns 300
Http::MOVED_PERMANENTLY(); // returns 301
Http::FOUND(); // return 302
Http::SEE_OTHER(); // return 303
Http::NOT_MODIFIED(); // return 304
Http::USE_PROXY(); // returns 305
Http::TEMPORARY_REDIRECT(); // returns 307
Http::PERMANENT_REDIRECT(); // returns 308

Http::BAD_REQUEST(); // returns 400
Http::UNAUTHORIZED(); // returns 401
Http::PAYMENT_REQUIRED(); // return 402
Http::FORBIDDEN(); // returns 403
Http::NOT_FOUND(); // returns 404
Http::METHOD_NOT_ALLOWED(); // returns 405
Http::NOT_ACCEPTABLE(); // returns 406
Http::PROXY_AUTHENTICATION_REQUIRED(); // returns 407
Http::REQUEST_TIMEOUT(); // returns 408
Http::CONFLICT(); // returns 409
Http::GONE(); // returns 410
Http::LENGTH_REQUIRED(); // returns 411
Http::PRECONDITION_FAILED(); // returns 412
Http::PAYLOAD_TOO_LARGE(); // returns 413
Http::URI_TOO_LONG(); // returns 414
Http::UNSUPPORTED_MEDIA_TYPE(); // returns 415
Http::RANGE_NOT_SATISFIABLE(); // returns 416
Http::EXPECTATION_FAILED(); // returns 417
Http::I_AM_A_TEAPOT(); // returns 418
Http::PAGE_EXPIRED(); // returns 419
Http::MISDIRECTED_REQUEST(); // returns 421
Http::UNPROCESSABLE_ENTITY(); // returns 422
Http::LOCKED(); // returns 423
Http::FAILED_DEPENDENCY(); // returns 424
Http::TOO_EARLY(); // returns 425
Http::UPGRADE_REQUIRED(); // returns 426
Http::PRECONDITION_REQUIRED(); // returns 428
Http::TOO_MANY_REQUESTS(); // returns 429
Http::REQUEST_HEADER_FIELDS_TOO_LARGE(); // returns 431
Http::LOGIN_TIME_OUT(); // returns 440
Http::NO_RESPONSE(); // returns 444
Http::RETRY_WITH(); // returns 449
Http::BLOCKED_BY_WINDOWS_PARENTAL_CONTROL(); // returns 450
Http::UNAVAILABLE_FOR_LEGAL_REASONS(); // returns 451
Http::CLIENT_CLOSED_THE_CONNECTION(); // returns 460
Http::X_FORWARDED_FOR_TOO_LARGE(); // returns 463
Http::REQUEST_HEADER_TOO_LARGE(); // returns 494;
Http::SSL_CERTIFICATE_ERROR(); // returns 495
Http::SSL_CERTIFICATE_REQUIRED(); // returns 496
Http::HTTP_REQUEST_SENT_TO_HTTPS_PORT(); // returns 497
Http::INVALID_TOKEN(); // returns 498
Http::TOKEN_REQUIRED(); // returns 499

Http::INTERNAL_SERVER_ERROR(); // returns 500
Http::NOT_IMPLEMENTED(); // returns 501
Http::BAD_GATEWAY(); // returns 502
Http::SERVICE_UNAVAILABLE(); // returns 503
Http::GATEWAY_TIMEOUT(); // returns 504
Http::HTTP_VERSION_NOT_SUPPORTED(); // returns 505
Http::VARIANT_ALSO_NEGOTIATES(); // returns 506
Http::INSUFFICIENT_STORAGE(); // returns 507
Http::LOOP_DETECTED(); // returns 508
Http::BANDWIDTH_LIMIT_EXCEEDED(); // returns 509
Http::NOT_EXTENDED(); // returns 510
Http::NETWORK_AUTHENTICATION_REQUIRED(); // returns 511
Http::WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR(); // returns 520
Http::WEB_SERVER_IS_DOWN(); // returns 521
Http::CONNECTION_TIMED_OUT(); // returns 522
Http::ORIGIN_IS_UNREACHABLE(); // returns 523
Http::A_TIMEOUT_OCCURRED(); // returns 524
Http::SSL_HANDSHAKE_FAILED(); // returns 525
Http::INVALID_SSL_CERTIFICATE(); // returns 526
Http::RAILGUN_ERROR(); // returns 527
Http::SITE_IS_OVERLOADED(); // returns 529
Http::SITE_IS_FROZEN(); // returns 530
Http::NETWORK_READ_TIMEOUT_ERROR(); // returns 598
```
