<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ProductQuantityFinished extends Notification
{
    use Queueable;

    /**
     * Marketplace Onwer ID -> will notifiy
     * 
     * @var int $marketplaceOwnerID
     */
    private $marketplaceOwnerID;

    /**
     * Array of product informetion
     * 
     * @var array $product
     */
    private $product;

    /**
     * ProductQuantityFinished Notification Constructor
     * 
     * @param   int   $marketplaceOwnerID
     * @param   array $product           
     * @return  void
     */
    public function __construct(int $marketplaceOwnerID, array $product)
    {
        $this->marketplaceOwnerID = $marketplaceOwnerID;
        $this->product = $product;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Store in database representation of the ProductQuantityFinished notification.
     *
     * @return array
     */
    public function toDatabase()
    {
        return [
            'marketplaceOwnerID' => $this->marketplaceOwnerID,
            'product' => [
                'product_name' => $this->product['product_name'],
                'product_quantity' => $this->product['product_quantity']
            ]
        ];
    }
}
