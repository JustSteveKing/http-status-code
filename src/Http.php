<?php

declare(strict_types=1);

namespace JustSteveKing\StatusCode;

class Http
{
    /**
     * @var int
     */
    public const CONTINUE = 100;

    /**
     * @var int
     */
    public const SWITCHING_PROTOCOLS = 101;

    /**
     * @var int
     */
    public const PROCESSING = 102;

    /**
     * @var int
     */
    public const EARLY_HINTS = 103;

    /**
     * @var int
     */
    public const OK = 200;

    /**
     * @var int
     */
    public const CREATED = 201;

    /**
     * @var int
     */
    public const ACCEPTED = 202;

    /**
     * @var int
     */
    public const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * @var int
     */
    public const NO_CONTENT = 204;

    /**
     * @var int
     */
    public const RESET_CONTENT = 205;

    /**
     * @var int
     */
    public const PARTIAL_CONTENT = 206;

    /**
     * @var int
     */
    public const MULTI_STATUS = 207;

    /**
     * @var int
     */
    public const ALREADY_REPORTED = 208;

    /**
     * @var int
     */
    public const IM_USED = 226;

    /**
     * @var int
     */
    public const MULTIPLE_CHOICES = 300;

    /**
     * @var int
     */
    public const MOVED_PERMANENTLY = 301;

    /**
     * @var int
     */
    public const FOUND = 302;

    /**
     * @var int
     */
    public const SEE_OTHER = 303;

    /**
     * @var int
     */
    public const NOT_MODIFIED = 304;

    /**
     * @var int
     */
    public const USE_PROXY = 305;

    /**
     * @var int
     */
    public const RESERVED = 306;

    /**
     * @var int
     */
    public const TEMPORARY_REDIRECT = 307;

    /**
     * @var int
     */
    public const PERMANENTLY_REDIRECT = 308;

    /**
     * @var int
     */
    public const BAD_REQUEST = 400;

    /**
     * @var int
     */
    public const UNAUTHORIZED = 401;

    /**
     * @var int
     */
    public const PAYMENT_REQUIRED = 402;

    /**
     * @var int
     */
    public const FORBIDDEN = 403;

    /**
     * @var int
     */
    public const NOT_FOUND = 404;

    /**
     * @var int
     */
    public const METHOD_NOT_ALLOWED = 405;

    /**
     * @var int
     */
    public const NOT_ACCEPTABLE = 406;

    /**
     * @var int
     */
    public const PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * @var int
     */
    public const REQUEST_TIMEOUT = 408;

    /**
     * @var int
     */
    public const CONFLICT = 409;

    /**
     * @var int
     */
    public const GONE = 410;

    /**
     * @var int
     */
    public const LENGTH_REQUIRED = 411;

    /**
     * @var int
     */
    public const PRECONDITION_FAILED = 412;

    /**
     * @var int
     */
    public const REQUEST_ENTITY_TOO_LARGE = 413;

    /**
     * @var int
     */
    public const REQUEST_URI_TOO_LONG = 414;

    /**
     * @var int
     */
    public const UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * @var int
     */
    public const REQUESTED_RANGE_NOT_SATISFIABLE = 416;

    /**
     * @var int
     */
    public const EXPECTATION_FAILED = 417;

    /**
     * @var int
     */
    public const I_AM_A_TEAPOT = 418;

    /**
     * @var int
     */
    public const MISDIRECTED_REQUEST = 421;

    /**
     * @var int
     */
    public const UNPROCESSABLE_ENTITY = 422;

    /**
     * @var int
     */
    public const LOCKED = 423;

    /**
     * @var int
     */
    public const FAILED_DEPENDENCY = 424;

    /**
     * @var int
     */
    public const TOO_EARLY = 425;

    /**
     * @var int
     */
    public const UPGRADE_REQUIRED = 426;

    /**
     * @var int
     */
    public const PRECONDITION_REQUIRED = 428;

    /**
     * @var int
     */
    public const TOO_MANY_REQUESTS = 429;

    /**
     * @var int
     */
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * @var int
     */
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * @var int
     */
    public const INTERNAL_SERVER_ERROR = 500;

    /**
     * @var int
     */
    public const NOT_IMPLEMENTED = 501;

    /**
     * @var int
     */
    public const BAD_GATEWAY = 502;

    /**
     * @var int
     */
    public const SERVICE_UNAVAILABLE = 503;

    /**
     * @var int
     */
    public const GATEWAY_TIMEOUT = 504;

    /**
     * @var int
     */
    public const VERSION_NOT_SUPPORTED = 505;

    /**
     * @var int
     */
    public const VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;

    /**
     * @var int
     */
    public const INSUFFICIENT_STORAGE = 507;

    /**
     * @var int
     */
    public const LOOP_DETECTED = 508;

    /**
     * @var int
     */
    public const NOT_EXTENDED = 510;

    /**
     * @var int
     */
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;
}
