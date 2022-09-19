<?php

namespace Jgu\PendingActions\Traits;

use Illuminate\Support\Facades\Http;

trait Reminderable
{

    public function publishReminderable()
    {
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        $body = '{
        "event_type_id": 1,
        "master_client_id": 2,
        "model": "App\\Models\\Sda",
        "model_id": "1",
        "events": [
            {
            "event": "Pending for Sda Member1",
            "subject": "SDA update",
            "notified_content": "<H1>Dear Student</H1>",
            "notified_to": {
                "to": [
                "yogesh@jgu.edu.in",
                "sdc@jgu.edu.in"
                ],
                "cc": [],
                "bcc": []
            }
            },
            {
            "event": "Pending for Sda Member1",
            "subject": "SDA update",
            "notified_content": "<H1>Dear Student</H1>",
            "notified_to": {
                "to": [
                "yogesh@jgu.edu.in",
                "sdc@jgu.edu.in"
                ],
                "cc": [],
                "bcc": []
            }
            },
            {
            "event": "Pending for Sda Member1",
            "subject": "SDA update",
            "notified_content": "<H1>Dear Student</H1>",
            "notified_to": {
                "to": [
                "yogesh@jgu.edu.in",
                "sdc@jgu.edu.in"
                ],
                "cc": [],
                "bcc": []
            }
            }
        ]
        }';

        $response = Http::withHeaders($headers)->post(config('config.serviceUrl').'/set-pending-request', ['json' => $body]);

        return $response->status();
    }
}
