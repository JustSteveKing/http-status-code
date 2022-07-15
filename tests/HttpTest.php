<?php

declare(strict_types=1);

namespace JustSteveKing\Tests\StatusCode;

use JustSteveKing\StatusCode\Http;
use PHPUnit\Framework\TestCase;

class HttpTest extends TestCase
{
    public function testCorrectStatusCodesAreReturned()
    {
        $this->assertEquals(
            100,
            Http::CONTINUE()
        );

        $this->assertEquals(
            101,
            Http::SWITCHING_PROTOCOLS()
        );

        $this->assertEquals(
            102,
            Http::PROCESSING()
        );

        $this->assertEquals(
            103,
            Http::EARLY_HINTS()
        );

        $this->assertEquals(
            200,
            Http::OK()
        );

        $this->assertEquals(
            201,
            Http::CREATED()
        );

        $this->assertEquals(
            202,
            Http::ACCEPTED()
        );

        $this->assertEquals(
            203,
            Http::NON_AUTHORITATIVE_INFORMATION()
        );

        $this->assertEquals(
            204,
            Http::NO_CONTENT()
        );

        $this->assertEquals(
            205,
            Http::RESET_CONTENT()
        );

        $this->assertEquals(
            206,
            Http::PARTIAL_CONTENT()
        );

        $this->assertEquals(
            207,
            Http::MULTI_STATUS()
        );

        $this->assertEquals(
            208,
            Http::ALREADY_REPORTED()
        );

        $this->assertEquals(
            226,
            Http::IM_USED()
        );

        $this->assertEquals(
            300,
            Http::MULTIPLE_CHOICES()
        );

        $this->assertEquals(
            301,
            Http::MOVED_PERMANENTLY()
        );

        $this->assertEquals(
            302,
            Http::FOUND()
        );

        $this->assertEquals(
            303,
            Http::SEE_OTHER()
        );

        $this->assertEquals(
            304,
            Http::NOT_MODIFIED()
        );

        $this->assertEquals(
            305,
            Http::USE_PROXY()
        );

        $this->assertEquals(
            307,
            Http::TEMPORARY_REDIRECT()
        );

        $this->assertEquals(
            308,
            Http::PERMANENT_REDIRECT()
        );

        $this->assertEquals(
            400,
            Http::BAD_REQUEST()
        );

        $this->assertEquals(
            401,
            Http::UNAUTHORIZED()
        );

        $this->assertEquals(
            402,
            Http::PAYMENT_REQUIRED()
        );

        $this->assertEquals(
            403,
            Http::FORBIDDEN()
        );

        $this->assertEquals(
            404,
            Http::NOT_FOUND()
        );

        $this->assertEquals(
            405,
            Http::METHOD_NOT_ALLOWED()
        );

        $this->assertEquals(
            406,
            Http::NOT_ACCEPTABLE()
        );

        $this->assertEquals(
            407,
            Http::PROXY_AUTHENTICATION_REQUIRED()
        );

        $this->assertEquals(
            408,
            Http::REQUEST_TIMEOUT()
        );

        $this->assertEquals(
            409,
            Http::CONFLICT()
        );

        $this->assertEquals(
            410,
            Http::GONE()
        );

        $this->assertEquals(
            411,
            Http::LENGTH_REQUIRED()
        );

        $this->assertEquals(
            412,
            Http::PRECONDITION_FAILED()
        );

        $this->assertEquals(
            413,
            Http::PAYLOAD_TOO_LARGE()
        );

        $this->assertEquals(
            414,
            Http::URI_TOO_LONG()
        );

        $this->assertEquals(
            415,
            Http::UNSUPPORTED_MEDIA_TYPE()
        );

        $this->assertEquals(
            416,
            Http::RANGE_NOT_SATISFIABLE()
        );

        $this->assertEquals(
            417,
            Http::EXPECTATION_FAILED()
        );

        $this->assertEquals(
            418,
            Http::I_AM_A_TEAPOT()
        );

        $this->assertEquals(
            419,
            Http::PAGE_EXPIRED()
        );

        $this->assertEquals(
            421,
            Http::MISDIRECTED_REQUEST()
        );

        $this->assertEquals(
            422,
            Http::UNPROCESSABLE_ENTITY()
        );

        $this->assertEquals(
            423,
            Http::LOCKED()
        );

        $this->assertEquals(
            424,
            Http::FAILED_DEPENDENCY()
        );

        $this->assertEquals(
            425,
            Http::TOO_EARLY()
        );

        $this->assertEquals(
            426,
            Http::UPGRADE_REQUIRED()
        );

        $this->assertEquals(
            428,
            Http::PRECONDITION_REQUIRED()
        );

        $this->assertEquals(
            429,
            Http::TOO_MANY_REQUESTS()
        );

        $this->assertEquals(
            431,
            Http::REQUEST_HEADER_FIELDS_TOO_LARGE()
        );

        $this->assertEquals(
            440,
            Http::LOGIN_TIME_OUT()
        );

        $this->assertEquals(
            444,
            Http::NO_RESPONSE()
        );

        $this->assertEquals(
            449,
            Http::RETRY_WITH()
        );

        $this->assertEquals(
            450,
            Http::BLOCKED_BY_WINDOWS_PARENTAL_CONTROL()
        );

        $this->assertEquals(
            451,
            Http::UNAVAILABLE_FOR_LEGAL_REASONS()
        );

        $this->assertEquals(
            460,
            Http::CLIENT_CLOSED_THE_CONNECTION()
        );

        $this->assertEquals(
            463,
            Http::X_FORWARDED_FOR_TOO_LARGE()
        );

        $this->assertEquals(
            494,
            Http::REQUEST_HEADER_TOO_LARGE()
        );

        $this->assertEquals(
            495,
            Http::SSL_CERTIFICATE_ERROR()
        );

        $this->assertEquals(
            496,
            Http::SSL_CERTIFICATE_REQUIRED()
        );

        $this->assertEquals(
            497,
            Http::HTTP_REQUEST_SENT_TO_HTTPS_PORT()
        );

        $this->assertEquals(
            498,
            Http::INVALID_TOKEN()
        );

        $this->assertEquals(
            499,
            Http::TOKEN_REQUIRED()
        );

        $this->assertEquals(
            500,
            Http::INTERNAL_SERVER_ERROR()
        );

        $this->assertEquals(
            501,
            Http::NOT_IMPLEMENTED()
        );

        $this->assertEquals(
            502,
            Http::BAD_GATEWAY()
        );

        $this->assertEquals(
            503,
            Http::SERVICE_UNAVAILABLE()
        );

        $this->assertEquals(
            504,
            Http::GATEWAY_TIMEOUT()
        );

        $this->assertEquals(
            505,
            Http::HTTP_VERSION_NOT_SUPPORTED()
        );

        $this->assertEquals(
            506,
            Http::VARIANT_ALSO_NEGOTIATES()
        );

        $this->assertEquals(
            507,
            Http::INSUFFICIENT_STORAGE()
        );

        $this->assertEquals(
            508,
            Http::LOOP_DETECTED()
        );

        $this->assertEquals(
            509,
            Http::BANDWIDTH_LIMIT_EXCEEDED()
        );

        $this->assertEquals(
            510,
            Http::NOT_EXTENDED()
        );

        $this->assertEquals(
            511,
            Http::NETWORK_AUTHENTICATION_REQUIRED()
        );

        $this->assertEquals(
            520,
            Http::WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR()
        );

        $this->assertEquals(
            521,
            Http::WEB_SERVER_IS_DOWN()
        );

        $this->assertEquals(
            522,
            Http::CONNECTION_TIMED_OUT()
        );

        $this->assertEquals(
            523,
            Http::ORIGIN_IS_UNREACHABLE()
        );

        $this->assertEquals(
            524,
            Http::A_TIMEOUT_OCCURRED()
        );

        $this->assertEquals(
            525,
            Http::SSL_HANDSHAKE_FAILED()
        );

        $this->assertEquals(
            526,
            Http::INVALID_SSL_CERTIFICATE()
        );

        $this->assertEquals(
            527,
            Http::RAILGUN_ERROR()
        );

        $this->assertEquals(
            529,
            Http::SITE_IS_OVERLOADED()
        );

        $this->assertEquals(
            530,
            Http::SITE_IS_FROZEN()
        );

        $this->assertEquals(
            598,
            Http::NETWORK_READ_TIMEOUT_ERROR()
        );
    }
}
