<?php

    $spBaseUrl = 'http://mysterious-lowlands-65446.herokuapp.com'; //or http://<your_domain>

    $settingsInfo = array (
        'sp' => array (
            'entityId' => $spBaseUrl.'/demo1/metadata.php',
            'assertionConsumerService' => array (
                'url' => $spBaseUrl.'/demo1/index.php?acs',
            ),
            'singleLogoutService' => array (
                'url' => $spBaseUrl.'/demo1/index.php?sls',
            ),
            'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
        ),
        'idp' => array (
            'entityId' => 'https://app.onelogin.com/saml/metadata/e2c3f3b9-32d6-4700-83a8-525bb336e659',
            'singleSignOnService' => array (
                'url' => 'https://eworldes.onelogin.com/trust/saml2/http-post/sso/e2c3f3b9-32d6-4700-83a8-525bb336e659',
            ),
            'singleLogoutService' => array (
                'url' => 'https://eworldes.onelogin.com/trust/saml2/http-redirect/slo/1654559',
            ),
            'x509cert' => '-----BEGIN CERTIFICATE-----
MIID3zCCAsegAwIBAgIUBiXgpPKueicaf2jRbFekTAuW1/EwDQYJKoZIhvcNAQEF
BQAwRjERMA8GA1UECgwIZXdvcmxkZXMxFTATBgNVBAsMDE9uZUxvZ2luIElkUDEa
MBgGA1UEAwwRT25lTG9naW4gQWNjb3VudCAwHhcNMjExMDA1MTgyMTUyWhcNMjYx
MDA1MTgyMTUyWjBGMREwDwYDVQQKDAhld29ybGRlczEVMBMGA1UECwwMT25lTG9n
aW4gSWRQMRowGAYDVQQDDBFPbmVMb2dpbiBBY2NvdW50IDCCASIwDQYJKoZIhvcN
AQEBBQADggEPADCCAQoCggEBAL1tlOQX/4O5K7q9XTRsC2jOoVwqJVNLT5wMseB6
s4AGT5r0bYp5VlMorJbOudblhZjBWywdLyjb1S7tAGLMU0DA1gNAtWlUmKtrwOck
WEUOEXniBUfxodpkW7WUh2bT/5khJox+KisdAynwQaKLl6yaDzs7KvrBWg6DIzAa
C23rvr0NowisYcglt6RExf7DPD7dq/FlEOKp8y6asXwc+s7p69+13ks9fylKZAEX
wLSMMnaXw93vQ5rP9uy4mkHoAI5+L+k56kCvI2XEkjFmj6Q/MhRnPL1k0lUkxyFm
suvHE6WRVtMpNn+M5qd6ohWd3G7JoBdJB4C/nt2K1cU4O78CAwEAAaOBxDCBwTAM
BgNVHRMBAf8EAjAAMB0GA1UdDgQWBBTX9NO/Hw/OfubaYpMZokIAlEbCMzCBgQYD
VR0jBHoweIAU1/TTvx8Pzn7m2mKTGaJCAJRGwjOhSqRIMEYxETAPBgNVBAoMCGV3
b3JsZGVzMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxvZ2lu
IEFjY291bnQgghQGJeCk8q56Jxp/aNFsV6RMC5bX8TAOBgNVHQ8BAf8EBAMCB4Aw
DQYJKoZIhvcNAQEFBQADggEBAKBzRjak+TeE9mV1xUWKxf1cVD3CMMMeFN7tj++u
Uw7wZ66+9VgE1Ii6GrhWDoPaMiL37Fefzl2LZZTrOuRxV29/gCgkAzAtdLgi66KW
1rRiVbUjrbXlhxiFQmnVXAFL7LKeknRu6YL6Z30/d9Z9vX5KLCzzY4cYO9xCA5Rz
nHq3rWGm3Elg1gd2I6iLHHDLgXo7i0SZd5fZbHNiJer9UswkkDOLeHk4yh94JdoV
ljBy5iaeab5nscLOZmnSADLYbDaCoBwrzXLOD+8OR8u1xsUd7zi2dKmWdLIzoQU2
TK7N1ZdT1jxjNmhs8SDPQkt5vZHWmCloWjCcrZBHE2MjSXM=
-----END CERTIFICATE-----',
        ),
    );