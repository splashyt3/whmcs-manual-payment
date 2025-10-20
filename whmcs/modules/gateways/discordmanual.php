<?php
/**
 * Discord Manual Payment Gateway for WHMCS
 * Author: Splash
 */

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function discordmanual_MetaData()
{
    return [
        'DisplayName' => 'Discord Manual Payment',
        'APIVersion' => '1.1',
    ];
}

function discordmanual_config()
{
    return [
        'FriendlyName' => [
            'Type' => 'System',
            'Value' => 'Discord Manual Payment',
        ],
        'DiscordUsername' => [
            'FriendlyName' => 'Your Discord Username or Server Link',
            'Type' => 'text',
            'Size' => '50',
            'Description' => 'Enter your Discord username or server invite link where users will contact for payment.',
        ],
        'Instructions' => [
            'FriendlyName' => 'Payment Instructions',
            'Type' => 'textarea',
            'Rows' => '5',
            'Description' => 'Write the instructions that will appear to users after checkout.',
        ],
    ];
}

function discordmanual_link($params)
{
    $discordUser = $params['DiscordUsername'];
    $instructions = nl2br($params['Instructions']);
    $invoiceid = $params['invoiceid'];
    $amount = $params['amount'];
    $currency = $params['currency'];

    $html = <<<HTML
<h3>Pay via Discord Manual Payment</h3>
<p>Please pay manually through Discord to complete your purchase.</p>
<p><strong>Invoice ID:</strong> #{$invoiceid}</p>
<p><strong>Amount:</strong> {$amount} {$currency}</p>
<p><strong>Contact on Discord:</strong> {$discordUser}</p>
<p><strong>Instructions:</strong><br>{$instructions}</p>
<p>After payment, please send proof of payment to the Discord contact above. Once verified, your invoice will be marked as paid manually.</p>
HTML;

    return $html;
}
