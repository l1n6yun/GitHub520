<?php

ini_set('date.timezone', 'Asia/Shanghai');

$hosts = [
    "alive.github.com",
    "live.github.com",
    "github.githubassets.com",
    "central.github.com",
    "desktop.githubusercontent.com",
    "assets-cdn.github.com",
    "camo.githubusercontent.com",
    "github.map.fastly.net",
    "github.global.ssl.fastly.net",
    "gist.github.com",
    "github.io",
    "github.com",
    "github.blog",
    "api.github.com",
    "raw.githubusercontent.com",
    "user-images.githubusercontent.com",
    "favicons.githubusercontent.com",
    "avatars5.githubusercontent.com",
    "avatars4.githubusercontent.com",
    "avatars3.githubusercontent.com",
    "avatars2.githubusercontent.com",
    "avatars1.githubusercontent.com",
    "avatars0.githubusercontent.com",
    "avatars.githubusercontent.com",
    "codeload.github.com",
    "github-cloud.s3.amazonaws.com",
    "github-com.s3.amazonaws.com",
    "github-production-release-asset-2e65be.s3.amazonaws.com",
    "github-production-user-asset-6210df.s3.amazonaws.com",
    "github-production-repository-file-5c1aeb.s3.amazonaws.com",
    "githubstatus.com",
    "github.community",
    "github.dev",
    "collector.github.com",
    "pipelines.actions.githubusercontent.com",
    "media.githubusercontent.com",
    "cloud.githubusercontent.com",
    "objects.githubusercontent.com",
    "raw.github.com",
];

$template = <<<EOT
# GitHub520 Host Start

{content}
# Update time: {update_time}
# Update url: https://raw.githubusercontent.com/l1n6yun/GitHub520/master/hosts
# Star me: https://github.com/l1n6yun/GitHub520
# GitHub520 Host End\n
EOT;

/**
 * Curl get request
 * @param $host
 * @return bool|string
 */
function curl_get($host)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://ipaddress.com/website/' . $host,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
}

/**
 * Parse IP address
 * @param $response
 * @return int|string|null
 */
function parse_ip($response)
{
    preg_match_all('/(?:[0-9]{1,3}\.){3}[0-9]{1,3}/', $response, $matches);

    $tmp = array_count_values($matches[0]);

    arsort($tmp);

    return key($tmp);
}

$content = '';
$contentArray = [];

foreach ($hosts as $host) {
    $response = curl_get($host);
    $ip = parse_ip($response);

    $content .= str_pad($ip, '20', ' ', STR_PAD_LEFT) . '     ' . $host . PHP_EOL;
    $contentArray[] = [$ip, $host];
}

$hostsContent = str_replace(['{content}', '{update_time}'], [$content, date('c')], $template);
$readmeTemplate = file_get_contents('README_template.md');
$readme = str_replace(['{content}', '{update_time}'], [$hostsContent, date('c')], $readmeTemplate);


file_put_contents("README.md", $readme);
file_put_contents("hosts", $hostsContent);
file_put_contents("hosts.json", json_encode($contentArray));
