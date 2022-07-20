<?php

declare(strict_types=1);

namespace JustSteveKing\StatusCode;

use JustSteveKing\StatusCode\Exceptions\UndefinedCaseError;

/**
 * @method CONTINUE(): int
 * @method SWITCHING_PROTOCOLS(): int
 * @method PROCESSING(): int
 * @method EARLY_HINTS(): int
 * @method OK(): int
 * @method CREATED(): int
 * @method ACCEPTED(): int
 * @method NON_AUTHORITATIVE_INFORMATION(): int
 * @method NO_CONTENT(): int
 * @method RESET_CONTENT(): int
 * @method PARTIAL_CONTENT(): int
 * @method MULTI_STATUS(): int
 * @method ALREADY_REPORTED(): int
 * @method THIS_IS_FINE(): int
 * @method IM_USED(): int
 * @method MULTIPLE_CHOICES(): int
 * @method MOVED_PERMANENTLY(): int
 * @method FOUND(): int
 * @method SEE_OTHER(): int
 * @method NOT_MODIFIED(): int
 * @method USE_PROXY(): int
 * @method TEMPORARY_REDIRECT(): int
 * @method PERMANENT_REDIRECT(): int
 * @method BAD_REQUEST(): int
 * @method UNAUTHORIZED(): int
 * @method PAYMENT_REQUIRED(): int
 * @method FORBIDDEN(): int
 * @method NOT_FOUND(): int
 * @method METHOD_NOT_ALLOWED(): int
 * @method NOT_ACCEPTABLE(): int
 * @method PROXY_AUTHENTICATION_REQUIRED(): int
 * @method REQUEST_TIMEOUT(): int
 * @method CONFLICT(): int
 * @method GONE(): int
 * @method LENGTH_REQUIRED(): int
 * @method PRECONDITION_FAILED(): int
 * @method PAYLOAD_TOO_LARGE(): int
 * @method URI_TOO_LONG(): int
 * @method UNSUPPORTED_MEDIA_TYPE(): int
 * @method RANGE_NOT_SATISFIABLE(): int
 * @method EXPECTATION_FAILED(): int
 * @method I_AM_A_TEAPOT(): int
 * @method PAGE_EXPIRED(): int
 * @method MISDIRECTED_REQUEST(): int
 * @method UNPROCESSABLE_ENTITY(): int
 * @method LOCKED(): int
 * @method FAILED_DEPENDENCY(): int
 * @method TOO_EARLY(): int
 * @method UPGRADE_REQUIRED(): int
 * @method PRECONDITION_REQUIRED(): int
 * @method TOO_MANY_REQUESTS(): int
 * @method REQUEST_HEADER_FIELDS_TOO_LARGE(): int
 * @method LOGIN_TIME_OUT(): int
 * @method NO_RESPONSE(): int
 * @method RETRY_WITH(): int
 * @method BLOCKED_BY_WINDOWS_PARENTAL_CONTROL(): int
 * @method UNAVAILABLE_FOR_LEGAL_REASONS(): int
 * @method CLIENT_CLOSED_THE_CONNECTION(): int
 * @method X_FORWARDED_FOR_TOO_LARGE(): int
 * @method REQUEST_HEADER_TOO_LARGE(): int
 * @method SSL_CERTIFICATE_ERROR(): int
 * @method SSL_CERTIFICATE_REQUIRED(): int
 * @method HTTP_REQUEST_SENT_TO_HTTPS_PORT(): int
 * @method INVALID_TOKEN(): int
 * @method TOKEN_REQUIRED(): int
 * @method INTERNAL_SERVER_ERROR(): int
 * @method NOT_IMPLEMENTED(): int
 * @method BAD_GATEWAY(): int
 * @method SERVICE_UNAVAILABLE(): int
 * @method GATEWAY_TIMEOUT(): int
 * @method HTTP_VERSION_NOT_SUPPORTED(): int
 * @method VARIANT_ALSO_NEGOTIATES(): int
 * @method INSUFFICIENT_STORAGE(): int
 * @method LOOP_DETECTED(): int
 * @method BANDWIDTH_LIMIT_EXCEEDED(): int
 * @method NOT_EXTENDED(): int
 * @method NETWORK_AUTHENTICATION_REQUIRED(): int
 * @method WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR(): int
 * @method WEB_SERVER_IS_DOWN(): int
 * @method CONNECTION_TIMED_OUT(): int
 * @method ORIGIN_IS_UNREACHABLE(): int
 * @method A_TIMEOUT_OCCURRED(): int
 * @method SSL_HANDSHAKE_FAILED(): int
 * @method INVALID_SSL_CERTIFICATE(): int
 * @method RAILGUN_ERROR(): int
 * @method SITE_IS_OVERLOADED(): int
 * @method SITE_IS_FROZEN(): int
 * @method NETWORK_READ_TIMEOUT_ERROR(): int
 */
enum Http: int
{
    /**
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#1xx_informational_response
     */
    case CONTINUE = 100;
    case SWITCHING_PROTOCOLS = 101;
    case PROCESSING = 102;
    case EARLY_HINTS = 103;

    /**
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_success
     */
    case OK = 200;
    case CREATED = 201;
    case ACCEPTED = 202;
    case NON_AUTHORITATIVE_INFORMATION = 203;
    case NO_CONTENT = 204;
    case RESET_CONTENT = 205;
    case PARTIAL_CONTENT = 206;
    case MULTI_STATUS = 207;
    case ALREADY_REPORTED = 208;
    case THIS_IS_FINE = 218;
    case IM_USED = 226;

    /**
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#3xx_redirection
     */
    case MULTIPLE_CHOICES = 300;
    case MOVED_PERMANENTLY = 301;
    case FOUND = 302;
    case SEE_OTHER = 303;
    case NOT_MODIFIED = 304;
    case USE_PROXY = 305;
    case TEMPORARY_REDIRECT = 307;
    case PERMANENT_REDIRECT = 308;

    /**
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#4xx_client_errors
     */
    case BAD_REQUEST = 400;
    case UNAUTHORIZED = 401;
    case PAYMENT_REQUIRED = 402;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case METHOD_NOT_ALLOWED = 405;
    case NOT_ACCEPTABLE = 406;
    case PROXY_AUTHENTICATION_REQUIRED = 407;
    case REQUEST_TIMEOUT = 408;
    case CONFLICT = 409;
    case GONE = 410;
    case LENGTH_REQUIRED = 411;
    case PRECONDITION_FAILED = 412;
    case PAYLOAD_TOO_LARGE = 413;
    case URI_TOO_LONG = 414;
    case UNSUPPORTED_MEDIA_TYPE = 415;
    case RANGE_NOT_SATISFIABLE = 416;
    case EXPECTATION_FAILED = 417;
    case I_AM_A_TEAPOT = 418;
    case PAGE_EXPIRED = 419;
    case MISDIRECTED_REQUEST = 421;
    case UNPROCESSABLE_ENTITY = 422;
    case LOCKED = 423;
    case FAILED_DEPENDENCY = 424;
    case TOO_EARLY = 425;
    case UPGRADE_REQUIRED = 426;
    case PRECONDITION_REQUIRED = 428;
    case TOO_MANY_REQUESTS = 429;
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    case LOGIN_TIME_OUT = 440;
    case NO_RESPONSE = 444;
    case RETRY_WITH = 449;
    case BLOCKED_BY_WINDOWS_PARENTAL_CONTROL = 450;
    case UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    case CLIENT_CLOSED_THE_CONNECTION = 460;
    case X_FORWARDED_FOR_TOO_LARGE = 463;
    case REQUEST_HEADER_TOO_LARGE = 494;
    case SSL_CERTIFICATE_ERROR = 495;
    case SSL_CERTIFICATE_REQUIRED = 496;
    case HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;
    case INVALID_TOKEN = 498;
    case TOKEN_REQUIRED = 499;

    /**
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#5xx_server_errors
     */
    case INTERNAL_SERVER_ERROR = 500;
    case NOT_IMPLEMENTED = 501;
    case BAD_GATEWAY = 502;
    case SERVICE_UNAVAILABLE = 503;
    case GATEWAY_TIMEOUT = 504;
    case HTTP_VERSION_NOT_SUPPORTED = 505;
    case VARIANT_ALSO_NEGOTIATES = 506;
    case INSUFFICIENT_STORAGE = 507;
    case LOOP_DETECTED = 508;
    case BANDWIDTH_LIMIT_EXCEEDED = 509;
    case NOT_EXTENDED = 510;
    case NETWORK_AUTHENTICATION_REQUIRED = 511;
    case WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR = 520;
    case WEB_SERVER_IS_DOWN = 521;
    case CONNECTION_TIMED_OUT = 522;
    case ORIGIN_IS_UNREACHABLE = 523;
    case A_TIMEOUT_OCCURRED = 524;
    case SSL_HANDSHAKE_FAILED = 525;
    case INVALID_SSL_CERTIFICATE = 526;
    case RAILGUN_ERROR = 527;
    case SITE_IS_OVERLOADED = 529;
    case SITE_IS_FROZEN = 530;
    case NETWORK_READ_TIMEOUT_ERROR = 598;

    /**
     * @return int|string
     */
    public function __invoke(): int|string
    {
        return $this->value;
    }

    /**
     * @param  string  $name
     * @param  mixed  $args
     * @return int|string
     *
     * @throws UndefinedCaseError
     */
    public static function __callStatic(string $name, mixed $args): int|string
    {
        $cases = Http::cases();

        foreach ($cases as $case) {
            if ($case->name === $name) {
                return $case->value;
            }
        }

        throw new UndefinedCaseError(
            enum: Http::class,
            case: $name,
        );
    }

    /**
     * @return array
     */
    public static function options(): array
    {
        return array_column(Http::cases(), 'value', 'name');
    }

    /**
     * @return array
     */
    public static function names(): array
    {
        return array_column(Http::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(Http::cases(), 'value');
    }
}
