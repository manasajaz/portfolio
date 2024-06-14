<?php

function formatApiLeadData($request)
{


    return [
        "name" => $request["name"],
        "email" => $request["email"],
        "phone" => $request["phone_number"],
        "query" => (isset($request["message"]) ? $request["message"] : ''),
        "amount" => (isset($request["lead_amount"]) ? $request["lead_amount"] : '0'),
        "package" => (isset($request["package_name"]) ? $request["package_name"] : 'Get A Quote'),
        "geo" => [
            "ip" => $request["ip2loc_ip"],
            "isp" => $request["ip2loc_isp"],
            "org" => $request["ip2loc_org"],
            "country" => $request["ip2loc_country"],
            "region" => $request["ip2loc_region"],
            "city" => $request["ip2loc_city"],
        ]


    ];
}
