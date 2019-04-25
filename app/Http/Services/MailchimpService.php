<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25/04/2019
 * Time: 16:43
 */

namespace App\Http\Services;

use GuzzleHttp\Client;

class MailchimpService
{

    public function addSubscriber($email) {

        $headers = ['Authorization' => env('MAILCHIMP_API_KEY')];

        $client = new Client([
            'headers' => $headers
        ]);


        try {

            $client->post(env('MAILCHIMP_API_ROUTE'),
                [
                    \GuzzleHttp\RequestOptions::JSON => [
                        'email_address' => $email,
                        'status' => 'subscribed',
                        'merge_fields' => [
                            'FNAME' => 'Unknown',
                            'LNAME' => 'Unknown'
                        ]
                    ]
                ]);

        } catch (\Exception $e) {
            die($e->getMessage());
        }


    }


    public function listSubscribers() {

        $headers = ['Authorization' => env('MAILCHIMP_API_KEY')];

        $client = new Client([
            'headers' => $headers
        ]);


        try {

            $subscribers = $client->get(env('MAILCHIMP_API_ROUTE'));
            $data = json_decode($subscribers->getBody()->getContents());

        } catch (\Exception $e) {
            die($e->getMessage());
        }

        $subscribers = [];
        foreach ($data->members as $subscriber) {
            array_push($subscribers, $subscriber->email_address);
        }

        return $subscribers;
    }
}