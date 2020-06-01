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
    public const THIS_IS_FINE = 218;

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
    public const TEMPORARY_REDIRECT = 307;

    /**
     * @var int
     */
    public const PERMANENT_REDIRECT = 308;

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
    public const PAYLOAD_TOO_LARGE = 413;

    /**
     * @var int
     */
    public const URI_TOO_LONG = 414;

    /**
     * @var int
     */
    public const UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * @var int
     */
    public const RANGE_NOT_SATISFIABLE = 416;

    /**
     * @var int
     */
    public const EXPECTATION_FAILED = 417;

    /**
     * @var int
     */
    public const I_AM_A_TEAPOT = 418;

    /**
     * @int
     */
    public const PAGE_EXPIRED = 419;

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
    public const LOGIN_TIME_OUT = 440;

    /**
     * @var int
     */
    public const NO_RESPONSE = 444;

    /**
     * @var int
     */
    public const RETRY_WITH = 449;

    /**
     * @var int
     */
    public const BLOCKED_BY_WINDOWS_PARENTAL_CONTROL = 450;

    /**
     * @var int
     */
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * @var int
     */
    public const CLIENT_CLOSED_THE_CONNECTION = 460;

    /**
     * @var int
     */
    public const X_FORWARDED_FOR_TOO_LARGE = 463;

    /**
     * @var int
     */
    public const REQUEST_HEADER_TOO_LARGE = 494;

    /**
     * @var int
     */
    public const SSL_CERTIFICATE_ERROR = 495;

    /**
     * @var int
     */
    public const SSL_CERTIFICATE_REQUIRED = 496;

    /**
     * @var int
     */
    public const HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;

    /**
     * @var int
     */
    public const INVALID_TOKEN = 498;

    /**
     * @var int
     */
    public const TOKEN_REQUIRED = 499;

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
    public const HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * @var int
     */
    public const VARIANT_ALSO_NEGOTIATES = 506;

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
    public const BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * @var int
     */
    public const NOT_EXTENDED = 510;

    /**
     * @var int
     */
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * @var int
     */
    public const WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR = 520;

    /**
     * @var int
     */
    public const WEB_SERVER_IS_DOWN = 521;

    /**
     * @var int
     */
    public const CONNECTION_TIMED_OUT = 522;

    /**
     * @var int
     */
    public const ORIGIN_IS_UNREACHABLE = 523;

    /**
     * @var int
     */
    public const A_TIMEOUT_OCCURRED = 524;

    /**
     * @var int
     */
    public const SSL_HANDSHAKE_FAILED = 525;

    /**
     * @var int
     */
    public const INVALID_SSL_CERTIFICATE = 526;

    /**
     * @var int
     */
    public const RAILGUN_ERROR = 527;

    /**
     * @var int
     */
    public const SITE_IS_OVERLOADED = 529;

    /**
     * @var int
     */
    public const SITE_IS_FROZEN = 530;

    /**
     * @var
     */
    public const NETWORK_READ_TIMEOUT_ERROR = 598;
}
