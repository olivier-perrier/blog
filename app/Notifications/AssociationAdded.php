<?php

namespace App\Notifications;

use App\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AssociationAdded extends Notification
{
    use Queueable;

    public Project $project;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Project $project)
    {
        $this->project = $project;
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
            ->subject('Monsieur Négoce - avancement du projet')
            ->greeting('Bonjour')
            ->line('Le projet "' . $this->project->name . '" est maintenant associé à un négociateur.')
            ->line('Client ' . $this->project->client->fullname() 
                . ' - Négociateur ' . $this->project->negotiator->fullname() . '.')
            ->action('Voir le projet', config('app.url') . '/projects/' . $this->project->id)
            ->salutation('Merci d\'utiliser notre application');
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
