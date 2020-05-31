# Http Status Codes

A simple class to return correct status codes for http responses.

## Installation

Using composer:

```bash
$ composer require juststeveking/http-status-code
```

You are then free to use it as needed within your projects.


## Usage

```php
<?php

use JustSteveKing\StatusCode\Http;

Http::CONTINUE; // returns 100
Http::SWITCHING_PROTOCOLS; // returns 101
Http::PROCESSING; // returns 102
Http::EARLY_HINTS; // returns 103

Http::OK; // returns 200
Http::CREATED; // returns 201
Http::ACCEPTED; // returns 202
Http::NON_AUTHORITATIVE_INFORMATION; // returns 203
Http::NO_CONTENT; // returns 204
Http::RESET_CONTENT; // returns 205
Http::PARTIAL_CONTENT; // returns 206
Http::MULTI_STATUS; // returns 207
Http::ALREADY_REPORTED; // returns 208
Http::IM_USED; // returns 226

Http::MULTIPLE_CHOICES; // returns 300
Http::MOVED_PERMANENTLY; // returns 301
Http::FOUND; // return 302
Http::SEE_OTHER; // return 303
Http::NOT_MODIFIED; // return 304
Http::USE_PROXY; // returns 305
Http::RESERVED; // return 306
Http::TEMPORARY_REDIRECT; // returns 307
Http::TEMPORARY_REDIRECT; // returns 307
Http::PERMANENTLY_REDIRECT; // returns 308

Http::BAD_REQUEST; // returns 400
Http::UNAUTHORIZED; // returns 401
Http::PAYMENT_REQUIRED; // return 402
Http::FORBIDDEN; // returns 403
Http::NOT_FOUND; // returns 404
Http::METHOD_NOT_ALLOWED; // returns 405
Http::NOT_ACCEPTABLE; // returns 406
Http::PROXY_AUTHENTICATION_REQUIRED; // returns 407
Http::REQUEST_TIMEOUT; // returns 408
Http::CONFLICT; // returns 409
Http::GONE; // returns 410
Http::LENGTH_REQUIRED; // returns 411
Http::PRECONDITION_FAILED; // returns 412
Http::REQUEST_ENTITY_TOO_LARGE; // returns 413
Http::REQUEST_URI_TOO_LONG; // returns 414
Http::UNSUPPORTED_MEDIA_TYPE; // returns 415
Http::REQUESTED_RANGE_NOT_SATISFIABLE; // returns 416
Http::EXPECTATION_FAILED; // returns 417
Http::I_AM_A_TEAPOT; // returns 418
Http::MISDIRECTED_REQUEST; // returns 421
Http::UNPROCESSABLE_ENTITY; // returns 422
Http::LOCKED; // returns 423
Http::FAILED_DEPENDENCY; // returns 424
Http::TOO_EARLY; // returns 425
Http::UPGRADE_REQUIRED; // returns 426
Http::PRECONDITION_REQUIRED; // returns 428
Http::TOO_MANY_REQUESTS; // returns 429
Http::REQUEST_HEADER_FIELDS_TOO_LARGE; // returns 431
Http::UNAVAILABLE_FOR_LEGAL_REASONS; // returns 451

Http::INTERNAL_SERVER_ERROR; // returns 500
Http::NOT_IMPLEMENTED; // returns 501
Http::BAD_GATEWAY; // returns 502
Http::SERVICE_UNAVAILABLE; // returns 503
Http::GATEWAY_TIMEOUT; // returns 504
Http::VERSION_NOT_SUPPORTED; // returns 505
Http::VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL; // returns 506
Http::INSUFFICIENT_STORAGE; // returns 507
Http::LOOP_DETECTED; // returns 508
Http::NOT_EXTENDED; // returns 510
Http::NETWORK_AUTHENTICATION_REQUIRED; // returns 511
```