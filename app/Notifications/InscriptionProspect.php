<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InscriptionProspect extends Notification
{

    use Queueable;
    private $prenom;
    private $getUrl;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($prenom)
    {
        //
        $this->prenom = $prenom;
        $this->getUrl="#";
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    //->from('info@heychooseme.com', 'ChooseMe')
                    ->subject('Vous êtes inscrit sur heychooseme.com')
                    ->greeting('Bonjour '. $notifiable->prenom . ',')
                    //->line('Merci de votre inscription sur heychooseme.com. Si cela n\'était pas votre intention veuillez cliquer ici pour retirer votre adresse email. Abonnez-vous et restez informé de nos actualités sur notre page Instagram ')
                    ->line('Merci de votre inscription sur heychooseme.com. Abonnez-vous sur nos réseaux sociaux, afin de rester informé de nos actualités.')
                    //->action('Je m\'abonne', $this->getUrl)
                    ;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
